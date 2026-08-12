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
    <td>담양군</td>
    <td>녹색환경감시단</td>
    <td>주거개선</td>
    <td>노후대문도색</td>
    <td>25</td>
  </tr>
  <tr>
    <td>2</td>
    <td>담양군</td>
    <td>의용소방대연합회</td>
    <td>기타</td>
    <td>재난,    재해 대비</td>
    <td>511</td>
  </tr>
  <tr>
    <td>3</td>
    <td>담양군</td>
    <td>담양미용봉사회</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>13</td>
  </tr>
  <tr>
    <td>4</td>
    <td>담양군</td>
    <td>동서남북    봉사단</td>
    <td>기타</td>
    <td>폐기물    수거</td>
    <td>36</td>
  </tr>
  <tr>
    <td>5</td>
    <td>담양군</td>
    <td>이공이공    봉사회</td>
    <td>주거개선</td>
    <td>칼갈이,    집수리</td>
    <td>11</td>
  </tr>
  <tr>
    <td>6</td>
    <td>담양군</td>
    <td>효사랑    봉사단</td>
    <td>음식나눔</td>
    <td>중국음식나눔</td>
    <td>8</td>
  </tr>
  <tr>
    <td>7</td>
    <td>담양군</td>
    <td>자율방범연합회</td>
    <td>기타</td>
    <td>교통,    방범 등 질서유지</td>
    <td>486</td>
  </tr>
  <tr>
    <td>8</td>
    <td>담양군</td>
    <td>적십자봉사회</td>
    <td>기타</td>
    <td>재난,    재해 대비</td>
    <td>166</td>
  </tr>
  <tr>
    <td>9</td>
    <td>담양군</td>
    <td>가족봉사단</td>
    <td>주거개선</td>
    <td>집수리</td>
    <td>173</td>
  </tr>
  <tr>
    <td>10</td>
    <td>담양군</td>
    <td>남도사랑    담양군봉사단</td>
    <td>주거개선</td>
    <td>집수리</td>
    <td>10</td>
  </tr>
  <tr>
    <td>11</td>
    <td>담양군</td>
    <td>울랄라시니어밴드</td>
    <td>문화공연</td>
    <td>노래,    악기, 전통춤 등 공연활동</td>
    <td>15</td>
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
