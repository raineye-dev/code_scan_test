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
      <th scope="col" style="width:12%;">할인률</th>
    </tr>
  </thead>
  <tbody>
<tr>
    <td>1</td>
    <td>한일침구사</td>
    <td>전라남도 함평군 함평읍    중앙길 97</td>
    <td>061)322-2563</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>굿모님 문구</td>
    <td>전라남도 함평군 함평읍 서부길 95</td>
    <td>061)322-5500</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>오렌지팬시</td>
    <td>전라남도 함평군 함평읍 중앙길 117</td>
    <td>061)322-2925</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>칠보당</td>
    <td>전라남도 함평군 함평읍 중앙길 89-1</td>
    <td>061)322-0260</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>세뚜</td>
    <td>전라남도 함평군 함평읍 영수길 186</td>
    <td>061)324-2351</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>표현화장품</td>
    <td>전라남도 함평군 함평읍 중앙길    117-1</td>
    <td>061)322-7705</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>휴먼플라워</td>
    <td>전라남도 함평군 함평읍 영수길 161</td>
    <td>061)322-4282</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>함평세계로</td>
    <td>전라남도 함평군 월야면 밀재로 1511</td>
    <td>061)323-3915</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>중앙화원</td>
    <td>전라남도 함평군 함평읍 영수길 120</td>
    <td>061)324-0010</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>파리바게뜨</td>
    <td>전라남도 함평군 함평읍 광남길 83</td>
    <td>061)322-1113</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>쑨피자</td>
    <td>전라남도 함평군 함평읍 중앙길 143</td>
    <td>061)322-0100</td>
    <td>기타</td>
  </tr>
  <tr>
    <td>12</td>
    <td>민물장어 직판장 장어당</td>
    <td>전라남도 함평군 함평읍 중앙길 79</td>
    <td>061)322-3200</td>
    <td>기타</td>
  </tr>
  <tr>
    <td>13</td>
    <td>페리카나</td>
    <td>전라남도 함평군 함평읍 광남길 85</td>
    <td>061)324-8892</td>
    <td>기타</td>
  </tr>
  <tr>
    <td>14</td>
    <td>거기카페</td>
    <td>전라남도 함평군 월야면 밀재로    1508-1</td>
    <td>061)323-1180</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>정경복궁</td>
    <td>전라남도 함평군 함평읍 시장길 78</td>
    <td>061)323-7982</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>카페인</td>
    <td>전라남도 함평군 함평읍 시장길 110</td>
    <td>010-2525-4230</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>양군팩토리</td>
    <td>전라남도 함평군 함평읍 중앙길 105</td>
    <td>010-5096-3849</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>살롱드바나나</td>
    <td>전라남도 함평군 중앙길 199-10</td>
    <td>010-6357-3375</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>엘리트안경원</td>
    <td>전라남도 함평군 함평읍 영수길 208</td>
    <td>061)324-1748</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>일광상회</td>
    <td>전라남도 함평군 함평읍 영수길 212</td>
    <td>010-8608-2629</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>21</td>
    <td>단막골</td>
    <td>전라남도 함평군 대동면 학동로 502</td>
    <td>061)322-5406</td>
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
