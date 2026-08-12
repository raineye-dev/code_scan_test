<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 은퇴재능봉사단";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    




   <?include G5_THEME_PATH."/sub_left_03.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">은퇴재능봉사단</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">은퇴재능봉사단</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

		<div class="sub_topbox type3">
            <div class="inner_box">
                <span class="ir circle circle-lg ir-icon02 ir-icon__lg icon1"></span>
                <div class="txtwrap">
                    <strong class="h-box">은퇴재능봉사단 운영</strong>
                    <p>퇴직한 자원봉사자들의 재능기부를 통해 보람찬 여가생활을 영위하고 경륜 및 지혜를 바탕으로 지역사회 발전에 기여
                    </p>
                </div>
                
            </div>
        </div>






	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사업개요</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>추진기간 : 연중</li>
			<li>대    상 : 전남도내 은퇴재능 봉사자</li>
			<li>회 원 수 : 50명</li>
			<li>주요내용<br/>
			   - 남도친구들 분야별 활동 지원(관광안내, 학습지도, 건강복지, 문화교육)<br/>
			   - 남도친구들 회원 간 네트워크 활성화 및 역량강화 교육 지원<br/>
			   - 남도친구들 회원 및 활동처 관리 등
			</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진계획</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>사업안내 자료집 배부 				  		: 3월</li>
			<li>남도친구들 분야별 재능기부 활동지원			: 3월~11월</li>
			<li>남도친구들 활동처 현장방문			  		: 연중</li>

		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>노년층의 지역사회 참여 확대 및 자원봉사 활성화 기여</li>
			<li>퇴직자의 여가를 유용하게 활용함으로써 고령 사회문제 해결</li>
		</ul>
		</div>






	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
