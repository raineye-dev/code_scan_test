<?php
$sub_menu = '300610';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, "r");

$volunteer_table = G5_TABLE_PREFIX . 'rain_talent_volunteer';
$jeonnam_cities = array("목포", "여수", "순천", "나주", "광양", "담양", "곡성", "구례", "고흥", "보성", "화순", "장흥", "강진", "해남", "영암", "무안", "함평", "영광", "장성", "완도", "진도", "신안");
$volunteer_subjects = array("건강지원", "기타", "문화공연", "뷰티", "음식나눔", "주거개선");

$sst = isset($_GET['sst']) ? clean_xss_tags($_GET['sst'], 1, 1) : '';
$sod = isset($_GET['sod']) ? clean_xss_tags($_GET['sod'], 1, 1) : '';
$stx = isset($_GET['stx']) ? clean_xss_tags($_GET['stx'], 1, 1) : '';

if(!in_array($sst, array('vi_id', 'vi_name', 'vi_subject', 'vi_count'))) $sst = '';
if(!in_array($sod, array('asc', 'desc'))) $sod = 'desc';

sql_query(" ALTER TABLE `{$volunteer_table}` ADD UNIQUE KEY `unique_volunteer` (`vi_area`, `vi_name`) ", false);
if(!sql_query(" DESCRIBE {$volunteer_table} ", false)) {
    $sql = " CREATE TABLE IF NOT EXISTS `{$volunteer_table}` (
                `vi_id` int(11) NOT NULL AUTO_INCREMENT,
                `vi_area` varchar(50) NOT NULL DEFAULT '',
                `vi_name` varchar(255) NOT NULL DEFAULT '',
                `vi_subject` varchar(255) NOT NULL DEFAULT '',
                `vi_content` text NOT NULL,
                `vi_count` int(11) NOT NULL DEFAULT '0',
                `vi_datetime` datetime NOT NULL,
                PRIMARY KEY (`vi_id`),
                UNIQUE KEY `unique_volunteer` (`vi_area`, `vi_name`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 ";
    sql_query($sql, true);
}

// =========================================================================
// ★ 번호 맞바꾸기(Swap) 처리 로직 수정 (메시지 포함)
// =========================================================================
$action = isset($_GET['action']) ? clean_xss_tags($_GET['action'], 1, 1) : '';
$msg = ""; // 안내창 메시지 변수
if ($action == 'swap') {
    $c_id = (int)$_GET['vi_id'];
    $dir = clean_xss_tags($_GET['dir'], 1, 1);
    $t_id = ($dir == 'up') ? $c_id + 1 : $c_id - 1;

    $r1 = sql_fetch("select vi_name from {$volunteer_table} where vi_id = '{$c_id}'");
    $r2 = sql_fetch("select vi_name from {$volunteer_table} where vi_id = '{$t_id}'");

    if($r1 && $r2) {
        sql_query("update {$volunteer_table} set vi_id = '-999' where vi_id = '{$c_id}'");
        sql_query("update {$volunteer_table} set vi_id = '{$c_id}' where vi_id = '{$t_id}'");
        sql_query("update {$volunteer_table} set vi_id = '{$t_id}' where vi_id = '-999'");
        $msg = "[{$r1['vi_name']}] 단체의 위치가 이동되었습니다.";
    } else {
        alert("이동할 자리에 데이터가 없습니다.");
    }
    
    $q_sca = isset($_GET['sca']) ? urlencode($_GET['sca']) : '';
    $q_stx = isset($_GET['stx']) ? urlencode($_GET['stx']) : '';
    $q_page = isset($_GET['page']) ? $_GET['page'] : 1;
    // 메시지를 URL에 담아 리다이렉트
    goto_url("./rain_03_02_001_list.php?sca={$q_sca}&stx={$q_stx}&sst={$sst}&sod={$sod}&page={$q_page}&ammsg=".urlencode($msg));
}

// 수정 성공 메시지 수신
$ammsg = isset($_GET['ammsg']) ? clean_xss_tags($_GET['ammsg'], 1, 1) : '';
// =========================================================================

$sca = isset($_GET['sca']) ? clean_xss_tags($_GET['sca'], 1, 1) : '';
$g5['title'] = '전남 재능기부 자원봉사단체 관리';
include_once (G5_ADMIN_PATH.'/admin.head.php');
$token = get_admin_token();

$city_counts = array();
$res_counts = sql_query(" SELECT vi_area, COUNT(*) as cnt FROM {$volunteer_table} GROUP BY vi_area ");
while($c_row = sql_fetch_array($res_counts)) { $city_counts[$c_row['vi_area']] = $c_row['cnt']; }
$all_count_row = sql_fetch(" SELECT COUNT(*) as cnt FROM {$volunteer_table} ");
$all_total_count = $all_count_row['cnt'];

// ★ 분야별 통계 계산 수정 (단체수 + 인원수 동시 집계)
$subject_counts = array('건강지원'=>0, '기타'=>0, '문화공연'=>0, '뷰티'=>0, '음식나눔'=>0, '주거개선'=>0);
$member_counts  = array('건강지원'=>0, '기타'=>0, '문화공연'=>0, '뷰티'=>0, '음식나눔'=>0, '주거개선'=>0);

$res_subj = sql_query(" SELECT vi_subject, COUNT(*) as cnt, SUM(vi_count) as total_mem FROM {$volunteer_table} GROUP BY vi_subject ");
while($s_row = sql_fetch_array($res_subj)) {
    if(isset($subject_counts[$s_row['vi_subject']])) {
        $subject_counts[$s_row['vi_subject']] = $s_row['cnt'];
        $member_counts[$s_row['vi_subject']]  = $s_row['total_mem']; // 분야별 회원수 합계 저장
    }
}
$all_total_member = array_sum($member_counts); // 총 회원수 계산

$where = " where 1=1 ";
if ($sca) { $where .= " and vi_area = '" . sql_real_escape_string($sca) . "' "; }
if ($stx) { $where .= " and vi_name like '%" . sql_real_escape_string($stx) . "%' "; }

$sql_common = " from {$volunteer_table} {$where} ";
$sql = " select count(*) as cnt " . $sql_common;
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);
if ($page < 1) { $page = 1; }
$from_record = ($page - 1) * $rows;

$sql_order = " order by ";
if ($sst) { $sql_order .= " {$sst} {$sod} "; } else { $sql_order .= " vi_id desc "; }

$sql = " select * {$sql_common} {$sql_order} limit {$from_record}, {$rows} ";
$result = sql_query($sql);

$qstr_sort = "sca=".urlencode($sca)."&stx=".urlencode($stx)."&page=".$page;
$qstr_swap = "sca=".urlencode($sca)."&stx=".urlencode($stx)."&sst=".$sst."&sod=".$sod."&page=".$page;


// ★ DB 전체 삭제 처리 로직 (추가 파일 없이 현재 파일에서 처리)
if (isset($_GET['action']) && $_GET['action'] == 'db_truncate' && $is_admin) {
    // 모든 데이터 삭제 및 인덱스 초기화
    sql_query(" TRUNCATE TABLE `{$volunteer_table}` ");
    
    // 처리 완료 후 리다이렉트
    goto_url("./rain_03_02_001_list.php?ammsg=".urlencode("모든 데이터가 삭제되고 번호가 초기화되었습니다."));
}

// ★ DB에서 가장 최근에 입력된 날짜 1건 가져오기
$row_last = sql_fetch(" SELECT vi_datetime FROM `{$volunteer_table}` ORDER BY vi_datetime DESC LIMIT 1 ");

if ($row_last['vi_datetime']) {
    // 값이 있으면 해당 날짜를 포맷팅 (예: 2026. 05)
    $last_update_date = date('Y. m', strtotime($row_last['vi_datetime']));
} else {
    // 데이터가 하나도 없는 경우 현재 날짜 표시
    $last_update_date = date('Y. m');
}
?>

<style>
.category_wrap { background:#f3f3f3; padding:15px; border:1px solid #ddd; border-radius:5px; margin-bottom:20px; line-height:35px; }
.category_wrap a { display:inline-block; padding:0 12px; margin-right:5px; color:#333; text-decoration:none; border-radius:20px; font-size:14px; transition:0.2s; }
.category_wrap a.on { background:#2c3e50; color:#fff; font-weight:bold; }
.sort_btn { display:inline-flex; flex-direction:column; vertical-align:middle; margin-left:5px; line-height:0.8; }
.sort_btn a { font-size:10px; color:#ccc; text-decoration:none; }
.sort_btn a.active { color:#000; font-weight:bold; }
.sch_wrap { display:inline-block; float:right; }
.sch_wrap .frm_input { height:30px; }

.summary_table_wrap { margin-bottom: 25px; }
.summary_title { font-size: 16px; font-weight: bold; margin-bottom: 10px; color: #a31636; }
.summary_title span.circle { display:inline-block; width:12px; height:12px; border-radius:50%; border:3px solid #a31636; margin-right:5px; vertical-align:middle; margin-top:-2px; }
.summary_table { width: 100%; border-collapse: collapse; text-align: center; border-top: 2px solid #1f365c; border-bottom: 1px solid #ccc; font-size: 14px; }
.summary_table th { background: #eef1f6; padding: 12px; border-bottom: 1px solid #ccc; border-right: 1px solid #dfdfdf; color: #333; font-weight: bold; }
.summary_table td { padding: 12px; border-bottom: 1px solid #ccc; border-right: 1px solid #dfdfdf; color: #333; }
.summary_table th:last-child, .summary_table td:last-child { border-right: none; }
.tbl_head01 .frm_input { width: 100%; box-sizing: border-box; height: 30px; padding: 0 5px; }
.tbl_head01 select.frm_input { padding: 0 2px; }

/* ★ 안내창 빨간박스 스타일 추가 */
#action_msg_box { display:none; position:fixed; top:80px; right:20px; z-index:9999; background:#d9534f; color:#fff; padding:15px 25px; border-radius:5px; box-shadow:0 2px 10px rgba(0,0,0,0.2); font-weight:bold; min-width:250px; }
</style>

<div id="action_msg_box"></div>
<? /* ?>
<div class="summary_table_wrap">
    <div class="summary_title"><span class="circle"></span>전남 재능기부 자원봉사 단체 현황(<?php echo $last_update_date; ?>월 기준)</div>
    <table class="summary_table">
        <thead>
            <tr>
                <th>구분</th> <th>총계</th>
                <th>건강지원</th>
                <th>기타</th>
                <th>문화공연</th>
                <th>뷰티</th>
                <th>음식나눔</th>
                <th>주거개선</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>단체수</th> <td><?php echo number_format($all_total_count); ?></td>
                <td><?php echo number_format($subject_counts['건강지원']); ?></td>
                <td><?php echo number_format($subject_counts['기타']); ?></td>
                <td><?php echo number_format($subject_counts['문화공연']); ?></td>
                <td><?php echo number_format($subject_counts['뷰티']); ?></td>
                <td><?php echo number_format($subject_counts['음식나눔']); ?></td>
                <td><?php echo number_format($subject_counts['주거개선']); ?></td>
            </tr>
            <tr>
                <th>인원수</th>
                <td><?php echo number_format($all_total_member); ?>명</td>
                <td><?php echo number_format($member_counts['건강지원']); ?>명</td>
                <td><?php echo number_format($member_counts['기타']); ?>명</td>
                <td><?php echo number_format($member_counts['문화공연']); ?>명</td>
                <td><?php echo number_format($member_counts['뷰티']); ?>명</td>
                <td><?php echo number_format($member_counts['음식나눔']); ?>명</td>
                <td><?php echo number_format($member_counts['주거개선']); ?>명</td>
            </tr>
        </tbody>
    </table>
</div>

<? */ ?>
<div class="category_wrap">
    <a href="?page=1" class="<?php echo !$sca ? 'on' : ''; ?>">전체(<?php echo number_format($all_total_count); ?>)</a>
    <?php foreach($jeonnam_cities as $city) { 
        $count = isset($city_counts[$city]) ? (int)$city_counts[$city] : 0;
    ?>
    <a href="?sca=<?php echo urlencode($city); ?>&stx=<?php echo urlencode($stx); ?>" class="<?php echo ($sca == $city) ? 'on' : ''; ?>"><?php echo $city; ?>(<?php echo $count; ?>)</a>
    <?php } ?>
</div>

<div class="local_ov01 local_ov">
    <span class="btn_ov01"><span class="ov_txt">전체</span><span class="ov_num"> <?php echo number_format($all_total_count); ?>건</span></span>
    <span class="btn_ov01"><span class="ov_txt">결과</span><span class="ov_num"> <?php echo number_format($total_count); ?>건</span></span>
    <div class="sch_wrap">
        <form name="fsearch" id="fsearch" method="get">
            <input type="hidden" name="sca" value="<?php echo htmlspecialchars($sca); ?>"><input type="hidden" name="sst" value="<?php echo $sst; ?>"><input type="hidden" name="sod" value="<?php echo $sod; ?>">
            <input type="text" name="stx" value="<?php echo htmlspecialchars($stx); ?>" id="stx" class="frm_input" placeholder="단체명 검색">
            <input type="submit" value="검색" class="btn_submit">
        </form>
    </div>
</div>

<form name="fvolunteerlist" id="fvolunteerlist" action="./rain_03_02_001_list_update.php" method="post">
<input type="hidden" name="page" value="<?php echo $page; ?>"><input type="hidden" name="sca" value="<?php echo $sca; ?>"><input type="hidden" name="stx" value="<?php echo $stx; ?>">
<input type="hidden" name="sst" value="<?php echo $sst; ?>"><input type="hidden" name="sod" value="<?php echo $sod; ?>"><input type="hidden" name="token" value="<?php echo $token; ?>">

<div class="btn_fixed_top">
    <a href="?action=db_truncate" class="btn btn_02" onclick="if(confirm('모든 데이터가 삭제됩니다. 확실합니까?\n이 작업은 절대 되돌릴 수 없습니다.')) { return true; } else { return false; }" style="background:#e74c3c; color:#fff; border:1px solid #c0392b;">DB 삭제하기</a>

    <a href="./rain_03_02_001_excel.php" onclick="window.open(this.href, 'excel_upload', 'width=500,height=450,scrollbars=yes'); return false;" class="btn btn_03" style="background:#27ae60; color:#fff; border:1px solid #219150;">엑셀 데이터 업로드</a>
    
    <a href="/bbs/sub/sub_page_03_02_001.php" class="btn btn_03" target="_blank" style="background:#fff; color:#333; border:1px solid #ccc;">사용자화면보기</a>
    <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed='선택삭제'" class="btn btn_02">
    <input type="submit" name="act_button" value="일괄수정" onclick="document.pressed='일괄수정'" class="btn btn_submit">
    <a href="./rain_03_02_001_form.php" class="btn btn_01">신규 단체 추가</a>
</div>

<div class="tbl_head01 tbl_wrap">
    <table style="table-layout: fixed; width: 100%;">
    <colgroup>
        <col style="width: 45px;"><col style="width: 95px;"><col style="width: 100px;"><col style="width: 200px;"><col style="width: 120px;"><col style="width: auto;"><col style="width: 100px;">
    </colgroup>
    <thead>
    <tr>
        <th scope="col"><input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)"></th>
        <th scope="col">번호 <span class="sort_btn"><a href="?<?php echo $qstr_sort ?>&sst=vi_id&sod=asc" class="<?php echo ($sst=='vi_id' && $sod=='asc')?'active':''?>">▲</a><a href="?<?php echo $qstr_sort ?>&sst=vi_id&sod=desc" class="<?php echo ($sst=='vi_id' && $sod=='desc')?'active':''?>">▼</a></span></th>
        <th scope="col">지역</th>
        <th scope="col">단체명 <span class="sort_btn"><a href="?<?php echo $qstr_sort ?>&sst=vi_name&sod=asc" class="<?php echo ($sst=='vi_name' && $sod=='asc')?'active':''?>">▲</a><a href="?<?php echo $qstr_sort ?>&sst=vi_name&sod=desc" class="<?php echo ($sst=='vi_name' && $sod=='desc')?'active':''?>">▼</a></span></th>
        <th scope="col">활동분야 <span class="sort_btn"><a href="?<?php echo $qstr_sort ?>&sst=vi_subject&sod=asc" class="<?php echo ($sst=='vi_subject' && $sod=='asc')?'active':''?>">▲</a><a href="?<?php echo $qstr_sort ?>&sst=vi_subject&sod=desc" class="<?php echo ($sst=='vi_subject' && $sod=='desc')?'active':''?>">▼</a></span></th>
        <th scope="col">활동내용</th>
        <th scope="col">회원수 <span class="sort_btn"><a href="?<?php echo $qstr_sort ?>&sst=vi_count&sod=asc" class="<?php echo ($sst=='vi_count' && $sod=='asc')?'active':''?>">▲</a><a href="?<?php echo $qstr_sort ?>&sst=vi_count&sod=desc" class="<?php echo ($sst=='vi_count' && $sod=='desc')?'active':''?>">▼</a></span></th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $row=sql_fetch_array($result); $i++) { $bg = 'bg'.($i%2); ?>
    <tr class="<?php echo $bg; ?>">
        <td class="td_chk"><input type="hidden" name="vi_id[<?php echo $i; ?>]" value="<?php echo $row['vi_id']; ?>"><input type="checkbox" name="chk[]" value="<?php echo $i; ?>" id="chk_<?php echo $i; ?>"></td>
        <td class="td_num" style="text-align: center;"><?php echo $row['vi_id']; ?> <div style="display:inline-block; vertical-align:middle; margin-left:5px; line-height:1;"><a href="?action=swap&vi_id=<?php echo $row['vi_id']; ?>&dir=up&<?php echo $qstr_swap; ?>" style="display:block; font-size:11px; color:#666; text-decoration:none;">▲</a><a href="?action=swap&vi_id=<?php echo $row['vi_id']; ?>&dir=down&<?php echo $qstr_swap; ?>" style="display:block; font-size:11px; color:#666; text-decoration:none;">▼</a></div></td>
        <td class="td_area" style="text-align: center;"><select name="vi_area[<?php echo $i; ?>]" class="frm_input"><?php foreach($jeonnam_cities as $city) { ?><option value="<?php echo $city; ?>" <?php echo ($row['vi_area'] == $city) ? 'selected' : ''; ?>><?php echo $city; ?></option><?php } ?></select></td>
        <td class="td_left"><input type="text" name="vi_name[<?php echo $i; ?>]" value="<?php echo htmlspecialchars2($row['vi_name']); ?>" class="frm_input"></td>
        <td class="td_subject" style="text-align: center;"><select name="vi_subject[<?php echo $i; ?>]" class="frm_input"><?php foreach($volunteer_subjects as $subj) { ?><option value="<?php echo $subj; ?>" <?php echo ($row['vi_subject'] == $subj) ? 'selected' : ''; ?>><?php echo $subj; ?></option><?php } ?></select></td>
        <td class="td_content"><input type="text" name="vi_content[<?php echo $i; ?>]" value="<?php echo htmlspecialchars2($row['vi_content']); ?>" class="frm_input"></td>
        <td class="td_num" style="text-align: center; padding: 5px;"><div style="display: flex; align-items: center; justify-content: center; gap: 5px;"><input type="number" name="vi_count[<?php echo $i; ?>]" value="<?php echo $row['vi_count']; ?>" class="frm_input" style="max-width: 60px; text-align: right;" min="0"><span>명</span></div></td>
    </tr>
    <?php } if ($i == 0) echo '<tr><td colspan="7" class="empty_table">데이터가 없습니다.</td></tr>'; ?>
    </tbody>
    </table>
</div>
</form>

<script>
$(function() {
    // ★ 메시지 안내창 5초 노출 액션
    var ammsg = "<?php echo $ammsg; ?>";
    if (ammsg) {
        $("#action_msg_box").text(ammsg).fadeIn(500, function() {
            setTimeout(function() {
                $("#action_msg_box").fadeOut(500);
            }, 5000);
        });
    }
});
</script>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?sca=".urlencode($sca)."&stx=".urlencode($stx)."&sst=$sst&sod=$sod&page="); ?>
<?php include_once (G5_ADMIN_PATH.'/admin.tail.php'); ?>