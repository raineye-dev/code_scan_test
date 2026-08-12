<?php
$sub_menu = '300600'; // 관리자 메뉴 번호
include_once('./_common.php');

// 관리자 권한 및 토큰 검사 (보안)
check_admin_token();
auth_check_menu($auth, $sub_menu, "w");

$volunteer_table = G5_TABLE_PREFIX . 'rain_talent_volunteer';

$w          = isset($_POST['w']) ? clean_xss_tags(trim($_POST['w']), 1, 1) : '';
$vi_id      = isset($_POST['vi_id']) ? (int)$_POST['vi_id'] : 0;
$vi_area    = isset($_POST['vi_area']) ? sql_real_escape_string(trim($_POST['vi_area'])) : '';
$vi_name    = isset($_POST['vi_name']) ? sql_real_escape_string(trim($_POST['vi_name'])) : '';
$vi_subject = isset($_POST['vi_subject']) ? sql_real_escape_string(trim($_POST['vi_subject'])) : '';
$vi_content = isset($_POST['vi_content']) ? sql_real_escape_string(trim($_POST['vi_content'])) : '';
$vi_count   = isset($_POST['vi_count']) ? (int)$_POST['vi_count'] : 0;

// 필수값 체크
if (!$vi_area) alert('지역을 선택해주세요.');
if (!$vi_name) alert('단체명을 입력해주세요.');
if (!$vi_subject) alert('활동분야를 선택해주세요.');

// =========================================================================
// 1. 신규 단체 추가 (w == '')
// =========================================================================
if ($w == '') {
    
    // DB 중복 등록 방지 (지역 + 단체명)
    $sql = " select count(*) as cnt from {$volunteer_table} where vi_area = '{$vi_area}' and vi_name = '{$vi_name}' ";
    $row = sql_fetch($sql);
    if ($row['cnt'] > 0) {
        alert("해당 지역에 이미 같은 이름의 단체가 등록되어 있습니다.");
    }

    // ★ 번호를 지정해서 끼워넣는 경우 (예: 10번 입력 시)
    if ($vi_id > 0) {
        // 기존 10번부터 그 뒤의 모든 번호를 +1씩 밀어냄 (충돌 방지를 위해 큰 번호부터 역순 DESC 처리)
        $sql = " UPDATE {$volunteer_table} SET vi_id = vi_id + 1 WHERE vi_id >= '{$vi_id}' ORDER BY vi_id DESC ";
        sql_query($sql);

        // 비워진 지정 번호 자리에 데이터 삽입
        $sql = " insert into {$volunteer_table}
                    set vi_id      = '{$vi_id}',
                        vi_area    = '{$vi_area}',
                        vi_name    = '{$vi_name}',
                        vi_subject = '{$vi_subject}',
                        vi_content = '{$vi_content}',
                        vi_count   = '{$vi_count}',
                        vi_datetime = '".G5_TIME_YMDHIS."' ";
        sql_query($sql);
    } 
    // ★ 번호를 비워둔 경우 (가장 마지막 번호로 자동 추가)
    else {
        $sql = " insert into {$volunteer_table}
                    set vi_area    = '{$vi_area}',
                        vi_name    = '{$vi_name}',
                        vi_subject = '{$vi_subject}',
                        vi_content = '{$vi_content}',
                        vi_count   = '{$vi_count}',
                        vi_datetime = '".G5_TIME_YMDHIS."' ";
        sql_query($sql);
    }
    
    // 번호를 뒤로 밀어냈기 때문에, 다음 등록 시 엉키지 않도록 AUTO_INCREMENT 값을 가장 큰 번호 +1로 재설정
    $max_row = sql_fetch(" select MAX(vi_id) as max_id from {$volunteer_table} ");
    $next_id = $max_row['max_id'] + 1;
    sql_query(" ALTER TABLE {$volunteer_table} AUTO_INCREMENT = {$next_id} ", false);

    alert('정상적으로 추가되었습니다.', "./rain_03_02_001_list.php");

} 
// =========================================================================
// 2. 기존 단체 수정 (w == 'u')
// =========================================================================
else if ($w == 'u') {
    
    if (!$vi_id) alert('수정할 단체의 고유번호가 없습니다.');

    // 수정 시에도 지역/단체명 중복 체크 (자기 자신은 제외)
    $sql = " select count(*) as cnt from {$volunteer_table} where vi_area = '{$vi_area}' and vi_name = '{$vi_name}' and vi_id <> '{$vi_id}' ";
    $row = sql_fetch($sql);
    if ($row['cnt'] > 0) {
        alert("해당 지역에 이미 같은 이름의 단체가 등록되어 있습니다.");
    }

    $sql = " update {$volunteer_table}
                set vi_area    = '{$vi_area}',
                    vi_name    = '{$vi_name}',
                    vi_subject = '{$vi_subject}',
                    vi_content = '{$vi_content}',
                    vi_count   = '{$vi_count}'
              where vi_id = '{$vi_id}' ";
    sql_query($sql);

    alert('정상적으로 수정되었습니다.', "./rain_03_02_001_list.php");

} else {
    alert('잘못된 접근입니다.');
}
?>