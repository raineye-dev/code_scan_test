<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}

if(!isset($_GET['idx'])){
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
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
	var ahead_check_answer = "<?=$_POST['answer_list']?>";
	for(i=0; i<itemsNum; i++){
		check_answer[i] = $(":input:radio[name=SUV_V1_"+i+"]:checked").val();

		if(check_answer[i]==undefined){
			alert('문제의 정답을 빠짐없이 선택해 주세요.');
			return false;
		}
	}
	
	check_answer = check_answer.join(',');
	
	$("#answer_list").val(ahead_check_answer+ "," + check_answer);

	document.frm.submit();
}


</script>
<div id="body_layout">
  <div class="body_wrap layout">

 <?include G5_THEME_PATH."/sub_left_04.php"?>


       <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">청소년 영상교육</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap">
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">청소년 영상교육</a></li>
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


<!-- <form name="frm" action="./sub_page_04_02_002_04.php?idx=<?=$_GET['idx']?>" method="post"> 세번째 영상 스킵-->
<form name="frm" action="./sub_page_04_02_002_05.php?idx=<?=$_GET['idx']?>" method="post">

<div class="subpoint"><span class="dot"><em></em></span>
<p class="tt1">청소년 온라인 영상교육 #02</p></div><!----////타이틀---->
<script src="//www.youtube.com/player_api"></script>
<div class="contents">
    <div id="playerLayer"></div>
	<p class="">영상출처 : KB라이프생명사회공헌재단 ‘전국청소년자원봉사대회’</p>
    <p class="movie_text alignC"> ※온라인 동영상을(9분 46초) 끝까지 수강하시면 <span class="emph_orange">다음문제</span>로 넘어가실수 있습니다.</p>

<div class="survey_list">
 <div class="survey_item mt01">
   <h3 class="sQ">5. 동아리 ‘스트로베리’가 가장 처음으로 해결하고자 했던 장애인들의 불편함은 무엇이었나요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="1" class="blankChk1"> ① 경사로가 없는 건물 출입 문제
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="2" class="blankChk1"> ② 점자 보도블록의 파손 문제
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="3" class="blankChk1"> ③ 매장 내 키오스크 사용의 불편함
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_0" value="4" class="blankChk1"> ④ 대중교통 이용의 어려움
		   </label>
	   </li>
	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">6. 스트로베리가 개발한 키오스크와 앱에 적용된 핵심기술로, ‘말을 텍스트로 바꿔주는 기술’의 명칭은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="1" class="blankChk1"> ① STT(Speech-to-Text)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="2" class="blankChk1"> ② OCR(광학 문자 인식)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="3" class="blankChk1"> ③ TTS(Text-to-Speech)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_1" value="4" class="blankChk1"> ④ NFC(근거리 무선 통신)
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">7. 스트로베리 학생들이 지체 장애인을 위해 개발한 ‘맞춤형 AI 여행 추천 앱’의 이름은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="1" class="blankChk1"> ① 무장애 길잡이
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="2" class="blankChk1"> ② 도담
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="3" class="blankChk1"> ③ 오키
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_2" value="4" class="blankChk1"> ④ 스트로베리
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">8. 스트로베리 동아리의 활동이 자원봉사로서 더욱 빛나는 이유는 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="1" class="blankChk1"> ① 유명 연예인들이 함께 참여했기 때문에
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="2" class="blankChk1"> ② 앱을 유료로 판매하여 수익을 창출했기 때문에
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="3" class="blankChk1"> ③ 학교 수업을 대신해서 하는 활동이었기 때문에
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_V1_3" value="4" class="blankChk1"> ④ 대회에서 받은 상금을 기부하며 나눔을 실천했기 때문에
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
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
            videoId: 'BZJyAV0S7TM',
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
