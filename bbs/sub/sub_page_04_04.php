<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 온라인 영상교육";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

//*스타일시트 추가
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

function mytory_asterisk($string) {
	$string = trim($string);
	$length = mb_strlen($string, 'utf-8');
	$string_changed = $string;
	if ($length <= 2) {
		// 한두 글자면 그냥 뒤에 별표 붙여서 내보낸다.
		$string_changed = mb_substr($string, 0, 1, 'utf-8') . '*';
	}
	if ($length >= 3) {
		// 3으로 나눠서 앞뒤.
		$leave_length = floor($length/3); // 남겨 둘 길이. 반올림하니 너무 많이 남기게 돼, 내림으로 해서 남기는 걸 줄였다.
		$asterisk_length = $length - ($leave_length * 2);
		$offset = $leave_length + $asterisk_length;
		$head = mb_substr($string, 0, $leave_length, 'utf-8');
		$tail = mb_substr($string, $offset, $leave_length, 'utf-8');
		$string_changed = $head . implode('', array_fill(0, $asterisk_length, '*')) . $tail;
	}
	return $string_changed;
}



?>

<style type="text/css">
.bo_tit.1{display:block;}
</style>


		<div id="body_layout">
	  <div class="body_wrap layout">

	   <?include G5_THEME_PATH."/sub_left_04.php"?>

        <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">온라인 인증현황</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap">
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">온라인 인증현황</a></li>
         </ul>
        </div><!---///utile_wrap---->
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>



	<!---* 검색 --->
	<div class="board_search" style="float: right;">
		<filedset id="bo_sch">
			<form action="./sub_page_04_04_search.php" method="get">
				<div id="search_box" class="fbox">
					<p class="s_select">
						<select name="catgo" >
							<option value="idx">발급번호</option>
						</select>
					</p>
					<p class="s_keyword">
						<input type="text" name="search" size="16"  maxlength="20" width="100%" required="required" placeholder="검색어를 입력해주세요">
					</p>
					<button type="submit" value="검색" class="btn_submit">
						<span class>검색</span>
					</button>
				</div>
			</form>
		</filedset>
     </div><!---///board_search---->



	 <!----//서브페이지 내용---->
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">온라인 인증현황</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
	<thead>
		<tr>
			<th width="15%">발급번호</th>
			<th width="15%">분류</th>
			<th>이름</th>
			<th width="25%">등록일</th>
		</tr>
	</thead>
	<tbody>
<?php
	//행, 현재페이지, 총페이지수, URL

	$page_size = 20;

	if ($page < 1) $page = 1;

	$where = "WHERE grade>=70";

	$total_res = sql_fetch(" SELECT count(*) as cnt FROM video_education_info {$where}");
	$total_count = $total_res['cnt'];

	$total_page = (int)($total_count/$page_size) + ($total_count%$page_size==0 ? 0 : 1);
	$page_start = $page_size * ( $page - 1 );

	$vnum = $total_count - (($page-1) * $page_size);

	$sql = " select * from video_education_info {$where} order by idx desc limit $page_start, $page_size ";
	$result = sql_query($sql);

	//$link = "&searchFromType={$searchFromType}&area_code={$area_code}&mb_area_gugundo={$mb_area_gugundo}&result_cash_1={$result_cash_1}&result_cash_2={$result_cash_2}&f_filter={$f_filter}&keyword={$keyword}";
	$link="";

	$url = "/bbs/sub/sub_page_04_04.php";

	while($row = sql_fetch_array($result)){
		$gubun = ($row['etc1']=="T") ? "청소년" : "성인";
		$reg_date = $row['reg_date'];
?>
		<tr>
			<td><?=$row['idx']?></td>
			<td><span><?=$gubun?></span></td>
			<td>
				<?php if ($is_admin) {  ?>
					<a href="/bbs/sub/sub_page_04_04_001.php?idx=<?=$row['idx']?>"><?=mytory_asterisk($row['name'])?></a>
				<?}else{?>
					<a onClick="alert('관리자만 접근할 수 있는 페이지입니다.');" style="cursor:pointer;"><?=mytory_asterisk($row['name'])?></a>
				<?}?>
			</td>
			<td><?=substr($reg_date, 0, 4)?>. <?=substr($reg_date, 4, 2)?>. <?=substr($reg_date, 6, 2)?></td>
		</tr>
<?}?>
	</tbody>
  </table>
</div><!---sub_table_wrap--->
</div>
<!----//서브페이지 내용---->
<nav class="pg_wrap">
	<span class="pg">
		<?php echo get_paging($config['cf_write_pages'], $page, $total_page,  $_SERVER['SCRIPT_NAME']."?{$link}&amp;page="); ?>
	</span>
</nav>

	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end -->
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
