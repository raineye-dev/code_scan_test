<?php
$sub_menu = '300600';
include_once('./_common.php');

// 보안: 관리자 토큰 체크
check_admin_token();

// 권한: 쓰기 권한 체크
auth_check_menu($auth, $sub_menu, "w");

$volunteer_table = G5_TABLE_PREFIX . 'rain_talent_volunteer';

$count = count($_POST['chk']);

if (!$count) {
    alert($_POST['act_button']." 하실 항목을 하나 이상 체크하여 주십시오.");
}

// =========================================================================
// 1. 일괄 수정 처리
// =========================================================================
if ($_POST['act_button'] == "일괄수정") {
    for ($i=0; $i<$count; $i++) {
        // 체크된 행의 인덱스 번호 추출
        $k = $_POST['chk'][$i];

        // 데이터 정제 (보안 처리)
        $vi_id      = (int)$_POST['vi_id'][$k];
        $vi_area    = sql_real_escape_string($_POST['vi_area'][$k]);
        $vi_name    = sql_real_escape_string($_POST['vi_name'][$k]);
        $vi_subject = sql_real_escape_string($_POST['vi_subject'][$k]);
        $vi_content = sql_real_escape_string($_POST['vi_content'][$k]);
        $vi_count   = (int)$_POST['vi_count'][$k];

        $sql = " update {$volunteer_table}
                    set vi_area    = '{$vi_area}',
                        vi_name    = '{$vi_name}',
                        vi_subject = '{$vi_subject}',
                        vi_content = '{$vi_content}',
                        vi_count   = '{$vi_count}'
                  where vi_id = '{$vi_id}' ";
        sql_query($sql);
    }
    alert("일괄 수정이 완료되었습니다.", "./rain_03_02_001_list.php?sca={$_POST['sca']}&page={$_POST['page']}");

} 
// =========================================================================
// 2. 선택 삭제 및 번호(-1) 자동 당기기 처리
// =========================================================================
else if ($_POST['act_button'] == "선택삭제") {
    
    // 삭제할 ID들을 배열에 모음
    $delete_ids = array();
    for ($i=0; $i<$count; $i++) {
        $k = $_POST['chk'][$i];
        $delete_ids[] = (int)$_POST['vi_id'][$k];
    }

    // ★ 매우 중요: 삭제할 번호들을 내림차순(큰 번호부터)으로 정렬합니다.
    // 그래야 여러 개를 삭제할 때, 뒤에 있는 번호부터 당겨지면서 앞 번호가 꼬이지 않습니다.
    rsort($delete_ids);

    foreach ($delete_ids as $vi_id) {
        // 1) 해당 번호 삭제
        sql_query(" delete from {$volunteer_table} where vi_id = '{$vi_id}' ");
        
        // 2) 삭제된 번호보다 큰 번호들을 모두 -1 씩 앞으로 당김
        // ORDER BY vi_id ASC 를 추가하여 앞에서부터 순차적으로 당겨지게 하여 DB 충돌을 완벽히 방지합니다.
        sql_query(" update {$volunteer_table} set vi_id = vi_id - 1 where vi_id > '{$vi_id}' ORDER BY vi_id ASC ");
    }

    // 3) 번호가 당겨졌으므로, 다음에 신규 등록될 때 꼬이지 않도록 AUTO_INCREMENT 를 현재 (최대값+1)로 초기화
    $max_row = sql_fetch(" select MAX(vi_id) as max_id from {$volunteer_table} ");
    $next_id = $max_row['max_id'] ? $max_row['max_id'] + 1 : 1;
    sql_query(" ALTER TABLE {$volunteer_table} AUTO_INCREMENT = {$next_id} ", false);

    alert("선택한 항목이 삭제되고 번호가 빈틈없이 재정렬되었습니다.", "./rain_03_02_001_list.php?sca={$_POST['sca']}&page={$_POST['page']}");
}
// 일괄수정 alert 제거하고 메시지만 넘기고 싶을 때 수정
$msg = "일괄 수정이 완료되었습니다.";
goto_url("./rain_03_02_001_list.php?sca={$_POST['sca']}&stx={$_POST['stx']}&page={$_POST['page']}&ammsg=".urlencode($msg));
?>