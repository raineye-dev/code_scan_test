<?php
include_once('./_common.php');

if (!$is_member) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}



if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="이용안내"  ;
$g5['title'] = "이용안내 | SITEMAP";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);

$arr_center = array('목포시',
'여수시',
'순천시',
'나주시',
'광양시',
'담양군',
'곡성군',
'구례군',
'고흥군',
'보성군',
'화순군',
'장흥군',
'강진군',
'해남군',
'영암군',
'무안군',
'함평군',
'영광군',
'장성군',
'완도군',
'진도군',
'신안군'
);
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<div id="body_layout">
  <div class="body_wrap layout" style="max-width:1500px; width:100%;"> 
<!----/// 내용---->
  <!-- 게시판 페이지 정보 및 버튼 시작 { -->
   <div id="bo_btn_top" class="page-count-wrap clearfix">
      
          
            <!-- 게시판 검색 시작 { -->
			<div class="board_search">
			
                <fieldset id="bo_sch">
                  <legend>게시물 검색</legend>
                  <form name="fsearch" id="fsearch" method="POST" action="<?=$PHP_SELF?>">
                    <input type="hidden" name="mode" value="">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca ?>">
                    <input type="hidden" name="sop" value="and">
                    <label for="sfl" class="sound_only">검색대상</label>
					<div class="fbox">
							<p class="s_select">
							<select name="sfl" id="sfl">
<!-- 							  <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
							  <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
							  <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option> -->
								<option value=''>전체</option>
								<?php 
									foreach($arr_center as $v){
									$selected = ($_POST['sfl']==$v) ? "selected" : "";
								?>
								<option value='<?=$v?>' <?=$selected?>><?=$v?></option>
								<?}?>
							</select>
							</p>
				


					<p class="name_title_wp">
					<span><span class="name_title">이름 / 1365 ID</span><input type="text" name="idword" value="<?php echo stripslashes($idword) ?>" id="idword" class="sch_input name_title" size="10" maxlength="20" placeholder="검색어를 입력해주세요" /></span>
					</p> 

					<p class="day_title_wp">
					<span class="name_title">등록기간</span> <input type="text" name="stdt" value="<?php echo stripslashes($stdt) ?>"  id="stdt" class="sch_input name_title" size="10" maxlength="20" placeholder="검색어를 입력해주세요" />
					~ <input type="text" name="eddt" value="<?php echo stripslashes($eddt) ?>"  id="eddt" class="sch_input" size="10" maxlength="20" placeholder="검색어를 입력해주세요" />
					</p> 
                   <!-- <input type="button" value="검색" class="btn_submit"> -->
				   <div class="rt_ab">
					<button type="submit" value="검색" class="btn_submit left_btns"><span class="">검색</span></button>
					&nbsp;&nbsp;
					<input type="button" value="엑셀다운로드" class="btn_submit" onclick="excelDown()" style="width:150px;" />
					</div>
		</div>
                  </form>
                </fieldset>
              </div>
  				
  			
  			<!-- } 게시판 검색 끝 -->
  
</div>
<!-- } 게시판 페이지 정보 및 버튼 끝 -->




  
	<div class="sub_table_wrap wrap_boxadm">
		<table class="table_t02 wrap_boxadm_table">
		  <caption>
		  할인가맹점 목록
		  </caption>
		  <thead>
			<tr>
			  <th width="5%">번호</th>
			  <th width="5%">분류</th>
			<th width="7%">교육구분</th>
			  <th width="7%">이름</th>
			  <th width="8%">생년월일</th>
			  <th width="10%">소속센터</th>
			  	<th width="9%">소속구분</th>
			  <th width="12%">소속</th>
			  <th width="10%">연락처</th>
			  <th width="10%">1365 아이디</th>
			  <th width="16%">메일</th>
			 <th width="8%">등록일</th>
			  <th width="5%">기능</th>
			</tr>
		  </thead>
		  <tbody>
<?php
	//행, 현재페이지, 총페이지수, URL

	$page_size = 30;

	if ($page < 1) $page = 1;



	$where = "WHERE grade>=70";
	$where_add = ($sfl) ? " AND center='{$sfl}'" : "";
	$where_add .= ($stdt) ? " AND date_format(reg_date, '%Y-%m-%d') >= date_format('{$stdt}', '%Y-%m-%d') " : "";
	$where_add .= ($eddt) ? " AND date_format(reg_date, '%Y-%m-%d') <= date_format('{$eddt}', '%Y-%m-%d') " : "";
	$where_add .= ($idword) ? " AND (name like '%{$idword}%' or nanum_id like  '%{$idword}%' )" : "";

	$total_res = sql_fetch(" SELECT count(*) as cnt FROM video_education_info {$where} {$where_add}");
	$total_count = $total_res['cnt'];

	$total_page = (int)($total_count/$page_size) + ($total_count%$page_size==0 ? 0 : 1);
	$page_start = $page_size * ( $page - 1 );

	$vnum = $total_count - (($page-1) * $page_size);

	$sql = " select * from video_education_info {$where} {$where_add} order by idx desc limit $page_start, $page_size ";
	$result = sql_query($sql);

	$link = "sfl=$sfl&stdt=$stdt&eddt=$eddt&idword=$idword";

	$url = "/bbs/sub/sub_page_04_04.php";

	while($row = sql_fetch_array($result)){

		$reg_year = substr($row['reg_date'], 0, 4);
		$reg_month = substr($row['reg_date'], 4, 2);
		$reg_day = substr($row['reg_date'], 6, 2);

		$reg_date = $reg_year."-".$reg_month."-".$reg_day;

		$gubun = ($row['etc1']=="T") ? "청소년" : "성인";
//		$reg_date = $row['reg_date'];

/** < ?=substr($reg_date, 0, 4)? >. < ? =substr($reg_date, 4, 2) ? >. < ? =substr($reg_date, 6, 2) ?  > **/
?>

			<tr class="box">
				<td><?=$row['idx']?></td>
				<td><?=$gubun?></td>
			<td>
					<?
						
					if($row['kind_tp'] == '1')  echo "청소년";
					if($row['kind_tp']  == '2')  echo "청소년";
					if($row['kind_tp']  == '3')  echo "성인";
					if($row['kind_tp']  == '4')  echo "성인";
						
					?>
				</td>

				<td><?=$row['name']?></td>
				<td><?=$row['birthday']?></td>
				<td>전라남도 <?=$row['center']?></td>
				<td><?=$row['team_tp']?></td>
				<td><?=$row['team']?></td>
				<td><?=$row['phone']?></td>
				<td><?=strip_tags( $row['nanum_id'] )?></td>
				<td><?=$row['e_mail']?></td>
				<td><?=$reg_date?></td>
				<td><a href="/bbs/sub/sub_page_adm_edit.php?idx=<?=$row['idx']?>" class="border_btn">수정</a></td>
			</tr>

<?}?>
		  </tbody>
		</table>
		</div>
<nav class="pg_wrap">
	<span class="pg">
		<nav class="pg_wrap">
		<span class="pg">
		<?php echo get_paging($config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME']."?{$link}&amp;page="); ?>
		</span>
		</nav>	
	</span>
</nav>




  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->


<script>

	$("#stdt, #eddt").datepicker({
	//	showOn : "both",
	//	buttonImage: "button.png",

		showMonthAfterYear : true,
		showButtonPanel : true,
		changeMonth : true,
		changeYear : true,
		nextText : '다음 달',
		prevText : '이전 달',
		currentText : '오늘 날짜',
		closeText : '닫기',
		dateFormat : "yy-mm-dd",
		dayNames : ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'],
		dayNamesMin : ['일','월','화','수','목','금','토'],
		monthNames : ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		monthNamesShort : ['1','2','3','4','5','6','7','8','9','10','11','12']
	});



	//엑셀 다운로드
	function excelDown(){
		$('#mode').val('excelDown');
		$('#fsearch').attr('action','/bbs/sub/sub_page_adm_excel.php');
		$('#fsearch').attr('target','_blank');
		$('#fsearch').submit();
		$('#fsearch').attr('action','<?=$PHP_SELF?>');
		$('#mode').val('');
		$('#fsearch').attr('target','');
	}


</script>


<?php
include_once('./_tail.php');
?>
