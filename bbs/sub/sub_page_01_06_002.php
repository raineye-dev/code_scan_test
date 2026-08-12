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
		<li class="on"><a href="/bbs/sub/sub_page_01_06_002.php"  title="2019"> 2019 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_003.php"  title="2018"> 2018 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_004.php"  title="2017"> 2017 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_005.php"  title="2016"> 2016 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_006.php"  title="2015"> 2015 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_007.php"  title="2014"> 2014 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2019년 유관기관</p></div><!----////타이틀---->
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
    <td>전라
      남도</td>
    <td>한전케이디엔(주)</td>
    <td>지역발전계획 수립을 통한 KDN IT움, SW교육강사 양성과정, KDN 장학금 등 지역 밀착형 사회공헌 추진으로 기업의 사회적 책임을 다하고 있으며, 전라남도자원봉사센터 업무협약 체결 이후, IT 봉사활동 및 전통시장 지원사업 협업으로 전남 도내 취약계층을 적극 후원, 지역사회 나눔문화 확산에 앞장서고 있음.</td>
  </tr>
  <tr>
    <td>전라
      남도</td>
    <td>전력거래소</td>
    <td>전력거래소는 자자체, 자원봉사단체, 복지시설 및 공공기관 등과 사회공헌을 위한 협력 체계를 구축하여, 재난 긴급구호 활동, 에너지 취약층 지원, 생애주기별 맞춤형 사회공헌, 지역 다문화가정 자녀 인력양성 지원 등의 사업을 적극 추진하고 있음</td>
  </tr>
  <tr>
    <td>전라
      남도</td>
    <td>대한물리치료사협회전남도회</td>
    <td>2013년부터 전남도내의 경로당 및 각종 지역 대회를 방문하여 필요한 의료지원이나 봉사활동을 진행해 왔으며, 특히 세월호 사고 현장 및 인양 현장에서 물리치료 자원봉사를 진행해 옴. 2019년에도 꾸준히 장애인 및 어르신들을 대상으로 봉사활동과 각종 대회의 의료지원을 진행중 임.</td>
  </tr>
  <tr>
    <td>목포</td>
    <td>씨월드
      고속훼리(주)</td>
    <td>경로대학설립 및 운영(24년)을 통한 맞춤형 프로그램 개발로 실질적인 노인복지 방향제시, 복지사각지대의 소외계층을 위한 효과적인 각종 사업지원으로 사회구성원으로서의 공동체 의식 형성에 기여하였으며 어려운 이웃과 아름다운 동행을 하고 있으며, 기업이익의 지역나눔 문화 확산을 통해 기업윤리를 실천하고 있음</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>한국전기안전공사여수지사</td>
    <td> 1976년 9월 1일 개설이래, 40여 년 동안 여수지역의 전기안전에 대한 재난예방 및 사회적 취약계층에 대한 재능기부 자원봉사 활동에 솔선수범하였으며, 
       특히, 여수시지역사회보장협의체와 협업을 통한 섬 복지 활동을 수행하고 있으며, 매월 1회이상 사회복지시설 및 소외계층에 지속적인 자원봉사 활동중이며 전기로 인한 불편함을 해소하고 전기 안전사고 예방에 적극 앞장서는 등 타의 모범이 되는 기관임.</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>한국철도공사
      (전남장비사업소)</td>
    <td>2004년 갈대숲 봉사단을 창단하여 다각적인 기술을 가진 분들이 모여 다양한 봉사활동을 저내하고 있으며 집수리봉사를 필두로 기타 재능기부 봉사활동을 활발히 함으로써 지역사회 발전과 주민화합에 기여하고 있으며 투철한 봉사정신을 바탕으로 다양한 봉사활동에 동참하여 타의 모범이 됨 </td>
  </tr>
  <tr>
    <td>광양</td>
    <td>광양시
      새마을금고</td>
    <td>광양시 새마을금고는 지역민과 상생하고 금고의 수익금을 나누는 지역사회 환원을 강조하고, 새마을금고의 정체성을 강화하기 위해 지역사회공헌사업으로 조손가정 및 저소득가정 멘토링활동, 급식지원, 인재육성장학금 기부 등 자원봉사활성화에 기여해오고 있음</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>11공수특전
      여단61대대</td>
    <td> 11공수특전여단61대대는 매월 정기적으로 담양군내 사회복지시설 및 취약계층 가정을 방문하여 봉사활동을 실시하고 있으면 지역을 위한 공익활동은 물론 배식도우미, 어르신 말벗, 이동세탁봉사활동, 태풍피해지역 지원, 소외계층가구 결연활동 등 지속적인 봉사활동 추진으로 타의 모범이 되고 있음</td>
  </tr>
  <tr>
    <td>고흥</td>
    <td>농업회사법인(주)담우</td>
    <td> 농업회사법인(주)담우는 전라남도 예비 사회적 기업으로 지난 2년간 약9회에 걸쳐 1,800만원 상당의 꾸준한 기부와 지역 농산물을 활용한 소비촉진, 일자리 창출 등 기업과 지역사회가 함께하는 문화를 실천해 나가고 있음</td>
  </tr>
  <tr>
    <td>해남</td>
    <td>한국전기안전공사전남남부지사</td>
    <td>한국전기안전공사 전남남부지사는 전기안전관리 분야에 투철한 사명감을 가지고 취약계층 전기고장 신고 시 긴급출동하여 응급조치 및 안전교육 실시 등 재해예방에 성실히 임하고 있으며, 특히 농어촌 마을 어르신들과 사회 취약계층 안전 확보에 노력  또한, 지역사회 불우이웃과 복지시설 등에 주기적으로 후원 성금을 전달하는 등 다양한 봉사활동을 실시하여 지역민들에게 귀감이 되고 있음</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>농업회사법인 ㈜한들</td>
    <td>농업회사법인 ㈜한들은 2015년부터 지역 소외계층을 대상으로 무안군에 적극적으로 쌀을 기부하여 군민들의 식생활에 많은 기여를 하고 있는 기업임</td>
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
