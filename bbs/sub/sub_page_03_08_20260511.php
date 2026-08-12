<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 나눔 이동 세탁차";
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
        <h2 class="page__title">2025 전국생활체육대축전 자원봉사 운영</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">2025 전국생활체육대축전 자원봉사 운영</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

		<div class="sub_topbox type3">
            <div class="inner_box">
                <span class="ir circle circle-lg ir-icon10 ir-icon__lg icon1"></span>
                <div class="txtwrap">
                    <strong class="h-box">2025 전국생활체육대축전 자원봉사 운영</strong>
                    <p>2025 전국생활체육대축전 관람객 안내 및 질서유지 활동 등 원활한 대회 운영을 위한 자원봉사 운영 추진</p>
                </div>
                
            </div>
        </div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">운영계획</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>개최기간 : 2025. 4. 24.(목) ~ 27.(일)<br/>
				- 개회식 : '25. 4. 25.(금) 17:30~20:30 / 목포종합경기장<br/>
				- 폐회식 : '25. 4. 27.(일) 16:00~17:30 / 목포다목적체육관<br/>
			</li>
			<li>장소 : 목포종합경기장 등 58개 경기장 일원 
			</li>
			<li>봉사인원 : 1,000명</li>
			<li>주요역활 :  종합상황실, 경기장 안내, 경기운영 및 개·폐회식 지원 등</li>
			<li>주요내용 :  자원봉사 홍보 및 모집, 선발, 배치, 운영, 교육, 활동실비 지급, 통합관리시스템 재구축 및 발대식․해단식 개최 등</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진계획</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>전국생활체육대축전 자원봉사 통합관리시스템 재구축		: '25. 01.</li>
			<li>자원봉사자 모집․홍보 및 선발				: '25. 02.</li>
			<li>자원봉사 운영 매뉴얼 제작 및 교육			: '25. 03.~04.</li>
			<li>자원봉사 유니폼 제작 및 배포   			: '25. 03.~04.</li>
			<li>자원봉사자 발대식 개최					: '25. 04.</li>
			<li>전국생활체육대축전 자원봉사자 배치․운영		: '25. 04.</li>
			<li>자원봉사자 해단식 개최 및 사후관리         	: '25. 05.~06.</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>전국생활체육대축전 성공개최 및 자원봉사 문화 확산</li>
		
		</ul>
		</div>








	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
