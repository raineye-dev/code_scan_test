<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 협력기관";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="svisual_layout">
	<div class="svisual_wrap">
		<div class="sub__background"></div>
		<div class="subvisual-layout">
		  <div class="layout_sub"> 
			<h2><span>센터소개</span></h2>
			<p class="subvisual-layout__text">자원봉사의 빛으로 함께 밝히는 전남</p>
		  </div>
		</div>
	</div>
</div><!----////svisual_layout----->
<div id="body_layout">
  <div class="body_wrap layout"> 
    

    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>센터소개</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li><a href="/bbs/sub/sub_page_01_01.php" target="_self"><span>인사말</span></a> </li>
        <li><a href="/bbs/sub/sub_page_01_02.php" target="_self"><span>연혁</span></a> </li>
		<li><a href="/bbs/sub/sub_page_01_03.php" target="_self"><span>사업소개</span></a> </li>
		<li><a href="/bbs/sub/sub_page_01_04.php" target="_self"><span>조직도</span></a> </li>
		<li class="on"><a href="/bbs/sub/sub_page_01_06.php" target="_self"><span>협력기관</span></a> </li>
		<li><a href="/bbs/sub/sub_page_01_05.php" target="_self"><span>찾아오시는길</span></a> </li>
      </ul>
    </aside><!---///lnb_wrap--->


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">협력기관</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">협력기관</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<div class="sub_wrap_page">
 <div class="tab_menu01 type02">
	<ul>
		<li><a href="/bbs/sub/sub_page_01_06.php"  title="2021"> 2021 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_001.php"  title="2020"> 2020 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_002.php"  title="2019"> 2019 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_003.php"  title="2018"> 2018 </a></li>
		<li class="on"><a href="/bbs/sub/sub_page_01_06_004.php"  title="2017"> 2017 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_005.php"  title="2016"> 2016 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_006.php"  title="2015"> 2015 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_007.php"  title="2014"> 2014 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2017년 유관기관</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
   <tr>
    <td>여수</td>
    <td>여수공항공사 여수지사</td>
    <td>사회복지시설 물품지원 및 시설봉사, 지역사회 주거 및 환경정화활동, 맞춤형 섬지역 희망복지지원, 교복 나눔 지원, 찾아가는 IT서비스 지원 등</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>한국감정원 순천지사</td>
    <td>지역사회 장학금전달, 주택개보수, 사회복지시설 쌀 및 성금 기부 등</td>
  </tr>
  <tr>
    <td>광주</td>
    <td>남화토건주식회사</td>
    <td>50년 동안 기업 경영에서 발생한 기업이윤뿐만 아니라 사유재산을 출현하여 교육 및 취학 시설에 기부, 사회에 공헌한 사실이 매우 큼</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>골드클래스(주)</td>
    <td>주택보급률 확대 및 서민 주거 안정, 고품격 친환경 주택 건설, 지역사회에 발전기금 지원 등</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>LG이노텍</td>
    <td>자매결연 마을 정기적 맞춤형 자원봉사활동, 관내 초·중·고 학습기자재 및 장학금 전달, 김장봉사· 농번기 단감수확 봉사, 지역행사 교통안내 봉사활동 및 물품지원 등</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>㈜포스코컴텍 광양사업본부</td>
    <td>전직원 매월 봉사활동실시, 청소년 장학금 지원, 기초생활수급가정 및 복지시설 봉사, 자매결연 마을 일손지원, 각종 시행사 지원, 환경정화활동 등</td>
  </tr>
  <tr>
    <td>보성</td>
    <td>보성소방서</td>
    <td>119서민생활안전 지원단 구성 운영, 농촌일손돕기, 취약계층 위문품 지급 및 봉사활동, 찾아가는 소방안전점검, 취약계층 기초소방시설 보급, 범도민 응급처치 교육 </td>
  </tr>
  <tr>
    <td>여수</td>
    <td>GS칼텍스(주)여수공장</td>
    <td>사랑나눔터(노인무료급식소) 운영, 여수문화예술공원 예울마루 조성 및 운영, 위기청소년 마음톡톡 예술치유 프로그램, 도서학교 원어민 영어교실운영, 사회봉사단활동</td>
  </tr>
  <tr>
    <td>광주</td>
    <td>현대자동차(주)전남지역본부</td>
    <td>저소득가정 사랑의집수리, 연탄나눔·난방용품지원, 사회복지시설 식자재비 기부 및 배식봉사, 도 내 마을 자매결연 후 농촌사랑 운동참여 및 물품기부, 도내 사회복지 기관 및 취약계층 후원활동 및 기부</td>
  </tr>
  </tbody>
</table>
</div>
</div>
</div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
