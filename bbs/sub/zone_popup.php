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



?>

<?php

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<body >

<?



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



<div class="sub_body_wrap layout">


<div id="contens" class="contents_wrap" style="clear:both;float:none;">



<style>
.btn.small {
height: 43px;
    min-width: 20px;
    padding: 0 20px;
    font-size: 14px;
    line-height: 43px;
    color: #fff;
    font-weight: 400;
    font-size: 16px;
}
.search_box_top{margin-bottom:1rem;}

.search_btn_input{vertical-align: top;
    padding: 6px 24px 6px 6px;
    appearance: none;
    height: 25px;
    border: 1px solid #c9c9c9;}
</style>



	<!----//서브페이지 내용---->
	<div class="table_box">




			<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">소속검색 현황</p></div><!----////타이틀---->


				<div class="search_box_top">
					<form action="/bbs/sub/zone_popup.php" name="frm" id="frm" method="post">
						<input type="hidden" name="kind_tp" value="<?=$kind_tp?>" />


							지역구분
							<select name='area_nm'  class="Video">
								<option value="">전체</option>
								<option <?if($area_nm == '강진군') echo "selected='selected'"; ?> value="강진군">강진군</option>
								<option <?if($area_nm == '고흥군') echo "selected='selected'"; ?> value="고흥군">고흥군</option>
								<option <?if($area_nm == '곡성군') echo "selected='selected'"; ?> value="곡성군">곡성군</option>
								<option <?if($area_nm == '광양시') echo "selected='selected'"; ?> value="광양시">광양시</option>
								<option <?if($area_nm == '구례군') echo "selected='selected'"; ?> value="구례군">구례군</option>
								<option <?if($area_nm == '나주시') echo "selected='selected'"; ?> value="나주시">나주시</option>
								<option <?if($area_nm == '담양군') echo "selected='selected'"; ?> value="담양군">담양군</option>
								<option <?if($area_nm == '목포시') echo "selected='selected'"; ?> value="목포시">목포시</option>
								<option <?if($area_nm == '무안군') echo "selected='selected'"; ?> value="무안군">무안군</option>
								<option <?if($area_nm == '보성군') echo "selected='selected'"; ?> value="보성군">보성군</option>
								<option <?if($area_nm == '순천시') echo "selected='selected'"; ?> value="순천시">순천시</option>
								<option <?if($area_nm == '신안군') echo "selected='selected'"; ?> value="신안군">신안군</option>
								<option <?if($area_nm == '여수시') echo "selected='selected'"; ?> value="여수시">여수시</option>
								<option <?if($area_nm == '영광군') echo "selected='selected'"; ?> value="영광군">영광군</option>
								<option <?if($area_nm == '영암군') echo "selected='selected'"; ?> value="영암군">영암군</option>
								<option <?if($area_nm == '완도군') echo "selected='selected'"; ?> value="완도군">완도군</option>
								<option <?if($area_nm == '장성군') echo "selected='selected'"; ?> value="장성군">장성군</option>
								<option <?if($area_nm == '장흥군') echo "selected='selected'"; ?> value="장흥군">장흥군</option>
								<option <?if($area_nm == '진도군') echo "selected='selected'"; ?> value="진도군">진도군</option>
								<option <?if($area_nm == '함평군') echo "selected='selected'"; ?> value="함평군">함평군</option>
								<option <?if($area_nm == '해남군') echo "selected='selected'"; ?> value="해남군">해남군</option>
								<option <?if($area_nm == '화순군') echo "selected='selected'"; ?> value="화순군">화순군</option>

							</select>



						<?if($kind_tp == 'T'){?>
							학교구분
							<select name="corp_tp" class="Video">
								<option value="">전체</option>
								<option <?if($corp_tp == '고등학교') echo "selected='selected'"; ?> value="고등학교">고등학교</option>
								<option <?if($corp_tp == '중학교') echo "selected='selected'"; ?> value="중학교">중학교</option>
								<option <?if($corp_tp == '초등학교') echo "selected='selected'"; ?> value="초등학교">초등학교</option>
							</select>

						<?}?>


						소속검색 <input type="text" name="corp_nm" value="<?=$corp_nm?>" class="search_btn_input  grup_wps"/>
						<input type="button" value="검색" onclick="$('#frm').submit();"  class="search_box_mov btn_tops"/>
					</form>
				</div>

			<div class="sub_table_wrap">
			<table class="table_t02" style="min-width:0px;">
				<thead>
					<tr>
						<th style="width:50px">번호</th>
						<th style="width:50px">지역</th>
						<th style="width:50px">구분</th>
						<th style="width:100px">소속이름</th>
						<th style="width:50px">선택</th>
					</tr>
				</thead>
				<tbody>
			<?php
				//행, 현재페이지, 총페이지수, URL

				$page_size = 10;

				if ($page < 1) $page = 1;
				if($kind_tp == 'A' || $kind_tp == 'T'){
					$where = " WHERE kind_tp = '".$kind_tp."' ";
				}
				
				if($corp_nm != '' ){
					$where .= " and corp_nm like '%".$corp_nm."%'";
				}
				if($area_nm != '' ){
					$where .= " and area_nm = '".$area_nm."'";
				}
				if($corp_tp != '' ){
					$where .= " and corp_tp = '".$corp_tp."'";
				}

				

	

				$total_res = sql_fetch(" SELECT count(*) as cnt FROM tb_zone {$where}");
				$total_count = $total_res['cnt'];

				$total_page = (int)($total_count/$page_size) + ($total_count%$page_size==0 ? 0 : 1);
				$page_start = $page_size * ( $page - 1 );

				$vnum = $total_count - (($page-1) * $page_size);

				$sql = " select   zone_idx,  area_nm,   kind_tp,   corp_tp,   corp_nm from tb_zone {$where} order by zone_idx desc limit $page_start, $page_size ";
				$result = sql_query($sql);

				//$link = "&searchFromType={$searchFromType}&area_code={$area_code}&mb_area_gugundo={$mb_area_gugundo}&result_cash_1={$result_cash_1}&result_cash_2={$result_cash_2}&f_filter={$f_filter}&keyword={$keyword}";
				$link="";

				while($row = sql_fetch_array($result)){
					$reg_date = $row['reg_date'];
			?>
					<tr>
						<td><?=$row['zone_idx']?></td>
						<td><?=$row['area_nm']?></td>
						<td><?=$row['kind_tp']?></td>
						<td>
							<?=$row['corp_nm']?>
						</td>
						<td>
							<input type="button" value="선택" class="search_box_mov" onclick="goSelect('<?=$row['corp_nm']?>','<?=$row['zone_idx']?>');"/>

						</td>
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



<script>
	function goSelect(nm,idx){
		window.opener.goSelect(nm,idx);
		self.close();
	}
</script>




<?php

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

  

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->


<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>