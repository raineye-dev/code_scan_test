<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 전남 재능기부 자원봉사단체";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
  
   <?include G5_THEME_PATH."/sub_left_11.php"?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">전남 재능기부 자원봉사단체</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">전남 재능기부 자원봉사단체</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		
     <?include G5_THEME_PATH."/subpage_08_text.php"?>
	 <?include G5_THEME_PATH."/subpage_08_tab.php"?>

<div class="sub_table_wrap">
<table class="table_t02">
  <caption>
  전남 재능기부 자원봉사단체 목록
  </caption>
  <thead>
    <tr>
      <th scope="col" style="width:7%;">번호</th>
      <th scope="col" style="width:10%;">지역</th>
      <th scope="col" style="width:25%;">단체명</th>
      <th scope="col" style="width:10%;">활동분야</th>
      <th scope="col" style="">활동내용</th>
	  <th scope="col" style="width:10%;">회원수</th>
    </tr>
  </thead>
  <tbody>
	<tr>
    <td>1</td>
    <td>화순군</td>
    <td>행복바라지나눔봉사단</td>
    <td>문화공연 </td>
    <td>공연활동(다문화    공연 및 음식) 등</td>
    <td>150</td>
  </tr>
  <tr>
    <td>2</td>
    <td>화순군</td>
    <td>아름다운 동행</td>
    <td>문화공연</td>
    <td>공연활동</td>
    <td>40</td>
  </tr>
  <tr>
    <td>3</td>
    <td>화순군</td>
    <td>화순 온누리 노래봉사단</td>
    <td>문화공연</td>
    <td>공연활동</td>
    <td>14</td>
  </tr>
  <tr>
    <td>4</td>
    <td>화순군</td>
    <td>남도사랑봉사단 화순군지회</td>
    <td>주거개선</td>
    <td>도배 장판</td>
    <td>26</td>
  </tr>
  <tr>
    <td>5</td>
    <td>화순군</td>
    <td>신아행복나눔봉사단</td>
    <td>주거개선</td>
    <td>도배 장판 집수리</td>
    <td>23</td>
  </tr>
  <tr>
    <td>6</td>
    <td>화순군</td>
    <td>대한미용사회동부지회 화순미용봉사회</td>
    <td>뷰티</td>
    <td>미용봉사</td>
    <td>8</td>
  </tr>
  <tr>
    <td>7</td>
    <td>화순군</td>
    <td>한국프로사진협회 전남지회 화순지부</td>
    <td>기타</td>
    <td>사진봉사</td>
    <td>4</td>
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
