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
    <td>장성군</td>
    <td>대한적십자사봉사회    장성지구협의회</td>
    <td>음식나눔</td>
    <td>떡국 나눔 및 송편 나눔</td>
    <td>95</td>
  </tr>
  <tr>
    <td>2</td>
    <td>장성군</td>
    <td>마음을 움직이는 사람들</td>
    <td>주거개선</td>
    <td>취약계층 집수리</td>
    <td>20</td>
  </tr>
  <tr>
    <td>3</td>
    <td>장성군</td>
    <td>사)밀알중앙회전남지구장성지회</td>
    <td>주거개선</td>
    <td>취약계층 집수리</td>
    <td>67</td>
  </tr>
  <tr>
    <td>4</td>
    <td>장성군</td>
    <td>사)한국여성소비자연합장성지부</td>
    <td>음식나눔</td>
    <td>취약계층 밑반찬(고추장)나눔</td>
    <td>34</td>
  </tr>
  <tr>
    <td>5</td>
    <td>장성군</td>
    <td>장성군여성자원봉사회</td>
    <td>음식나눔</td>
    <td>거동불편 독거노인 도시락 배달</td>
    <td>166</td>
  </tr>
  <tr>
    <td>6</td>
    <td>장성군</td>
    <td>장성미래발전청년위원회</td>
    <td>주거개선</td>
    <td>취약계층 집수리 봉사 </td>
    <td>40</td>
  </tr>
  <tr>
    <td>7</td>
    <td>장성군</td>
    <td>장성군여성단체협의회</td>
    <td>음식나눔</td>
    <td>취약계층 김장김치 나눔</td>
    <td>30</td>
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
