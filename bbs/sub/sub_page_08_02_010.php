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
    <td>아름다운 피부</td>
    <td>강진읍 보은로3길 34</td>
    <td>010-6861-0234</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>하이스튜디오</td>
    <td>강진읍 사의재길 53-1</td>
    <td>434-5353</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>ok안경콘택트</td>
    <td>강진읍 탐진로 112-13</td>
    <td>433-9179</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>아날도 바시니</td>
    <td>강진읍 중앙로 113</td>
    <td>010-3602-6929</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>예쎄</td>
    <td>강진읍 중앙로 113</td>
    <td>010-2743-9156</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>오렌지문구</td>
    <td>강진읍 중앙로 106-1</td>
    <td>434-2368</td>
    <td>5%</td>
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
