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
	var itemsNum = 10;
	var check_answer = [];

	for(i=0; i<itemsNum; i++){
		check_answer[i] = $(":input:radio[name=SUV_N1_"+i+"]:checked").val();

		if(check_answer[i]==undefined){
			alert('문제의 정답을 빠짐없이 선택해 주세요.');
			return false;
		}
	}
	/*
	if(document.frm.SUV_N7.value == "")
	{
		alert ("10번 항목의 답변을 작성하세요.");
		document.frm.SUV_N7.focus();
		return false;
	}

	if(document.frm.SUV_N7.value.length < 2)
	{
	alert ("10번 항목의 2글자 이상 작성하세요.");
		document.frm.SUV_N7.focus();
		return false;
	}
   */
	check_answer = check_answer.join(',');
	totalGradeSend(check_answer);
}
function totalGradeSend(aStr){
	var answer = [2,4,4,1,3,1,2,3,1,3];    
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
	
	//total = total+10; //주관식이 있을경우 그냥 10점 점수 준다.

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
        <h2 class="page__title">성인 과정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">성인 과정</a></li>
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
			</ul>
		</div>

<form name="frm" action="./sub_page_04_03_004.php?idx=<?=$_GET['idx']?>" method="post">

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">성인 과정</p></div><!----////타이틀---->


<script src="//www.youtube.com/player_api"></script>
<div class="contents">
    <div id="playerLayer"></div>
	 <p class="movie_text alignC">✅ <span style="color:#f00; font-weight:bold; font-size:19px;">[필수사항] 해당 페이지에서 교육 영상을 시청해 주세요. 외부 링크(예: 유튜브)로 연결하여 시청할 경우, 이수 확인이 불가합니다.</span></p>
    <p class="movie_text alignC"> * 온라인 동영상을(42분 04초) 끝까지 수강하시면 <span class="emph_orange">다음과정</span>으로 넘어가실수 있습니다.</p>


<div class="survey_list">
<div class="survey_item mt01">
   <h3 class="sQ">1. 자원봉사의 정의로 가장 적합한 것은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="1" class="blankChk1"> ① 금전적 보상을 목적으로 하는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="2" class="blankChk1"> ② 대가 없이 자발적으로 타인과 지역사회를 돕는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="3" class="blankChk1"> ③ 누군가의 강요와 지시로 이루어지는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="4" class="blankChk1"> ④ 친목 도모를 위한 사적 모임

		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">2. 자원봉사의 의미로 볼 수 없는 것은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="1" class="blankChk1"> ① 지역 사회 문제 해결을 위한 동력
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="2" class="blankChk1"> ② 시민 참여의 통로, 개인 성장의 기회
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="3" class="blankChk1"> ③ 어려운 이웃을 돕는 자선 활동

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="4" class="blankChk1"> ④ 경쟁을 통해 성과를 내는 것
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">3. 자원봉사의 특성이 아닌 것은 무엇인가요?</h3>

   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="1" class="blankChk1"> ① 자발성
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="2" class="blankChk1"> ② 무보수성
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="3" class="blankChk1"> ③ 공익성

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="4" class="blankChk1"> ④ 수익성
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">4. 자원봉사의 공익성은 어떤 의미를 가지나요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1" class="blankChk1"> ① 사회 전체의 이익을 추구하는 활동이다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 특정 집단만을 위한 활동이다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 정성을 가지고 자원해서 하는 활동이다.

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 법적 강제성을 지닌다.
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
  <div class="survey_item mt02">
   <h3 class="sQ">5. 자원봉사를 통해 얻을 수 있는 가치는 무엇인가요?</h3>
   
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_4" value="1" class="blankChk1"> ① 사회적 고립 강화
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_4" value="2" class="blankChk1"> ② 지역사회의 단절 심화
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_4" value="3" class="blankChk1"> ③ 심리적 만족감과 자존감 향상

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_4" value="4" class="blankChk1"> ④ 개인의 경제적 이익 극대화
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">6. 올바른 자원봉사자의 자세로 적합하지 않은 것은?</h3>

   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_5" value="1" class="blankChk1"> ① 활동 중 알게 된 개인정보를 주변에 공유하는 자세
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_5" value="2" class="blankChk1"> ② 시간 약속을 지키고, 성실하게 임하는 자세
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_5" value="3" class="blankChk1"> ③ 지속적으로 배우고 발전하려는 자세

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_5" value="4" class="blankChk1"> ④ 다른 봉사자들과 소통하고 협력하는 자세
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

   <div class="survey_item mt02">
   <h3 class="sQ">7. 자원봉사 활동범위에 해당하지 않는 것은 무엇인가요?</h3>

   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_6" value="1" class="blankChk1"> ① 장애인 권리 옹호 캠페인, 청소년 멘토링
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_6" value="2" class="blankChk1"> ② 가족 간병, 친인척 업무 지원
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_6" value="3" class="blankChk1"> ③ 인권 캠페인, 학교 폭력 예방 캠페인

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_6" value="4" class="blankChk1"> ④ 독거노인 도시락 배달, 말벗 서비스
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
   <div class="survey_item mt02">
   <h3 class="sQ">8. 우리나라 자원봉사 활동의 체계적인 관리를 위해 운영되는 대표적인 시스템은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_7" value="1" class="blankChk1"> ① 정부24
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_7" value="2" class="blankChk1"> ② 홈텍스
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_7" value="3" class="blankChk1"> ③ 1365 자원봉사포털

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_7" value="4" class="blankChk1"> ④ 워크넷
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->

  <div class="survey_item mt02">
   <h3 class="sQ">9. 1365 포털을 통해 자원봉사활동 중 발생할 수 있는 사고위험으로부터 자원봉사자를 보호하기 위한 제도는 무엇인가요?</h3>
  
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_8" value="1" class="blankChk1"> ① 자원봉사 종합보험
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_8" value="2" class="blankChk1"> ② 국민연금
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_8" value="3" class="blankChk1"> ③ 실업급여

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_8" value="4" class="blankChk1"> ④ 산재보험
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->


 <div class="survey_item mt02">
   <h3 class="sQ">10. 아래에서 설명하는 자원봉사의 효과는 무엇인가요?</h3>
   <div class="quest_box">다른 사람을 돕는 이타적인 행동이 개인의 건강과 행복에도 긍정적인 영향을 미친다는 심리학적 개념</div>  
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_9" value="1" class="blankChk1"> ① 호손 효과
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_9" value="2" class="blankChk1"> ② 링겔만 효과
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_9" value="3" class="blankChk1"> ③ 마더 테레사 효과

		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_9" value="4" class="blankChk1"> ④ 플라세보 효과
	   </li>	   
   </ul>
 </div><!----////survey_item---->








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
            videoId: 'eWRvRYaomMA',
            playerVars: {
                'autoplay': 0, // 자동실행여부
                'controls': 0, // 재생컨트롤 노출여부 1 0
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
/*
function getTest(){
	alert(player.getCurrentTime());

}
*/

$(function(){
	onYouTubePlayerAPIReady();
});
</script>


<!-- <input type="button" value="sdsd" onclick="getTest()"/> -->




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

	<input type="hidden" id="total_score" name="total_score" value=0>
	<input type="hidden" id="answer_list" name="answer_list">
</form>



<?php
include_once('./_tail.php');
?>
