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
    <td>영암군</td>
    <td>꿈을 짓는 집수리 봉사단</td>
    <td>주거개선</td>
    <td>집수리 봉사</td>
    <td>24</td>
  </tr>
  <tr>
    <td>2</td>
    <td>영암군</td>
    <td>언니쓰클럽</td>
    <td>문화공연</td>
    <td>퓨젼    에어로빅</td>
    <td>20</td>
  </tr>
  <tr>
    <td>3</td>
    <td>영암군</td>
    <td>영암군여성자원봉사협의회</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>110</td>
  </tr>
  <tr>
    <td>4</td>
    <td>영암군</td>
    <td>영암문화예술협회</td>
    <td>문화공연</td>
    <td>공연봉사    (섹소폰)</td>
    <td>13</td>
  </tr>
  <tr>
    <td>5</td>
    <td>영암군</td>
    <td>돌쇠봉사회</td>
    <td>주거개선</td>
    <td>노후주택    수리봉사</td>
    <td>20</td>
  </tr>
  <tr>
    <td>6</td>
    <td>영암군</td>
    <td>아름회(아름다운마음봉사회)</td>
    <td>기타</td>
    <td>칼갈이</td>
    <td>12</td>
  </tr>
  <tr>
    <td>7</td>
    <td>영암군</td>
    <td>고향을 생각하는 주부들의 모임    영암군연합회</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>50</td>
  </tr>
  <tr>
    <td>8</td>
    <td>영암군</td>
    <td>영암군의용소방대여성연합회</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>56</td>
  </tr>
  <tr>
    <td>9</td>
    <td>영암군</td>
    <td>이미용자원봉사단</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>5</td>
  </tr>
  <tr>
    <td>10</td>
    <td>영암군</td>
    <td>가족센터 봉사단</td>
    <td>뷰티</td>
    <td>이미용(네일아트 포함)</td>
    <td>20</td>
  </tr>
  <tr>
    <td>11</td>
    <td>영암군</td>
    <td>두드림봉사단</td>
    <td>주거개선</td>
    <td>벽화그리기</td>
    <td>50</td>
  </tr>
  <tr>
    <td>12</td>
    <td>영암군</td>
    <td>이웃사촌</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>6</td>
  </tr>
  <tr>
    <td>13</td>
    <td>영암군</td>
    <td>예담은 봉사동아리</td>
    <td>기타</td>
    <td>천연염색, 섬유아트    문화체험활동, <br>
      어린이·청소년 1일 바리스타 체험활동</td>
    <td>38</td>
  </tr>
  <tr>
    <td>14</td>
    <td>영암군</td>
    <td>영암군생황음악회(시나브로)</td>
    <td>문화공연</td>
    <td>관내 주요관광지,    주요행사장에서 버스킹 페스티벌, 요양시설 위문공연</td>
    <td>35</td>
  </tr>
  <tr>
    <td>15</td>
    <td>영암군</td>
    <td>삼호적십자봉사회</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>28</td>
  </tr>
  <tr>
    <td>16</td>
    <td>영암군</td>
    <td>월출산여성라이온스클럽</td>
    <td>주거개선,음식나눔</td>
    <td>주거개선,음식나눔,체험</td>
    <td>23</td>
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
