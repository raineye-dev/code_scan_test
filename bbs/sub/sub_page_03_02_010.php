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
    <tr>
<td>1</td>
<td>고흥군</td>
<td>고흥군 백합봉사회</td>
<td>주거개선</td>
<td>방충망교체</td>
<td>10</td>
  </tr>
  <tr>
<td>2</td>
<td>고흥군</td>
<td>행복나눔봉사단</td>
<td>주거개선</td>
<td>도배,장판교체</td>
<td>8</td>
  </tr>
  <tr>
<td>3</td>
<td>고흥군</td>
<td>고흥우체국 늘푸른봉사단</td>
<td>주거개선</td>
<td>도배,장판교체</td>
<td>30</td>
  </tr>
  <tr>
<td>4</td>
<td>고흥군</td>
<td>팜앤빌더</td>
<td>주거개선</td>
<td>방충망,전구교체 등</td>
<td>9</td>
  </tr>
  <tr>
<td>5</td>
<td>고흥군</td>
<td>나누리봉사단</td>
<td>주거개선</td>
<td>도배,장판교체 및 전기,수도,보일러수리</td>
<td>26</td>
  </tr>
  <tr>
<td>6</td>
<td>고흥군</td>
<td>고흥경찰서모범운전자회</td>
<td>주거개선</td>
<td>전등교체 및 전기 수리, 방충망 교체 등</td>
<td>24</td>
  </tr>
  <tr>
<td>7</td>
<td>고흥군</td>
<td>행복웃음봉사단</td>
<td>문화공연</td>
<td>공연봉사</td>
<td>21</td>
  </tr>
  <tr>
<td>8</td>
<td>고흥군</td>
<td>고흥우주예술단</td>
<td>문화공연</td>
<td>공연봉사</td>
<td>38</td>
  </tr>
  <tr>
<td>9</td>
<td>고흥군</td>
<td>(사)지향전통예술보존회</td>
<td>문화공연</td>
<td>공연봉사</td>
<td>29</td>
  </tr>
  <tr>
<td>10</td>
<td>고흥군</td>
<td>스마일힐링봉사단</td>
<td>문화공연</td>
<td>공연봉사</td>
<td>16</td>
  </tr>
  <tr>
<td>11</td>
<td>고흥군</td>
<td>고흥군새마을부녀회</td>
<td>음식나눔</td>
<td>음식 나눔봉사</td>
<td>515</td>
  </tr>
  <tr>
<td>12</td>
<td>고흥군</td>
<td>대한적십자사 고흥군봉사회</td>
<td>음식나눔</td>
<td>제과제빵 나눔봉사</td>
<td>23</td>
  </tr>
  <tr>
<td>13</td>
<td>고흥군</td>
<td>대한미용사회 고흥군지부</td>
<td>뷰티</td>
<td>이미용</td>
<td>49</td>
  </tr>
  <tr>
<td>14</td>
<td>고흥군</td>
<td>한국걸스카우트 고흥군지회</td>
<td>뷰티</td>
<td>얼굴마사지</td>
<td>50</td>
  </tr>
  <tr>
<td>15</td>
<td>고흥군</td>
<td>고흥여성농업인센터 예쁜손모아</td>
<td>기타</td>
<td>재봉틀 활용 바느질 봉사</td>
<td>24</td>
  </tr>
  <tr>
<td>16</td>
<td>고흥군</td>
<td>한국해양구조협회 고흥구조대</td>
<td>기타</td>
<td>구조및 수중정화활동</td>
<td>33</td>
  </tr>
  <tr>
<td>17</td>
<td>고흥군</td>
<td>(사)대한잠수협회고흥군지부</td>
<td>기타</td>
<td>구조및 수중정화활동</td>
<td>33</td>
  </tr>
  <tr>
<td>18</td>
<td>고흥군</td>
<td>해양환경인명구조단 고흥구조대</td>
<td>기타</td>
<td>구조및 수중정화활동</td>
<td>26</td>
  </tr>
  <tr>
<td>19</td>
<td>고흥군</td>
<td>다함께만드는행복</td>
<td>기타</td>
<td>통역,학습지도</td>
<td>14</td>
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
