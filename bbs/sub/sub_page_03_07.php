<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 나눔 이동 세탁차";
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
        <h2 class="page__title">나눔 이동 세탁차 안내</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">나눔 이동 세탁차 안내</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

		<div class="sub_topbox type3">
            <div class="inner_box">
                <span class="ir circle circle-lg ir-icon04 ir-icon__lg icon1"></span>
                <div class="txtwrap">
                    <strong class="h-box">나눔 이동세탁차운영</strong>
                    <p>복지 사각지대에 있는 도민의 건강한 삶의 질 향상 및 소외감 해소 재난재해 발생시 세탁차량 긴급 현장 투입을 통한 신속한 피해복구 지원</p>
                </div>
                
            </div>
        </div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">세탁차 운영계획</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>사 업  명 : 나눔 이동세탁차 운영</li>
			<li>기     간 : 3월 ~ 11월(혹서기, 혹한기 제외)</li>
			<li>운영횟수 : 주 3회 (화,수,목)</li>
			<li>운영절차 <br/>
			 - 시군 자원봉사센터에서 수요 마을 방문 후 봉사 가능 여부 확인<br/>
			 -  세탁봉사 날짜와 장소 선정 후 도 자원봉사센터에 신청서 송부(공문) ※ 매월 활동 전월 20일까지 <br/>
			 예시) 3월 활동시 2월 20일까지 신청<br/>
		   	- 도자원봉사센터에서 승인 후 해당 날짜로 자원봉사자 신청<br/>
			 - 세탁봉사와 함께 이미용, 문화공연 등 다른 봉사프로그램과 병행가능 <br/>
			 ※ 재난발생, 센터일정, 기상상태(우천시)에 따라 취소되거나 일정이 연기될 수 있음.
			</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">세탁차 운영방법</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>운영시간 : 10:00 ~ 16:30 상황에 따른 시간조절</li>
			
				<table class="table_t02">
					<thead>
					<tr>
						<th colspan="2" width="30%">시간계획</th>
						<th>활동내용</th>
						<th>신청기관 협조사항</th>
				  </tr>
				  </thead>
				<tbody>
				  <tr>
					<td>10:00 ~ 10:20</td>
					<td>20‵</td>
					<td class="table_left">활동 장소 도착 및 운영 준비 <br/>
					  (급배수관 설치, 건조대 설치, 세탁물 분류)</td>
					<td class="table_left">· 접수자 세탁물 분류<br/>
					  · 자원봉사자 활동 내용 전달</td>
				  </tr>
				  <tr>
					<td>10:20 ~ 12:00</td>
					<td>100‵</td>
					<td class="table_left">오전 세탁 봉사 활동(세탁 및 건조)</td>
					<td class="table_left">· 세탁봉사활동 지원</td>
				  </tr>
				  <tr>
					<td>12:00 ~ 13:00</td>
					<td>60‵</td>
					<td colspan="2">점심시간 </td>
				  </tr>
				  <tr>
					<td>13:00 ~ 16:00</td>
					<td>180‵</td>
					<td class="table_left">오후 세탁 봉사 활동
					  (세탁 및 건조)</td>
					<td class="table_left">· 세탁봉사활동 지원<br/>
					  · 세탁물 배달</td>
				  </tr>
				  <tr>
					<td>16:00 ~ 16:30</td>
					<td>30‵</td>
					<td class="table_left">활동 정리
					  (세탁 후 뒷 정리)</td>
					<td class="table_left">· 활동정리 지원<br/>
					  · 자원봉사자 활동 종료</td>
				  </tr>
				 </tbody>
				</table>
			
		
			<!-- <li>소요시간 : 1회 30~40분 소요, 건조시간 제외 (자연광 건조 실시)</li>
			<li>세탁횟수 : 1일 최대 8회 X 드럼세탁기 4대 = 32회</li>
			<li>현장정검 및 협조 사항<br/>
				- 세탁차량과 건조대가 설치가될 수 있는 평평하고 넓은 공간 확보 <br/>
			 - 급수 및 배수 시설 등 확보<br/>
			 - 카페트, 장식이 달린 이불, 두꺼운 솜이불 등은 세탁이 불가함<br/>  - 신청 시군에서 자원봉사자 4명 이상 확보 요청(미 배치시 세탁 봉사 불가) 
			</li> -->
			<li>세탁소요시간 : 1회 기준 50 ~ 60분 소요, 자연광 건조 실시</li>
			<li>세   탁   량 : 하절기(30채) / 동절기(20채)</li>
			<li>자원봉사자 : 4명 이상 (세탁물 수거․배부 및 건조 후 정리)</li>
		</ul>
		</div>



		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">신청방법 및 접수</p></div><!----////타이틀---->
		<div class="sub_wrap_bus">
		<div class="system_box02">
			<h5 class="stitle02">신청방법</h5>
		<div class="txt_box sub_list_wrap">
				<ul>
					<li>
						<p class="tit bg2">① 신청서 서식 다운로드</p>
						<p class="cont"><a href="/bbs/sub/down/2025_down.zip" target="_blank">[다운로드 바로가기 <i class="fa fa-floppy-o" aria-hidden="true"></i> ]</a></p>
					</li>
					<li>
						<p class="tit bg2">② 신청서 작성</p>
						<p class="cont">이동세탁서비스 운영 신청서 작성</p>
					</li>
					<li>
						<p class="tit bg2">③ 신청서 도센터 송부</p>
						<p class="cont">공문신청 <br> (매월 활동 전월 20일까지)</p>
					</li>
					<li>
						<p class="tit bg2">④ 담당자 접수</p>
						<p class="cont">신청서 확인 및 홈페이지 일정 게시 <br>(활동 전월 25일 확정 게시)</p>
					</li>
				</ul>
			</div>

			<h5 class="stitle02">준비절차</h5>
				<div class="txt_box sub_list_wrap">
							<ul>
								<li>
									<p class="tit bg2">① 협조 사항 안내</p>
									<p class="cont">(도센터 → 시군센터)</p>
								</li>
								<li>
									<p class="tit bg2">② 세탁차 주차 및 활동 공간 확보</p>
									<p class="cont">(시군센터)</p>
								</li>
								<li>
									<p class="tit bg2">③ 세탁물 확보(전날 준비)</p>
									<p class="cont">(마을주민 및 이장님)</p>
								</li>
								<li>
									<p class="tit bg2">④ 이동세탁 서비스 지원</p>
									<p class="cont">(도, 시군센터)</p>
								</li>
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
