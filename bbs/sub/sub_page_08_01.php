<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="인정보상"  ;
$g5['title'] = "인정보상 | 자원봉사마일리지제";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 


   <?include G5_THEME_PATH."/sub_left_08.php"?>



    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">자원봉사 마일리지제</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">인정보상</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사 마일리지제</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사마일리지제도란?</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		1365 자원봉사포털 실적을 기준으로 우수봉사자에게 다양한 혜택을 제공하는 제도로 전라남도 내 시‧군 자원봉사센터에 등록된 자원봉사자 중 기준 봉사시간 이상인 봉사자에게 할인가맹점 이용시 할인혜택, 공공시설 이용료 감면 등 다양한 혜택을 드리는 제도입니다.
		</div>
		<h5 class="stitle02">마일리지 발급대상</h5>
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>2년간 봉사활동 실적이 100시간 이상인 봉사자</li>
			<li>신청일로부터 2년 간 봉사실적 합산 기준<br/>※ 마일리지 유효기간 : 발급일로부터 2년</li>		
		</ul>
		</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">발급절차</p></div><!----////타이틀---->
		<h5 class="stitle02">신규발급</h5>
		<div class="txt_box sub_list_wrap">
		<ol class="process">
			<li>
				<p>시·군(센터)</p>
				<span>발급대상자 취합</span>
			</li>
			<li>
				<p>시·군(센터)</p>
				<span>대상자 명단 및 사진제출</span>
			</li>
			<li>
				<p>도센터</p>
				<span>마일리지증 제작</span>
			</li>
			<li>
				<p>시·군(센터)</p>
				<span>마일리지증 보급</span>
			</li>
		</ol>
		</div>
		<h5 class="stitle02">재발급</h5>
		<div class="txt_box sub_list_wrap">
		<ol class="process">
			<li>
				<p class="bg_list01">시·군(센터)</p>
				<span>유효기간 만료 확인<br>및 마일리지증 회수</span>
			</li>
			<li>
				<p class="bg_list02">시·군(센터)</p>
				<span>재발급 기준 확인<br/> 후 재발급신청</span>
			</li>
			<li>
				<p>도센터</p>
				<span>마일리지증 제작</span>
			</li>
			<li>
				<p>시·군(센터)</p>
				<span>마일리지증 보급</span>
			</li>
		</ol>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">우수 자원봉사자 인센티브 제공</p></div><!----////타이틀---->
		<h5 class="stitle02">공공시설 이용료 감면</h5>
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>감면대상 : 시‧군에서 운영하는 공공시설물(공영주차장, 공원, 체육시설, 문화시설, 박물관, 공연장, 수련원 등)</li>
			<li>감면범위 : 우수자원봉사자증 소지자에게 시설이용료 50~100% 감면</li>
		</ul>
		</div>
		<h5 class="stitle02">할인가맹점 이용료 감면</h5>
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>감면대상 : 시‧군별 점포 및 사업체(음식점, 주유소, 이미용, 생활용품점 등)</li>
			<li>감면범위 : 마일리지증 소지자에게 시설이용료 5~30% 감면</li>
		</ul>
		</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">도‧시군 할인가맹점</p></div><!----////타이틀---->
		<h5 class="stitle02">도내 할인가맹점에서 우수자원봉사자증 소지자에게 할인혜택 부여</h5>
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>※ 도내 이용가능 공공시설 및 할인가맹점 페이지 참조</li>
		</ul>
		</div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
