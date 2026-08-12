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
		<li><a href="/bbs/sub/sub_page_01_06_004.php"  title="2017"> 2017 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_005.php"  title="2016"> 2016 </a></li>
		<li class="on"><a href="/bbs/sub/sub_page_01_06_006.php"  title="2015"> 2015 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_007.php"  title="2014"> 2014 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2015년 유관기관</p></div><!----////타이틀---->
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
    <td>담양</td>
    <td>한국도로공사 광주전남본부</td>
    <td>고속도로 휴게소대표음식을 메뉴로 직원봉사자들이 독거노인들과 요리와 식사를 함께하며 소통하는 나눔활동</td>
  </tr>
  <tr>
    <td>목포</td>
    <td>보해양조(주)</td>
    <td>광주전남지역 축제,문화행사,환경정화활동,기부,농촌봉사,장학사업,미래세대대학생봉사자 양성 기여</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>(주)LG화학</td>
    <td>주거환경개선,청소년 장학금지원,재능기부,여수시민되기운동,로컬푸드운동,상안검하수회복수술 지원사업 등 사회공헌프로그랜지속운영</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>현대제철</td>
    <td>현대제철직원,직원부인들로 구성하여 사회공헌 정례프로그램참여,
      회원들의회비로 16년간 어려운이웃의 생계지원,장학금지원,노력봉사를 해온 기업봉사조직</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>새마을금고</td>
    <td>건강하고 활기찬 농촌지역의 선구자 역할을 하고 있으며 여러 가지  어려운 환경 속에 있는 농촌 지역주민을 위해 봉사원들의 재능을   기부와 나눔활동을 실천함. </td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>삼성전자(주) 
      한국총괄 서부지사</td>
    <td>저소득․소외계층 가정에 대한 밑반찬(김장김치) 전달 및 가사정리 봉사활동, 지역민 전자상거래 교육, 불우이웃돕기, 다문화가정지원활동 및 기부활동으로 지역발전과 이웃사랑 실천</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>국일판넬</td>
    <td>저소득층의  붕괴위험가정 판넬지원,도배장판,도서기증,물리치료기기증,생필품지원등 봉사지원활동</td>
  </tr>
  <tr>
    <td>영광</td>
    <td>정주새마을금고</td>
    <td>매월 봉사활동진행,주민편익시설확충,경로당듀류지원,장학금지원,차량지원 등 기업의 사회적책임 구현</td>
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
