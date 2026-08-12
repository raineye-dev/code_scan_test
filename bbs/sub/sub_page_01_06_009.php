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
		<li><a href="/bbs/sub/sub_page_01_06_008.php"  title="2013"> 2013 </a></li>
		<li class="on"><a href="/bbs/sub/sub_page_01_06_009.php"  title="2012"> 2012 </a></li>
	</ul>
</div>
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2012년 유관기관</p></div><!----////타이틀---->
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
    <td>한국방송 목포방송국</td>
    <td>소외 도서 산간지역 면단위 주민대상 의료팀 맛사지, 네일아트, 집수리, 전기수리, 효도·커플사진, 자장면 점심제공 등 </td>
  </tr>
  <tr>
    <td>순천</td>
    <td>한국철도공사 전남본부</td>
    <td>소외계층 문화체험 실시, 창의력 개발수업, 학교폭력청소년 돕기, 재활용나눔장터, 해롱천 지킴이 등 다양한 활동 전개</td>
  </tr>
  <tr>
    <td>나주</td>
    <td>한전산업개발(주) 나주지점</td>
    <td>마을 독거노인 및 소외계층 전기수리작업, 마을회관 생필품전달 및 환경정비 작업, 노인복지관 점심배식봉사</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>광양제철소 외주파트너사협회</td>
    <td>헌집고쳐주기, 마을청소, 소년소녀가장 및 독거노인후원, 국제행사 등 지원 성공개최에 기여, 1사 1하천가꾸기 및 농촌일손돕기 등</td>
  </tr>
  <tr>
    <td>보성</td>
    <td>보성아산병원</td>
    <td>교복·장학 지원사업, 다문화가정 행복지킴이, 환경정화활동 등</td>
  </tr>
  <tr>
    <td>영암</td>
    <td>한국농어촌공사 영암지사</td>
    <td>노인복지시설 방문 생필품전달, 환경정화, 말벗, 장기자랑, 다문화가정 마늘뽑기. 사랑의 헌혈, 집고쳐주기, 태풍피해농가 일손돕기</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>한국공항공사 무안지사</td>
    <td>다문화가정 모국방문후원 및 멘토링, 주거환경개선, 전기안전점검, 문화체험행사 실시, 1사1탐방로 환경정화 등</td>
  </tr>
  <tr>
    <td>함평</td>
    <td>한국도로공사 동함평영업소
      MH서비스 (2014년 폐업)</td>
    <td>타 기관과 연계하여 시골마을 집수리, 주변환경정화 등 활동 전개복지시설방문 청소, 김장담그기, 어르신말벗, 생필품전달 등</td>
  </tr>
  <tr>
    <td>영광</td>
    <td>한국수력원자력(주)
      영광원자력본부</td>
    <td>테마별 사회공헌 활동, 전문봉사단과 연계 봉사활동, 태풍피해돕기 성금지원 및 복구 봉사활동 등</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>농협중앙회 전남지역본부</td>
    <td>조손가정자매결연, 무료의료지원 및 요양원봉사, 다문화가정모국방문항공권 지원, 희망송아지 나눔, 주거환경개선, 도서기부, 여름방학 교육캠프, 사랑의동전 모으기, 농촌일손돕기</td>
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
