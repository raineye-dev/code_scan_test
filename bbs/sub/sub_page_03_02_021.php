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
    <td>완도군</td>
    <td>남도사랑봉사단 완도군지회</td>
    <td>주거개선</td>
    <td>취약계층 대상 집짓기,    집수리 자원봉사 활동</td>
    <td>32</td>
  </tr>
  <tr>
    <td>2</td>
    <td>완도군</td>
    <td>대한적십자사완도군지회협의회</td>
    <td>주거개선</td>
    <td>취약계층 대상 집짓기, 집수리 자원봉사    활동</td>
    <td>400</td>
  </tr>
  <tr>
    <td>3</td>
    <td>완도군</td>
    <td>완도군 생활개선회완도군농가주부모임</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>218</td>
  </tr>
  <tr>
    <td>4</td>
    <td>완도군</td>
    <td>완도군농가주부모임</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>32</td>
  </tr>
  <tr>
    <td>5</td>
    <td>완도군</td>
    <td>한국부인회 완도군지회</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>40</td>
  </tr>
  <tr>
    <td>6</td>
    <td>완도군</td>
    <td>국제와이즈멘</td>
    <td>건강지원</td>
    <td>한방,내과,방충망</td>
    <td>40</td>
  </tr>
  <tr>
    <td>7</td>
    <td>완도군</td>
    <td>완도빙그레앙상블</td>
    <td>문화공연</td>
    <td>하모니카공연</td>
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
