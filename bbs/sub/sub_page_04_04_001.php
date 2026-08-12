<?php
if(!isset($_GET['idx'])){
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}

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

?>
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

<?php
	$sql = " select * from video_education_info where idx=". $_GET['idx'] ." limit 1";
	$result = sql_query($sql);
	$row = sql_fetch_array($result);
	$regdate =$row['reg_date'];

	$dateset = array();

	$hour = (int)substr($regdate, 8, 2);
	if($hour>12){
		$hour_str = "오후";
		$hour_time = ($hour - 12);
	}else{
		$hour_str = "오전";
		$hour_time = $hour;
	}
	$dateset[] = substr($regdate, 0, 4)."-".substr($regdate, 4, 2)."-".substr($regdate, 6, 2);
	$dateset[] = $hour_str;
	$dateset[] = $hour_time.":".substr($regdate, 10, 2).":".substr($regdate, 12, 2);
	$dateStr = implode(" ",$dateset);
?>
	 <!----//서브페이지 내용---->
<script>
	function printImage(idx){
		window.open("./print_image.html?idx="+idx, 'window팝업', 'width=1200, height=1100, menubar=no, status=no, toolbar=no');

	}
</script>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">온라인 인증현황</p></div><!----////타이틀---->
<div class="sub_table_wrap">
 <table class="table_t02">
		<colgroup>
			<col width="30%">
			<col width="*">
		</colgroup>
    <tbody class="text_left01">

      <tr>
        <th>이름 <span class="f_red">*</span></th>
        <td class="right"><?=$row['name']?></td>
      </tr>
      <tr>
        <th>생년월일 <span class="f_red">*</span></th>
        <td class="right"><?=$row['birthday']?></td>
      </tr>
      <tr>
        <th>연락처 <span class="f_red">*</span></th>
        <td class="right"><?=$row['phone']?></td>
      </tr>
      <tr>
        <th>1365자원봉사포털아이디 <span class="f_red">*</span></th>
        <td class="right"><?=$row['nanum_id']?></td>
      </tr>
      <tr>
        <th>소속 <span class="f_red">*</span></th>
        <td class="right"><?=$row['team']?></td>
      </tr>
	  <tr>
        <th>메일 <span class="f_red">*</span></th>
        <td class="right"><?=$row['e_mail']?></td>
      </tr>
      <tr>
        <th>작성일자</th>
        <td class="right"><?=$dateStr?> (IP : <?=$row['ip']?>)</td>
      </tr>
	  <tr>
        <th>점수</th>
        <td class="right"><span><?=(int)$row['grade']?></span> 점</td>
      </tr>
	  <tr>
        <th>10번항목 답변</th>
        <td class="right"><span><?=nl2br($row['etc2'])?></span></td>
      </tr>
	  <tr>
        <th>수료증</th>
        <td class="right"><p class="cont"><a onClick="printImage('<?=$row['idx']?>')" style="cursor:pointer;">[수료증 다운로드 <i class="fa fa-floppy-o" aria-hidden="true"></i> ]</a></p></td>


      </tr>
    </tbody>
  </table>
</div><!---sub_table_wrap--->
</div>
<div class="btn_submits">
			<a href="/bbs/sub/sub_page_04_04.php" class="btn_submit_right">목록으로</a>
		</div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end -->
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
