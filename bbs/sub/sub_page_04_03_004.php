<?php
include_once('./_common.php');

if(!isset($_GET['idx']) || !isset($_POST['answer_list'])){
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
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 온라인 영상교육";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

$sql = " update video_education_info 
			set grade ='".$_POST['total_score']."',
			answer ='".$_POST['answer_list']."',
			etc2 = '". $_POST['SUV_N7'] ."' where idx='". $_GET['idx'] ."'";
		sql_query($sql);



$sql = " select idx, name, birthday, reg_date, center , kind_tp , team_tp,   team_idx,   team  from video_education_info where idx='". $_GET['idx'] ."' limit 1";
$result = sql_query($sql);
$row = sql_fetch_array($result);


?>
<script src="/bbs/js/printjs/printThis.js"></script>
<script type="text/javascript">

	function checkPrintArea(){
		
		$('#printme').printThis({

			debug: false,               // show the iframe for debugging
			importCSS: true,            // import parent page css
			importStyle: true,         // import style tags
			printContainer: true,       // print outer container/$.selector
			loadCSS: "/theme/J_basic/css/sub.css",                // path to additional css file - use an array [] for multiple
			pageTitle: "",              // add title to print page
			/*
			removeInline: true,        // remove inline styles from print elements
			removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
			printDelay: 333,            // variable print delay
			header: null,               // prefix to html
			footer: null,               // postfix to html
			base: true,                // preserve the BASE tag or accept a string for the URL
			formValues: true,           // preserve input/form values
			canvas: false,              // copy canvas content
			//doctypeString: '13123123',       // enter a different doctype for older markup
			removeScripts: true,       // remove script tags from print content
			copyTagClasses: true,      // copy classes from the html & body tag
			beforePrintEvent: null,     // function for printEvent in iframe
			beforePrint: null,          // function called before iframe is filled
			afterPrint: null            // function called before iframe is removed
			*/

		});
		
	}

	function email_send(idx){
		window.open("./email_send.php?idx="+idx, 'window팝업', 'width=1200, height=1100, menubar=no, status=no, toolbar=no');

	}

</script>
<div id="body_layout">
  <div class="body_wrap layout"> 
  
   <?include G5_THEME_PATH."/sub_left_04.php"?>


        <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title"><?
						if($row['kind_tp'] == '1'){
							echo '청소년 과정';
						}else if($row['kind_tp'] == '2'){
							echo '청소년 과정';
						}else if($row['kind_tp'] == '3'){
							echo '성인 과정';
						}else if($row['kind_tp'] == '4'){
							echo '성인 과정';
						}
					?> 영상교육</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">
				<?
						if($row['kind_tp'] == '1'){
							echo '청소년 과정';
						}else if($row['kind_tp'] == '2'){
							echo '청소년 과정';
						}else if($row['kind_tp'] == '3'){
							echo '성인 과정';
						}else if($row['kind_tp'] == '4'){
							echo '성인 과정';
						}
					?>
			
			영상교육</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


		<div class="member-step">
			<ol>
				<li class="step01"><span class="step">Step 1</span><span class="tit">영상교육</span></li>
				<li class="step02"><span class="step">Step 2</span><span class="tit">정보입력</span></li>
				<li class="step03"><span class="step">Step 3</span><span class="tit">동영상교육</span></li>
				<li class="step04  active"><span class="step">Step 4</span><span class="tit">완료</span></li>
			</ol>
		</div>
		  <div class="cont_box05">
			<div class="Completion">
			<span class="icon"></span>
			<h4 class="sb_text">
				<div class="sb_text">당신의 점수는 <span class="f_red"><?=$_POST['total_score']?>점</span> 입니다.</div> 
				<?if($_POST['total_score']>=70){?>
				<div class="sb_texts leave-top">전라남도자원봉사센터 온라인 교육에 참여해주셔서 감사합니다.</div>
			</h4>
			<?}else{?>
				<div class="sb_texts">
					<div class="leave-top">합격 점수 70점을 달성해야 합니다. <br/>다시풀기 버튼을 클릭하면 문제풀이 페이지로 돌아갑니다.</div>
					<div class=" mbtn-wrap"><a href="/bbs/sub/sub_page_04_02_006.php" class="lg-btn"><span>취소하기</span></a>
						
						<?if($row['kind_tp'] == '1'){?>
							<a href="./sub_page_04_02_002_01.php?idx=<?=$_GET['idx']?>&edumov=1"  class="ldp-btn go"><span>다시풀기</span></a>
						<?}else if($row['kind_tp'] == '2'){?>
							<a href="./sub_page_04_02_002_02.php?idx=<?=$_GET['idx']?>&edumov=2"  class="ldp-btn go"><span>다시풀기</span></a>
						<?}else if($row['kind_tp'] == '3'){?>
							<a href="./sub_page_04_03_003.php?idx=<?=$_GET['idx']?>&edumov=3"  class="ldp-btn go"><span>다시풀기</span></a>
						<?}else if($row['kind_tp'] == '4'){?>
							<a href="./sub_page_04_03_003_04.php?idx=<?=$_GET['idx']?>&edumov=4"  class="ldp-btn go"><span>다시풀기</span></a>
						<?}?>

					
					</div>
				</div>
			<?}?>
			 </div>

		<?	

			if($_POST['total_score']>=70){
				$sql = " select idx, name, birthday, reg_date, center , kind_tp , team_tp,   team_idx,   team  from video_education_info where idx='". $_GET['idx'] ."' limit 1";
				$result = sql_query($sql);
				$row = sql_fetch_array($result);
				
				$birthday = str_replace("-", "", $row['birthday']);

				$reg_year = substr($row['reg_date'], 0, 4);
				$reg_month = substr($row['reg_date'], 4, 2);
				$reg_day = substr($row['reg_date'], 6, 2);

				$reg_date = $reg_year.". ".$reg_month.". ".$reg_day;



		?>
		<div class="Online_bg mobile_no" id="printme">
		<div class="" style="text-align:center;"><img src="/bbs/sub/img/completion.jpg" alt="" style="width:698px; height:977px;"></div>
			<div class="Online_number"><?=$row['idx']?></div>
			<div class="Online_list">
				<ul>
					<li class=""><?=$row['name']?></li>
					<li class=""><?=substr($birthday, 0, 4)?>. <?=substr($birthday, 4, 2)?>. <?=substr($birthday, 6, 2)?>.</li>
					<li class="">전라남도 <?=$row['center']?></li>
					<li class=""><?=$reg_year?> 온라인 자원봉사교육 <?
						if($row['kind_tp'] == '1'){
							echo '청소년 과정';
						}else if($row['kind_tp'] == '2'){
							echo '청소년 과정';
						}else if($row['kind_tp'] == '3'){
							echo '성인 과정';
						}else if($row['kind_tp'] == '4'){
							echo '성인 과정';
						}
					?> </li>
					
					<li class=""><?=$reg_date?>.(1시간)</li>
				</ul>
			</div>
			<div class="Online_day"><span><?=$reg_year?></span>년 <span><?=$reg_month?></span>월 <span><?=$reg_day?></span>일</div>
		</div>
</div>
  <div class="btn_submits mbtn-wrap"> 
  <a href="/bbs/sub/sub_page_09_01.php?idx=<?=$row['idx']?>"  class=" ldp-btn go"><span>수강내역 바로가기</span></a>
   <!-- <a href="https://docs.google.com/forms/d/1nl0evAIagkcN12zAfF3xVG7tFNBNrmoNIzONcRPJYqE/edit" class=" ldp-btn go mobile_no red" target="_blank"><span>교육만족도 설문조사 하기</span></a> -->
  <!-- <a onFocus="this.blur();" href="javascript:;" onClick="email_send('<?=$_GET['idx']?>')" class=" lg-btn"><span>이메일보내기</span></a> 
  <input type="button" value="출력하기" class="btn_submit_right" onclick="javascript:printIt(document.getElementById('printme').innerHTML)" />
  <a onFocus="this.blur();" href="javascript:;" onClick="checkPrintArea();" class=" ldp-btn go mobile_no"><span>출력하기</span></a>  -->
  </div>
  <div class="" style="font-weight:600; color:#ff3000; margin-top:15px;">※ 구글폼을 사용하는 프로그램으로 관공서 및 보안프로그램 사용기관에서는 설문조사를 자제해주시기 바랍니다.</div>
<?}?>
	 


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->


<?php
include_once('./_tail.php');
?>
