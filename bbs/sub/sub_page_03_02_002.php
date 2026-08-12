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
<td>목포시</td>
<td>건강복지발전소</td>
<td>건강지원</td>
<td>물리치료등</td>
<td>20</td>
  </tr>
  <tr>
<td>2</td>
<td>목포시</td>
<td>늘벗장애인후원회</td>
<td>문화공연</td>
<td>가수공연, 댄스(밸리) 등</td>
<td>100</td>
  </tr>
  <tr>
<td>3</td>
<td>목포시</td>
<td>두꺼비봉사단</td>
<td>주거개선</td>
<td>집수리 자원봉사활동</td>
<td>12</td>
  </tr>
  <tr>
<td>4</td>
<td>목포시</td>
<td>목포여성자원봉사협의회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td>115</td>
  </tr>
  <tr>
<td>5</td>
<td>목포시</td>
<td>반딧불벽화봉사단</td>
<td>주거개선</td>
<td>벽화봉사</td>
<td>15</td>
  </tr>
  <tr>
<td>6</td>
<td>목포시</td>
<td>사랑나눔봉사회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td>48</td>
  </tr>
  <tr>
<td>7</td>
<td>목포시</td>
<td>소리터</td>
<td>문화공연</td>
<td>풍물놀이, 민요, 한량무, 진도북놀이</td>
<td>10</td>
  </tr>
  <tr>
<td>8</td>
<td>목포시</td>
<td>(사)목포사랑봉사회</td>
<td>기타</td>
<td>정리수납,대청소 자원봉사활동</td>
<td>40</td>
  </tr>
  <tr>
<td>9</td>
<td>목포시</td>
<td>목만사봉사단</td>
<td>건강지원</td>
<td>치과,한방,양방의료지원</td>
<td>70</td>
  </tr>
  <tr>
<td>10</td>
<td>목포시</td>
<td>한국열관리시공협회 전라남도회</td>
<td>주거개선</td>
<td>보일러시공, 점검 수리</td>
<td>300</td>
  </tr>
  <tr>
<td>11</td>
<td>목포시</td>
<td>(원산동봉사회)대한적십자사봉사회목포지구협의회</td>
<td>음식나눔</td>
<td>독거세대/위기가정반찬나눔</td>
<td>26</td>
  </tr>
  <tr>
<td>12</td>
<td>목포시</td>
<td>마술여행 주식회사</td>
<td>문화공연</td>
<td>마술공연</td>
<td>10</td>
  </tr>
  <tr>
<td>13</td>
<td>목포시</td>
<td>우리민요사랑</td>
<td>문화공연</td>
<td>민요,판소리,한춤,가수공연</td>
<td>18</td>
  </tr>
  <tr>
<td>14</td>
<td>목포시</td>
<td>목포시체조협회</td>
<td>문화공연</td>
<td>건강체조</td>
<td>8</td>
  </tr>
  <tr>
<td>15</td>
<td>목포시</td>
<td>대한적십자 개미미용봉사회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td>17</td>
  </tr>
  <tr>
<td>16</td>
<td>목포시</td>
<td>다원봉사 후원회</td>
<td>주거개선</td>
<td>방충망교체, 범죄예방 환경조성</td>
<td>10</td>
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
