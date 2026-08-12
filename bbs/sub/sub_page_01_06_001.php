<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 협력기관";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    



   <?include G5_THEME_PATH."/sub_left_01.php"?>





    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">자원봉사 우수기업</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사 우수기업</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<div class="sub_wrap_page">
<style>
	
.listStyle02 {margin-top:25px;}
.listStyle02:first-child {margin-top:0;}
.listStyle02 > li {position:relative;padding-left:15px;font-size:17px;margin-top:10px;line-height:25px;word-break: keep-all;}
.listStyle02 > li:first-child {margin-top:0;}
.listStyle02 > li:before {content:"";width:4px;height:4px;background:#3d4b66;position:absolute;left:0;top:11px;}
.playing_box{font-size: 24px;left: 28%;width: 45%;margin:0 auto;height: 65px;line-height: 65px;border:1px solid #ddd;background:#fff;text-align:center;position:absolute;top: -31px;color: #353535;font-weight: 500;letter-spacing: -0.09rem;border-radius: 39px;}
</style>
















<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2025년도 우수기업 : 7개 기업(기업2, 기관3, 대학교2) </p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기업명</th>
		<th>주요활동 내용 및 기여도</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>목포</td>
    <td class="t_left">목포대학교</td>
    <td class="t_left">
	<ul class="listStyle02">
			<li>전라남도대학생연합봉사단 활동을 통해 간호학과 학생들이 참여한 지역 주민 건강 증진 활동과 아동권리교육을 통한 아동 권리 인식 제고</li>
			<li>ESG 환경 프로그램 일환으로 도서지역 볼런투어, 반려해변 가꾸기, 해외 및 연합봉사 활동을 통한 지역사회 나눔문화 확산</li>			
		</ul>
  </tr>
  <tr>
    <td>대학</td>
    <td class="t_left">동아보건대학교</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>2021년부터 농어촌 일손돕기, 한부모가정 지원, 지역 캠페인 및 볼런투어 등 다양한 봉사활동 전개</li>
			<li>2023~2025년 대학생연합봉사단 통합봉사, 전공 연계 봉사, 농번기 농가 지원을 통한 연합 봉사활동 확대</li>			
		</ul>
	
	</td>
  </tr>
  <tr>
    <td>진도</td>
    <td class="t_left">㈜한전MCS진도지점</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>관내 읍·면사무소와 협업한 정기 환경정화 활동을 통한 생활환경 개선</li>
			<li>고독사 위험군 정기 방문·안부 확인과 벽부등 설치를 통한 복지 사각지대 해소 및 지역 안전 강화</li>			
		</ul>
	</td>
  </tr>
  <tr>
    <td>해남</td>
    <td class="t_left">해남소방서</td>
    <td class="t_left">
		<ul class="listStyle02">
			
<li>노후주택 전기설비 개선, 화재 예방교육, 소방시설 점검·설치를 통한 주거 안전성 강화</li>
<li>염취약가구 및 외국인 주민 대상 안전물품 보급과 농번기 농기계 안전활동을 통한 생활안전 증진</li>

		</ul>
	</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td class="t_left">장흥종합사회복지관</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>25년간 지역 행사 및 국가적 재난 현장에서 전 직원이 참여하는 자원봉사 활동 전개</li>
<li>(재)광양시어린이보육재단 정기후원(CMS,연간 2,418만원)</li>
<li>이동세탁, 벽화그리기, 재난 현장 지원 등 다양한 봉사 프로그램 운영을 통한 지역사회 회복 기여</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>순천</td>
    <td class="t_left">순천온정떡집</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>명절 및 지역행사 시 떡 기부와 밥차 봉사 참여를 통한 지역사회 나눔 실천</li>
			<li>청소년 전통 떡 체험 및 식문화 교육과 장애인 행사 참여를 통한 전통문화 계승 및 복지 증진</li>			
		</ul>
   <tr>
    <td>무안</td>
    <td class="t_left">도담갈비,도담F&B</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>취약계층 기부·후원과 지역 농산물 활용 향토음식 개발을 통한 지역 상생 기반 조성</li>
<li>아동·청소년 정기 후원과 노인·장애인 대상 계절 맞춤 나눔 활동을 통한 지역사회 돌봄 강화</li>
		</ul>
	</td>
  </tr>
   

  </tbody>
</table>
</div>
</div>



























<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2024년도 우수기업 : 8개 기업(기관, 대학교) </p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>고흥</td>
    <td class="t_left">㈜현진건설</td>
    <td class="t_left">
	<ul class="listStyle02">
			<li>2019년부터 ‘팜앤빌더’ 봉사단체 구성해 도움이 필요한    취약계층 대상 주거환경개선 활동 추진</li>
			<li>방충망ㆍ문고리ㆍ전구ㆍ보일러 개보수 활동, 지역 문화행사, 취약계층 사랑나눔 자원봉사, 코로나19 백신 예방접종 지원, 자원봉사단체 볼런투어, 소록도 목욕 봉사 </li>			
		</ul>
  </tr>
  <tr>
    <td>장흥</td>
    <td class="t_left">㈜ 일 등</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>2013년부터 저소득가정 대상 희망가꾸기 주택신축 사업 추진 시 건축물 철거 및 폐기물 처리 재능기부를 통해 군민 주거복지 향상 기여</li>
			<li>위기가구 대상 화재주택 철거 및 폐기물 처리 재능기부, 초록우산 어린이재단 등 복지재단 매월 정기후원</li>			
		</ul>
	
	</td>
  </tr>
  <tr>
    <td>나주</td>
    <td class="t_left">전라남도<br>정보문화산업진흥원</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>2015년부터 공공기관으로서의 사회적 책임과 역할을 이행하기  위해 매년 사회공헌활동을 수립해 지역 취약계층 대상 지원</li>
			<li>고령화로 인해 일손이 부족한 지역에 농가지원 프로그램을  통해 인력난 해소 및 농촌사회 협력 강화활동 추진</li>
			<li>2022년 ESG 선포식 진행 후 정기적으로 임직원 모두 참여  가능한 환경정화 활동 추진 </li>
			<li>김장나눔, 연탄봉사, 집중호우 피해지원, 농촌 일손돕기  (3개 지역ㆍ13개 농가 대상 활동 3회 진행, 총 201명  참여), 환경보호ㆍ미화활동, 사랑의 나눔 헌혈 등</li>
			
		</ul>
	</td>
  </tr>
  <tr>
    <td>해남</td>
    <td class="t_left">한국전기 안전공사<br>전남남부지사</td>
    <td class="t_left">
		<ul class="listStyle02">
			
<li>농어촌 지역 전기안전 취약대상 보호 및 안전한 생활환경 조성 목적으로 지속적인 사회공헌활동 추진</li>
<li>해남군 300가구 차단기, 등기구 등 전기설비 교체 및 매년 해남군 등대원 및 자활센터 기부</li>
<li>전기 안전점검, 노후 전기설비 교체, 전기안전교육, 치매센터 전기설비 개선사업, 어촌사랑 봉사활동 등 </li>

		</ul>
	</td>
  </tr>
  <tr>
    <td>광양</td>
    <td class="t_left">동광양농업 협동조합</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>1972년 설립 초부터 임직원과 여성조직(농가주부 모임,   주부대학 총동창회, 하나로봉사단 등)이 참여하여     기업의 사회적 책임 수행과 기업시민으로서의 역할을   위해 지역사회 맞춤형 사회공헌활동 추진</li>
<li>(재)광양시어린이보육재단 정기후원(CMS,연간 2,418만원)</li>
<li>지역농가 일손지원, 특산물 수확 및 구매활동, 지역복지시설 사랑나눔 물품지원, 겨울철 소외계층 김장김치 전달, 홀몸어르신 밑반찬지원, 다문화 가정 친정보내주기 경비지원, 소외계층 어르신 난방비 지원</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>대학</td>
    <td class="t_left">순천제일대학교</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>LINC 3.0 사업의 일환으로 전공 연계 봉사활동 통해 지역사회 취약계층 대상 자원봉사 추진하여 독거노인ㆍ마을 주민 생활안전과 복지 수준 향상에 기여 및 자원봉사자(대학생)의 실무 역량과 직무능력 강화 공헌</li>
			<li>전공연계 봉사활동, 전라남도 대학생연합봉사단 활동, 청소년 자원봉사 교육 및 체험활동, 몽골 글로벌 전공연계 봉사단, 전라남도 자원봉사 박람회 심폐소생술 체험부스 운영 등</li>			
		</ul>
   <tr>
    <td>대학</td>
    <td class="t_left">전남도립대학교</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>2022년부터 도센터 자원봉사센터에서 운영하는 대학생 연합봉사단 자원봉사 참여 및 전남 공립대학으로서 지역사회 발전 위한 자원봉사활동 실천</li>
<li>농촌 일손돕기, 어르신 돌봄, 전통문화 체험봉사, 드론촬영 지역사회 행사 기록 봉사 등</li>
		</ul>
	</td>
  </tr>
   <tr>
    <td>협회</td>
    <td class="t_left">(사)전라남도새마을회</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>국내 및 해외 재난재해 발생 시 성금모금, 집중호우 및 산불피해지역 수해복구, 안전의식 교육 캠페인 등 자원봉사활동 전개</li>
<li>강원ㆍ경북 산불피해 복구지원 성금모금 5,000만원, 튀르키예ㆍ시리아 지진피해 성금모금 24,000천원, 도내 집중호우 수해복구 자원봉사 등</li>			
		</ul>
	</td>
  </tr>

  </tbody>
</table>
</div>
</div>












<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2023년도 우수기업 : 8개 기업(기업3, 기관1, 대학교3)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>여수</td>
    <td class="t_left">(주)청원시공</td>
    <td class="t_left">
	<ul class="listStyle02">
			<li>2008년 8월 자활기업으로 출발하여 복지 사각지대 등 의 열악한 환경에 거주하는 지역민들에게 집수리, 자비추가하여 자활기업의 목적에 맞게 수익금을 저소득층 가정에 환원, 연합모금 기부 동참하고 있으며 저소득층 여성청소년 위생용품 및 언더웨어 등 후원품 기부 등 활동</li>
			<li>농어촌, 장애인, 저소득층 주택개보수, 찾아가는 재능나눔실천, 저소득층 에너지 효율개선사업 등</li>			
		</ul>
  </tr>
  <tr>
    <td>광양</td>
    <td class="t_left">(주)에스엔엔씨</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>2010년부터 임직원 340명이 봉사단으로 참여하여 아동청소년, 장애인 등 취약계층 대상 나눔문화확산</li>
			<li>복지시설 노력봉사, 농촌일손지원, 미래세대 장학금지원, 기업공원가꾸기, 취약계층 문화체험활동, 학대피해아동 심리치료, 교육지원,장애인식개선캠페인활동,밑반찬지원, 전기수리,집수리,벽화,수중정화,환경구축사업,PC지원 등
 다양한 분야의 기업사회공헌 활동</li>			
		</ul>
	
	</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td class="t_left">이화전기안전관리(주)</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>2015년부터 저소득층대상 전기안전관리, 기부활동 등 장흥군민 복지증진에 기여</li>
			<li>한국전기기능장 80여명의 무료전기안전검사,보수,설비,기부활동,가로수지원,장학금지원 등 나눔문화확산에 기여</li>			
		</ul>
	</td>
  </tr>
  <tr>
    <td>무안</td>
    <td class="t_left">한국중부발전</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>지역사회문제 공동해결, 취약계층지원 등 지속적인 사회공헌활동 추진</li>
			<li>가고싶은섬 통합봉사활동(외달도, 관매도), 환경정화, LED전등교체 등 주거개선</li>	
			<li>온누리지역상품권 무안군 기탁 기부활동</li>	
			<li>깨끗한 관광문화의 도시조성기획 역사문화거리 플로깅 추진</li>
			<li>하루1kwh 줄이기 캠페인 홍보로 에너지절약 실천유도</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>나주</td>
    <td class="t_left">국립나주병원
호남권트라우마센터</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>재난발생시 신속한 구호와 복구활동을 위한 구성원으로 정신건강 증진을 위한 체계적인 봉사활동 운영</li>
			<li>재난현장 자원봉사 활동인력 마음돌봄관리 강화 교육</li>
			<li>박람회, 대학생통합봉사 등 마음안심버스지원으로 상황에 따른 정신건강위기개입 및 심리지원 서비스제공</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>목포</td>
    <td class="t_left">목포과학대학교</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>세탁봉사, 농어촌일손돕기, 대학생 연합봉사활동 등에 꾸준히 참여하여 지역사회활동에 기여함</li>
			<li>안녕가고싶은섬볼런투어, 방충망교체, LED전등교체,농촌일손돕기 양파뽑기, 대학생연합봉사활동 어르신대상 물리치료, 자원봉사박람회 뷰티미용학과 AI두피진단기체험부스운영, 전남인재육성장학생선발 등 다양한활동</li>			
		</ul>
   <tr>
    <td>순천</td>
    <td class="t_left">국립순천대학교</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>농어촌일손돕기, 대학생연합봉사단봉사활동 등에 꾸준히 참여하여 취약계층 지원</li>
			<li>지역아동시설 순천SOS어린이마을 멘토링 프로그램 운영</li>
			<li>순천관내 환경정화활동, 연탄나눔, 대학생 어르신지킴이단활동, 농촌봉사활동, 대학생연합봉사활동 참여 등</li>
		</ul>
	</td>
  </tr>
   <tr>
    <td>무안</td>
    <td class="t_left">초당대학교</td>
    <td class="t_left">
		<ul class="listStyle02">
			<li>대학생연합봉사활동 및 지역사회활동 꾸준히 추진</li>
			<li>다문화가정멘토링활동, 지역아동센터 교육봉사활동, 경로당비대면교류프로그램활동, 무안 푸드트럭나눔행사지원활동, 농촌일손돕기활동,금연캠페인활동,자원봉사박람회부스운영,대학생연합봉사 음식지원 및 이미용활동, 초당간호봉사단활동 등</li>			
		</ul>
	</td>
  </tr>

  </tbody>
</table>
</div>
</div>







<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2022년도 우수기업 : 7개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>여수</td>
    <td class="t_left">㈜케이씨씨 여천공장</td>
    <td class="t_left">사내 KCC행복나눔봉사단 조직하여 봉사활동 및 기부, 관광지주변과 수중정화 해양쓰레기 청결활동, 김장담기, 도심공원꽃밭가꾸기, 연탄배달, 치어방류, 탄소중립실천 캠페인활동 등</td>
  </tr>
  <tr>
    <td>순천</td>
    <td class="t_left">자금성</td>
    <td class="t_left">어르신 및 장애인, 다문화가족 등 취약계층 무료식사대접 및 물품지원, 경로잔치, 밑반찬, 도시락봉사, 김장봉사, 추모공원 정화사업, 아동복지시설 청소 등 </td>
  </tr>
  <tr>
    <td>광양</td>
    <td class="t_left">서강기업(주)</td>
    <td class="t_left">지역취약계층지원, 소외계층 문화체험도우미, 광양시청 연합봉사활동, 기부활동, 독거노인가정 및 취약계층가정 화재예방 경보기 설치, 겨울철 난방용 땔감지원, 장애인 나들이 지원 등</td>
  </tr>
  <tr>
    <td>구례</td>
    <td class="t_left">지나인건축사사무소</td>
    <td class="t_left">구례군 침수피해 주택건축물 무료설계, 임시주거용 조립주택 무료사용 지원, 이동식주택 기초설계 무상 재능기부 등 지역사회 발전을 위한 공동체로 상생</td>
  </tr>
  <tr>
    <td>해남</td>
    <td class="t_left">(사)대한한돈협회
      해남지부</td>
    <td class="t_left">경제적 취약계층 대상 명절, 연말에 한돈 나눔행사활동 전개, 자발적 양돈세 거출하여 해남군에 기탁, 명량축제, 미남축제 등 한돈 무료 시식회 먹거리 제공으로 지역축제 활성화에 기여</td>
  </tr>
  <tr>
    <td>영암</td>
    <td class="t_left">국립공원공단
      월출산국립공원사무소</td>
    <td class="t_left">캠페인, 공원자원보전, 외래식물 제거, 자연해설 교육, 탐방안내 등 지역발전을 위한 재능기부형 자원봉사활동</td>
  </tr>
  <tr>
    <td>무안</td>
    <td class="t_left">테라세라믹</td>
    <td class="t_left">무안 도자기 특구지역 활성화를 위한 도자기사업 관련, 고령화마을 등 봉사활동 및 후원</td>
  </tr>

  </tbody>
</table>
</div>
</div>





<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2021년도 우수기업 : 4개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>순천</td>
    <td class="t_left">에코둥이 어린이집</td>
    <td class="t_left">지역사회 연계 자원봉사활동 지원,
재난재해 자원봉사 활동 지원,
순천시 권분운동 참여,
기타 취약계층 대상 정기 후원 및 자원봉사</td>
  </tr>
  <tr>
    <td>광양</td>
    <td class="t_left">㈜포스코ICT</td>
    <td class="t_left">복지시설 및 기관 등 김장김치 지원,
취약계층 대상 재능봉사활동,
지역 내 안전 지킴이 자원봉사활동,
재난재해 복구활동 지원,
노후주택 보수 자원봉사활동</td>
  </tr>
  <tr>
    <td>화순</td>
    <td class="t_left">㈜신아에이치에스</td>
    <td class="t_left">저소득층 대상 연탄나눔 등 사회공헌활동,
코로나19 대비 취약계층 물품지원,
저소득층, 독거노인 대상 음식 지원,
저소득층 가구 주거개선 자원봉사,
관내 환경정화 및 나무심기 등 자원봉사활동</td>
  </tr>
  <tr>
    <td>무안</td>
    <td class="t_left">해야농장</td>
    <td class="t_left">대학생 장학금 후원,
저소득층 대상 쌀 및 식자재 지원,
지역 어르신 대상 이미용 등 통합봉사 실시</td>
  </tr>

  </tbody>
</table>
</div>
</div>



<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2020년도 우수기업 : 6개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>순천</td>
    <td class="t_left">순천종합사회복지관</td>
    <td class="t_left">푸드뱅크, 이동세탁, 케어안심주택, 스마트 돌봄 등 주민 특성에
      맞는 복지사업 및 코로나19 확산에 따른 순천시 권분운동 진행</td>
  </tr>
  <tr>
    <td>광양</td>
    <td class="t_left">(주)광양기업</td>
    <td class="t_left">문화재 지킴이 활동, 소년소녀 가장 및 복지시설, 장애인, 저소득가정 생활비 지원, 어르신 효도관광, 하천가꾸기, 수해복구활동 등</td>
  </tr>
  <tr>
    <td>담양</td>
    <td class="t_left">제6753부대 2대대</td>
    <td class="t_left">&ldquo;자원봉사의 날&rdquo;운영 사회복지시설 자원봉사활동, 수해·태풍피해 복구활동 등</td>
  </tr>
  <tr>
    <td>강진</td>
    <td class="t_left">강진신협</td>
    <td class="t_left">복지회관, 마을회관 등 식사지원, 취약계층 공부방 만들어주기, 도배, 장판 교체, 이불지원, 장애인가정 밑반찬 전달, 환경정화,
      사회복지시설 예산후원, 어르신건강과 친목 도모 등 후원</td>
  </tr>
  <tr>
    <td>해남</td>
    <td class="t_left">해남노인종합복지관</td>
    <td class="t_left">코로나 19 지역사회 유입차단 방역, 마스크지원, 어르신 도시락 전달, 주거개선, 어르신이동차량운영, 고독사지킴이 안부활동 등</td>
  </tr>
  <tr>
    <td>무안</td>
    <td class="t_left">도청한우</td>
    <td class="t_left">장애인, 복지관, 경로당 등 정기 무료식사대접, 라면, 고기 등 식재료 정기 지원</td>
  </tr>
  </tbody>
</table>
</div>
</div>

<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2019년도 우수기업 : 11개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
  <tr>
    <td>전라남도</td>
    <td class="t_left">한전케이디엔(주)</td>
    <td class="t_left">지역발전계획 수립을 통한 KDN IT움, SW교육강사 양성과정, KDN 장학금 등 지역 밀착형 사회공헌 추진</td>
  </tr>
  <tr>
    <td>전라남도</td>
    <td class="t_left">전력거래소</td>
    <td class="t_left">재난 긴급구호 활동, 에너지 취약층 지원, 생애주기별 맞춤형 사회공헌, 지역 다문화가정 자녀 인력양성 지원</td>
  </tr>
  <tr>
    <td>전라남도</td>
    <td class="t_left">대한물리치료사협회전남도회</td>
    <td class="t_left">전남도내의 경로당을 방문하여 필요한 의료지원이나 봉사활동을 진행해 왔으며, 특히 세월호 사고 현장 및 인양 현장에서 물리치료 자원봉사를 진행해 옴</td>
  </tr>
  <tr>
    <td>목포</td>
    <td class="t_left">씨월드고속훼리(주)</td>
    <td class="t_left">맞춤형 프로그램 개발로 실질적인 노인복지 방향제시, 사업지원으로 사회구성원으로서의 공동체 의식 형성에 기여하였으며 어려운 이웃과 아름다운 동행을 하고 있으며, 기업이익의 지역나눔 문화 확산을 통해 기업윤리를 실천하고 있음</td>
  </tr>
  <tr>
    <td>여수</td>
    <td class="t_left">한국전기안전공사 여수지사</td>
    <td class="t_left">1976년 9월 1일 개설이래, 40여 년 동안 여수지역의 전기안전에 대한 재난예방 및 사회적 취약계층에 대한 재능기부 및 매월 1회이상 사회복지시설 및 소외계층에 전기 안전사고 예방에 적극 앞장섬</td>
  </tr>
  <tr>
    <td>순천</td>
    <td class="t_left">한국철도공사<br/>(전남장비사업소)</td>
    <td class="t_left">2004년 갈대숲 봉사단을 창단하여 다각적인 기술을 가진 분들이 모여 집수리봉사를 필두로 재능기부 봉사활동을 활발히 함으로써 지역사회 발전과 주민화합에 기여하고 있음</td>
  </tr>
  <tr>
    <td>광양</td>
    <td class="t_left">광양시 새마을금고</td>
    <td class="t_left">지역사회공헌사업으로 조손가정 및 저소득가정 멘토링활동, 급식지원, 인재육성장학금 기부 등 자원봉사활성화에 기여해오고 있음</td>
  </tr>
  <tr>
    <td>담양</td>
    <td class="t_left">11공수특전 여단61대대</td>
    <td class="t_left">매월 정기적으로 사회복지시설 및 취약계층 가정을 방문하여 봉사활동을 실시하고 배식도우미, 어르신 말벗, 이동세탁봉사활동, 태풍피해지역 지원, 소외계층가구 결연활동 등 지속적인 봉사활동 추진</td>
  </tr>
  <tr>
    <td>고흥</td>
    <td class="t_left">농업회사법인(주)담우</td>
    <td class="t_left">2년간 9회에 걸쳐 1,800만원 상당의 꾸준한 기부와 지역 농산물을 활용한 소비촉진, 일자리 창출 등 기업과 지역사회가 함께하는 문화를 실천해 나가고 있음</td>
  </tr>
  <tr>
    <td>해남</td>
    <td class="t_left">한국전기안전공사<br/>전남남부지사</td>
    <td class="t_left">취약계층 전기고장시 긴급출동하여 응급조치 및 안전교육 실시 등 재해예방에 성실히 임하고 있으며, 특히 농어촌 마을 어르신들과 사회 취약계층 안전 확보에 노력</td>
  </tr>
  <tr>
    <td>무안</td>
    <td class="t_left">농업회사법인 ㈜한들</td>
    <td class="t_left">2015년부터 지역 소외계층을 대상으로 쌀을 기부하여 군민들의 식생활에 많은 기여를 하고 있는 기업임</td>
  </tr>
  </tbody>
</table>
</div>
</div>



<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2018년도 우수기업 : 6개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
    <tr>
    <td>여수</td>
    <td>(주)한화여수사업장</td>
    <td>&lsquo;혼자빨리 보다는 함께멀리&rsquo;의 사회공헌 철학을 바탕으로 기업시민으로서의 사회적 책임을 다하고자 수년간 노인대상 밥차, 배식, 도시락배달, 장애아동․ 청소년 프로그램지원, 명절나눔 행사, 농어촌봉사 등 활동</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>금호폴리켐(주)</td>
    <td>임직원 모두가 함께 참여하는 사랑의 빨간밥차 봉사활동저소득 노인들의 식사를 지원, 합동 칠순 잔치, 결손가정 및 다문화가정 지원, 교복지원 등 나눔과 사랑을 실천</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>보해양조(주)순천지점</td>
    <td>지역연계사업, 지역 내 대학생들과 함께하는 젊은잎새봉사단 운영, 깨끗한 순천시 만들기 관내청소, 불우한 학우 장학금지원 등 향토기업으로서 나눔활동</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>포스코엠텍광양사업소</td>
    <td>직원들이 매월 정기테마 봉사의 날을 지정하여 지역사회에 환원하는 나눔과 봉사활동을 통해 주변 이웃들과 꾸준히 소통해 오고 있으며 특히 2016년부터는 직원들 급여중 1~10% 공제된 금액을 포스코 1%나눔과 봉사활동사업을 추진하며 복지개선을 지원하고 있음</td>
  </tr>
  <tr>
    <td>해남</td>
    <td>대한조선주식회사</td>
    <td>사회봉사단/주부아카데미 운영, 농촌마을 지원, 김장나누기 행사, 환경개선 활동, 독거노인 지원, 농촌사랑 자매결연, 지역우수장학금 지급, 소외계층 문화행사 지원, 집짓기캠페인, 재난긴급지원, 다방면의 후원활동 등</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>롯데쇼핑(주)아울렛남악점</td>
    <td>직원들로 구성한 샤롯데봉사단을 결성하여 지역 소외계층 대상 생필품지원, 영정사진촬영, 복날백숙대접, 연탄, 지역아동센터 학용품지원, 집수리 전통시장 소화기지원 등 지역민들에게 삶의 희망을 주고 있음</td>
  </tr>
  </tbody>
</table>
</div>
</div>



<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2017년도 우수기업 : 9개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
    <tr>
    <td>여수</td>
    <td>여수공항공사 여수지사</td>
    <td>사회복지시설 물품지원 및 시설봉사, 지역사회 주거 및 환경정화활동, 맞춤형 섬지역 희망복지지원, 교복 나눔 지원, 찾아가는 IT서비스 지원 등</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>한국감정원 순천지사</td>
    <td>지역사회 장학금전달, 주택개보수, 사회복지시설 쌀 및 성금 기부 등</td>
  </tr>
  <tr>
    <td>광주</td>
    <td>남화토건주식회사</td>
    <td>50년 동안 기업 경영에서 발생한 기업이윤뿐만 아니라 사유재산을 출현하여 교육 및 취학 시설에 기부, 사회에 공헌한 사실이 매우 큼</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>골드클래스(주)</td>
    <td>주택보급률 확대 및 서민 주거 안정, 고품격 친환경 주택 건설, 지역사회에 발전기금 지원 등</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>LG이노텍</td>
    <td>자매결연 마을 정기적 맞춤형 자원봉사활동, 관내 초·중·고 학습기자재 및 장학금 전달, 김장봉사· 농번기 단감수확 봉사, 지역행사 교통안내 봉사활동 및 물품지원 등</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>㈜포스코컴텍 광양사업본부</td>
    <td>전직원 매월 봉사활동실시, 청소년 장학금 지원, 기초생활수급가정 및 복지시설 봉사, 자매결연 마을 일손지원, 각종 시행사 지원, 환경정화활동 등</td>
  </tr>
  <tr>
    <td>보성</td>
    <td>보성소방서</td>
    <td>119서민생활안전 지원단 구성 운영, 농촌일손돕기, 취약계층 위문품 지급 및 봉사활동, 찾아가는 소방안전점검, 취약계층 기초소방시설 보급, 범도민 응급처치 교육 </td>
  </tr>
  <tr>
    <td>여수</td>
    <td>GS칼텍스(주)여수공장</td>
    <td>사랑나눔터(노인무료급식소) 운영, 여수문화예술공원 &lsquo;예울마루&rsquo; 조성 및 운영, 위기청소년 마음톡톡 예술치유 프로그램, 도서학교 원어민 영어교실운영, 사회봉사단활동</td>
  </tr>
  <tr>
    <td>광주</td>
    <td>현대자동차(주)전남지역본부</td>
    <td>저소득가정 사랑의집수리, 연탄나눔·난방용품지원, 사회복지시설 식자재비 기부 및 배식봉사, 도 내 마을 자매결연 후 농촌사랑 운동참여 및 물품기부, 도내 사회복지 기관 및 취약계층 후원활동 및 기부</td>
  </tr>
  </tbody>
</table>
</div>
</div>


<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2016년도 우수기업 : 7개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
     <tr>
    <td>광양</td>
    <td>포스코 광양제철소</td>
    <td>포스코 임직원 전원 사회공헌 자원봉사 나눔 등 기업자원봉사 추진</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>롯데케미칼(주)</td>
    <td>주거환경개선, 불우이웃돕기, 사회복지, 대회협력활동 등 매년 100회 이상 사회공헌활동 실시</td>
  </tr>
  <tr>
    <td>영광</td>
    <td>한전KPS(주)한빛3사업처</td>
    <td>정비업무 활용재능기부, 저소득층 희망터전 만들기 봉사, 각종복지단체 및 지역행사 후원 및 봉사</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>㈜영무건설</td>
    <td>사회복지시설,주택개보수,물품지원,환경정리, 해외자원봉사활동 등</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>한국국토정보공사 담양지사</td>
    <td>저소득층주거환경개선,조손가정 정기후원,
      독거노인가정 봉사 문화재지킴이자원봉사</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>한국국토정보공사 장흥강진지사</td>
    <td>저소득층주거환경개선, 아동,청소년 교육생계 의료지원</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>㈜원영</td>
    <td>장애인문화체험,저소득층 화재감지기 설치, 불우이웃돕기, 농촌일손볻기, 노인요양시설,순천교도소 등 </td>
  </tr>
  </tbody>
</table>
</div>
</div>

<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2015년도 우수기업 : 8개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
       <tr>
    <td>담양</td>
    <td>한국도로공사 광주전남본부</td>
    <td>고속도로 휴게소대표음식을 메뉴로 직원봉사자들이 독거노인들과 요리와 식사를 함께하며 소통하는 나눔활동</td>
  </tr>
  <tr>
    <td>목포</td>
    <td>보해양조(주)</td>
    <td>광주전남지역 축제,문화행사,환경정화활동,기부,농촌봉사,장학사업,미래세대대학생봉사자 양성 기여</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>(주)LG화학</td>
    <td>주거환경개선,청소년 장학금지원,재능기부,여수시민되기운동,로컬푸드운동,상안검하수회복수술 지원사업 등 사회공헌프로그랜지속운영</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>현대제철</td>
    <td>현대제철직원,직원부인들로 구성하여 사회공헌 정례프로그램참여,
      회원들의회비로 16년간 어려운이웃의 생계지원,장학금지원,노력봉사를 해온 기업봉사조직</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>새마을금고</td>
    <td>건강하고 활기찬 농촌지역의 선구자 역할을 하고 있으며 여러 가지  어려운 환경 속에 있는 농촌 지역주민을 위해 봉사원들의 재능을   기부와 나눔활동을 실천함. </td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>삼성전자(주) 
      한국총괄 서부지사</td>
    <td>저소득․소외계층 가정에 대한 밑반찬(김장김치) 전달 및 가사정리 봉사활동, 지역민 전자상거래 교육, 불우이웃돕기, 다문화가정지원활동 및 기부활동으로 지역발전과 이웃사랑 실천</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>국일판넬</td>
    <td>저소득층의  붕괴위험가정 판넬지원,도배장판,도서기증,물리치료기기증,생필품지원등 봉사지원활동</td>
  </tr>
  <tr>
    <td>영광</td>
    <td>정주새마을금고</td>
    <td>매월 봉사활동진행,주민편익시설확충,경로당듀류지원,장학금지원,차량지원 등 기업의 사회적책임 구현</td>
  </tr>
  </tbody>
</table>
</div>
</div>


<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2014년도 우수기업 : 11개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
       <tr>
    <td>목포</td>
    <td>롯데쇼핑(주) 롯데마트목포점</td>
    <td>진도 세월호 자원봉사, 지역사회복지시설 자원봉사, 소외계층 자원봉사 및 후원, 바자회 등</td>
  </tr>
  <tr>
    <td>목포</td>
    <td>CJ헬로비전호남방송</td>
    <td>진도세월호 자원봉사 및 급식소 운영, 기부, 지역사회 복지시설 자원봉사 활동 및 후원방송</td>
  </tr>
  <tr>
    <td>여수</td>
    <td>삼성SDI 여수사업장</td>
    <td>소년소녀가장, 독거노인 결연, 중식지원, 김장담그기 지원, 저소득층 의치 지원 등</td>
  </tr>
  <tr>
    <td>나주</td>
    <td>전력거래소(기관)</td>
    <td>사회복지시설 봉사, 아동자립지원, 청소년 장학사업, 독거노인 밑반찬 지원  및 각종 기부 등</td>
  </tr>
  <tr>
    <td>순천</td>
    <td>㈜지본코스메틱</td>
    <td>상록수 자원봉사단
      2013년 사회복지시설 기부 및 봉사활동, 무료급식, 환경정화 , 손맛사지 등 </td>
  </tr>
  <tr>
    <td>광양</td>
    <td>㈜ 포렌</td>
    <td>포렌봉사단 운영
      장애아 전담아동 봉사, 아동, 청소년, 노인, 다문화가정 등 봉사 및 후원</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>아모레 담양특약점</td>
    <td>복지시설 및 경로당 이미용봉사, 자연환경 보호활동, 사회복지시설 후원, 장학금 기부 등</td>
  </tr>
  <tr>
    <td>화순</td>
    <td>녹십자 화순공장</td>
    <td>진도세월호 자원봉사, 다문화가정 결연, 저소득 아동 결연 및  혈우병 환자 돕기 활동 등</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>㈜ 일등환경</td>
    <td>저소득가정 주택신축 폐기물 무료 처리, 저소득 가정 아동 정기후원 등</td>
  </tr>
  <tr>
    <td>장성</td>
    <td>내장산국립공원 백암사무소</td>
    <td>장수사진촬영, 다문화가정 프로그램 운영, 취약계층 주거환경개선, 독거노인 생활용품지원, 밑반찬 나눔 활동 등 </td>
  </tr>
  <tr>
    <td>장성</td>
    <td>한국농어촌공사 장성지사</td>
    <td>소외계층 주거환경개선, 농촌일손돕기, 사회복지시설 위문, 기부, 헌혈, 문화재 지킴이, 환경정화 등</td>
  </tr>
  </tbody>
</table>
</div>
</div>


<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2013년도 우수기업 : 10개 기업(기관)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
     <tr>
    <td>도</td>
    <td>전남지방우정청</td>
    <td>사랑의집수리봉사단 외 다양한 봉사활동 추진</td>
  </tr>
  <tr>
    <td>나주</td>
    <td>한국쓰리엠 나주공장</td>
    <td>한국쓰리엠 사회공헌단
      -독거노인,조손가정,지역아동센터 지원 ,장애우가정방문, 재능나눔봉사 등</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>(주)에어릭스</td>
    <td>드림봉사단
       장애우 봉사, 저소득가정지원, 지역 봉사 등 다양한 활동 전개 </td>
  </tr>
  <tr>
    <td>광양</td>
    <td>(주)프롬스</td>
    <td>프롬스봉사단
      - 결식아동지원
      - 농촌취약계층지원 등</td>
  </tr>
  <tr>
    <td>담양</td>
    <td>(주)북부환경</td>
    <td>독거노인 및 저소득층 집수리 및 환경미화 등 봉사활동 전개 </td>
  </tr>
  <tr>
    <td>보성</td>
    <td>(주)와이엔텍보성컨트리클럽</td>
    <td>보성CC우먼파워
      -어르신, 저소득 초등학생 지원, 다문화 합동결혼식,농촌일손돕기 자원봉사 활동 전개</td>
  </tr>
  <tr>
    <td>장흥</td>
    <td>장흥중앙로타리클럽</td>
    <td>독거노인, 다문화가정 지원사업 , 희망하우스 신축, 다문화공부방 지원 등 봉사활동 전개</td>
  </tr>
  <tr>
    <td>강진</td>
    <td>(주)해들녘애</td>
    <td>소외계층 집수리, 청소, 이미용 등 지속적이고 꾸준한 봉사활동 전개</td>
  </tr>
  <tr>
    <td>영암</td>
    <td>현대삼호중공업(주)</td>
    <td> 행복약속봉사단
      -지역복지시설 후원 및 지원, 1사1촌 결연 및 봉사,사회공헌 활동 전개 </td>
  </tr>
  <tr>
    <td>무안</td>
    <td>아시아나에어포트</td>
    <td>통합사례가정 청소 봉사, 집수리 봉사환경정화, 캠페인 등 봉사활동 전개</td>
  </tr>
  </tbody>
</table>
</div>
</div>


<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">2012년도 우수기업 : 10개 기업(기관)  ※1개소 폐업</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t02">
<thead>
	<tr>
		<th width="15%">지역</th>
		<th width="20%">기관명</th>
		<th>주요활동</th>
  </tr>
</thead>
<tbody class="text_left01">
 <tr>
    <td>목포</td>
    <td>한국방송 목포방송국</td>
    <td>소외 도서 산간지역 면단위 주민대상 의료팀 맛사지, 네일아트, 집수리, 전기수리, 효도·커플사진, 자장면 점심제공 등 </td>
  </tr>
  <tr>
    <td>순천</td>
    <td>한국철도공사 전남본부</td>
    <td>소외계층 문화체험 실시, 창의력 개발수업, 학교폭력청소년 돕기, 재활용나눔장터, 해롱천 지킴이 등 다양한 활동 전개</td>
  </tr>
  <tr>
    <td>나주</td>
    <td>한전산업개발(주) 나주지점</td>
    <td>마을 독거노인 및 소외계층 전기수리작업, 마을회관 생필품전달 및 환경정비 작업, 노인복지관 점심배식봉사</td>
  </tr>
  <tr>
    <td>광양</td>
    <td>광양제철소 외주파트너사협회</td>
    <td>헌집고쳐주기, 마을청소, 소년소녀가장 및 독거노인후원, 국제행사 등 지원 성공개최에 기여, 1사 1하천가꾸기 및 농촌일손돕기 등</td>
  </tr>
  <tr>
    <td>보성</td>
    <td>보성아산병원</td>
    <td>교복·장학 지원사업, 다문화가정 행복지킴이, 환경정화활동 등</td>
  </tr>
  <tr>
    <td>영암</td>
    <td>한국농어촌공사 영암지사</td>
    <td>노인복지시설 방문 생필품전달, 환경정화, 말벗, 장기자랑, 다문화가정 마늘뽑기. 사랑의 헌혈, 집고쳐주기, 태풍피해농가 일손돕기</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>한국공항공사 무안지사</td>
    <td>다문화가정 모국방문후원 및 멘토링, 주거환경개선, 전기안전점검, 문화체험행사 실시, 1사1탐방로 환경정화 등</td>
  </tr>
  <tr>
    <td>함평</td>
    <td>한국도로공사 동함평영업소
      MH서비스 (2014년 폐업)</td>
    <td>타 기관과 연계하여 시골마을 집수리, 주변환경정화 등 활동 전개복지시설방문 청소, 김장담그기, 어르신말벗, 생필품전달 등</td>
  </tr>
  <tr>
    <td>영광</td>
    <td>한국수력원자력(주)
      영광원자력본부</td>
    <td>테마별 사회공헌 활동, 전문봉사단과 연계 봉사활동, 태풍피해돕기 성금지원 및 복구 봉사활동 등</td>
  </tr>
  <tr>
    <td>무안</td>
    <td>농협중앙회 전남지역본부</td>
    <td>조손가정자매결연, 무료의료지원 및 요양원봉사, 다문화가정모국방문항공권 지원, 희망송아지 나눔, 주거환경개선, 도서기부, 여름방학 교육캠프, 사랑의동전 모으기, 농촌일손돕기</td>
  </tr>
  </tbody>
</table>
</div>
</div>





</div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
