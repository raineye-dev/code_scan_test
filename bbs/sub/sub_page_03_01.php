<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 블루 재능봉사단";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    




   <?include G5_THEME_PATH."/sub_left_03.php";?>



    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">블루재능봉사단 소개</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="">블루재능봉사단</a></li>
			<li class="n4"><a href="" class="navi_ov">블루재능봉사단 소개</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">블루재능봉사단 운영</p></div><!----////타이틀---->
		<p class="txt_box sub_list_wrap">전문가가 보유하고 있는 재능을 사회에 환원함으로써 자원봉사의 질적 수준 향상 및 지역사회 재능 나눔 문화 확산<br/>
		※ 블루재능봉사단 : 도내 재능기부 봉사단체 중 우수프로그램 공모 선정 단체로 구성
		</p>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사업개요</p></div><!----////타이틀---->
		<ul class="dot_list txt_box sub_list_wrap">
			<li>추진기간 : 2월 ~ 12월</li>
			<li>대    상 : 도내 재능기부 자원봉사단체 10~15개 단체</li>
			<li>주요내용 : <br/>- 전남 재능기부 자원봉사 우수프로그램 공모<br/>- 소외계층 대상 맞춤형 전문자원봉사 서비스 제공</li>
		</ul>



	
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진계획</p></div><!----////타이틀---->
		<ul class="dot_list txt_box sub_list_wrap">
			<li>도내 22개 시군 재능봉사단 현황조사        : 2월</li>
			<li>블루재능봉사단 공모추진 계획수립          : 3월</li>			
			<li>블루재능봉사단 우수프로그램 공모 및 운영  : 5월 ~ 10월</li>						
<!-- 			<li>블루재능봉사단 맞춤형 통합봉사활동 실시(2회)   : 5월 ~ 8월</li> -->
		</ul>



	
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div><!----////타이틀---->
		<ul class="dot_list txt_box sub_list_wrap">
			<li>우수프로그램 공모를 통한 창의적인 재능봉사 프로그램 발굴 </li>
			<li>활동지원을 통한 자원봉사자들의 소속감 및 행정업무 능력 상승</li>
			<li>지역사회 주민들의 삶의 질 향상 및 공동체 확립 </li>			
		</ul>

		<div class=""><img src="/bbs/sub/img/sub_page_03_01_bg.png">
		</div>

	<!-- <div class="vision_mission section" >		
		<ul class="row">
			<li class="col-xs-12 col-md-3">
				<img src="/bbs/sub/img/sub_page_03_01_jpg01.png" alt="전남블루 재능봉사단">
				
			</li>
			<li class="col-xs-12 col-md-3">
				<img src="/bbs/sub/img/sub_page_03_01_jpg02.png" alt="전남블루 재능봉사단">
				
			</li>
			<li class="col-xs-12 col-md-3">
				<img src="/bbs/sub/img/sub_page_03_01_jpg03.png" alt="전남블루 재능봉사단">
				<dl>
					<dt>실천</dt>
					<dd>연결과 순환의 자원봉사 생태계 조성</dd>
				</dl>
			</li>
			<li class="col-xs-12 col-md-3">
				<img src="/bbs/sub/img/sub_page_03_01_jpg04.png" alt="전남블루 재능봉사단">
				
			</li>
		</ul>
	</div> -->
<!-- <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">제1기 전남블루 재능봉사단 구성</p></div>--////타이틀--

<div class="sub_table_wrap sub_list_wrap">
<table class="table_t02">
<thead>
	<tr>
		 <th width="10%">지역</th>
         <th width="30%">단체명</th>
         <th width="10%">대표자명</th>
		 <th width="10%">활동분야</th>
		 <th width="30%">활동내용</th>
		 <th width="10%">회원수</th>
  </tr>
</thead>
<tbody>
	   <tr>
		 <td>광양시</td>
		 <td class="t_left">광양하이텍고등학교인터랙트 푸른비전</td>
		 <td>강수원</td>
		 <td>음식나눔</td>
		 <td class="t_left">쿠키류, 케이크, 머핀류, 한국전통식품만들기 음식나눔기부활동 전개</td>
		 <td>36</td>
		 
       </tr>
	   <tr>
		 <td>곡성군</td>
		 <td class="t_left">	한국생활개선 곡성군 연합회</td>
		 <td>김금자</td>
		 <td>	음식나눔</td>
		 <td class="t_left">밑반찬 조리 및 배달</td>
		 <td>83</td>
		 
       </tr>
	   
	   <tr>
		 <td>구례군</td>
		 <td class="t_left">구례귀농귀촌협회</td>
		 <td>이희식</td>
		 <td>주거개선</td>
		 <td class="t_left">도배장판, 노후전기 개선, 도색, 가스안전장치 설치</td>
		 <td>55</td>
		 
       </tr>
	   
	   <tr>
		 <td>무안군</td>
		 <td class="t_left">현경청년공동체</td>
		 <td>이삼남</td>
		 <td>주거개선</td>
		 <td class="t_left">마을 벽화 그리기</td>
		 <td>26</td>
		 
       </tr>
	   

	   
	   <tr>
		 <td>목포시</td>
		 <td class="t_left">건강복지발전소</td>
		 <td>강양훈</td>
		 <td>건강지원</td>
		 <td class="t_left">낙상예방 및 운동재활 프로그램</td>
		 <td>20</td>
		 
       </tr>

	   <tr>
		 <td>순천시</td>
		 <td class="t_left">사)대한어머니회순천시지회</td>
		 <td>임정심</td>
		 <td>문화공연</td>
		 <td class="t_left">댄스스포츠, 라인댄스 등 문화공연</td>
		 <td>36</td>
		 
       </tr>

	   <tr>
		 <td>보성군</td>
		 <td class="t_left">채동선문화사업단</td>
		 <td>강애경</td>
		 <td>문화공연</td>
		 <td class="t_left">가요, 민요, 한국무용 등 문화공연</td>
		 <td>52</td>
		 
       </tr>

	  

	   <tr>
		 <td>함평군</td>
		 <td class="t_left">함평 나르다예술단</td>
		 <td>박행님</td>
		 <td>문화공연</td>
		 <td class="t_left">판소리, 사물놀이 등 문화공연</td>
		 <td>38</td>
		 
       </tr>

	   <tr>
		 <td>목포시</td>
		 <td class="t_left">목포시 여성자원봉사협의회</td>
		 <td>박형금</td>
		 <td>뷰티</td>
		 <td class="t_left">이미용, 네일아트 등</td>
		 <td>114</td>
		 
       </tr>

	    <tr>
		 <td>여수시</td>
		 <td class="t_left">크리스챤쇼보 뷰티</td>
		 <td>한영신</td>
		 <td>뷰티</td>
		 <td class="t_left">이미용 서비스 지원(컷트,염색, 파마 등)</td>
		 <td>13</td>
		 
       </tr>	
	
</tbody>
</table>
</div> -->
<div class="subpoint mt_20"><span class="dot"><em></em></span><p class="tt1">전남블루 재능봉사단 운영</p></div><!----////타이틀---->
<div class="sub_wrap_bus_gb ">
	<div class="system_box02_gb">
	<div class="sub_list_wrap">
		<ul>
			<li>
				<p class="tit bg2">① 공모접수</p>
				<p class="cont">도센터</p>
				
			</li>
			<li>
				<p class="tit bg2">② 요건검토</p>
				<p class="cont">시‧군센터</p>
				
			</li>
			<li>
				<p class="tit bg2">③ 심 사</p>
				<p class="cont">도센터</p>
				
			</li>
			<li>
				<p class="tit bg2">④ 발 표</p>
				<p class="cont">도센터</p>
				
			</li>
		
		</ul>
		<ul>
				<li>
				<p class="tit bg2">⑤ 사전교육</p>
				<p class="cont">도센터</p>
				
			</li>
		
			<li>
				<p class="tit bg2">⑥ 교부</p>
				<p class="cont">도센터</p>
				
			</li>
			<li>
				<p class="tit bg2">⑦ 사업수행</p>
				<p class="cont">블루재능봉사단</p>
				
			</li>
			<li>
				<p class="tit bg2">⑧ 최종결과보고</p>
				<p class="cont">도센터</p>
				
			</li>
			<!-- <li>
				<p class="tit bg2">⑨ 정산 및 평가</p>
				<p class="cont">도센터</p>
				
			</li>
			<li>
				<p class="tit bg2">⑩ 시상</p>
				<p class="cont">도센터</p>
				
			</li> -->
		</ul>
	</div>
</div>
</div>
	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
