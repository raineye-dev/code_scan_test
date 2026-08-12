<?php
$sub_menu = '300600';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, "w");

$volunteer_table = G5_TABLE_PREFIX . 'rain_talent_volunteer';

// =========================================================================
// ★ 1. 단일 파일 Ajax 처리 구간 (화면을 그리기 전에 요청을 가로채서 처리)
// =========================================================================
if(isset($_POST['ajax_check']) && $_POST['ajax_check'] == 1) {
    $ajax_area = isset($_POST['vi_area']) ? sql_real_escape_string(trim($_POST['vi_area'])) : '';
    $ajax_name = isset($_POST['vi_name']) ? sql_real_escape_string(trim($_POST['vi_name'])) : '';
    $ajax_w    = isset($_POST['w']) ? $_POST['w'] : '';
    $ajax_id   = isset($_POST['vi_id']) ? (int)$_POST['vi_id'] : 0;

    if($ajax_area && $ajax_name) {
        // 중복 데이터 갯수 확인 (수정 모드일 때는 자기 자신은 제외)
        $sql = " select count(*) as cnt from {$volunteer_table} where vi_area = '{$ajax_area}' and vi_name = '{$ajax_name}' ";
        if ($ajax_w == 'u') {
            $sql .= " and vi_id <> '{$ajax_id}' ";
        }
        
        $row = sql_fetch($sql);
        if($row['cnt'] > 0) {
            echo 'duplicate';
        } else {
            echo 'ok';
        }
    }
    exit; // Ajax 응답 후 페이지 렌더링을 멈춤
}
// =========================================================================


$jeonnam_cities = array("목포", "여수", "순천", "나주", "광양", "담양", "곡성", "구례", "고흥", "보성", "화순", "장흥", "강진", "해남", "영암", "무안", "함평", "영광", "장성", "완도", "진도", "신안");
// ★ 활동분야 배열 추가
$volunteer_subjects = array("건강지원", "기타", "문화공연", "뷰티", "음식나눔", "주거개선");

$w = isset($_GET['w']) ? clean_xss_tags($_GET['w'], 1, 1) : '';
$vi_id = isset($_GET['vi_id']) ? (int)$_GET['vi_id'] : 0;

if ($w == 'u') {
    $html_title = '단체 수정';
    $row = sql_fetch(" select * from {$volunteer_table} where vi_id = '{$vi_id}' ");
    if (!$row['vi_id']) alert('존재하지 않는 자료입니다.');
} else {
    $html_title = '신규 단체 추가';
    $row = array('vi_id'=>'', 'vi_area'=>'', 'vi_name'=>'', 'vi_subject'=>'', 'vi_content'=>'', 'vi_count'=>'0');
}

$g5['title'] = $html_title;
include_once (G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="fvolunteerform" id="fvolunteerform" action="./rain_03_02_001_form_update.php" method="post" onsubmit="return fvolunteerform_check(this);">
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="token" value="<?php echo get_admin_token(); ?>">
<input type="hidden" name="is_duplicate" id="is_duplicate" value="0">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row"><label for="vi_id">번호(위치)</label></th>
        <td>
            <?php if ($w == 'u') { ?>
                <input type="hidden" name="vi_id" value="<?php echo $row['vi_id']; ?>">
                <b><?php echo $row['vi_id']; ?></b> 번
                <span class="frm_info" style="margin-left:15px;">수정 시에는 번호를 변경할 수 없습니다. (리스트 페이지에서 삭제 후 재등록 요망)</span>
            <?php } else { ?>
                <input type="text" name="vi_id" value="" id="vi_id" class="frm_input" size="10"> 번
                <span class="frm_info">비워두면 마지막 번호로 등록됩니다. (예: 10 입력 시 기존 10번과 그 이후 번호는 모두 1씩 밀려납니다.)</span>
            <?php } ?>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="vi_area">지역</label></th>
        <td>
            <select name="vi_area" id="vi_area" class="frm_input" required>
                <option value="">선택하세요</option>
                <?php foreach($jeonnam_cities as $city) { ?>
                <option value="<?php echo $city; ?>" <?php echo ($row['vi_area'] == $city) ? 'selected' : ''; ?>><?php echo $city; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="vi_name">단체명</label></th>
        <td>
            <input type="text" name="vi_name" value="<?php echo htmlspecialchars2($row['vi_name']); ?>" id="vi_name" required class="frm_input" size="50">
            <span id="msg_duplicate" style="margin-left:10px; font-weight:bold;"></span>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="vi_subject">활동분야</label></th>
        <td>
            <select name="vi_subject" id="vi_subject" class="frm_input" required>
                <option value="">선택하세요</option>
                <?php foreach($volunteer_subjects as $subj) { ?>
                <option value="<?php echo $subj; ?>" <?php echo ($row['vi_subject'] == $subj) ? 'selected' : ''; ?>><?php echo $subj; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="vi_content">활동내용</label></th>
        <td><input type="text" name="vi_content" value="<?php echo htmlspecialchars2($row['vi_content']); ?>" id="vi_content" required class="frm_input" size="80"></td>
    </tr>
    <tr>
        <th scope="row"><label for="vi_count">회원수</label></th>
        <td><input type="text" name="vi_count" value="<?php echo $row['vi_count']; ?>" id="vi_count" class="frm_input" size="10"> 명</td>
    </tr>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <a href="./rain_03_02_001_list.php" class="btn btn_02">목록</a>
    <input type="submit" value="확인" class="btn_submit btn" accesskey="s">
</div>
</form>

<script>
$(function() {
    // 지역을 선택하거나 단체명을 입력할 때마다 Ajax 실행
    $('#vi_area, #vi_name').on('keyup change', function() {
        var vi_area = $('#vi_area').val();
        var vi_name = $('#vi_name').val();
        var w = $('input[name="w"]').val();
        var vi_id = $('input[name="vi_id"]').val();
        if(!vi_id) vi_id = 0;

        if(vi_area && vi_name) {
            $.ajax({
                url: './rain_03_02_001_form.php', // 자기 자신 파일 호출
                type: 'POST',
                data: {
                    ajax_check: 1, // Ajax 통신임을 알리는 식별자
                    vi_area: vi_area,
                    vi_name: vi_name,
                    w: w,
                    vi_id: vi_id
                },
                success: function(data) {
                    if($.trim(data) == 'duplicate') {
                        $('#msg_duplicate').text('사용 불가! 이미 등록된 지역과 단체명 중복입니다.').css('color', 'red');
                        $('#is_duplicate').val('1'); // 중복 상태
                    } else {
                        $('#msg_duplicate').text('등록 가능한 단체명입니다.').css('color', 'blue');
                        $('#is_duplicate').val('0'); // 정상 상태
                    }
                }
            });
        } else {
            $('#msg_duplicate').text('');
            $('#is_duplicate').val('0');
        }
    });
});

function fvolunteerform_check(f) {
    if (!f.vi_area.value) {
        alert("지역을 선택해 주세요.");
        f.vi_area.focus();
        return false;
    }
    
    if (!f.vi_subject.value) {
        alert("활동분야를 선택해 주세요.");
        f.vi_subject.focus();
        return false;
    }
    
    // 폼 전송 전 중복 여부를 최종적으로 차단
    if ($('#is_duplicate').val() == '1') {
        alert("이미 등록된 지역과 단체명입니다. 변경해 주세요.");
        f.vi_name.focus();
        return false;
    }
    
    return true;
}
</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');
?>