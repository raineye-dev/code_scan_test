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
		<li class="on"><a href="/bbs/sub/sub_page_01_06_003.php"  title="2018"> 2018 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_004.php"  title="2017"> 2017 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_005.php"  title="2016"> 2016 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_006.php"  title="2015"> 2015 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_007.php"  title="2014"> 2014 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2018년 유관기관</p></div><!----////타이틀---->
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
    <td>(주)한화여수사업장</td>
    <td>(주)한화 여수사업장은 혼자빨리 보다는 함께멀리의 사회공헌 철학을 바탕으로 기업시민으로서의 사회적 책임을 다하고자 년간 340여회의 사회공헌활동을 적극적으로 전개하여 지역사회 발전과 따뜻한 이웃 사랑을 실천하고 있다.<br/>
      - 노인대상 밥차, 배식, 도시락배달, 장애아동․ 청소년 프로그램지원, 명절나눔 행사, 농어촌봉사 등</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>금호폴리켐(주)</td>
    <td>금호폴리켐은 임직원 모두가 함께 참여하는 사랑의 빨간밥차 봉사활동으로 지역 저소득 노인들의 식사를 지원하고 있으며, 이와 더불어 매년 어르신들의 장수를 기원하는 합동 칠순 잔치, 결손가정 및 다문화가정 지원, 교복지원 등 다양한 방면에서 지역 사회 어려운 이웃을 위해 나눔과 사랑을 실천하고 있음</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>보해양조(주)순천지점</td>
    <td>보해양조 순천지점은 순천시자원봉사센터와 지역연계사업, 지역 내 대학생들과 함께하는 젊은잎새봉사단 운영, 깨끗한 순천시 만들기 관내청소, 불우한 학우 장학금지원 등 향토기업으로서 지역발전과 적극적인 나눔활동으로 타 기업에 귀감이 됨</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>포스코엠텍광양사업소</td>
    <td>지역사회와 상생하고 소통하는 나눔의 미학을 봉사의모토로 삼고 600여명의 직원들이 매월 정기테마 봉사의 날을 지정하여 지역사회에 환원하는 나눔과 봉사활동을 통해 주변 이웃들과 꾸준히 소통해 오고 있으며 특히 2016년부터는 직원들 급여중 1~10% 공제된 금액을 포스코 1%나눔과 봉사활동사업을 추진하며 복지개선을 지원하고 있음</td>
  </tr>
  <tr>
    <td>해남</td>
    <td>대한조선주식회사</td>
    <td>대한조선은 지역사회의 관심과 나눔을 통한 사회적 책무를 기업문화로 조성하여 지역사회와 동반성장을 도모하고 있음<br/>
      -사회봉사단/주부아카데미 운영: 농촌마을 지원, 김장나누기 행사, 지역 환경개선 활동, 독거노인 지원 등<br/>
      -회사 후원활동 : 농촌사랑 자매결연, 지역우수장학금 지급, 소외계층 문화행사 지원, 다방면의 후원활동 등<br/>
      -임·직원의 후원활동 : 초록우산 어린이재단, 만원으로 집짓기 켐페인 후원 등<br/>
      -국가 재난에 대한 긴급지원 활동 실시 : 세월호 사고 발생시 사회봉사단을 긴급 파견으로 실종자가족 및 구조대 지원, 나들이 동행, 경로당 활성화사업보조 등 지역사회와 함께하는 프로그램으로 지속적인 나눔 문화 확산 및 자원봉사 활성화에 기여함.</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>롯데쇼핑(주)아울렛남악점</td>
    <td>2016년 12월 남악점을 오픈한 후부터 샤롯데봉사단을 결성하여 지역 소외계층 대상 생필품지원, 영정사진촬영, 복날백숙대접, 연탄, 지역아동센터 학용품지원, 집수리 전통시장 소화기지원 등으로 지역민들에게 삶의 희망을 주는 기업임</td>
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
