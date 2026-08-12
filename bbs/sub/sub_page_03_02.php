<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 도민 협력 남도사랑 봉사단";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    




   <?include G5_THEME_PATH."/sub_left_03.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">남도사랑봉사단</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">남도사랑봉사단</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

	<div class="sub_topbox type3">
            <div class="inner_box">
                <span class="ir circle circle-lg ir-icon09 ir-icon__lg icon1"></span>
                <div class="txtwrap">
                    <strong class="h-box">남도사랑봉사단 운영</strong>
                    <p>시군 우수봉사자를 중심으로 구성하여 도 단위 행사 및 재난재해, 국제행사지원 등 도내 공동 목표를 신속하게 대응하고 도민을 위한 자원봉사 활성화에 기여하고자 함</p>
                </div>
                
            </div>
        </div>


	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사업개요</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>추진기간 : 2026년 연중</li>
			<li>대    상 : 22개 시군 남도사랑봉사단 800여명</li>
			<li>주요내용<br/>
			   - 신년하례회, 운영설명회, 우수프로그램 공모, 22개시군 간담회,
       재난현장지원활동, 워크숍, 성과공유회 등
			</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진계획</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>남도사랑봉사단 신년하례회       : 1월 </li>
			<li>남도사랑봉사단 임원간담회 및 워크숍 : 7월~9월 </li>       
   <li>자원봉사 프로그램 공모 및 사업진행 : 2~10월</li>
  <li>재난재해 대비 통합자원봉사 지원단 교육 : 6월</li>
   <li>재난재해 자원봉사활동 현장지원 : 재난발생 시</li>
   <li>남도사랑봉사단 프로그램공모 정산 및 결과보고 : 11월</li>
   <li>22시군 남도사랑봉사단 및 관계자 워크숍, 성과보고회 : 12월</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>지도민 자발성, 책임성, 주인정신 등 선진 시민의식 배양 </li>
 <li>시군간 협력을 통해 전남지역 사회문제 해결 및 위기극복</li>
 <li>재난발생 및 국제행사, 긴급복지 필요시 신속하고 효율적 지원 시스템 구축</li>
		</ul>
		</div>

		<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">남도사랑봉사단 임원 현황 : 11명 (회장1, 총무1, 감사1, 부회장8)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t10">
	<thead>
		<tr>
			<th>직위</th>
			<th>성명</th>
			<th colspan="2">지역</td>
		</tr>
	</thead>
	<tbody>
		
		  <tr>
    <td>회    장</td>
    <td>은희삼</td>
    <td>영광군</td>
    <td>1명</td>
  </tr>
  <tr>
    <td>총    무</td>
    <td>문종필</td>
    <td>완도군</td>
    <td>1명</td>
  </tr>
  <tr>
    <td>감    사</td>
    <td>김영만</td>
    <td>강진군</td>
    <td>1명</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>김영숙</td>
    <td>여수시</td>
    <td rowspan="5">동부권
      (5명)</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>정홍준</td>
    <td>순천시</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>김복순</td>
    <td>구례군</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>임영서</td>
    <td>보성군</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>박순엽</td>
    <td>고흥군</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>강연숙</td>
    <td>나주시</td>
    <td rowspan="3">중서부권
      (3명)</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>김옥희</td>
    <td>장성군</td>
  </tr>
  <tr>
    <td>부 회 장</td>
    <td>이숙희</td>
    <td>해남군</td>
  </tr>


	</tbody>



  </table>
</div><!---sub_table_wrap--->
</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">22개 시군 남도사랑봉사단 구성 현황 : 735명</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t10">
	<thead>
		 <tr>
			<th>지역</th>
			<th>인원수</th>
			<th>지역</th>
			<th>인원수</th>
		  </tr>
	</thead>
	<tbody>
		
		 
  <tr>
    <td>목포시</td>
    <td>50</td>
    <td>장흥군</td>
    <td>20</td>
  </tr>
  <tr>
    <td>여수시</td>
    <td>40</td>
    <td>강진군</td>
    <td>27</td>
  </tr>
  <tr>
    <td>순천시</td>
    <td>52</td>
    <td>해남군</td>
    <td>41</td>
  </tr>
  <tr>
    <td>나주시</td>
    <td>34</td>
    <td>영암군</td>
    <td>31</td>
  </tr>
  <tr>
    <td>광양시</td>
    <td>60</td>
    <td>무안군</td>
    <td>36</td>
  </tr>
  <tr>
    <td>담양군</td>
    <td>10</td>
    <td>함평군</td>
    <td>19</td>
  </tr>
  <tr>
    <td>곡성군</td>
    <td>13</td>
    <td>영광군</td>
    <td>40</td>
  </tr>
  <tr>
    <td>구례군</td>
    <td>32</td>
    <td>장성군</td>
    <td>32</td>
  </tr>
  <tr>
    <td>고흥군</td>
    <td>25</td>
    <td>완도군</td>
    <td>32</td>
  </tr>
  <tr>
    <td>보성군</td>
    <td>35</td>
    <td>진도군</td>
    <td>43</td>
  </tr>
  <tr>
    <td>화순군</td>
    <td>29</td>
    <td>신안군</td>
    <td>34</td>
  </tr>


	</tbody>



  </table>
</div><!---sub_table_wrap--->
</div>





	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
