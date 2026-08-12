<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 섬볼런투어";
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
        <h2 class="page__title">가고싶은 전남 볼런투어</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">섬볼런투어</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


<div class="sub_topbox type3">
            <div class="inner_box">
                <span class="ir circle circle-lg ir-icon03 ir-icon__lg icon1"></span>
                <div class="txtwrap">
                    <strong class="h-box">가고싶은 전남 볼런투어<!-- <span class="f_red">*</span> --></strong>
                    <p>자원봉사와 여행을 결합해 전남지역의 자연적‧문화적 가치를 알리고, 지속 가능한 공동체 발전 기반 강화</p>
                </div>
                
            </div>
        </div>

<!-- <div class="con_mcon_c1 hidden-xs sub_list_wrap">
				<div class="con_mcon_c1_w">
					<img src="/bbs/sub/img/sub_page_03_03_bg.png">
					<h4>Jeollanam-do</h4>
					<a href="#" class="island01">낭도<span>▼</span></a>
					<a href="#" class="island02">연홍도<span>▼</span></a>
					<a href="#" class="island03">가우도<span>▼</span></a>
					<a href="#" class="island04">소안도<span>▼</span></a>
					<a href="#" class="island05">관매도<span class="up">▲</span></a>
					<a href="#" class="island06">반월·박지도<span>▼</span></a>
					<a href="#" class="island07">장도<span class="op50">▼</span></a>
					<a href="#" class="island08">생일도<span>▼</span></a>
					<a href="#" class="island09">손죽도<span>▼</span></a>
					<a href="#" class="island10">기점·소악도<span class="op70">▼</span></a>
					<a href="#" class="island11">여서도<span>▼</span></a>
					<a href="#" class="island12">대마도<span>▼</span></a>
					<a href="#" class="island13">우이도<span>▼</span></a>
					<a href="#" class="island14">탄도<span>▼</span></a>
					<a href="#" class="island15">홍도·흑산도<span>▼</span></a>
					<a href="#" class="island16">가거도<span class="op20">▼</span></a>
					<a href="#" class="island17">청산도<span class="left">◀</span></a>
					<a href="#" class="island18">거문도<span>▼</span></a>
					<a href="#" class="island19">송이도<span>▼</span></a>
					<a href="#" class="island20 marina">목포마리나<span>▼</span></a>
					<a href="#" class="island21 marina">소호마리나<span>▼</span></a>
					<a href="#" class="island22 marina">완도마리나<span>▼</span></a>
					<a href="#" class="island23 marina">비봉마리나<span>▼</span></a>
				</div>
			</div> -->



	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사업개요</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>추진기간 : 4월 ~ 11월</li>
			<li>대    상 : 22개 시군 자원봉사센터</li>
			<li>주요내용 : 전라남도내 지역 볼런투어(여행+자원봉사) 프로그램 개발 및 운영을 위한 공모사업 </li>
		</ul>
		</div>

		<!-- <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기관별 역할</p></div>--////타이틀--
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>도 센 터 : 볼런투어 테마 구성, 사업비 지원, 사업기획 컨설팅 제공</li>
			<li>시군센터 : 지역별 볼런투어 프로그램 운영(지역자원 연계, 프로젝트 리더 발굴, 자원봉사자 관리 등)</li>
		</ul>
		</div> -->

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>기관연계 및 관광자원 발굴을 통한 지속가능한 볼런투어 추진</li>
			<li>지역의 특색과 매력을 발견하고, 착한소비를 통한 지역경제 활성화</li>
		</ul>
		</div>







	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
