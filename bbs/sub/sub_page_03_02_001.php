<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 전남 재능기부 자원봉사단체";

include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

// --- 정렬 및 검색 로직 시작 ---
$volunteer_table = G5_TABLE_PREFIX . 'rain_talent_volunteer';

// 변수 수신 및 정렬 변수 처리
$sca = isset($_GET['sca']) ? clean_xss_tags($_GET['sca'], 1, 1) : '';
$stx = isset($_GET['stx']) ? clean_xss_tags($_GET['stx'], 1, 1) : '';
$sst = isset($_GET['sst']) ? clean_xss_tags($_GET['sst'], 1, 1) : 'vi_id'; // 정렬 필드
$sod = isset($_GET['sod']) ? clean_xss_tags($_GET['sod'], 1, 1) : 'desc';  // 정렬 순서

// 보안을 위한 정렬 허용 필드 체크
if(!in_array($sst, array('vi_id', 'vi_area', 'vi_name', 'vi_subject', 'vi_count'))) $sst = 'vi_id';
if(!in_array($sod, array('asc', 'desc'))) $sod = 'desc';

// ★ 통계용 필터 조건 생성 (지역 클릭 시 해당 지역만 집계)
$stat_where = " where 1=1 ";
if ($sca) {
    $stat_where .= " and vi_area = '" . sql_real_escape_string($sca) . "' ";
}

// 1. 통계용 데이터 (지역 필터가 적용된 분야별 개수 및 회원수 합계)
$count_data = array('건강지원'=>0, '기타'=>0, '문화공연'=>0, '뷰티'=>0, '음식나눔'=>0, '주거개선'=>0);
$member_data = array('건강지원'=>0, '기타'=>0, '문화공연'=>0, '뷰티'=>0, '음식나눔'=>0, '주거개선'=>0);

// ★ 오류 수정 포인트: SUM(vi_count) 결과를 명확하게 숫자형태로 캐스팅하여 오류 방지
$res_subj = sql_query(" SELECT vi_subject, COUNT(*) as cnt, SUM(vi_count) as total_mem FROM {$volunteer_table} {$stat_where} GROUP BY vi_subject ");
while($s_row = sql_fetch_array($res_subj)) {
    if(isset($count_data[$s_row['vi_subject']])) {
        $count_data[$s_row['vi_subject']] = (int)$s_row['cnt'];
        $member_data[$s_row['vi_subject']] = (int)$s_row['total_mem']; // 인원수 값을 정수로 변환하여 배열에 저장
    }
}
$total_sum = array_sum($count_data);
$total_member_sum = array_sum($member_data);

// 2. 지역별 숫자 계산 (탭 메뉴용 - 전체 수치는 유지)
$jeonnam_cities = array("목포", "여수", "순천", "나주", "광양", "담양", "곡성", "구례", "고흥", "보성", "화순", "장흥", "강진", "해남", "영암", "무안", "함평", "영광", "장성", "완도", "진도", "신안");
$city_counts = array();
$res_counts = sql_query(" SELECT vi_area, COUNT(*) as cnt FROM {$volunteer_table} GROUP BY vi_area ");
while($c_row = sql_fetch_array($res_counts)) {
    $city_counts[$c_row['vi_area']] = $c_row['cnt'];
}
$all_count_row = sql_fetch(" SELECT COUNT(*) as cnt FROM {$volunteer_table} ");
$all_total_count = (int)$all_count_row['cnt'];

// 3. 리스트 필터링 및 정렬 쿼리 구성
$where = " where 1=1 ";
if ($sca) {
    $where .= " and vi_area = '" . sql_real_escape_string($sca) . "' ";
}
if ($stx) {
    $where .= " and vi_name like '%" . sql_real_escape_string($stx) . "%' ";
}

$sql_common = " from {$volunteer_table} {$where} ";
$sql = " select * {$sql_common} order by {$sst} {$sod} ";
$result = sql_query($sql);

// 현재 상태 유지를 위한 쿼리스트링 조합
$qstr = "sca=".urlencode($sca)."&stx=".urlencode($stx);

// ★ DB에서 마지막 날짜 가져오기 (선택된 지역 기준)
$row_last = sql_fetch(" SELECT vi_datetime FROM `{$volunteer_table}` {$stat_where} ORDER BY vi_datetime DESC LIMIT 1 ");

if ($row_last['vi_datetime']) {
    $last_update_date = date('Y. m', strtotime($row_last['vi_datetime']));
} else {
    $last_update_date = date('Y. m');
}
?>

<style>
/* 기존 CSS 유지 */
#bo_cate {background:#eeeff1;padding:7px;margin:10px 0; border:1px solid #ddd; border-radius:5px;}
#bo_cate h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
#bo_cate ul {zoom:1}
#bo_cate ul:after {display:block;visibility:hidden;clear:both;content:""}
#bo_cate li {display:inline-block;padding:2px;}
#bo_cate a {display:block;line-height:26px;padding:0 5px;border-radius:3px;border:1px solid transparent; font-size:14px; letter-spacing:-0.08em;}
#bo_cate a:focus, #bo_cate a:hover, #bo_cate a:active {text-decoration:none;background:#d2d6dc;}
#bo_cate #bo_cate_ul li.on {z-index:2;background:#112f58; height: 25px; border-radius: 40px; padding: 0 10px;}
#bo_cate #bo_cate_ul li.on a{color:#fff;font-weight:300; line-height: 25px;display:block;}

/* 정렬 버튼 스타일 추가 */
.sort_btn { display:inline-flex; flex-direction:column; vertical-align:middle; margin-left:3px; line-height:0.7; }
.sort_btn a { font-size:9px; color:#bbb; text-decoration:none; }
.sort_btn a:hover { color:#112f58; }
.sort_btn a.active { color:#112f58; font-weight:bold; }
</style>

<div id="body_layout">
  <div class="body_wrap layout">  
  
   <?include G5_THEME_PATH."/sub_left_03.php";?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">전남 재능기부 자원봉사단체</h2>
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">전남 재능기부 자원봉사단체</a></li>
         </ul>
        </div>
      </div>
      <div class="sub_page_bg"></div>
      
      <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">전남 재능기부 자원봉사단체란?</p></div>
      <p class="txt_box sub_list_wrap">1365자원봉사포털에 등록되어 있는 재능나눔 자원봉사 단체로, 자신이 가진 기술이나 전문지식을 활용하여 각 지역에서 봉사활동을 하고 있습니다.</p>

      <div class="subpoint"><span class="dot"><em></em></span><p class="tt1"><?php echo $sca ? $sca.' 지역 ' : '전남 '; ?>재능기부 자원봉사 단체 현황(<?php echo $last_update_date; ?>월 기준)</p></div>
      <div class="sub_table_wrap sub_list_wrap" style="padding-bottom: 0px;">
        <table class="table_t02">
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
                  <th style="background:#f8f9fa;">단체수</th> <td><?php echo number_format($total_sum); ?></td>
                  <td><?php echo number_format($count_data['건강지원']); ?></td>
                  <td><?php echo number_format($count_data['기타']); ?></td>
                  <td><?php echo number_format($count_data['문화공연']); ?></td>
                  <td><?php echo number_format($count_data['뷰티']); ?></td>
                  <td><?php echo number_format($count_data['음식나눔']); ?></td>
                  <td><?php echo number_format($count_data['주거개선']); ?></td>
                </tr>
                <tr>
                  <th style="background:#f8f9fa;">인원수</th>
                  <td><?php echo number_format($total_member_sum); ?>명</td>
                  <td><?php echo number_format($member_data['건강지원']); ?>명</td>
                  <td><?php echo number_format($member_data['기타']); ?>명</td>
                  <td><?php echo number_format($member_data['문화공연']); ?>명</td>
                  <td><?php echo number_format($member_data['뷰티']); ?>명</td>
                  <td><?php echo number_format($member_data['음식나눔']); ?>명</td>
                  <td><?php echo number_format($member_data['주거개선']); ?>명</td>
                </tr>
          </tbody>
        </table>
      </div> 

      <div style="margin: 15px 0; text-align: center;">
          <form name="fsearch" id="fsearch" method="get" style="display: inline-block; background: #f8f8f8; padding: 10px 15px; border: 1px solid #ddd; border-radius: 5px;">
              <input type="hidden" name="sca" value="<?php echo htmlspecialchars($sca); ?>">
              <input type="hidden" name="sst" value="<?php echo $sst; ?>">
              <input type="hidden" name="sod" value="<?php echo $sod; ?>">
              <label for="stx" style="font-weight: bold; margin-right: 5px; font-size: 14px;">단체명 검색 :</label>
              <input type="text" name="stx" value="<?php echo htmlspecialchars($stx); ?>" id="stx" class="frm_input" style="width: 250px; height: 32px; border: 1px solid #ccc; padding: 0 10px; vertical-align: middle;" placeholder="검색어를 입력하세요">
              <button type="submit" class="btn_submit" style="height: 32px; padding: 0 15px; background: #112f58; color: #fff; border: none; border-radius: 3px; cursor: pointer; vertical-align: middle; font-size: 14px;">검색</button>
              <?php if($stx) { ?>
                  <a href="?sca=<?php echo urlencode($sca); ?>&sst=<?php echo $sst; ?>&sod=<?php echo $sod; ?>" style="display: inline-block; margin-left: 5px; font-size: 13px; color: #666; text-decoration: none; vertical-align: middle;">[초기화]</a>
              <?php } ?>
          </form>
      </div>

      <div id="bo_cate">
          <ul id="bo_cate_ul">
              <li class="<?php echo !$sca ? 'on' : ''; ?>">
                  <a href="?sst=<?php echo $sst; ?>&sod=<?php echo $sod; ?><?php echo $stx ? '&stx='.urlencode($stx) : ''; ?>">전체(<?php echo $all_total_count; ?>)</a>
              </li>   
              <?php foreach($jeonnam_cities as $city) { 
                  $count = isset($city_counts[$city]) ? (int)$city_counts[$city] : 0;
              ?>
              <li class="<?php echo ($sca == $city) ? 'on' : ''; ?>">
                  <a href="?sca=<?php echo urlencode($city); ?>&sst=<?php echo $sst; ?>&sod=<?php echo $sod; ?><?php echo $stx ? '&stx='.urlencode($stx) : ''; ?>"><?php echo $city; ?>(<?php echo $count; ?>)</a>
              </li>
              <?php } ?>
          </ul>
      </div>

      <div class="sub_table_wrap">
          <table class="table_t02">
              <caption>전남 재능기부 자원봉사단체 목록</caption>
              <thead class="mobile_no">
                  <tr>
                      <th scope="col" style="width:10%;" class="mobile_no">
                        번호
                        <span class="sort_btn">
                            <a href="?<?php echo $qstr; ?>&sst=vi_id&sod=asc" class="<?php echo ($sst=='vi_id'&&$sod=='asc')?'active':''; ?>">▲</a>
                            <a href="?<?php echo $qstr; ?>&sst=vi_id&sod=desc" class="<?php echo ($sst=='vi_id'&&$sod=='desc')?'active':''; ?>">▼</a>
                        </span>
                      </th>
                      <th scope="col" style="width:12%;">
                        지역
                        <span class="sort_btn">
                            <a href="?<?php echo $qstr; ?>&sst=vi_area&sod=asc" class="<?php echo ($sst=='vi_area'&&$sod=='asc')?'active':''; ?>">▲</a>
                            <a href="?<?php echo $qstr; ?>&sst=vi_area&sod=desc" class="<?php echo ($sst=='vi_area'&&$sod=='desc')?'active':'' ?>">▼</a>
                        </span>
                      </th>
                      <th scope="col" style="width:25%;">
                        단체명
                        <span class="sort_btn">
                            <a href="?<?php echo $qstr; ?>&sst=vi_name&sod=asc" class="<?php echo ($sst=='vi_name'&&$sod=='asc')?'active':'' ?>">▲</a>
                            <a href="?<?php echo $qstr; ?>&sst=vi_name&sod=desc" class="<?php echo ($sst=='vi_name'&&$sod=='desc')?'active':'' ?>">▼</a>
                        </span>
                      </th>
                      <th scope="col" style="width:15%;">
                        활동분야
                        <span class="sort_btn">
                            <a href="?<?php echo $qstr; ?>&sst=vi_subject&sod=asc" class="<?php echo ($sst=='vi_subject'&&$sod=='asc')?'active':'' ?>">▲</a>
                            <a href="?<?php echo $qstr; ?>&sst=vi_subject&sod=desc" class="<?php echo ($sst=='vi_subject'&&$sod=='desc')?'active':'' ?>">▼</a>
                        </span>
                      </th>
                      <th scope="col" style="">활동내용</th>
                      <th scope="col" style="width:12%;" class="mobile_no">
                        회원수
                        <span class="sort_btn">
                            <a href="?<?php echo $qstr; ?>&sst=vi_count&sod=asc" class="<?php echo ($sst=='vi_count'&&$sod=='asc')?'active':'' ?>">▲</a>
                            <a href="?<?php echo $qstr; ?>&sst=vi_count&sod=desc" class="<?php echo ($sst=='vi_count'&&$sod=='desc')?'active':'' ?>">▼</a>
                        </span>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  for ($i=0; $row=sql_fetch_array($result); $i++) {
                  ?>
                  <tr>
                      <td class="mobile_no"><?php echo $row['vi_id']; ?></td>
                      <td><?php echo $row['vi_area']; ?></td>
                      <td><strong><?php echo htmlspecialchars2($row['vi_name']); ?></strong></td>
                      <td><?php echo $row['vi_subject']; ?></td>
                      <td><?php echo htmlspecialchars2($row['vi_content']); ?></td>
                      <td class="mobile_no"><?php echo number_format($row['vi_count']); ?></td>
                  </tr>
                  <?php
                  }
                  if ($i == 0) {
                      echo '<tr><td colspan="6" style="padding:50px 0; text-align:center;">등록된 단체가 없습니다.</td></tr>';
                  }
                  ?>
              </tbody>
          </table>
      </div>

<?php if ($is_admin) { ?>
<div style="width:100%; overflow:hidden; margin:20px 0;">
    <ul class="btn_bo_user btn_submits" style="float:right; list-style:none; padding:0; margin:0;">
        <li><a href="<?php echo G5_ADMIN_URL; ?>/rain_03_02_001_list.php?<?php echo $qstr; ?>&sst=<?php echo $sst; ?>&sod=<?php echo $sod; ?>" class="btn_b02 btn" title="관리자 페이지에서 데이터 수정">데이터 수정</a></li>
    </ul>
</div>
<div style="clear:both;"></div>
<?php } ?>

    </div></div></div><?php
include_once('./_tail.php');
?>