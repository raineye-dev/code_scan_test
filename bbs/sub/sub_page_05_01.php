<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소식"  ;
$g5['title'] = "센터소식 | 시군센터연락처";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
  
   <?include G5_THEME_PATH."/sub_left_05.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">시군센터 연락처</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소식</a></li>
            <li class="n3"><a href="" class="navi_ov">시군센터 연락처</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">시군센터 연락처</p></div><!----////타이틀---->
			<div class="sub_table_wrap">
			<table class="table_t02">
			<thead>
				<tr>
					<th width="25%">센터명</th>
					<th>주소</th>
					<th width="25%">연락처</th>
			  </tr>
			</thead>
			<tbody class="text_left01">
				<tbody>
        	<tr>
    <td>전라남도자원봉사센터</td>
    <td>전남 무안군 삼향읍 후광대로 282 전남전문건설회관 6층</td>
    <td>287-1365</td>
  </tr>
  <tr>
    <td>목포시자원봉사센터</td>
    <td>목포시 수강로 12번길 41 목포건어물젓갈센터 4층</td>
    <td>270-8678</td>
  </tr>
  <tr>
    <td>여수시자원봉사센터</td>
    <td>여수시 박람회길1, 국제관 A동 1층</td>
    <td>659-1365</td>
  </tr>
  <tr>
    <td>순천시자원봉사센터</td>
    <td>순천시 덕암길 61 순천시자원봉사센터</td>
    <td>746-4024</td>
  </tr>
  <tr>
    <td>나주시자원봉사센터</td>
    <td>나주시 영산포로 182-7 3층</td>
    <td>339-8484</td>
  </tr>
  <tr>
    <td>광양시자원봉사센터</td>
    <td>광양시 시청로 33 광양시청 주민복지과</td>
    <td>797-3348</td>
  </tr>
  <tr>
    <td>담양군자원봉사센터</td>
    <td>담양군 담양읍 추성로 1371 사회단체사무실동 1층</td>
    <td>382-1365</td>
  </tr>
  <tr>
    <td>곡성군자원봉사센터</td>
    <td>곡성군 곡성읍 군청로 50 곡성군청 1층 군민활력과</td>
    <td>360-2948</td>
  </tr>
  <tr>
    <td>구례군자원봉사센터</td>
    <td>구례군 구례읍 봉성로 1 구례군청 주민복지과</td>
    <td>780-2560</td>
  </tr>
  <tr>
    <td>고흥군자원봉사센터</td>
    <td>고흥군 고흥읍 고흥군청로 1 고흥군청 주민복지과</td>
    <td>830-6703</td>
  </tr>
  <tr>
    <td>보성군자원봉사센터</td>
    <td>보성군 보성읍 송재로 165 보성군청 사회복지과</td>
    <td>850-5088</td>
  </tr>
  <tr>
    <td>화순군자원봉사센터</td>
    <td>화순군 화순읍 동헌길 23 화순군청 가족정책실</td>
    <td>379-3558</td>
  </tr>
  <tr>
    <td>장흥군자원봉사센터</td>
    <td>장흥군 장흥읍 장흥로 21 장흥군청 주민복지과</td>
    <td>860-5855</td>
  </tr>
  <tr>
    <td>강진군자원봉사센터</td>
    <td>강진군 강진읍 탐진로 111 강진군청 주민복지과</td>
    <td>430-3167</td>
  </tr>
  <tr>
    <td>해남군자원봉사센터</td>
    <td>해남군 해남읍 중앙1로 61 해남고용복지센터 2층</td>
    <td>530-5611</td>
  </tr>
  <tr>
    <td>영암군자원봉사센터</td>
    <td>영암군 영암읍 군청로 1 영암군청 주민복지과</td>
    <td>470-2071</td>
  </tr>
  <tr>
    <td>무안군자원봉사센터</td>
    <td>무안군 무안읍 불무로 38-9(구 치매안심센터)</td>
    <td>452-2350</td>
  </tr>
  <tr>
    <td>함평군자원봉사센터</td>
    <td>함평군 함평읍 중앙길 200 함평군자원봉사센터</td>
    <td>320-1456</td>
  </tr>
  <tr>
    <td>영광군자원봉사센터</td>
    <td>영광군 영광읍 중앙로 203 영광군청 사회복지과</td>
    <td>350-5349</td>
  </tr>
  <tr>
    <td>장성군자원봉사센터</td>
    <td>장성군 장성읍 영천로 200 장성군청 주민복지과</td>
    <td>390-7565</td>
  </tr>
  <tr>
    <td>완도군자원봉사센터</td>
    <td>완도군 완도읍 청해진남로 51 완도군청 주민복지과</td>
    <td>550-5337</td>
  </tr>
  <tr>
    <td>진도군자원봉사센터</td>
    <td>진도군 진도읍 진도대로7195 진도여성프라자 1층</td>
    <td>540-3169</td>
  </tr>
  <tr>
    <td>신안군자원봉사센터</td>
    <td>신안군 압해읍 압해로 876-22 1층 신안군자원봉사센터</td>
    <td>240-8433</td>
  </tr>
		</tbody>
	</table>
	</div>





	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
