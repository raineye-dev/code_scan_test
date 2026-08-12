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
    <td>구례군</td>
    <td>구례군 귀농귀촌협의회</td>
    <td>주거개선</td>
    <td>취약개층 등 집 수리 등</td>
    <td>165</td>
  </tr>
  <tr>
    <td>2</td>
    <td>구례군</td>
    <td>구례 라이온스클럽</td>
    <td>주거개선</td>
    <td>취약계충 주거개선 등</td>
    <td>22</td>
  </tr>
  <tr>
    <td>3</td>
    <td>구례군</td>
    <td>구례군 미용업협회</td>
    <td>뷰티</td>
    <td>군부대 및 독거노인    미용봉사</td>
    <td>11</td>
  </tr>
  <tr>
    <td>4</td>
    <td>구례군</td>
    <td>구례군 초심회</td>
    <td>음식나눔</td>
    <td>음식나눔,    자연보호캠페인, 독거노인 가스안전밸브 설치 등</td>
    <td>59</td>
  </tr>
  <tr>
    <td>5</td>
    <td>구례군</td>
    <td>남도 사랑봉사단</td>
    <td>음식나눔</td>
    <td>저소득층 보약 도시락    나눔</td>
    <td>31</td>
  </tr>
  <tr>
    <td>6</td>
    <td>구례군</td>
    <td>(사)구례군새마을회</td>
    <td>음식나눔</td>
    <td>음식나눔, 주거개선 등</td>
    <td>238</td>
  </tr>
  <tr>
    <td>7</td>
    <td>구례군</td>
    <td>문화대장간 협동조합</td>
    <td>문화공연</td>
    <td>음식나눔, 주거개선 등</td>
    <td>24</td>
  </tr>
  <tr>
    <td>8</td>
    <td>구례군</td>
    <td>대한적십자사 순천지사    구례봉사회</td>
    <td>음식나눔</td>
    <td>음식나눔, 구호활동,    취약계층 지원 등</td>
    <td>27</td>
  </tr>
  <tr>
    <td>9</td>
    <td>구례군</td>
    <td>구례군 산애삶애</td>
    <td>주거개선</td>
    <td>취약계층 주거환경정화 및    자연 환경보호 등</td>
    <td>19</td>
  </tr>
  <tr>
    <td>10</td>
    <td>구례군</td>
    <td>구례군 간병사협회</td>
    <td>주거개선</td>
    <td>취약계층 주거 개선 등</td>
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
