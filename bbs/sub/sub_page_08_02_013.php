<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="인정보상"  ;
$g5['title'] = "인정보상 | 할인가맹점";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 


   <?include G5_THEME_PATH."/sub_left_08.php"?>





    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">할인가맹점</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">인정보상</a></li>
            <li class="n3"><a href="" class="navi_ov">할인가맹점</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		
 <?include G5_THEME_PATH."/subpage_08_tab.php"?>
<div class="discount_text">※할인가맹점 방문 전 전화상으로 휴무 여부와 할인조건 등을 다시 확인하여 주시기 바랍니다.</div>
<div class="sub_table_wrap">
<table class="table_t02">
  <caption>
  할인가맹점 목록
  </caption>
  <thead>
   <tr>
      <th scope="col" style="width:7%;">번호</th>
      <th scope="col" style="width:18%;">업체명</th>
      <th scope="col" style="">주소</th>
      <th scope="col" style="width:18%;">전화번호</th>
      <th scope="col" style="width:20%;">할인률</th>
    </tr>
  </thead>
  <tbody>
	    <tr>
    <td>1</td>
    <td>태백산맥문학관</td>
    <td>전남 보성군 벌교읍 홍암로    89-19</td>
    <td>061-850-8653</td>
    <td>관람료 면제</td>
  </tr>
  <tr>
    <td>2</td>
    <td>한국차박물관</td>
    <td>전남 보성군 보성읍 녹차로 775</td>
    <td>061-852-0918</td>
    <td>관람료 면제</td>
  </tr>
  <tr>
    <td>3</td>
    <td>제암산자연휴양림</td>
    <td>전남 보성군 웅치면 대산길 330</td>
    <td>061-852-4434</td>
    <td>주차료    면제,<br>
      입장료50%면제</td>
  </tr>
  <tr>
    <td>4</td>
    <td>율포해수녹차센터</td>
    <td>전남 보성군 회천면 우암길 21</td>
    <td>061-853-4566</td>
    <td>대인2,000원,<br>
      소인1,000원 할인</td>
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
