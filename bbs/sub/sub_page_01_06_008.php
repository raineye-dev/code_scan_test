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

 <div class="tab_menu01 type02">
	<ul>
		<li><a href="/bbs/sub/sub_page_01_06.php"  title="2021"> 2021 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_001.php"  title="2020"> 2020 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_002.php"  title="2019"> 2019 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_003.php"  title="2018"> 2018 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_004.php"  title="2017"> 2017 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_005.php"  title="2016"> 2016 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_006.php"  title="2015"> 2015 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_007.php"  title="2014"> 2014 </a></li>
		<li class="on"><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2013년 유관기관</p></div><!----////타이틀---->
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
    <td>전라남도</td>
    <td>전남지방우정청</td>
    <td>사랑의집수리봉사단 외 다양한 봉사활동 추진</td>
  </tr>
  <tr>
    <td>나주</td>
    <td>한국쓰리엠 나주공장</td>
    <td>한국쓰리엠 사회공헌단
      -독거노인,조손가정,지역아동센터 지원 ,장애우가정방문, 재능나눔봉사 등</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>(주)에어릭스</td>
    <td>드림봉사단
       장애우 봉사, 저소득가정지원, 지역 봉사 등 다양한 활동 전개 </td>
  </tr>
  <tr>
    <td>광양</td>
    <td>(주)프롬스</td>
    <td>프롬스봉사단
      - 결식아동지원
      - 농촌취약계층지원 등</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>(주)북부환경</td>
    <td>독거노인 및 저소득층 집수리 및 환경미화 등 봉사활동 전개 </td>
  </tr>
  <tr>
    <td>보성</td>
    <td>(주)와이엔텍보성컨트리클럽</td>
    <td>보성CC우먼파워
      -어르신, 저소득 초등학생 지원, 다문화 합동결혼식,농촌일손돕기 자원봉사 활동 전개</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>장흥중앙로타리클럽</td>
    <td>독거노인, 다문화가정 지원사업 , 희망하우스 신축, 다문화공부방 지원 등 봉사활동 전개</td>
  </tr>
  <tr>
    <td>강진</td>
    <td>(주)해들녘애</td>
    <td>소외계층 집수리, 청소, 이미용 등 지속적이고 꾸준한 봉사활동 전개</td>
  </tr>
  <tr>
    <td>영암</td>
    <td>현대삼호중공업(주)</td>
    <td> 행복약속봉사단
      -지역복지시설 후원 및 지원, 1사1촌 결연 및 봉사,사회공헌 활동 전개 </td>
  </tr>
  <tr>
    <td>무안</td>
    <td>아시아나에어포트</td>
    <td>통합사례가정 청소 봉사, 집수리 봉사환경정화, 캠페인 등 봉사활동 전개</td>
  </tr>
  </tbody>
</table>
</div>
</div>




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
