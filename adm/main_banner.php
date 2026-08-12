<?php
$sub_menu = '100320';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, "r");

// =============================================
// 배너 테이블 자동 생성
// =============================================
$banner_table = G5_TABLE_PREFIX . 'main_banner';

if (!sql_query(" DESCRIBE `{$banner_table}` ", false)) {
    sql_query("
        CREATE TABLE IF NOT EXISTS `{$banner_table}` (
            `mb_id`       INT(11) NOT NULL AUTO_INCREMENT,
            `mb_image`    VARCHAR(255) NOT NULL DEFAULT '',
            `mb_desc`     VARCHAR(255) NOT NULL DEFAULT '',
            `mb_link`     VARCHAR(500) NOT NULL DEFAULT '',
            `mb_target`   TINYINT(1) NOT NULL DEFAULT 0 COMMENT '0:현재창, 1:새창',
            `mb_visible`  TINYINT(1) NOT NULL DEFAULT 1 COMMENT '0:비노출, 1:노출',
            `mb_sort`     INT(11) NOT NULL DEFAULT 0,
            `mb_datetime` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
            PRIMARY KEY (`mb_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8
    ", true);
}

// 업로드 디렉토리
$upload_dir = G5_DATA_PATH . '/file/main_banner';
$upload_url = G5_DATA_URL . '/file/main_banner';

if (!is_dir($upload_dir)) {
    @mkdir($upload_dir, 0755, true);
}

$msg   = '';
$error = '';
$act   = isset($_REQUEST['act']) ? $_REQUEST['act'] : '';

// =============================================
// AJAX / POST 처리
// =============================================

// ---------- 순서 변경 (AJAX) ----------
if ($act === 'sort' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    auth_check_menu($auth, $sub_menu, "w");
    $orders = isset($_POST['orders']) ? $_POST['orders'] : [];
    foreach ($orders as $idx => $id) {
        $id   = (int)$id;
        $sort = (int)$idx + 1;
        sql_query("UPDATE `{$banner_table}` SET mb_sort = {$sort} WHERE mb_id = {$id}");
    }
    echo json_encode(['result' => 'ok']);
    exit;
}

// ---------- 노출 토글 (AJAX) ----------
if ($act === 'toggle' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    auth_check_menu($auth, $sub_menu, "w");
    $id  = (int)($_POST['id'] ?? 0);
    $row = sql_fetch("SELECT mb_visible FROM `{$banner_table}` WHERE mb_id = {$id}");
    if ($row) {
        $new = $row['mb_visible'] ? 0 : 1;

        // ★ 노출로 변경 시 현재 노출 수 확인 (최대 3개 제한)
        if ($new === 1) {
            $cnt_row = sql_fetch("SELECT COUNT(*) AS cnt FROM `{$banner_table}` WHERE mb_visible = 1");
            if ((int)$cnt_row['cnt'] >= 3) {
                echo json_encode([
                    'result' => 'limit',
                    'msg'    => '최대 3개까지 노출 가능합니다. 다른 배너를 비노출로 변경해야 노출로 변경할 수 있습니다.'
                ]);
                exit;
            }
        }

        sql_query("UPDATE `{$banner_table}` SET mb_visible = {$new} WHERE mb_id = {$id}");
        echo json_encode(['result' => 'ok', 'visible' => $new]);
    }
    exit;
}
// ---------- 삭제 ----------
if ($act === 'delete' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    auth_check_menu($auth, $sub_menu, "w");
    $id  = (int)($_POST['id'] ?? 0);
    $row = sql_fetch("SELECT mb_image FROM `{$banner_table}` WHERE mb_id = {$id}");
    if ($row && $row['mb_image']) {
        $file = $upload_dir . '/' . $row['mb_image'];
        if (file_exists($file)) @unlink($file);
    }
    sql_query("DELETE FROM `{$banner_table}` WHERE mb_id = {$id}");
    echo json_encode(['result' => 'ok']);
    exit;
}

// ---------- 등록 / 수정 ----------
if ($act === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    auth_check_menu($auth, $sub_menu, "w");

    $id      = (int)($_POST['mb_id'] ?? 0);
    $desc    = trim(strip_tags($_POST['mb_desc']   ?? ''));
    $link    = trim($_POST['mb_link']   ?? '');
    $target  = (int)($_POST['mb_target']  ?? 0);
    $visible = (int)($_POST['mb_visible'] ?? 1);
    $image   = '';

    // ★ 신규 등록 시 무조건 비노출로 강제
    if ($id === 0) {
        $visible = 0;
    }

    // 링크 프로토콜 검증 (javascript: 차단)
    if ($link !== '' && !preg_match('#^(https?://|/)#i', $link)) {
        $link = '';
    }

    // 이미지 업로드
    // 이미지 업로드 (모든 이미지 → JPG 변환 + 91% 압축)
    if (!empty($_FILES['mb_image']['name'])) {
        $tmp  = $_FILES['mb_image']['tmp_name'];
        $size = $_FILES['mb_image']['size'];

        // 파일 크기 제한 (5MB)
        if ($size > 5 * 1024 * 1024) {
            $error = '파일 크기는 5MB 이하만 가능합니다.';
        } else {
            // MIME 타입으로 이미지 종류 판별 (확장자 위조 방지)
            $img_info = @getimagesize($tmp);
            if (!$img_info) {
                $error = '유효한 이미지 파일이 아닙니다.';
            } else {
                // MIME 기반으로 GD 로드
                switch ($img_info['mime']) {
                    case 'image/jpeg': $src = @imagecreatefromjpeg($tmp); break;
                    case 'image/png':  $src = @imagecreatefrompng($tmp);  break;
                    case 'image/gif':  $src = @imagecreatefromgif($tmp);  break;
                    case 'image/bmp':  $src = @imagecreatefrombmp($tmp);  break;
                    case 'image/webp': $src = @imagecreatefromwebp($tmp); break;
                    default:           $src = false; break;
                }

                if (!$src) {
                    $error = '지원하지 않는 이미지 형식입니다. (JPG, PNG, GIF, BMP, WEBP 가능)';
                } else {
                    // PNG 투명 배경 → 흰색으로 처리 후 JPG 변환
                    $w   = imagesx($src);
                    $h   = imagesy($src);
                    $dst = imagecreatetruecolor($w, $h);
                    $white = imagecolorallocate($dst, 255, 255, 255);
                    imagefill($dst, 0, 0, $white);
                    imagecopy($dst, $src, 0, 0, 0, 0, $w, $h);
                    imagedestroy($src);

                    // JPG 파일명으로 저장 (항상 .jpg)
                    $new_name = 'banner_' . date('YmdHis') . '_' . mt_rand(1000, 9999) . '.jpg';
                    $save_path = $upload_dir . '/' . $new_name;

                    // 91% 품질로 JPG 저장 (0~100)
                    if (imagejpeg($dst, $save_path, 91)) {
                        imagedestroy($dst);
                        $image = $new_name;
                        // 수정 시 기존 이미지 삭제
                        if ($id > 0) {
                            $old = sql_fetch("SELECT mb_image FROM `{$banner_table}` WHERE mb_id = {$id}");
                            if ($old && $old['mb_image']) {
                                $old_file = $upload_dir . '/' . $old['mb_image'];
                                if (file_exists($old_file)) @unlink($old_file);
                            }
                        }
                    } else {
                        imagedestroy($dst);
                        $error = '이미지 변환 실패. 디렉토리 권한을 확인하세요.';
                    }
                }
            }
        }
    }

    if (!$error) {
        $desc_q = sql_real_escape_string($desc);
        $link_q = sql_real_escape_string($link);
        $now    = date('Y-m-d H:i:s');

        if ($id > 0) {
            $img_sql = $image ? ", mb_image = '{$image}'" : '';
            sql_query("UPDATE `{$banner_table}` SET
                mb_desc    = '{$desc_q}',
                mb_link    = '{$link_q}',
                mb_target  = {$target},
                mb_visible = {$visible}
                {$img_sql}
                WHERE mb_id = {$id}");
        } else {
            $max_sort = sql_fetch("SELECT IFNULL(MAX(mb_sort),0)+1 AS s FROM `{$banner_table}`");
            $sort     = (int)$max_sort['s'];
            sql_query("INSERT INTO `{$banner_table}`
                (mb_image, mb_desc, mb_link, mb_target, mb_visible, mb_sort, mb_datetime)
                VALUES ('{$image}', '{$desc_q}', '{$link_q}', {$target}, {$visible}, {$sort}, '{$now}')");
        }
               // ★ PRG 패턴: POST 완료 후 GET으로 리다이렉트 (F5 중복 방지)
        $redirect_msg = urlencode($id > 0 ? '수정되었습니다.' : '등록되었습니다.');
        header('Location: ' . $_SERVER['SCRIPT_NAME'] . '?done=' . $redirect_msg);
        exit;
    }
}

// ---------- 수정 폼용 데이터 ----------
$edit_row = null;
if ($act === 'edit') {
    $edit_id  = (int)($_GET['id'] ?? 0);
    $edit_row = sql_fetch("SELECT * FROM `{$banner_table}` WHERE mb_id = {$edit_id}");
}

// ---------- 목록 조회 ----------
$list_result = sql_query("SELECT * FROM `{$banner_table}` ORDER BY mb_sort ASC, mb_id ASC");
$list = [];
while ($r = sql_fetch_array($list_result)) {
    $list[] = $r;
}

$g5['title'] = '메인 배너 관리';
include_once(G5_ADMIN_PATH . '/admin.head.php');
?>

<?php if (!empty($_GET['done'])): ?>
<div class="local_desc01" style="color:#2a7ae2;padding:8px 12px;background:#e8f4fd;border-radius:4px;margin-bottom:14px;">
    ✔ <?php echo htmlspecialchars(urldecode($_GET['done'])); ?>
</div>
<?php endif; ?>
<?php if ($error): ?>
<div class="local_desc01" style="color:#c0392b;padding:8px 12px;background:#fde8e8;border-radius:4px;margin-bottom:14px;">
    ✖ <?php echo htmlspecialchars($error); ?>
</div>
<?php endif; ?>

<!-- ===========================
     등록 / 수정 폼
     =========================== -->
<div class="tbl_frm01 tbl_wrap" style="margin-bottom:30px;">
    <h2 class="h2_frm"><?php echo $edit_row ? '배너 수정' : '배너 등록'; ?></h2>
    <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" enctype="multipart/form-data" id="bannerForm">
        <input type="hidden" name="act"   value="save">
        <input type="hidden" name="mb_id" value="<?php echo $edit_row ? (int)$edit_row['mb_id'] : 0; ?>">

        <table>
        <colgroup>
            <col style="width:140px">
            <col>
        </colgroup>
        <tbody>
        <tr>
            <th scope="row"><label for="mb_image">이미지 <span class="req">*</span></label></th>
            <td>
                <?php if ($edit_row && $edit_row['mb_image']): ?>
                <div style="margin-bottom:8px;">
                    <img src="<?php echo $upload_url . '/' . htmlspecialchars($edit_row['mb_image']); ?>"
                         style="max-height:80px;border:1px solid #ddd;border-radius:4px;" alt="현재 이미지">
                    <span style="font-size:12px;color:#888;margin-left:8px;">새 파일 선택 시 교체됩니다</span>
                </div>
                <?php endif; ?>
               <input type="file" name="mb_image" id="mb_image" accept=".jpg,.jpeg,.png,.gif,.bmp,.webp"
                       <?php echo (!$edit_row) ? 'required' : ''; ?>>
                <span class="frm_info">JPG, PNG만 가능 / 최대 5MB</span>
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="mb_desc">이미지 설명</label></th>
            <td>
                <input type="text" name="mb_desc" id="mb_desc" class="frm_input" style="width:400px;"
                       value="<?php echo $edit_row ? htmlspecialchars($edit_row['mb_desc']) : ''; ?>"
                       placeholder="배너 설명 (alt 텍스트로도 사용됩니다)">
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="mb_link">클릭 링크</label></th>
            <td>
                <input type="text" name="mb_link" id="mb_link" class="frm_input" style="width:400px;"
                       value="<?php echo $edit_row ? htmlspecialchars($edit_row['mb_link']) : ''; ?>"
                       placeholder="https:// 또는 /내부경로  (비워두면 링크 없음)">
                <label style="margin-left:14px;">
                    <input type="radio" name="mb_target" value="0"
                           <?php echo (!$edit_row || !$edit_row['mb_target']) ? 'checked' : ''; ?>>
                    현재창
                </label>
                <label style="margin-left:10px;">
                    <input type="radio" name="mb_target" value="1"
                           <?php echo ($edit_row && $edit_row['mb_target']) ? 'checked' : ''; ?>>
                    새창
                </label>
            </td>
        </tr>
        <tr>
            <th scope="row">노출 여부</th>
            <td>
                <label>
                    <input type="radio" name="mb_visible" value="1"
                           <?php echo (!$edit_row || $edit_row['mb_visible']) ? 'checked' : ''; ?>>
                    노출
                </label>
                <label style="margin-left:14px;">
                    <input type="radio" name="mb_visible" value="0"
                           <?php echo ($edit_row && !$edit_row['mb_visible']) ? 'checked' : ''; ?>>
                    비노출
                </label>
            </td>
        </tr>
        </tbody>
        </table>

        <div class="btn_fixed_top" style="margin-top:14px;">
            <button type="submit" class="btn btn_01"><?php echo $edit_row ? '수정 저장' : '등록'; ?></button>
            <?php if ($edit_row): ?>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>" class="btn btn_02">취소</a>
            <?php endif; ?>
        </div>
    </form>
</div>

<!-- ===========================
     배너 목록
     =========================== -->
<div class="local_ov01 local_ov">
    <span class="btn_ov01">
        <span class="ov_txt">전체 배너 </span>
        <span class="ov_num"><?php echo count($list); ?>건</span>
    </span>
    <span style="font-size:12px;color:#888;margin-left:10px;">☰ 드래그하여 순서를 변경할 수 있습니다</span>
</div>

<div class="tbl_head01 tbl_wrap">
    <table id="bannerTable">
    <caption>메인 배너 목록</caption>
    <thead>
    <tr>
        <th style="width:40px;">순서</th>
        <th style="width:110px;">이미지</th>
        <th>설명</th>
        <th style="width:200px;">링크</th>
        <th style="width:60px;">새창</th>
        <th style="width:70px;">노출</th>
        <th style="width:110px;">관리</th>
    </tr>
    </thead>
    <tbody id="sortable">
    <?php if (count($list) === 0): ?>
    <tr><td colspan="7" class="empty_table">등록된 배너가 없습니다.</td></tr>
    <?php else: ?>
    <?php foreach ($list as $i => $row): ?>
    <tr class="<?php echo 'bg'.($i%2); ?>" data-id="<?php echo (int)$row['mb_id']; ?>">
        <td class="td_num" style="cursor:grab;text-align:center;">
            <span class="drag-handle" title="드래그하여 순서 변경">☰</span>
        </td>
        <td style="text-align:center;padding:4px;">
            <?php if ($row['mb_image']): ?>
            <img src="<?php echo $upload_url . '/' . htmlspecialchars($row['mb_image']); ?>"
                 style="max-width:90px;max-height:55px;border:1px solid #ddd;border-radius:3px;"
                 alt="<?php echo htmlspecialchars($row['mb_desc']); ?>">
            <?php else: ?>
            <span style="color:#bbb;font-size:11px;">없음</span>
            <?php endif; ?>
        </td>
        <td class="td_left"><?php echo htmlspecialchars($row['mb_desc']); ?></td>
        <td class="td_left" style="font-size:12px;word-break:break-all;">
            <?php echo htmlspecialchars($row['mb_link']) ?: '<span style="color:#bbb">-</span>'; ?>
        </td>
        <td class="td_num" style="text-align:center;">
            <?php echo $row['mb_target'] ? '✔' : '-'; ?>
        </td>
        <td class="td_num" style="text-align:center;">
            <button type="button"
                    class="btn btn_03 btn-toggle"
                    data-id="<?php echo (int)$row['mb_id']; ?>"
                    data-visible="<?php echo (int)$row['mb_visible']; ?>"
                    style="min-width:52px;<?php echo $row['mb_visible'] ? '' : 'opacity:.5'; ?>">
                <?php echo $row['mb_visible'] ? '노출' : '비노출'; ?>
            </button>
        </td>
        <td class="td_mng">
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?act=edit&id=<?php echo (int)$row['mb_id']; ?>"
               class="btn btn_03">수정</a>
            <button type="button" class="btn btn_02 btn-delete"
                    data-id="<?php echo (int)$row['mb_id']; ?>">삭제</button>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
    </table>
</div>

<!-- SortableJS -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
<script>
(function(){
    var tbody = document.getElementById('sortable');
    if (!tbody) return;

    // 드래그&드롭 순서 변경
    Sortable.create(tbody, {
        handle: '.drag-handle',
        animation: 150,
        ghostClass: 'sortable-ghost',
        onEnd: function() {
            var rows = tbody.querySelectorAll('tr[data-id]');
            var ids  = Array.from(rows).map(function(r){ return r.dataset.id; });
            var fd   = new FormData();
            fd.append('act', 'sort');
            ids.forEach(function(id){ fd.append('orders[]', id); });
            fetch(location.pathname, { method: 'POST', body: fd })
              .then(function(r){ return r.json(); })
              .then(function(d){ if (d.result !== 'ok') alert('순서 저장 실패'); });
        }
    });

    // 노출 토글
    document.querySelectorAll('.btn-toggle').forEach(function(btn){
        btn.addEventListener('click', function(){
            var id = this.dataset.id;
            var fd = new FormData();
            fd.append('act', 'toggle');
            fd.append('id', id);
            fetch(location.pathname, { method: 'POST', body: fd })
              .then(function(r){ return r.json(); })
              .then(function(d){
                  if (d.result === 'ok') {
                      btn.dataset.visible = d.visible;
                      btn.textContent     = d.visible ? '노출' : '비노출';
                      btn.style.opacity   = d.visible ? '1' : '.5';
                  } else if (d.result === 'limit') {
                      // ★ 3개 초과 시 알림
                      alert(d.msg);
                  }
              });
        });
    });

    // 삭제
    document.querySelectorAll('.btn-delete').forEach(function(btn){
        btn.addEventListener('click', function(){
            if (!confirm('삭제하면 이미지 파일도 함께 삭제됩니다.\n정말 삭제하시겠습니까?')) return;
            var id = this.dataset.id;
            var fd = new FormData();
            fd.append('act', 'delete');
            fd.append('id', id);
            var tr = btn.closest('tr');
            fetch(location.pathname, { method: 'POST', body: fd })
              .then(function(r){ return r.json(); })
              .then(function(d){
                  if (d.result === 'ok') {
                      tr.style.transition = 'opacity .3s';
                      tr.style.opacity    = '0';
                      setTimeout(function(){ tr.remove(); }, 320);
                  } else {
                      alert('삭제 실패');
                  }
              });
        });
    });
})();
</script>

<style>
.sortable-ghost { background: #e8f4fd !important; opacity: .6; }
.drag-handle    { font-size: 16px; color: #aaa; user-select: none; }
.drag-handle:hover { color: #555; }
#bannerTable td { vertical-align: middle; }
</style>

<?php include_once(G5_ADMIN_PATH . '/admin.tail.php'); ?>