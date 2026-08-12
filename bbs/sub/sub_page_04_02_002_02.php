<?php
include_once('./_common.php');


// 청소년2 과정 1 / 2
// 002_02 002_03



if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}

if(!$is_member){
	alert('로그인이 필요합니다.');
}

// 청소년

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

	var itemsNum = 4; //항목갯수(화면)
	var check_answer = [];

	for(i=0; i<itemsNum; i++){
		check_answer[i] = $(":input:radio[name=SUV_V1_"+i+"]:checked").val();
		
		if(check_answer[i]==undefined){
			alert('문제의 정답을 빠짐없이 선택해 주세요.');
			return false;
		}

	}
	check_answer = check_answer.join(',');

	$("#answer_list").val(check_answer);

	document.frm.submit();
}
</script>
<div id="body_layout">
  <div class="body_wrap layout">

 <?include G5_THEME_PATH."/sub_left_04.php"?>


       <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">청소년 과정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap">
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">청소년 과정</a></li>
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

			</ul>
		</div>


<form name="frm" action="./sub_page_04_02_002_03.php?idx=<?=$_GET['idx']?>" method="post">

<div class="subpoint"><span class="dot"><em></em></span>
<p class="tt1">청소년 온라인 영상교육 #01</p></div><!----////타이틀---->
<script src="//www.youtube.com/player_api"></script>
<div class="contents">
    <div id="playerLayer"></div>
		
    <p class="movie_text alignC"> ※온라인 동영상을(21분 48초) 끝까지 수강하시면 <span class="emph_orange">다음문제</span>로 넘어가실수 있습니다.</p>

<div class="survey_list">
<div class="survey_list">
<div class="survey_item mt01">
   <h3 class="sQ">1. 자원봉사의 정의로 가장 적합한 것은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="1" class="blankChk1"> ① 금전적 보상을 목적으로 하는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="2" class="blankChk1"> ② 대가 없이 자발적으로 타인과 지역사회를 돕는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="3" class="blankChk1"> ③ 누군가의 강요와 지시로 이루어지는 활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="4" class="blankChk1"> ④ 친목 도모를 위한 사적 모임
		   </label>
	   </li>
	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">2. 자원봉사의 특성이 아닌 것은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="1" class="blankChk1"> ① 자발성
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="2" class="blankChk1"> ② 무보수성
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="3" class="blankChk1"> ③ 공익성
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="4" class="blankChk1"> ④ 수익성
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">3. 자원봉사자의 기본 자세로 적절하지 않은 것은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="1" class="blankChk1"> ① 활동 중 알게 된 개인정보를 주변에 공유하는 자세
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="2" class="blankChk1"> ② 시간 약속을 지키고, 성실하게 임하는 자세
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="3" class="blankChk1"> ③ 지속적으로 배우고 발전하려는 자세
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="4" class="blankChk1"> ④ 다른 봉사자들과 소통하고 협력하는 자세
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
<div class="survey_item mt02">
   <h3 class="sQ">4. 자원봉사 활동범위에 해당하지 않는 것은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="1" class="blankChk1"> ① 장애인 권리 옹호 캠페인, 청소년 멘토링
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="2" class="blankChk1"> ② 가족 간병, 친인척 업무 지원
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="3" class="blankChk1"> ③ 인권 캠페인, 학교 폭력 예방 캠페인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="4" class="blankChk1"> ④ 독거노인 도시락 배달, 말벗 서비스
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->




</div>
</div>




   <div class="btn_wrap alignC">
 <div class="btn_submits mbtn-wrap commit_btn" style="visibility: hidden;">

		  <a onFocus="this.blur();" href="javascript:;" onClick="javascript:history.back();" class="lg-btn"><span>취소합니다</span></a>
		  <a onFocus="this.blur();" href="javascript:;" onClick="answerCheck();" class="ldp-btn go"><span>다음으로</span></a>
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
            videoId: 'cOV6GCvgfG4',
            playerVars: {
                'autoplay': 0, // 자동실행여부
                'controls': 0, // 재생컨트롤 노출여부 0 1
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
