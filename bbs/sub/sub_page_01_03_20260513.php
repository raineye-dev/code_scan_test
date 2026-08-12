<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 주요산업";
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
        <h2 class="page__title">사업소개</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">사업소개</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>




	<div class="vision_mission section" >
					<p class="top_txt"><strong>Business Direction</strong>자원봉사 가치 확장과 참여 확산<br/>
                                            연대와 화합으로 따뜻한 전라남도</p>
<!--					<em>2025 전라남도자원봉사센터</em> -->
	</div>





	
<div class="imgs_box">
<img src="/bbs/sub/img/sub_page_01_03_jpg01.png">
</div>
	

<div class="bsection">
  <div class="table_scroll sub_table_wrap">
    <table class="table_t02">
      <caption>
      자원봉사 문화와 참여
      </caption>
      <thead>
        <tr>

        <th width="20%">구분</th>
      <th>사업명　</th>
      <th>세부내용</th>
        </tr>
      </thead>
      <tbody>

  <tr>
    <th rowspan="8">문화
      참여(8)</th>
    <td>전라남도 자원봉사 박람회</td>
    <td>자원봉사활동 홍보 및 참여의 장 마련</td>
  </tr>
  <tr>
    <td class="board_left01">나눔이동세탁차 운영</td>
    <td class=" ">취약계층 및 재난현장등 이동세탁지원</td>
  </tr>
  <tr>
    <td class="board_left01">전남 대학생연합봉사단 운영</td>
    <td>대학별특화활동을통한청년봉사 활성화</td>
  </tr>
  <tr>
    <td class="board_left01">남도사랑봉사단운영</td>
    <td>재난및국제행사지원,공모사업,워크숍등</td>
  </tr>
  <tr>
    <td class="board_left01">은퇴재능남도친구들 운영</td>
    <td>은퇴후봉사활동을 통한 사회참여 지원</td>
  </tr>
  <tr>
    <td class="board_left01">세바시V 전남대회</td>
    <td>봉사활동사례콘텐츠제작및발표대회</td>
  </tr>
  <tr>
    <td class="board_left01">바로온봉사 플랫폼 운영</td>
    <td>비대면 봉사활동 활성화를 위한 어플운영</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사 홍보 활성화</td>
    <td>자원봉사 홍보 및 홍보전문가 양성 지원</td>
  </tr>
  <tr>
    <th rowspan="7">인프라(7)</th>
    <td>법인사업(이사회 및 총회)</td>
    <td>총회,이사회,위원회등 법인업무</td>
  </tr>
  <tr>
    <td class="board_left01">호남권광역센터역량강화워크숍</td>
    <td>호남권 광역센터 관리자 네트워크</td>
  </tr>
  <tr>
    <td class="board_left01">시군 자원봉사센터장 워크숍</td>
    <td>도내22개시군센터장 교류 협력</td>
  </tr>
  <tr>
    <td class="board_left01">기업 사회공헌 활성화</td>
    <td>MOU,기업맞춤형봉사,우수기업선정</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사센터 관리자 역량강화</td>
    <td>직원역량강화, 프로그램 개발 등</td>
  </tr>
  <tr>
    <td class="board_left01">영호남자원봉사교류협력</td>
    <td>영호남 자원봉사 상생협력 네트워크</td>
  </tr>
  <tr>
    <td class="board_left01">1365 자원봉사포털 운영</td>
    <td>자원봉사활동 실적 통합관리 및 통계</td>
  </tr>
  <tr>
    <th rowspan="11">전략사업(11)</th>
    <td>재난안전 자원봉사 운영</td>
    <td>재난대응 긴급봉사단 운영 및 지원</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사 소양교육</td>
    <td>학교,기업,기관,단체등 대면·비대면교육</td>
  </tr>
  <tr>
    <td class="board_left01">전남자원봉사자 대회</td>
    <td>우수봉사자 표창시상 및 기념식, 퍼포펀스 등</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사마일리지제운영</td>
    <td>우수봉사자증 발급, 인정 보상제도</td>
  </tr>
  <tr>
    <td class="board_left01">우수자원봉사자 연수</td>
    <td>우수 자원봉사자선진지견학</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사 수요처관리사업</td>
    <td>수요처 심의운영위원회 및 교육자료 제작</td>
  </tr>
  <tr>
    <td class="board_left01">블루재능봉사단 운영</td>
    <td>전문 재능봉사단체발굴 및 역량강화 지원</td>
  </tr>
  <tr>
    <td class="board_left01">사랑실은 가족봉사단 운영</td>
    <td>가족의 나눔과 실천을 통한 소통과 공익증진</td>
  </tr>
  <tr>
    <td class="board_left01">전남 섬 볼런투어</td>
    <td>전남 가고싶은섬 관광과 봉사활동 결합</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사관리사 자격과정 운영</td>
    <td>자원봉사자 및 관리자 역량강화 지원</td>
  </tr>
  <tr>
    <td class="board_left01">자원봉사 명예의 전당 운영</td>
    <td>디지털 명예의전당 운영 및 인증패 수여</td>
  </tr>
  <tr>
    <th rowspan="2">교류협력(2)</th>
    <td>국제교류 협력사업</td>
    <td>해외교류를 통한 글로벌 자원봉사 확대</td>
  </tr>
  <tr>
    <td class="board_left01">전국생활체육대축전 자원봉사운영</td>
    <td>홍보·모집·선발·배치 등 자원봉사 운영 전반</td>
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
