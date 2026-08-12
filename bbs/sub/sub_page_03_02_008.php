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
    <td>곡성군</td>
    <td>곡성읍    청년회</td>
    <td>주거개선</td>
    <td>주거환경개선    및 미용봉사</td>
    <td>48</td>
  </tr>
  <tr>
    <td>2</td>
    <td>곡성군</td>
    <td>생활개선곡성군연합회</td>
    <td>음식나눔</td>
    <td>밑반찬만들기    및 배달</td>
    <td>240</td>
  </tr>
  <tr>
    <td>3</td>
    <td>곡성군</td>
    <td>다림돌봉사단</td>
    <td>기타</td>
    <td>독거,장애인가구    생활불편 해결 </td>
    <td>14</td>
  </tr>
  <tr>
    <td>4</td>
    <td>곡성군</td>
    <td>곡성군새마을회</td>
    <td>주거개선</td>
    <td>저소득층    주거개선 및 환경정리</td>
    <td>68</td>
  </tr>
  <tr>
    <td>5</td>
    <td>곡성군</td>
    <td>곡성군귀농귀촌협의회</td>
    <td>주거개선</td>
    <td>저소득층    전기수리 및 형광등 교체</td>
    <td>16</td>
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
