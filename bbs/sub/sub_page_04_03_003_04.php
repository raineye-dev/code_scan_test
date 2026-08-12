<?php
include_once('./_common.php');

if(!isset($_GET['idx'])){
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
?>
<script>
function answerCheck(){
	var itemsNum = 9;
	var check_answer = [];

	for(i=0; i<itemsNum; i++){
		check_answer[i] = $(":input:radio[name=SUV_S1_"+i+"]:checked").val();

		if(check_answer[i]==undefined){
			alert('문제의 정답을 빠짐없이 선택해 주세요.');
			return false;
		}
	}
	if(document.frm.SUV_N7.value == "")
	{
		alert ("10번 항목의 답변을 작성하세요.");
		document.frm.SUV_N7.focus();
		return false;
	}

	//if(document.frm.SUV_N7.value.length < 10)
	//{
		//alert ("10번 항목의 10자 이상 작성하세요.");
		//document.frm.SUV_N7.focus();
		//return false;
//	}

	check_answer = check_answer.join(',');
	totalGradeSend(check_answer);
}
function totalGradeSend(aStr){
	var answer = [2,3,3,2,1,3,1,1,4];
	var totalAnswer = aStr;
	var st = 0;
	var total = 0;
	answerStr = totalAnswer.split(',');
	if(answer.length != answerStr.length){
		alert('죄송합니다. 시스템 오류로 채점이 정상적으로 이루어지지 않았습니다.');
		return false;
	}
	for(i=0; i<answer.length; i++){
		if(answer[i]==answerStr[i]){
			if(i == 0) {st = 10;}
			else {st = 10;}
		}else{
			st = 0;
		}
		total = total + st;
	}
	
	total = total+10;

	$("#total_score").val(total);
	$("#answer_list").val(totalAnswer);
	document.frm.submit();
}
</script>


<div id="body_layout">
  <div class="body_wrap layout"> 
  
   <?include G5_THEME_PATH."/sub_left_04.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">성인 2과정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">성인 2과정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
     

 <div class="member-step">
			<ol>
				<li class="step01"><span class="step">Step 1</span><span class="tit">교육안내</span></li>
				<li class="step02"><span class="step">Step 2</span><span class="tit">정보입력</span></li>
				<li class="step03 active"><span class="step">Step 3</span><span class="tit">동영상교육</span></li>
				<li class="step04"><span class="step">Step 4</span><span class="tit">완료</span></li>
			</ol>
		</div>



<div class="allim-list">
			<p class="tit">꼭! 읽어주세요.</p>
			<ul>
				<li>70점 이상이어야 교육이 수료됩니다.</li>
				<li>문제풀이는 합격할 때까지 반복 가능합니다.</li>
				<li>일정시간 이상 사용하지 않을 시 0점처리 또는 로그아웃 될 수 있습니다.</li>
				<li class="lineno">※ 자원봉사 교육영상은 유튜브 영상을 활용하고 있습니다. 영상이 재생되지 않을 경우 모바일로 교육을 진행해 주시기 바랍니다.</li>
			</ul>
		</div>

<form name="frm" action="./sub_page_04_03_004.php?idx=<?=$_GET['idx']?>" method="post">


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">성인 2과정</p></div><!----////타이틀---->


<script src="http://www.youtube.com/player_api"></script>
<div class="contents">
    <div id="playerLayer"></div>
    <p class="movie_text alignC"> ※온라인 동영상을 끝까지 수강하시면 <span class="emph_orange">제출로</span>로 넘어가실수 있습니다.</p>

<div class="survey_list">


  <div class="survey_item mt02">
   <h3 class="sQ">1. 행정안전부에서 운영하는 사이트로 자원봉사 활동처 등 정보 검색부터 자원봉사 시간 인증까지 원스톱(One-stop) 서비스를 제공하는  이 사이트는 ?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="1" class="blankChk1"> ① VMS

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="2" class="blankChk1"> ② 1365자원봉사포털
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="3" class="blankChk1"> ③ DOVOL
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="4" class="blankChk1"> ④ 문화품앗e
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->



<div class="survey_item mt02">
   <h3 class="sQ">2. 자원봉사활동 기본법 제19조 및 동법시행령에 따라 자원봉사 진흥을 위해 전국 광역시도 및 시·군·구 마다 설치되어 있으며, 자원봉사활동을 지원하는 역할을 하는 기관은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="1" class="blankChk1"> ① 사회복지재단
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="2" class="blankChk1"> ② 정보문화산업진흥원

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="3" class="blankChk1"> ③ 자원봉사센터
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="4" class="blankChk1"> ④ 한국장학재단
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 


<div class="survey_item mt02">
   <h3 class="sQ">3. 일상에서 손쉽게 참여할 수 있는 자원봉사 유형이 아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="1" class="blankChk1"> ① 공익캠페인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="2" class="blankChk1"> ② 정서지원활동

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="3" class="blankChk1"> ③ 해외봉사활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="4" class="blankChk1"> ④ 공공재 모니터링
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 




<div class="survey_item mt02">
   <h3 class="sQ">4. 자원봉사를 실천하는 과정의 3가지로 ‘계획-실행-성찰과 반영’이라는 뜻의 영어 약자는?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="1" class="blankChk1"> ① A(Action)-R(Reflection)-P(Plan)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="2" class="blankChk1"> ② P(Plan)-A(Action)-R(Reflection)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="3" class="blankChk1"> ③ R(Reflection)-A(Action)-P(Plan)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="4" class="blankChk1"> ④ P(Plan)-R(Reflection)-A(Action)
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

 <div class="survey_item mt02">
   <h3 class="sQ">5. 자원봉사 실천과정 중, ‘계획(Plan)’ 단계에 대한 설명으로 바르지 않은 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="1" class="blankChk1"> ① 목표를 논의 후 어떻게 실현할 것인지 목적을 논의한다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="2" class="blankChk1"> ② 목적 : 봉사활동 이유와 무엇을 변화시키기 위한 것인지 생각하기
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="3" class="blankChk1"> ③ 목표 : 목적을 위해 어떤 활동을 할 것인지 생각하기
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="4" class="blankChk1"> ④목적을 논의할 때에는 기획을 해야 하고, 목표를 논의할 때에는 계획수립을 해야 한다.
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">6. 자원봉사 실천과정 중, ‘실행(Action)’ 단계에 대한 설명으로 바르지 않은 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="1" class="blankChk1"> ① 목적과 목표가 잘 설정되었다면 실행(Action)은 쉬워진다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="2" class="blankChk1"> ② 실행(Action)은 천천히, 꾸준히 하는 것이 중요하다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="3" class="blankChk1"> ③ 실패와 시행착오를 겪을 때는 당장 실행(Action)을 멈춰야 한다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="4" class="blankChk1"> ④ 실패나 시행착오도 중요한 경험이 되며, 노하우를 축적하는 기회로 삼는다.
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

   <div class="survey_item mt02">
   <h3 class="sQ">7. 자원봉사 실천과정에 대한 설명이 아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="1" class="blankChk1"> ① 계획단계 : 계획은 많을수록 좋으므로 막연하게 방대한 계획을 세운다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="2" class="blankChk1"> ② 계획단계 : 꼼꼼한 현장조사와 준비가 중요하다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="3" class="blankChk1"> ③ 실천단계 : 자원봉사 계획을 현장의 상황에 맞게 실천한다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="4" class="blankChk1"> ④ 성찰과 반영단계 : 참여자들이 질문을 통해 활동을 성찰하고 평가한다.
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

 
   <div class="survey_item mt02">
   <h3 class="sQ">8. 성찰과 반영단계(Reflection)에서 질문을 통한 활동평가가 중요하다. 성찰과 반영을 위한 질문 중 바르지 않은 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="1" class="blankChk1"> ① 그만해야 할 것이 무엇인가?
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="2" class="blankChk1"> ② 잘됐으니 계속해야 할 것이 무엇인가?
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="3" class="blankChk1"> ③ 새롭게 보완해야 할 것은 무엇인가?
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="4" class="blankChk1"> ④ 관심과 인정을 받을 수 있는 활동은 무엇이 있을까?
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">9. 아래에서 설명하는 비대면 자원봉사활동은 무엇인가요?</h3>
   <div class="quest_box">비대면 자원봉사 활성화를 위해 언제, 어디서나 활동에 ‘바로’참여할 수 있도록 전라남도자원봉사센터에서 구축한 비대면 자원봉사 모바일 어플리케이션입니다.</div>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="1" class="blankChk1"> ① 안녕캠페인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="2" class="blankChk1"> ② 재능봉사
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="3" class="blankChk1"> ③ 볼런투어
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="4" class="blankChk1"> ④ 바로온봉사
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 




<div class="survey_item  mt02">
   <h3 class="sQ">10. 탄소중립을 위해 내가 실천하고 있는 봉사활동은 무엇이 있나요?</h3>        
   <div class="wrap_input">       
	   <label for="sA_6_text" class="hide blankChk15">주관식 답변 입력란</label>
	  <!--  <input type="text" name="SUV_N7" value="" maxlength="200" class="required">   -->
	    <textarea  name="SUV_N7" class="required" spellcheck="true" rows="3" cols="50" data-sm-textarea="" style="margin: 0px; width:100%; height:180px; padding:10px;"></textarea>
		<!-- <p>10자 이상 입력해주세요.</p> -->
   </div>
</div>
</div>

   <div class="btn_wrap alignC">
		<div class="btn_submits mbtn-wrap commit_btn" style="visibility: hidden;">
		  <a onFocus="this.blur();" href="javascript:;" onClick="javascript:history.back();" class="lg-btn"><span>취소합니다</span></a> 
		  <a onFocus="this.blur();" href="javascript:;" onClick="answerCheck();" class="ldp-btn go"><span>제출합니다</span></a> 
		  </div>
	</div>





</div>

<script type="text/javascript">
var player;

// 유튜브 플레이어를 생성한다.
function onYouTubePlayerAPIReady() {
    try {
        player = new YT.Player('playerLayer', {
            height: '500',
            width: '100%',
            videoId: 'AyGiSzRjmuk',
            playerVars: {
                'autoplay': 0, // 자동실행여부
                'controls': 0, // 재생컨트롤 노출여부
                'autohide': 0, // 재생컨트롤이 자동으로 사라질지의 여부
                'rel': 0, // 동영상 재생완료 후 유사동영상 노출여부
                'wmode': 'transparent'
            },
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    } catch (e) {}
}

// 동영상의 재생이 완료되었을 때 호출됨
function onPlayerStateChange(event) {
    if (event.data === 0) {
        document.getElementsByClassName("commit_btn")[0].style.visibility = "visible"
    }
}

$(function(){
	onYouTubePlayerAPIReady();
});
</script>




 






	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

	<input type="hidden" id="total_score" name="total_score" value=0>
	<input type="hidden" id="answer_list" name="answer_list">

</form>



<?php
include_once('./_tail.php');
?>
