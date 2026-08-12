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
<td>장흥군</td>
<td>대한적십자사장흥지구 협의회</td>
<td>음식나눔</td>
<td>독거노인생일상 차려드리기</td>
<td>89</td>
  </tr>
  <tr>
<td>2</td>
<td>장흥군</td>
<td>서포터즈 봉사단</td>
<td>주거개선</td>
<td>저소득층집수리</td>
<td>28</td>
  </tr>
  <tr>
<td>3</td>
<td>장흥군</td>
<td>장흥군여성자원봉사회</td>
<td>음식나눔</td>
<td>독거노인및 저소득층 밑반찬 전달,가사봉사</td>
<td>26</td>
  </tr>
  <tr>
<td>4</td>
<td>장흥군</td>
<td>정남진 사랑나눔 봉사대</td>
<td>기타</td>
<td>이미용서비스,밑반찬배달, 집수리 등 20개 분야</td>
<td>100</td>
  </tr>
  <tr>
<td>5</td>
<td>장흥군</td>
<td>장흥군 새마을회 </td>
<td>기타</td>
<td>집수리사업,이미용서비스, 김장담그기 등</td>
<td>667</td>
  </tr>
  <tr>
<td>6</td>
<td>장흥군</td>
<td>여성친화도시모니터단</td>
<td>음식나눔</td>
<td>독거노인및 저소득층 밑반찬 전달,가사봉사</td>
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
