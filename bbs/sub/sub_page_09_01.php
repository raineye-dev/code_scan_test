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


	
$oldage = 19;
$yYear = date('Y') - $oldage;
$myYear = substr($member['mb_1'],0,4);
$etc1 = "";


if($myYear >= $yYear){
	$etc1 = "T";
}else{
	$etc1 = "A";
}

?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<style type="text/css">
.bo_tit.1{display:block;}
.box_mt10 {
    margin-top: .85rem;
	margin-bottom:1.5rem;
}
.my_page_title .my_name {
    color: #ff404b;
    font-weight: 700;
}
</style>
<!----/// html----->

<div id="body_layout">
<div class="body_wrap layout">

   <?include G5_THEME_PATH."/sub_left_07.php"?>

<div id="contens" class="contents_wrap">
<div id="location" class="title_wrap">
  <h2 class="page__title">나의수강내역</h2>
  <!-- 유틸 시작 -->
  <div class="utile_wrap">
    <ul class="location_wrap">
      <li class="n1 navi_home"><a href="">HOME</a></li>
      <li class="n2"><a href="">마이페이지</a></li>
      <li class="n3"><a href="" class="navi_ov">나의수강내역</a></li>
    </ul>
  </div>
  <!---///utile_wrap----> 
  
</div>
<!---///title_wrap--->
<div class="sub_page_bg"></div>

<!----/// html-----> 






	<!----//서브페이지 내용---->
	<div class="table_box">
	<div class="cntsGuide descript"> 
		<strong class="type1">회원님의 온라인 자원봉사영상교육 이수 여부 확인,<br>수료증 발급을 하실 수 있습니다.
		<!-- <div class="survey"> <a href="https://docs.google.com/forms/d/1nl0evAIagkcN12zAfF3xVG7tFNBNrmoNIzONcRPJYqE/edit" class=" ldp-btn go mobile_no red" target="_blank"><span>온라인교육 만족도조사 Click <i class=" xi-file-check" style=""></i> </span></a></div> --></strong>
		
	</div>
	<div class="my_page_title">
	<span class="my_name blue_font"><?=$member['mb_name'] ?></span> 님 반갑습니다.
	</div>


<?
	//  완료 해당년도에 1건이라도 있으면
	//  미완료 해당년도에 0건이면

	$sql = "SELECT kind_tp , count(0) as cnt FROM video_education_info WHERE user_id='" .$member['mb_id'] . "' and reg_date like '".date('Y')."%' and etc1 = '".$etc1."' and CONVERT (grade,DECIMAL(30)) >= 70 group by kind_tp ";
//	echo $sql ;
	$result = sql_query($sql);
	//$row = sql_fetch_array($result);

	while($row = sql_fetch_array($result)) {
		$kind[$row['kind_tp']] = $row['cnt'];
	}




	?>
			
		<div class="box_mt10">
			<ul class="dot_list">
					

				<?if($etc1 == 'T'){?>
				<li><?=date('Y')?>년 청소년 온라인 영상교육과정 : <?if($kind['1'] > 0) {echo "완료"; } else { echo "미완료"; }?></li>
				<!-- <li><?=date('Y')?>년 청소년 온라인 영상교육 2과정 : <?if($kind['2'] > 0) {echo "완료"; } else { echo "미완료"; }?></li> -->
				<?}else{?>
				<li><?=date('Y')?>년 성인 온라인 영상교육과정 : <?if($kind['3'] > 0) {echo "완료"; } else { echo "미완료"; }?></li>
				<!-- <li><?=date('Y')?>성인 온라인 영상교육 2과정 : <?if($kind['4'] > 0) {echo "완료"; } else { echo "미완료"; }?></li> -->
				<?}?>
			
			</ul>
		</div>

	




			<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">온라인 인증현황</p></div><!----////타이틀---->
			<div class="sub_table_wrap">
			<table class="table_t02">
				<thead>
					<tr>
						<th width="15%">발급번호</th>
						<th width="15%">분류</th>
						<th width="15%">과정분류</th>
						<th>이름</th>
						<th width="25%">이수일</th>
						<th width="15%">수료증</th>
					</tr>
				</thead>
				<tbody>
			<?php
				//행, 현재페이지, 총페이지수, URL

				$page_size = 20;

				if ($page < 1) $page = 1;

				$where = " WHERE grade >= 70 ";
				$where .= " and user_idx = '".$member['mb_no']."'";

				$total_res = sql_fetch(" SELECT count(*) as cnt FROM video_education_info {$where}");
				$total_count = $total_res['cnt'];

				$total_page = (int)($total_count/$page_size) + ($total_count%$page_size==0 ? 0 : 1);
				$page_start = $page_size * ( $page - 1 );

				$vnum = $total_count - (($page-1) * $page_size);

				$sql = " select * from video_education_info {$where} order by idx desc limit $page_start, $page_size ";
				$result = sql_query($sql);

				//$link = "&searchFromType={$searchFromType}&area_code={$area_code}&mb_area_gugundo={$mb_area_gugundo}&result_cash_1={$result_cash_1}&result_cash_2={$result_cash_2}&f_filter={$f_filter}&keyword={$keyword}";
				$link="";

				$url = "/bbs/sub/sub_page_09_01.php";

				while($row = sql_fetch_array($result)){
					$gubun = ($row['etc1']=="T") ? "청소년" : "성인";
					$reg_date = $row['reg_date'];
			?>
					<tr>
						<td><?=$row['idx']?></td>
						<td><span><?=$gubun?></span></td>
						<td><span>
							<?if($row['kind_tp'] == '1' ){echo "청소년 과정";}?>
							<?if($row['kind_tp'] == '2' ){echo "청소년 과정";}?>
							<?if($row['kind_tp'] == '3' ){echo "성인 과정";}?>
							<?if($row['kind_tp'] == '4' ){echo "성인 과정";}?>
						
						</span></td>
						<td>
							<?php if ($is_member) {  ?>
								<!-- <a href="/bbs/sub/sub_page_09_01_001.php?idx=<?=$row['idx']?>" class="blue_font"> --><?=mytory_asterisk($row['name'])?><!-- </a> -->
							<?}else{?>
								<!-- <a onClick="alert('관리자만 접근할 수 있는 페이지입니다.');" style="cursor:pointer;"> --><?=mytory_asterisk($row['name'])?><!-- </a> -->
							<?}?>
						</td>
						<td><?=substr($reg_date, 0, 4)?>. <?=substr($reg_date, 4, 2)?>. <?=substr($reg_date, 6, 2)?></td>
						<td><a href="/bbs/sub/sub_page_09_01_001.php?idx=<?=$row['idx']?>" class="blue_font" style="display: block;
    width: 70%;
    height: 25px;
    background: #112f58;
    margin: 0 auto;
    font-size: 14px;
    border-radius: 5px;
    color: #fff !important;
    line-height: 25px;">다운로드</a></td>
					</tr>
			<?}?>
				</tbody>
			  </table>
			</div><!---sub_table_wrap--->
			</div>
			<!----//서브페이지 내용---->
			<nav class="pg_wrap">
				<span class="pg">
					<?php echo get_paging($config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME']."?{$link}&amp;page="); ?>
				</span>
			</nav>




</div>
</div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end -->
</div><!---///body_layout--->









<?php
include_once('./_tail.php');
?>
