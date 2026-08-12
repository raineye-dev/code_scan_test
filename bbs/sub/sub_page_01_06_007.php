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
		<li><a href="/bbs/sub/sub_page_01_06_006.php"  title="2015"> 2015 </a></li>
		<li class="on"><a href="/bbs/sub/sub_page_01_06_007.php"  title="2014"> 2014 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2014년 유관기관</p></div><!----////타이틀---->
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
    <td>목포</td>
    <td>롯데쇼핑(주) 롯데마트목포점</td>
    <td>진도 세월호 자원봉사, 지역사회복지시설 자원봉사, 소외계층 자원봉사 및 후원, 바자회 등</td>
  </tr>
  <tr>
    <td>목포</td>
    <td>CJ헬로비전호남방송</td>
    <td>진도세월호 자원봉사 및 급식소 운영, 기부, 지역사회 복지시설 자원봉사 활동 및 후원방송</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>삼성SDI 여수사업장</td>
    <td>소년소녀가장, 독거노인 결연, 중식지원, 김장담그기 지원, 저소득층 의치 지원 등</td>
  </tr>
  <tr>
    <td>나주</td>
    <td>전력거래소(기관)</td>
    <td>사회복지시설 봉사, 아동자립지원, 청소년 장학사업, 독거노인 밑반찬 지원  및 각종 기부 등</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>㈜지본코스메틱</td>
    <td>상록수 자원봉사단
      2013년 사회복지시설 기부 및 봉사활동, 무료급식, 환경정화 , 손맛사지 등 </td>
  </tr>
  <tr>
    <td>광양</td>
    <td>㈜ 포렌</td>
    <td>포렌봉사단 운영
      장애아 전담아동 봉사, 아동, 청소년, 노인, 다문화가정 등 봉사 및 후원</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>아모레 담양특약점</td>
    <td>복지시설 및 경로당 이미용봉사, 자연환경 보호활동, 사회복지시설 후원, 장학금 기부 등</td>
  </tr>
  <tr>
    <td>화순</td>
    <td>녹십자 화순공장</td>
    <td>진도세월호 자원봉사, 다문화가정 결연, 저소득 아동 결연 및  혈우병 환자 돕기 활동 등</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>㈜ 일등환경</td>
    <td>저소득가정 주택신축 폐기물 무료 처리, 저소득 가정 아동 정기후원 등</td>
  </tr>
  <tr>
    <td>장성</td>
    <td>내장산국립공원 백암사무소</td>
    <td>장수사진촬영, 다문화가정 프로그램 운영, 취약계층 주거환경개선, 독거노인 생활용품지원, 밑반찬 나눔 활동 등 </td>
  </tr>
  <tr>
    <td>장성</td>
    <td>한국농어촌공사 장성지사</td>
    <td>소외계층 주거환경개선, 농촌일손돕기, 사회복지시설 위문, 기부, 헌혈, 문화재 지킴이, 환경정화 등</td>
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
