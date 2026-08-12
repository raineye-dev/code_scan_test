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
    <td>강진군</td>
    <td>강진탐진로타리클럽</td>
    <td>주거개선</td>
    <td>365 긴급출동 봉사단 운영</td>
    <td>113</td>
  </tr>
  <tr>
    <td>2</td>
    <td>강진군</td>
    <td>강진군여성의용소방대</td>
    <td>기타</td>
    <td>단독경보형감지기    설치</td>
    <td>26</td>
  </tr>
  <tr>
    <td>3</td>
    <td>강진군</td>
    <td>강진군새마을회</td>
    <td>음식나눔</td>
    <td>음식나눔,    주거개선</td>
    <td>641</td>
  </tr>
  <tr>
    <td>4</td>
    <td>강진군</td>
    <td>강진청자로타리클럽</td>
    <td>주거개선</td>
    <td>노후화된    집보수 및 도배보수</td>
    <td>67</td>
  </tr>
  <tr>
    <td>5</td>
    <td>강진군</td>
    <td>강진군가족센터</td>
    <td>뷰티</td>
    <td>네일아트봉사자    양성 및 봉사활동</td>
    <td>     2,847 </td>
  </tr>
  <tr>
    <td>6</td>
    <td>강진군</td>
    <td>삼육봉사회</td>
    <td>음식나눔</td>
    <td>천사들의    나눔방, 저소득가정 빵지원</td>
    <td>13</td>
  </tr>
  <tr>
    <td>7</td>
    <td>강진군</td>
    <td>대한어머니회 강진지회</td>
    <td>기타</td>
    <td>노인시설    에코크래프트 공예</td>
    <td>15</td>
  </tr>
  <tr>
    <td>8</td>
    <td>강진군</td>
    <td>도암 새마을부녀회</td>
    <td>음식나눔</td>
    <td>밑반찬    및 말벗해드리기</td>
    <td>36</td>
  </tr>
  <tr>
    <td>9</td>
    <td>강진군</td>
    <td>발사모</td>
    <td>뷰티</td>
    <td>발마사지    봉사</td>
    <td>8</td>
  </tr>
  <tr>
    <td>10</td>
    <td>강진군</td>
    <td>해피바이러스</td>
    <td>뷰티</td>
    <td>염색    봉사</td>
    <td>8</td>
  </tr>
  <tr>
    <td>11</td>
    <td>강진군</td>
    <td>군동면 청년회</td>
    <td>주거개선</td>
    <td>전기,수도,가스    집수리</td>
    <td>24</td>
  </tr>
  <tr>
    <td>12</td>
    <td>강진군</td>
    <td>강진모란로타리클럽</td>
    <td>주거개선</td>
    <td>소규모    집수리</td>
    <td>67</td>
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
