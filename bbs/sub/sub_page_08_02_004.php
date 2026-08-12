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
      <th scope="col" style="width:20%;">업체명</th>
      <th scope="col" style="">주소</th>
      <th scope="col" style="width:18%;">전화번호</th>
      <th scope="col" style="width:13%;">할인률</th>
    </tr>
  </thead>
  <tbody>
		 <tr>
    <td>1</td>
    <td>부귀정보통신</td>
    <td>전남 화순군 화순읍 광덕로    183</td>
    <td>061-927-9119<br>
      010-9875-0096</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>조은가구싱크</td>
    <td>전남 화순군 화순읍 광덕로 33-2</td>
    <td>010-4646-789</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>화순군 장난감도서관</td>
    <td>전남 화순군 화순읍 광덕로 231</td>
    <td>　</td>
    <td>면제</td>
  </tr>
  <tr>
    <td>4</td>
    <td>석봉미술관</td>
    <td>전남 화순군 화순읍 진각로 249-8</td>
    <td>　</td>
    <td>면제</td>
  </tr>
  <tr>
    <td>5</td>
    <td>천불천탑 사진문화관</td>
    <td>전남 화순군 도암면 천태로 91-20</td>
    <td>　</td>
    <td>면제</td>
  </tr>
  <tr>
    <td>6</td>
    <td>화순군민종합문화센터</td>
    <td>전남 화순군 화순읍 광덕로 231</td>
    <td>　</td>
    <td>50%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>하니움 문화스포츠센터</td>
    <td>전남 화순군 화순읍 학포로 2698</td>
    <td>　</td>
    <td>50%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>만연산 치유의 숲</td>
    <td>전남 화순군 화순읍 진각로 340</td>
    <td>　</td>
    <td>전액 감면</td>
  </tr>
  <tr>
    <td>9</td>
    <td>피부연가</td>
    <td>전남 화순군 화순읍 대교로 71</td>
    <td>061-374-7067<br>
      010-7602-0358</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>도곡헤어샵</td>
    <td>전남 화순군 도곡면 지석로 1112</td>
    <td>061-373-8449<br>
      010-9435-2570</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>화진미용실</td>
    <td>전남 화순군 화순읍 칠충로 86</td>
    <td>010-5245-1760</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>12</td>
    <td>개미미용실</td>
    <td>전남 화순군 화순읍 대교로 89</td>
    <td>010-9250-2854</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>13</td>
    <td>제일미용실</td>
    <td>전남 화순군 화순읍 진각로 109-1</td>
    <td>061-374-3595<br>
      010-2085-3595</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>14</td>
    <td>빨간여우미용실</td>
    <td>전남 화순군 능주면 죽수길 67</td>
    <td>061-373-1776<br>
      010-9938-1776</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>반석위에 머리하는풍경</td>
    <td>전남 화순군 화순읍 자치샘로 85</td>
    <td>070-7578-5399<br>
      010-7467-5399</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>조화미용실</td>
    <td>전남 화순군 능주면 죽수길 62-1</td>
    <td>061-373-7237<br>
      010-5108-9088</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>네일리</td>
    <td>전남 화순군 화순읍 광덕로 141</td>
    <td>061-374-5566<br>
      010-9494-9469</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>체리팜</td>
    <td>전남 화순군 화순읍 칠충로 122</td>
    <td>010-9688-2677</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>동화사진관</td>
    <td>전남 화순군 화순읍 동헌길 27</td>
    <td>061-371-0612<br>
      010-5266-5878</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>탑피자</td>
    <td>전남 화순군 화순읍 중앙로 93</td>
    <td>061-375-5070<br>
      010-6412-5229</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>21</td>
    <td>독일보청기</td>
    <td>전남 화순군 화순읍 칠충로 151</td>
    <td>061-375-9339<br>
      010-9474-3114</td>
    <td>10%</td>
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
