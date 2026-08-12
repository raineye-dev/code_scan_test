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
<td>여수시</td>
<td>(사)해양환경인명구조단여수구조대</td>
<td>기타</td>
<td>수중정화활동 및 해안가 청결활동 등</td>
<td>85</td>
  </tr>
  <tr>
<td>2</td>
<td>여수시</td>
<td>낭만여수 장구사랑</td>
<td>문화공연</td>
<td>복지시설장구공연</td>
<td>29</td>
  </tr>
  <tr>
<td>3</td>
<td>여수시</td>
<td>놀이마당 들풀</td>
<td>문화공연</td>
<td>저소득층대상 국악공연 </td>
<td>160</td>
  </tr>
  <tr>
<td>4</td>
<td>여수시</td>
<td>요리조리 행복나눔</td>
<td>음식나눔</td>
<td>소외계층음식지원 등</td>
<td>16</td>
  </tr>
  <tr>
<td>5</td>
<td>여수시</td>
<td>(사)한반도개발연합호남회</td>
<td>뷰티</td>
<td>이·미용및 네일아트</td>
<td>27</td>
  </tr>
  <tr>
<td>6</td>
<td>여수시</td>
<td>지구사랑봉사단</td>
<td>기타</td>
<td>환경개선</td>
<td>18</td>
  </tr>
  <tr>
<td>7</td>
<td>여수시</td>
<td>사랑그루터기</td>
<td>주거개선</td>
<td>소외계층집수리 등</td>
<td>77</td>
  </tr>
  <tr>
<td>8</td>
<td>여수시</td>
<td>차이나 친붕</td>
<td>기타</td>
<td>중국어통역 등</td>
<td>69</td>
  </tr>
  <tr>
<td>9</td>
<td>여수시</td>
<td>현애울림</td>
<td>문화공연</td>
<td>소외계층국악공연</td>
<td>10</td>
  </tr>
  <tr>
<td>10</td>
<td>여수시</td>
<td>힐링뮤직단</td>
<td>문화공연</td>
<td>저소득대상 음악공원</td>
<td>41</td>
  </tr>
  <tr>
<td>11</td>
<td>여수시</td>
<td>엑스포예술단</td>
<td>문화공연</td>
<td>복지시설전통공연 등</td>
<td>76</td>
  </tr>
  <tr>
<td>12</td>
<td>여수시</td>
<td>여수벽화쟁이</td>
<td>기타</td>
<td>벽화그리기 </td>
<td>15</td>
  </tr>
  <tr>
<td>13</td>
<td>여수시</td>
<td>섬섬문화 창작소</td>
<td>음식나눔</td>
<td>음식(빵) 나눔</td>
<td>12</td>
  </tr>
  <tr>
<td>14</td>
<td>여수시</td>
<td>여수풍물</td>
<td>문화공연</td>
<td>풍물공연 등</td>
<td>71</td>
  </tr>
  <tr>
<td>15</td>
<td>여수시</td>
<td>몽이네예나눔</td>
<td>기타</td>
<td>벽화그리기 , 페이스페인팅, 만화</td>
<td>92</td>
  </tr>
  <tr>
<td>16</td>
<td>여수시</td>
<td>ACE마술 동호회</td>
<td>문화공연</td>
<td>마술공연</td>
<td>42</td>
  </tr>
  <tr>
<td>17</td>
<td>여수시</td>
<td>물범 다이빙클럽</td>
<td>기타</td>
<td>수중정화 활동 및 해안가 청결활동 등</td>
<td>50</td>
  </tr>
  <tr>
<td>18</td>
<td>여수시</td>
<td>(사)한국해양구조협회 전남동부지부</td>
<td>기타</td>
<td>해양정화 활동 등</td>
<td>41</td>
  </tr>
  <tr>
<td>19</td>
<td>여수시</td>
<td>아람회</td>
<td>음식나눔</td>
<td>소외계층음식나누기</td>
<td>14</td>
  </tr>
  <tr>
<td>20</td>
<td>여수시</td>
<td>여수미술관</td>
<td>기타</td>
<td>벽화그리기</td>
<td>13</td>
  </tr>
  <tr>
<td>21</td>
<td>여수시</td>
<td>다함께</td>
<td>음식나눔</td>
<td>소외계층 김치나누기</td>
<td>16</td>
  </tr>
  <tr>
<td>22</td>
<td>여수시</td>
<td>(사)한국여성소비자엽합회 여수지회</td>
<td>음식나눔</td>
<td>소외계층음식나눔</td>
<td>58</td>
  </tr>
  <tr>
<td>23</td>
<td>여수시</td>
<td>함께하는 </td>
<td>주거개선</td>
<td>소외계층 집수리 등</td>
<td>17</td>
  </tr>
  <tr>
<td>24</td>
<td>여수시</td>
<td>진보사랑봉사단</td>
<td>주거개선</td>
<td>소외계층 집수리 등</td>
<td>18</td>
  </tr>
  <tr>
<td>25</td>
<td>여수시</td>
<td>미평동 주민자치회</td>
<td>음식나눔</td>
<td>소외계층 음식나눔 </td>
<td>78</td>
  </tr>
  <tr>
<td>26</td>
<td>여수시</td>
<td>달보드레봉사단</td>
<td>음식나눔</td>
<td>소외계층 음식나눔</td>
<td>15</td>
  </tr>
  <tr>
<td>27</td>
<td>여수시</td>
<td>건강활동지원단 </td>
<td>기타</td>
<td>물리치료 활동지원 </td>
<td>10</td>
  </tr>
  <tr>
<td>28</td>
<td>여수시 </td>
<td>쪽빛하루</td>
<td>기타</td>
<td>천연염색 등 </td>
<td>12</td>
  </tr>
  <tr>
<td>29</td>
<td>여수시</td>
<td>아름드리봉사단</td>
<td>주거개선</td>
<td>소외계층 전기수리 등 </td>
<td>22</td>
  </tr>
  <tr>
<td>30</td>
<td>여수시</td>
<td>감성미용봉사단</td>
<td>뷰티</td>
<td>이·미용및 네일아트</td>
<td>16</td>
  </tr>
  <tr>
<td>31</td>
<td>여수시</td>
<td>섬섬노리</td>
<td>기타</td>
<td>공예품 만들기</td>
<td>9</td>
  </tr>
  <tr>
<td>32</td>
<td>여수시</td>
<td>더건강해짐</td>
<td>기타</td>
<td>생활건강운동</td>
<td>13</td>
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
