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
<td>무안군</td>
<td>아라한</td>
<td>뷰티</td>
<td>이미용(염색, 커트, 펌, 네일, 마사지 등)</td>
<td>9</td>
  </tr>
  <tr>
<td>2</td>
<td>무안군</td>
<td>꿈드림 Catcher 봉사단</td>
<td>음식나눔</td>
<td>급식봉사</td>
<td>29</td>
  </tr>
  <tr>
<td>3</td>
<td>무안군</td>
<td>남도사랑 무안군봉사단</td>
<td>기타</td>
<td>농촌일손돕기</td>
<td>30</td>
  </tr>
  <tr>
<td>4</td>
<td>무안군</td>
<td>bello-B</td>
<td>뷰티</td>
<td>이미용,염색, 네일아트, 마사지, 향수제작</td>
<td>36</td>
  </tr>
  <tr>
<td>5</td>
<td>무안군</td>
<td>케어복지전문봉사단</td>
<td>뷰티</td>
<td>피부마사지,손발마사지</td>
<td>41</td>
  </tr>
  <tr>
<td>6</td>
<td>무안군</td>
<td>하늘로봉사단</td>
<td>주거개선</td>
<td>집수리(전기,보일러 등)</td>
<td>80</td>
  </tr>
  <tr>
<td>7</td>
<td>무안군</td>
<td>푸른나무</td>
<td>주거개선</td>
<td>집수리(전기,보일러 등)</td>
<td>11</td>
  </tr>
  <tr>
<td>8</td>
<td>무안군</td>
<td>빛을나누리</td>
<td>기타</td>
<td>생필품 만들기 및 나눔(비누, 디퓨져,재활용가방 등)</td>
<td>16</td>
  </tr>
  <tr>
<td>9</td>
<td>무안군</td>
<td>우리지역 기후지킴이</td>
<td>주거개선</td>
<td>물품지원, 이동세탁, 주거개선</td>
<td>11</td>
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
