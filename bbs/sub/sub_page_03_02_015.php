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
    <td>해남군</td>
    <td>한국전기안전공사 전남남부지사</td>
    <td>주거개선</td>
    <td>전기점검 및 보수</td>
    <td>27</td>
  </tr>
  <tr>
    <td>2</td>
    <td>해남군</td>
    <td>해남군 미용협회</td>
    <td>뷰티</td>
    <td>이미용봉사</td>
    <td>50</td>
  </tr>
  <tr>
    <td>3</td>
    <td>해남군</td>
    <td>대한적십자사 우슬봉사회</td>
    <td>주거개선</td>
    <td>집수리봉사</td>
    <td>22</td>
  </tr>
  <tr>
    <td>4</td>
    <td>해남군</td>
    <td>한국열관리협회해남지회</td>
    <td>주거개선</td>
    <td>보일러점검    및 수리</td>
    <td>7</td>
  </tr>
  <tr>
    <td>5</td>
    <td>해남군</td>
    <td>행복나눔강사협회</td>
    <td>문화공연</td>
    <td>실버체조    및 웃음치료 등</td>
    <td>28</td>
  </tr>
  <tr>
    <td>6</td>
    <td>해남군</td>
    <td>자유총연맹여성회</td>
    <td>기타</td>
    <td>환경개선</td>
    <td>36</td>
  </tr>
  <tr>
    <td>7</td>
    <td>해남군</td>
    <td>실로암봉사회</td>
    <td>음식나눔</td>
    <td>취약계층 김장김치 나눔</td>
    <td>20</td>
  </tr>
  <tr>
    <td>8</td>
    <td>해남군</td>
    <td>여성자원봉사회</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>33</td>
  </tr>
  <tr>
    <td>9</td>
    <td>해남군</td>
    <td>소비자교육중앙회 해남지회</td>
    <td>음식나눔</td>
    <td>취약계층 음식나눔</td>
    <td>68</td>
  </tr>
  <tr>
    <td>10</td>
    <td>해남군</td>
    <td>두륜자원봉사회</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>30</td>
  </tr>
  <tr>
    <td>11</td>
    <td>해남군</td>
    <td>대한적십자 봉사회해남지구협의회</td>
    <td>음식나눔</td>
    <td>소외계층    음식지원 등</td>
    <td>403</td>
  </tr>
  <tr>
    <td>12</td>
    <td>해남군</td>
    <td>해남군방범연합회</td>
    <td>기타</td>
    <td>교통정리</td>
    <td>453</td>
  </tr>
  <tr>
    <td>13</td>
    <td>해남군</td>
    <td>해남군의용소방대</td>
    <td>기타</td>
    <td>무료급식봉사,    재난재해응급</td>
    <td>1491</td>
  </tr>
  <tr>
    <td>14</td>
    <td>해남군</td>
    <td>한듬봉사회</td>
    <td>음식나눔</td>
    <td>취약계층 음식나눔</td>
    <td>57</td>
  </tr>
  <tr>
    <td>15</td>
    <td>해남군</td>
    <td>공룡로타리클럽</td>
    <td>주거개선</td>
    <td>도배, 장판, 전기 수리 등</td>
    <td>25</td>
  </tr>
  <tr>
    <td>16</td>
    <td>해남군</td>
    <td>국제로터리 목련클럽</td>
    <td>주거개선</td>
    <td>도배, 장판, 전기 수리 등</td>
    <td>48</td>
  </tr>
  <tr>
    <td>17</td>
    <td>해남군</td>
    <td>해남군새마을회</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>697</td>
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
