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
    <td>외달도 해수풀장</td>
    <td>목포시 외달도길 72</td>
    <td>061-270-8824</td>
    <td>입장료 50% 감면</td>
  </tr>
  <tr>
    <td>2</td>
    <td>호남공영</td>
    <td>목포시    호남동 1-864 (목포역 뒤 철도청부지 일부분)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>3</td>
    <td>행정타운    공영</td>
    <td>목포시    남교동 88-16</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>4</td>
    <td>남교공영</td>
    <td>목포시    남교동 57 (광생의원 뒤)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>5</td>
    <td>동부시장공영</td>
    <td>목포시    용당동 1053 (동부시장 옆)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>6</td>
    <td>해안공영</td>
    <td>목포시    해안동 3가 9 (송광비치아파트 건너편)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>7</td>
    <td>원형1공영</td>
    <td>목포시    상동 1133 (롯데마트 옆)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>8</td>
    <td>원형2공영</td>
    <td>목포시    상동 1130 (CGV 앞)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>9</td>
    <td>동아공영</td>
    <td>목포시    상동 868-5 (포르모 건너편 우리은행 뒤)</td>
    <td>061-270-3683</td>
    <td>주차요금 60% 감면</td>
  </tr>
  <tr>
    <td>10</td>
    <td>목포근대역사관 1관</td>
    <td>목포시    영산로29번길 6(구 목포 일본영사관)</td>
    <td>061-270-8719</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>11</td>
    <td>목포근대역사관 2관</td>
    <td>목포시 번화로18(구 동양척식주식회사    목포지점) </td>
    <td>061-270-8719</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>12</td>
    <td>목포문학관</td>
    <td>목포시 남농로 95(용해동)</td>
    <td>061-270-4042</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>13</td>
    <td>목포자연사박물관</td>
    <td>목포시 남농로 135</td>
    <td>061-274-3655</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>14</td>
    <td>목포문예역사관</td>
    <td>목포시 남농로 149 </td>
    <td>061-274-3655</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>15</td>
    <td>목포생활도자박물관</td>
    <td>목포시 남농로117(용해동)</td>
    <td>061-274-3655</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>16</td>
    <td>목포어린이바다과학관</td>
    <td>목포시 삼학로92번길 98</td>
    <td>061-242-6359</td>
    <td>관람료    50% 감면</td>
  </tr>
  <tr>
    <td>17</td>
    <td>목포실내체육관 실내수영장</td>
    <td>목포시 대양로 286(상동)</td>
    <td>061-270-8371</td>
    <td>경노·어린이    입장료 적용<br>
      (개인 일권 1,500원/ <br>
      개인 월회원권 25,000원/<br>
      단체 일권 1,000원)</td>
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
