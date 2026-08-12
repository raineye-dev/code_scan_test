<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소식"  ;
$g5['title'] = "센터소식 | 질문답변";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 


   <?include G5_THEME_PATH."/sub_left_05.php"?>




    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">질문답변</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">커뮤니티</a></li>
            <li class="n3"><a href="" class="navi_ov">질문답변</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

<!-- include the Tools -->
	<script src="/bbs/sub/faq/jquery.js"></script>

	<!-- standalone page styling (can be removed) -->
	<link rel="stylesheet" type="text/css" href="/bbs/sub/faq/standalo.css"/>	


	<!-- accordion styling -->	
	<link rel="stylesheet" type="text/css" href="/bbs/sub/faq/tabs-acc.css"/> 
<div id="accordion">

<h2 class="current">수료증 이메일 보내기 이미지가 출력이 안되시나요?</h2> 
<div class="pane faq_list" style="display:block">		
	<p>
		<dl>
			<dt><span class="txt">Q</span>수료증 이메일 보내기 이미지가 출력이 안되시나요?</dt>
			<dd><span class="txt">A</span>크롬으로 접속시 
				<div class="certificate"><img src="/bbs/sub/img/qna.png"></div>
			</dd>
		</dl>
	</p>
		
	</div>
	


	<h2 class="current">1365자원봉사포털 ID/PW 찾기</h2> 
<div class="pane faq_list" style="">		
	<p>
		<dl>
			<dt><span class="txt">Q</span>1365 본인의 아이디 및 비밀번호만 조회가능한가요? </dt>
			<dd><span class="txt">A</span>1365홈페이지 접속후 로그인 버튼 아래에 아이디/비밀번호 찾기 클릭 / 실명인증 또는 아이핀인증 통해서 아이디 찾기 / 비밀번호 힌트 또는 휴대번호로 비밀번호 변경 </dd>
		</dl>
	</p>
		
	</div>
	
	<h2>자원봉사활동 확인서 출력</h2>	
	<div class="pane faq_list">
		<p class="">
			<dl>
                <dt><span class="txt">Q</span>1365 본인의 아이디 및 비밀번호만 조회가능한가요? </dt>
                <dd><span class="txt">A</span>1365홈페이지 접속후 로그인 버튼 아래에 아이디/비밀번호 찾기 클릭 / 실명인증 또는 아이핀인증 통해서 아이디 찾기 / 비밀번호 힌트 또는 휴대번호로 비밀번호 변경 </dd>
            </dl>
		</p>
	</div>

	<h2>1365자원봉사포털 아이디 통합</h2>	
		<div class="pane faq_list">
	<p class="">
			<dl>
                <dt><span class="txt">Q</span>1365 본인의 아이디 및 비밀번호만 조회가능한가요? </dt>
                <dd><span class="txt">A</span>1365홈페이지 접속후 로그인 버튼 아래에 아이디/비밀번호 찾기 클릭 / 실명인증 또는 아이핀인증 통해서 아이디 찾기 / 비밀번호 힌트 또는 휴대번호로 비밀번호 변경 </dd>
            </dl>
		</p>

</div>

<!-- activate tabs with JavaScript -->
<script>
$(function() { 

$("#accordion").tabs("#accordion div.pane", {tabs: 'h2', effect: 'slide', initialIndex: null});
});
</script>



<!-- activate tabs with JavaScript -->
<script>

// add new effect to the tabs
$.tools.tabs.addEffect("slide", function(i, done) {

	// 1. upon hiding, the active pane has a ruby background color
	this.getPanes().slideUp().css({backgroundColor: "#fff"});

	// 2. after a pane is revealed, its background is set to its original color (transparent)
	this.getPanes().eq(i).slideDown(function()  {
		$(this).css({backgroundColor: 'transparent'});

		// the supplied callback must be called after the effect has finished its job
		done.call();
	});
});
</script>





	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
