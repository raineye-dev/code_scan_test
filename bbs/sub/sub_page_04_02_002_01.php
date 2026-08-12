<?php
include_once('./_common.php');

// 청소년1 과정 1 / 2
// 002_01

if(!$is_member){
	alert('로그인이 필요합니다.');
}

// 청소년

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

	if(document.frm.SUV_N7.value.length < 10)
	{
		alert ("10번 항목의 10자 이상 작성하세요.");
		document.frm.SUV_N7.focus();
		return false;
	}

	check_answer = check_answer.join(',');
	totalGradeSend(check_answer);
}
function totalGradeSend(aStr){
	var answer = [1,1,4,2,3,4,1,4,1];
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
        <h2 class="page__title">청소년 1과정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">청소년 1과정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

	
	 <div class="member-step">
			<ol>
				<li class="step01"><span class="step">Step 1</span><span class="tit">영상교육</span></li>
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
				<li>30분이 지나면 0점 처리 또는 로그아웃 될 수 있습니다.</li>
			</ul>
		</div>


<form name="frm" action="./sub_page_04_03_004.php?idx=<?=$_GET['idx']?>" method="post">



<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">청소년 1과정</p></div><!----////타이틀---->
<script src="http://www.youtube.com/player_api"></script>
<div class="contents">
    <div id="playerLayer"></div>
		<p class="">영상출처 : KB라이프생명사회공헌재단 '전국중고생자원봉사대회'</p>
    <p class="movie_text alignC"> ※온라인 동영상을 끝까지 수강하시면 <span class="emph_orange">다음문제</span>로 넘어가실수 있습니다.</p>

<div class="survey_list">
<div class="survey_item mt01">
   <h3 class="sQ">1. 자원봉사란?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="1" class="blankChk1"> ① 서로 돕고 배려하는 사회를 만들기 위해 자발적으로 참여하여 아름다운 변화를 만들어 내는 것
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="2" class="blankChk1"> ② 학교 생활기록부에 봉사시간을 채우기 위한 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="3" class="blankChk1"> ③ 나의 여유로운 시간에 취미로 하는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_0" value="4" class="blankChk1"> ④ 학교나 부모님의 강요로 어쩔 수 없이 하는 활동
		   </label>
	   </li>
	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">2. 자원봉사의 특성이 아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="1" class="blankChk1"> ① 사익성 : 타인을 배려하는 마음을 가지지만 사익을 위해 하는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="2" class="blankChk1"> ② 공공성 : 공공의 이익을 위해 하는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="3" class="blankChk1"> ③ 자발성 : 스스로 선택해서 하는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_1" value="4" class="blankChk1"> ④ 무보수성 : 대가를 기대하지 않고 하는 활동
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">3. 자원봉사자의 기본자세가  아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="1" class="blankChk1"> ① 상황에 적합한 복장을 갖추고 참여하기
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="2" class="blankChk1"> ② 시간약속 지키지
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="3" class="blankChk1"> ③ 활동 대상과 상황을 파악하고 준비하기
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_2" value="4" class="blankChk1"> ④ 자원봉사는 희생정신이므로 수혜자에게 무조건 희생하기
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">4. 1년 365일 자원봉사 하기 좋은 날을 뜻하는 자원봉사 포털 시스템은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="1"  class="blankChk1"> ① VMS
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="2" class="blankChk1"> ② 1365
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="3" class="blankChk1"> ③ DOVOL 
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_3" value="4" class="blankChk1"> ④ 문화품앗e
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">5. 자원봉사를 통한 재능 발견의 예시로 맞지 않는 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="1"  class="blankChk1"> ① 벽화그리기를 통한 미술소질 발견
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="2" class="blankChk1"> ② 공부방지도를 통한 선생님이란 꿈을 가짐
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="3" class="blankChk1"> ③ 좋아하는 사람과의 자원봉사를 통한 연애의 발견 
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_4" value="4" class="blankChk1"> ④ 공연봉사를 통한 음악적 재능 발견
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

 <div class="survey_item mt02">
   <h3 class="sQ">6. 일상에서 손쉽게 참여할 수 있는 자원봉사 유형이 아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="1"  class="blankChk1"> ① 공익캠페인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="2" class="blankChk1"> ② 정서지원활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="3" class="blankChk1"> ③ 공공재 모니터링
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_5" value="4" class="blankChk1"> ④ 해외봉사활동
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">7. 영화감독이 꿈인 하규빈 학생은 자신의 재능을 활용하여 영상미디어 교육 봉사를 했습니다. 규빈이의 선한 영향력을 받은 사람은 누구인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="1"  class="blankChk1"> ① 전현민
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="2" class="blankChk1"> ② 이효리
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="3" class="blankChk1"> ③ 정동원
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_6" value="4" class="blankChk1"> ④ 이제훈
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

 <div class="survey_item mt02">
   <h3 class="sQ">8. 홍현준 학생이 디자이너라는 진로를 꿈꾸게 해준 동아리 활동은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="1"  class="blankChk1"> ① 두드림
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="2" class="blankChk1"> ② 자몽
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="3" class="blankChk1"> ③ 해다미
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_7" value="4" class="blankChk1"> ④ MOV
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">9.‘골목대장’동아리는 우리 마을의 크고 작은 문제를 해결하는 활동을 하고 있습니다. 활동을 시작하게 된 계기는 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="1"  class="blankChk1"> ① 같은 지역아동센터에서 활동했던 민지를 보고
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="2" class="blankChk1"> ② 청소년 활동에 관심이 많으신 부모님 때문에
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="3" class="blankChk1"> ③ 학교선생님이 봉사활동을 해야 한다고 해서
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_S1_8" value="4" class="blankChk1"> ④ 친구들에게 멋있게 보이고 싶어서
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

<div class="survey_item  mt02">
   <h3 class="sQ">10. 자원봉사 교육을 시청한 후 소감이나 느낀 점을 서술해주세요.</h3>
   <div class="wrap_input">
	   <label for="sA_6_text" class="hide blankChk15">주관식 답변 입력란</label>
	  <textarea  name="SUV_N7" class="required" spellcheck="true" rows="3" cols="50" data-sm-textarea=""  type="text" style="margin: 0px; width:100%; height:180px; padding:10px;"></textarea>
	  <p>10자 이상 입력해주세요.</p>
   </div>
</div>
</div>
</div>

      



   <div class="btn_wrap alignC">
		<div class="btn_submits mbtn-wrap commit_btn" style="visibility: hidden;">
		  <a onFocus="this.blur();" href="javascript:;" onClick="javascript:history.back();" class="lg-btn"><span>취소합니다</span></a> 
		  <a onFocus="this.blur();" href="javascript:;" onClick="answerCheck();" class="ldp-btn go"><span>제출하기</span></a> 
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
            videoId: 'WK03Y7NlceQ',
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
