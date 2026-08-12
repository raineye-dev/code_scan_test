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
        <h2 class="page__title">재난안전 자원봉사 운영</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">재난안전 자원봉사 운영</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

		<div class="sub_topbox type3">
            <div class="inner_box">
                <span class="ir circle circle-lg ir-icon60 ir-icon__lg icon1"></span>
                <div class="txtwrap">
                    <strong class="h-box">재난안전 자원봉사 운영</strong>
                    <p>대규모 재난(자연, 사회) 발생 시 신속한 구호와 복구 활동을 위해 재난 자원봉사 체계를 구축하고, 자원봉사자 활동 자원으로 재난 대응의 효율성을 높이고 피해지역 회복 촉진</p>
                </div>
                
            </div>
        </div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사업개요</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>추진기간 : 연중</li>
			<li>대    상 : 도, 시·군 재난업무 담당자 및 긴급자원봉사단 등</li>
			<li>주요내용 : 통합자원봉사지원단 직무교육, 긴급자원봉사단 운영, 도·내외 재난발생 지역 자원봉사 지원 등</li>
			
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">운영체계</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>자원봉사센터별 역할</br>
			- (한국중앙자원봉사센터) 재난현장 통합자원봉사지원단 총괄 조정·지원</br>
			- (전라남도자원봉사센터) 통자단 직무교육 실시, 재난현장 상황보고·조정·지원</br>
			- (전남 22개 시군자원봉사센터) 통자단 직무교육 참여, 재난현장 상황보고·관리</br>
			- (전남 긴급자원봉사단) 재난현장 자원봉사활동 초기대응 및 간담회 참여 등</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진계획</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>재난현장 봉사활동 				  : 연중(재난발생 시)</li>
   <li>긴급자원봉사단 단체 연락망 현행화   : 1~3월</li>
   <li>재난현장 통합자원봉사지원단 직무교육 및 긴급자원봉사단 간담회 추진 : 6월</li>
   <li>재난현장 자원봉사 운영 성과보고회     : 11월</li>

		
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">

		<li>재난 자원봉사 활동 교육을 통해 자원봉사자 현장 대응능력 제고</li>
   <li>재난현장 통합자원봉사지원단 지원체계에 따른 신속한 구호 및 복구</li>
		</ul>
		</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">긴급자원봉사단 구성 현황(19개 단체, 360명)</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t10">
  <thead>
     <tr>
      <th width="10%">연번</th>
      <th width="15%">기능분류</th>
      <th>단 체 명</th>
      <th width="10%">인 원</th>
      <th>주요 임무</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>계</td>
      <td>&nbsp;</td>
      <td>19 단체</td>
      <td>360</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>1</td>
      <td rowspan="6">긴급구호</td>
      <td>남도사랑봉사단</td>
      <td>30</td>
      <td>• 이재민 대피 안내 및 대피소 지원활동</td>
    </tr>
    <tr>
      <td>2</td>
      <td>'사랑의밥차' 봉사단(순천)</td>
      <td>10</td>
      <td>• 이재민 및 자원봉사자 식사지원<br>※ 이동밥차 및 식사지원</td>
    </tr>
    <tr>
      <td>3</td>
      <td>한국해양구조협회 전남동부지부</td>
      <td>20</td>
      <td>• 이재민 구호 및 각종 행정지원</td>
    </tr>
    <tr>
      <td>4</td>
      <td>전라남도 여성자원봉사협의회</td>
      <td>20</td>
      <td>• 이재민 구호 및 각종 행정지원</td>
    </tr>
    <tr>
      <td>5</td>
      <td>바르게살기운동 전라남도협의회</td>
      <td>20</td>
      <td>• 이재민 구호 및 각종 행정지원</td>
    </tr>
    <tr>
      <td>6</td>
      <td>전라남도 의용소방대연합회</td>
      <td>20</td>
      <td>• 이재민 구호 및 각종 재난대응</td>
    </tr>
    <tr>
      <td>7</td>
      <td rowspan="8">복구지원</td>
      <td>한국도로공사 광주전남지부</td>
      <td>20</td>
      <td>• 피해지역 도로 이물질 제거 및 긴급 복구</td>
    </tr>
    <tr>
      <td>8</td>
      <td>HD현대삼호</td>
      <td>20</td>
      <td>• 피해지역 복구지원(주택, 제방 등)</td>
    </tr>
    <tr>
      <td>9</td>
      <td>전력거래소(KPX)</td>
      <td>20</td>
      <td>• 피해가옥 수리(전기 등)</td>
    </tr>
    <tr>
      <td>10</td>
      <td>순천제일대학교 산학협력단</td>
      <td>30</td>
      <td>• 피해가옥 수리(가스, 전기 등)</td>
    </tr>
    <tr>
      <td>11</td>
      <td>구례귀농귀촌협회</td>
      <td>20</td>
      <td>• 피해가옥 수리(도배, 전기 등)</td>
    </tr>
    <tr>
      <td>12</td>
      <td>새마을지도자 전라남도협의회</td>
      <td>30</td>
      <td>• 농업시설 및 농작물 제거</td>
    </tr>
    <tr>
      <td>13</td>
      <td>한국자유총연맹 전남지부</td>
      <td>20</td>
      <td>• 이재민 대피 안내</td>
    </tr>
    <tr>
      <td>14</td>
      <td>(사)전라남도자율방범연합회</td>
      <td>20</td>
      <td>• 고립지역 생계 구호</td>
    </tr>
    <tr>
      <td>15</td>
      <td rowspan="2">교통지원</td>
      <td>해병대전우회 전남연합회</td>
      <td>20</td>
      <td>• 재난지역 교통 통제 및 주차 안내</td>
    </tr>
    <tr>
      <td>16</td>
      <td>전국모범운전자연합회 전남지부</td>
      <td>10</td>
      <td>• 구호물품 수송 및 교통 통제</td>
    </tr>
    <tr>
      <td>17</td>
      <td rowspan="3">의료·방역</td>
      <td>국립나주병원 호남권트라우마센터</td>
      <td>10</td>
      <td>• 이재민 정서지원 및 심리치료</td>
    </tr>
    <tr>
      <td>18</td>
      <td>대한물리치료사협회 전남도회</td>
      <td>10</td>
      <td>• 이재민 대상 건강진료 및 활동지원</td>
    </tr>
    <tr>
      <td>19</td>
      <td>한국방역협회 전남지회</td>
      <td>10</td>
      <td>• 피해가옥 방역 및 소독</td>
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
