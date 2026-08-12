<?php
include_once('./_common.php');

if (!$is_member) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}

if (!$idx) {  
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
  <div class="body_wrap layout" style="max-width:1400px; width:100%;"> 
<!----/// 내용---->
 


<?
		$result = sql_fetch($query);
		$cnt = $result['cnt'] == null ? '0' : $result['cnt'];

	$where = "WHERE idx = '{$idx}'";

	$sql = " select * from video_education_info {$where}   ";
	$row = sql_fetch($sql);

		$reg_year = substr($row['reg_date'], 0, 4);
		$reg_month = substr($row['reg_date'], 4, 2);
		$reg_day = substr($row['reg_date'], 6, 2);

		$reg_date = $reg_year."-".$reg_month."-".$reg_day;

		$gubun = ($row['etc1']=="T") ? "청소년" : "성인";
//		$reg_date = $row['reg_date'];

/** < ?=substr($reg_date, 0, 4)? >. < ? =substr($reg_date, 4, 2) ? >. < ? =substr($reg_date, 6, 2) ?  > **/


		  
			  
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

  
	<div class="sub_table_wrap wrap_boxadm">
	<form action="/bbs/sub/sub_page_adm_edit_proc.php" method="post" name="frm_edit" id="frm_edit">
	<input type="hidden" id="idx" name="idx" value="<?=$row['idx']?>" />
		<table class="table_t02 wrap_boxadm_table">
		  <caption>
		  봉사 목록 뷰
		  </caption>
		  <thead>
			<tr>
			  <th width="200px">번호</th>
			  <td style="text-align:left;"><?=$row['idx']?></td>
			</tr>
			<tr>
			  <th width="5%">분류</th>
			  <td style="text-align:left;">
				<select id="etc1" name="etc1" style="width:100px">
					<option value="T" <?if($row['etc1'] == 'T')  echo " selected='selected' ";?> >청소년</option>
					<option value="A" <?if($row['etc1'] == 'A')  echo " selected='selected' ";?> >성인</option>
				</select>

				 <input type="hidden" id="kind_tp" name="kind_tp" style="display:none;" value="5" />
				 
			</tr>
			
			<!-- 
			<tr>
			  <th width="7%">교육구분</th>
			  	<td style="text-align:left;">
					
					<select id="kind_tp" name="kind_tp" style="width:100px">
						<option value="1" <?if($row['kind_tp'] == '1')  echo " selected='selected' ";?> >청소년</option>
						<option value="2" <?if($row['kind_tp'] == '2')  echo " selected='selected' ";?>>청소년</option>
						<option value="3" <?if($row['kind_tp'] == '3')  echo " selected='selected' ";?>>성인</option>
						<option value="4" <?if($row['kind_tp'] == '4')  echo " selected='selected' ";?>>성인</option>
					</select>
			</td>
			</tr>
			 -->
			
			<tr>
			  <th >이름</th>
			  <td style="text-align:left;">
	  			  <input type="text" id="NfromText3" name="NfromText3" style="width:200px" value="<?=$row['name']?>" />
				</td>
			</tr>
			<tr>
			  <th width="8%">생년월일</th>
			  <td style="text-align:left;">
				    <input type="text" id="birthday" name="birthday" style="width:200px" value="<?=$row['birthday']?>" />
			</td>
			</tr>


			<tr>
			  <th width="9%">소속센터</th>
			  <td style="text-align:left;">전라남도
			  
			  
				  <select name="center" id="center" style="width:100px" >
						<?php 
							foreach($arr_center as $v){
							$selected = ($row['center'] == $v) ? "selected" : "";
						?>
						<option value='<?=$v?>' <?=$selected?>><?=$v?></option>
						<?}?>
					</select>
	
				</td>
			</tr>

			<tr>
			  <th width="12%">소속구분</th>
			  <td style="text-align:left;">
			 		<input type="radio" value="공무원" id="team_tp_4" name="team_tp" class="inbox" <?if($row['team_tp'] == '공무원'){?>checked="checked"<?}?>/> <label for="team_tp_4">공무원</label>&nbsp;&nbsp;&nbsp;


					<input type="radio" value="공공기관" id="team_tp_5" name="team_tp" class="inbox" <?if($row['team_tp'] == '공공기관'){?>checked="checked"<?}?>/> <label for="team_tp_5">공공기관</label>&nbsp;&nbsp;&nbsp;

					<input type="radio" value="민간단체" id="team_tp_6" name="team_tp" class="inbox" <?if($row['team_tp'] == '민간단체'){?>checked="checked"<?}?>/> <label for="team_tp_6">민간단체</label>&nbsp;&nbsp;&nbsp;

					<input type="radio" value="대학생" id="team_tp_7" name="team_tp" class="inbox" <?if($row['team_tp'] == '대학생'){?>checked="checked"<?}?>/> <label for="team_tp_7">대학생</label>&nbsp;&nbsp;&nbsp;

					<input type="radio" value="기타(개인)" id="team_tp_8" name="team_tp" class="inbox" <?if($row['team_tp'] == '기타(개인)'){?>checked="checked"<?}?>/> <label for="team_tp_8">기타(개인)</label>&nbsp;&nbsp;&nbsp;

				</td>
			</tr>


			<tr>
			  <th width="12%">소속</th>
			  <td style="text-align:left;">
			  <input type="text" id="team" name="team" style="width:200px" value="<?=$row['team']?>" />
				</td>
			</tr>
			<tr>
			  <th width="10%">연락처</th>
			  <td style="text-align:left;">
			   <input type="text" id="phone" name="phone" style="width:200px" value="<?=$row['phone']?>" />
			  </td>
			</tr>
			<tr>


			  <th width="8%">1365 아이디</th>
			  <td style="text-align:left;">
				<input type="text" id="nanum_id" name="nanum_id" style="width:200px" value="<?=strip_tags( $row['nanum_id'] )?>" />
			</td>
			</tr>
			<tr>
			  <th width="15%">메일</th>
			  <td style="text-align:left;">
				  	<input type="text" id="e_mail" name="e_mail" style="width:200px" value="<?=$row['e_mail']?>" />
			  </td>
			</tr>
			<tr>
			  <th width="8%">등록일</th>
			  <td style="text-align:left;"><?=$reg_date?></td>
			</tr>
		  </thead>
		  <tbody>

		  </tbody>
		</table>

			<div style="text-align:center;" class="board_search ">	
				<input type="button" value="수정하기" class="btn_submit left_btns" onclick="$('#frm_edit').submit();"/> &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="button" value="목록" class="btn_submit" onclick="location.href='/bbs/sub/sub_page_adm.php'"/> 
			</div>
		</form>
		</div>



  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->




<?php
include_once('./_tail.php');
?>
