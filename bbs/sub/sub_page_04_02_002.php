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

	var itemsNum = 4;
	var check_answer = [];

	for(i=0; i<itemsNum; i++){
		check_answer[i] = $(":input:radio[name=SUV_N1_"+i+"]:checked").val();
		
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
				<li>평가문제는 30분 이내에 풀이를 하셔야 합니다.</li>
				<li>30분이 지나면 0점 처리 또는 로그아웃 될 수 있습니다.</li>
			</ul>
		</div>


<form name="frm" action="./sub_page_04_02_002_01.php?idx=<?=$_GET['idx']?>" method="post">

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">청소년 온라인 영상교육 #01</p></div><!----////타이틀---->


<script src="http://www.youtube.com/player_api"></script>
<div class="contents">
    <div id="playerLayer"></div>
    <p class="movie_text alignC"> ※온라인 동영상을 끝까지 수강하시면 <span class="emph_orange">다음문제</span>로 넘어가실수 있습니다.</p>
	 <p class="movie_text alignC">*영상출처 : KB라이프생명사회공헌재단 '전국중고생자원봉사대회'</p>


<div class="survey_list">
<div class="survey_item mt01">
   <h3 class="sQ">1. 남학생(동연)이 봉사활동을 시작하게 된 계기는?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="1" class="blankChk1"> ① 청소년 활동에 관심이 많으신 부모님 때문에 자연스럽게 하게 됨
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="2" class="blankChk1"> ② 사회문제들을 자원봉사를 통해 해결해보고자 시작함
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="3" class="blankChk1"> ③ 학교선생님이 봉사활동을 해야 한다고 해서 시작하게 되었음
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_0" value="4" class="blankChk1"> ④ 심심해서 취미로 봉사활동을 시작함
		   </label>
	   </li>
	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">2. 자원봉사 동아리 ‘초록리더창작소’가 활동하는 분야가 아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="1" class="blankChk1"> ① 환경보호활동
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="2" class="blankChk1"> ② 문화해설 및 문화모니터링
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="3" class="blankChk1"> ③ 인권옹호캠페인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_1" value="4" class="blankChk1"> ④ 어르신들 대상 치매예방 프로그램
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">3. 임효주(한국외국어고) 학생은 의료혜택이 필요한 이주민들을 위해 의약품 지원 봉사활동을 실천하고 있습니다. 효주학생이 지원하고 있는 이주민들은 어느 나라 사람인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="1" class="blankChk1"> ① 방글라데시
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="2" class="blankChk1"> ② 중국
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="3" class="blankChk1"> ③ 인도네시아
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_2" value="4" class="blankChk1"> ④ 파키스탄
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">4. 과학봉사동아리 ‘SCV’가 봉사활동을 전개하는 대상자는?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1"  class="blankChk1"> ① 독거노인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 아동(환아, 다문화가정 등)
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 장애인 
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 외국인 노동자
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
 <div class="survey_item mt02">
   <h3 class="sQ">5. 자원봉사 동아리 ‘따뜻한 IT’가 진행하고 있는 자원봉사 활동은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1"  class="blankChk1"> ① 영상제작 교육 봉사
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 세계시민 정의교육
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 어르신 대상 치매예방 교육 
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 시각장애아동을 위한 점자 교육교구재 제작
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
  <div class="survey_item mt02">
   <h3 class="sQ">6. 양승혁(계양고) 학생은 중학교 봉사활동에서 유전병을 앓는 어린이 만난 후 꿈이 바뀌었습니다. 자신의 꿈을 통해 편견없는 세상을 만들고 싶은 승혁학생이 희망하는 장래희망은 무엇인가요?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1"  class="blankChk1"> ① 과학자
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 정치인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 교사
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 간호사
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
  <div class="survey_item mt02">
   <h3 class="sQ">7. 유기동물에 대한 주제로 활동하는 창업봉사 동아리 ‘안다미로’ 학생들이 진행하는 활동이 아닌 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1"  class="blankChk1"> ① 상품 제작·판매 및 기부
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 유기동물 입양 지원
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 인식개선 캠페인
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 문화공연 봉사
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
   <div class="survey_item mt02">
   <h3 class="sQ">8. 봉사활동 기록의 중요성 대한 내용으로 바르지 않는 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1"  class="blankChk1"> ① 할동 종료 후에는 봉사날짜, 봉사내용, 활동사진 등 활동기록지를 작성한다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 사진이나 영상자료를 남길 때는 수혜자의 의사와 상관없이 최대한 많이 촬영해둔다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 활동기록을 통해 진행한 봉사활동에 대한 평가 회의를 진행해본다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 기록은 봉사활동을 통해 내가 얼마나 성장했는지를 확인할 수 있는 자료가 되기도 한다.
		   </label>
	   </li>	   
   </ul>
 </div><!----////survey_item---->
  <div class="survey_item mt02">
   <h3 class="sQ">9. 자원봉사자가 지켜야 할 에티켓 중 틀린 것은?</h3>
   <ul class="sA">
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="1"  class="blankChk1"> ① 가장 중요한 3가지 키워드는 ‘존중’, ‘배려’, ‘약속’ 이다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="2" class="blankChk1"> ② 부득이하게 봉사활동을 못하는 상황이 발생하면 기관담당자에게 미리 연락한다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="3" class="blankChk1"> ③ 봉사자는 수혜자를 돕는 입장이기 때문에 수혜자보다 봉사자가 존중받아야 한다.
		   </label>
	   </li>
	   <li>
		   <label>
			   <input type="radio" name="SUV_N1_3" value="4" class="blankChk1"> ④ 봉사대상, 장소 등을 미리 파악하고 상황 맞는 행동과 언어를 사용한다.
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
            videoId: 'HzrjlqQqkLY',
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
