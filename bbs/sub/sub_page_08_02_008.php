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
    <td>아담광고</td>
    <td>장성군 장성읍 영천로 217</td>
    <td>393-4746</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>상아미용실</td>
    <td>장성군 장성읍 뱃나드리로 198</td>
    <td>393-7259</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>장미미용실</td>
    <td>장성군 황룡면 뱃나드리로 177-2</td>
    <td>010-3620-1105</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>제일꽃화원</td>
    <td>장성군 장성읍 제봉로 126</td>
    <td>395-0079</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>백양관광호텔</td>
    <td>장성군 북하면 백양로 941 </td>
    <td>392-2114</td>
    <td>숙박10%,음식5%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>해운대식당</td>
    <td>장성군 장성읍 청운길 5</td>
    <td>395-1233</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>마라도</td>
    <td>장성군 장성읍 영천로 219</td>
    <td>393-0083</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>댐아래오리마을</td>
    <td>장성군 장성읍 미락단지길 40</td>
    <td>392-1009</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>호산식당</td>
    <td>장성군 장성읍 미락단지길 32</td>
    <td>393-8449</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>낙지한마당</td>
    <td>장성군 장성읍단풍로 261</td>
    <td>393-5288</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>성산가든</td>
    <td>장성군 장성읍 성산2길 9-8</td>
    <td>393-1890</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>12</td>
    <td>동의건강원.제분소</td>
    <td>장성군 장성읍 영천로 104-1</td>
    <td>395-2218</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>13</td>
    <td>불태산진원성</td>
    <td>장성군 진원면 고산로 17  </td>
    <td>392-6492</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>14</td>
    <td>꽃뜨락</td>
    <td>장성군 북하면 단풍로 1876</td>
    <td>392-3344</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>동창식당</td>
    <td>장성군 북하면 백양로 1136</td>
    <td>392-7555</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>단풍두부</td>
    <td>장성군 북하면 백양로 1115-7</td>
    <td>392-1515</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>전주전통식당</td>
    <td>장성군 북하면 백양로 1100</td>
    <td>392-7418</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>정읍대중식당</td>
    <td>장성군 북하면 백양로 1112</td>
    <td>392-7427</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>광주원조식당</td>
    <td>장성군 북하면 백양로 1108</td>
    <td>392-7449</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>백양전통식당</td>
    <td>장성군 북하면 백양로 1110</td>
    <td>392-7406</td>
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
