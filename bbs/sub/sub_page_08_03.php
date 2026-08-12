<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="인정보상"  ;
$g5['title'] = "인정보상 | 자원봉사종합보험";
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
        <h2 class="page__title">자원봉사 종합보험</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">인정보상</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사종합보험</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		 <div class="cont_box01">
		<h4 class="title">「자원봉사활동기본법 시행령」 제10조(자원봉사자에 대한 보험가입 등)</h4>
		<p>-자원봉사활동 중에 발생한 자원봉사자 및 타인의 신체·재물의 손상에 대한 보호</p>
	 </div>
	 <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사종합보험은?</p></div><!----////타이틀---->
	 <div class="txt_box sub_list_wrap">
	 "자원봉사활동 중" 발생할 수 있는 사고위험으로부터 자원봉사자를 보호하기 위해 자원봉사센터(1365), 한국사회복지협의회(VMS), 한국청소년활동진흥원(DOVOL)에서 자원봉사자 분들에게 제공하는 보험 서비스입니다.<br/>
자원봉사종합보험의 목적은 자원봉사자들이 안전한 환경 속에서 자원봉사활동을 할 수 있도록 하고, 봉사 활동 중 발생하는 각종 사고에 대한 경제적, 심리적 불안을 해소하고자 함에 있습니다.<br/>
자원봉사활동 중 예기치 못한 상해사고 및 배상사고가 발생하였다면, 자원봉사종합보험을 통해 지원 받으세요! 
	 </div>
	 <div class="txt_box sub_list_wrap">※ 자원봉사종합보험은 자원봉사 포털사이트(1365, VMS, DOVOL)를 이용하시지 않고 개별적으로 자원봉사활동을 운영하는 기관이나 자원봉사활동을 하시는 분들에 대해서는 지원하지 않습니다. </div>

	 <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">보험적용대상</p></div><!----////타이틀---->
	  <div class="txt_box">보장기간 내 1365, VMS, DOVOL 사이트를 통해 봉사활동에 참여한 봉사자<br/>
		 <span class="font_red">※ 보험계약(보장) 기간 : 2025.5.1.~2026.4.30.(1년간) / 자원봉사 활동 시 매년 갱신</span><br/>
		  <ul class="dot_list">
			<li class="font_red">사고발생일로부터 3년 이내 청구가능, 매년 보장범위 및 금액은 상이 할 수 있음. 1차 청구(치료) 완료 후 추가치료 발생 시 재청구 가능</li>	
			</ul>	
		  
	  </div>

	<div class="txt_box sub_list_wrap">
	<div class="font_black">전용 CS센터 & 카카오상담채널</div>
	<ul class="dot_list">
		<li>전화 : 1833-4435, 팩스 0303-9444-1365 / 0303-3441-4435</li>	
		<li>이메일 : 1365@openyourplan.com / volunteer@openyourplan.com</li>	
		<li>카카오플러스 친구 : 자원봉사종합보험</li>		
	</ul>	
</div>


		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">보장대상</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">1365, VMS, DOVOL 사이트를 통해 참여한 자원봉사활동 중 발생한 사고에 대해 보장</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사자 보장내역</p></div><!----////타이틀---->
		<div class="sub_table_wrap sub_list_wrap ">
<table class="table_t02">
<thead>
  <tr>
    <th>구분</th>
    <th>상해사망/<br>
      후유장애</th>
    <th>상해입원/<br>
      통원일당</th> 
    <th>화상·골절진단<br> 
    /수술위로금</th>
    <th>자연재해<br>
      상해사망</th>
    <th>상해흉터<br>
      성형</th>
    <th>성폭력범죄<br>
      상해보상</th>
    <th>성폭력범죄<br>
      보상금</th>
	   <th>생산물<br>
      배상책임</th>
  </tr>
</thead>
<tbody>
 
  <tr>
    <td>금액</td>
    <td>2억</td>
    <td>3만/1만</td>
    <td>50만/100만</td>
    <td>5억</td>
    <td>5백만</td>
    <td>5백만</td>
    <td>1천만</td>
	<td>5억</td>
  </tr>
 </tbody>
</table>
</div>
<div class="sub_table_wrap sub_list_wrap ">
<table class="table_t02">
<thead>
<tr>
    <th>구분</th>
    <th>의사상자<br/>
      상해위험</th>
    <th>특정전염병<br/>
      보상금</th>
    <th>자원봉사자<br/>
      배상책임</th>
    <th>주최자배상<br/>
      (영업배상)</th>
    <th>자기부담금지원보장</th>
    <th>구내치료비<br/>
      (자연재해)</th>
    <th>교차배상<br/>
      (피보험자간 배상책임)</th>
	  <th>개인정보<br/>
배상책임
     </th>
  </tr>
</thead>
<tbody>
<tr>
    <td>금액</td>
    <td>2억</td>
    <td>1백</td>
    <td>2억</td>
    <td>5억</td>
    <td>5십</td>
    <td>1억</td>
    <td>2억/5억</td>
	<td>2억</td>
  </tr>
 </tbody>
</table>
</div>

<div class="sub_table_wrap sub_list_wrap ">
<table class="table_t02">
<thead>
<tr>
    <th>구분</th>
    <th>냉/온열진환<br/>진단금</th>
    <th>냉/온열진환<br/>입원일당</th>
    <th>정신적피해<br/>법률비용</th>
    <th>사회재난<br/>사망</th>
    <th>뺑소니·무보험<br/>상해사망</th>
    <th>뺑소니·무보험<br/>후유장해</th>
    <th>교통사고<br/>처리지원금</th>
  </tr>

</thead>
<tbody>
 <tr>
    <td>금액</td>
    <td>5십</td>
    <td>5만</td>
    <td>1천</td>
    <td>2억</td>
    <td>5억</td>
    <td>5억</td>
    <td>5천</td>
  </tr>
 </tbody>
</table>
<p>보험사  삼성화재</p>
</div>

<!--<h5 class="stitle02"> 병원비 보장은 물론, 중상해에 대한 위자료도 보장해 드립니다. </h5>
<div class="txt_box sub_list_wrap">
	<ul class="dot_list">
		<li>자원봉사활동 중 상해로 발생한 병원비를 2천만원 한도로 보장  </li>
		<li>2도 이상의 화상, 골절, 중상해 입원치료 등 피해의 정도에 따라 위자료를 지급해 드립니다.</li>		
	</ul>	
</div>
<h5 class="stitle02">실수로 다른 사람을 다치게 하거나 물건을 망가뜨렸다면 배상책임 보장으로 안심하세요.  </h5>
<div class="txt_box sub_list_wrap">
	<ul class="dot_list">
		<li>자원봉사자가 봉사활동 중 다른 사람의 신체 또는 재산에 손해를 입혀 발생한 법률상 배상책임을 보상하여 드립니다.<br/>
    ※ 자기부담금 : 사고당 2만원</li>		
	</ul>	
</div>
<h5 class="stitle02">재해로 입은 사망 또는 후유장해를 보장해 드립니다. </h5>
<div class="txt_box sub_list_wrap">
	<ul class="dot_list">
		<li>자원봉사활동 중 급격하고도 우연한 외래의 사고로 신체를 다쳐 사망 또는 후유 장해가 발생한 경우, 사망 시 보험가입금액 전액을, 후유장해 시 장해정도에 따라 보장금액의 3 ~ 100%를 보장해 드립니다.</li>		
	</ul>	
</div>

<h5 class="stitle02">자원봉사시행기관을 통해 보험금을 청구 하실 수 있습니다. </h5>
<div class="txt_box sub_list_wrap">
	<ul class="dot_list">
		<li>소속된 자원봉사시행기관의 봉사활동 확인 절차를 통해 사고접수 할 수 있습니다.<br/> (자원봉사시행기관: 자원봉사센터, 한국사회복지협의회, 한국청소년활동진흥원)</li>		
	</ul>	
</div>-->

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">보험금 청구 진행절차</p></div><!----////타이틀---->
<div class="step-1st sub_list_wrap">
    <div class="step_col">
        <div class="step_l">
            <div class="icon_circle">
                <img src="/bbs/sub/img/sub_page_08_03_002.png" alt="제출">
            </div>
            <div class="step_txt">
                <span class="txt_blue">STEP 1</span>
                <h5 class="txt_nb2 f20">자원봉사자</h5>
            </div>
        </div>
        <div class="step_r">
            <!--<h3 class="h3">제출</h3>-->
            <p class="txt-h2">해당기관으로 사고사실 전달<br/>
			1365(지역자원봉사센터)<br/>
			VMS(전국사회복지협의회 1688-1090<br/>
			DOVOL(한국청소년활동진흥원) 02-330-2800</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="step_col">
        <div class="step_l">
            <div class="icon_circle">
                <img src="/bbs/sub/img/sub_page_08_03_001.png" alt="접수">
            </div>
            <div class="step_txt">
                <span class="txt_blue">STEP 2</span>
                <h5 class="txt_nb2 f20">보험담당자</h5>
            </div>
        </div>
        <div class="step_r">
             <!--<h3 class="h3">접수</h3>-->
            <p class="txt-h2">접수서류 및 추가서류 확인</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="step_col">
        <div class="step_l">
            <div class="icon_circle">
                <img src="/bbs/sub/img/sub_page_08_03_003.png" alt="통보">
            </div>
           <div class="step_txt">
                <span class="txt_blue">STEP 3</span>
                <h5 class="txt_nb2 f20">보험사</h5>
            </div>
        </div>
        <div class="step_r">
             <!--<h3 class="h3">통보</h3>-->
            <p class="txt-h2">보험금 신청 접수 및 보험금지급 안내(자원봉사자, 각 기관 보험업무담당자)</p>            
        </div>
        <div class="clear"></div>
    </div>
</div>



<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">보험금 청구시 구비서류</p></div><!----////타이틀---->
<h5 class="stitle02">3대필수서류 : 全담보 청구시,</h5>
<div class="txt_box sub_list_wrap">
<ul class="dot_list">
		<li>보험금 청구서</li>	
		<li>개인정보처리동의서</li>	
		<li>해당 기관 발급 자원봉사활동인증서</li>		
	</ul>	
</div>
<h5 class="stitle02">담보별 구비서류</h5>
<div class="sub_table_wrap sub_list_wrap ">
<table class="table_t02">
<thead>
   <tr>
    <th>상해사망/사회재난사망/상해후유장해/의사상자/상해위험(15세 미만제외)</th>
    <th>상해입원일당(180일한도)/동원일당(30일한도)</th>
    <th>자원봉사배상책임/주최자배상책임(영업배상)</th>
    <th>치료비(천재지변 치료비 포함)</th>
  </tr>
</thead>
<tbody>
 <tr>
    <td>-사망 : 사망진단서, 상속관계확인서류, 피보험자의 기본증명서, 위임시 위임장, 인감증명서
      -장해: 장해진단서</td>
    <td><ul>
      <li>통원확인서/입퇴원확인서</li>
    </ul></td>
    <td>-대물배상 : 수리견적서(영수증), 관련사진
      -대인배상 : 진단서, 치료비영수증</td>
    <td>-진료비 세부내역서, 진료비 계산영수증</td>
  </tr>
 </tbody>
</table>
</div>


<div class="sub_table_wrap sub_list_wrap ">
<table class="table_t02">
<thead>
   <tr>
    <th>골절진단/화상진단/골절수술/화상수술</th>
    <th>얼굴성형비용/특정전염병보상금/식중독보상금</th>
    <th>성폭력범죄보상금/성폭력범죄상해보상금</th>
    <th>자연재해사망/뺑소니/무보험차상해사망,상해후유장해(15세미만, 사망담보제외)</th>
  </tr>
</thead>
<tbody>
<tr>
    <td>-진단서/수술확인서/초진차트</td>
    <td>-진단서, 수술확인서</td>
    <td>-진단서, 공소장, 사건사고사실확인서</td>
    <td>-사망 : 사망진단서, 상속관계확인서류, 피보험자의 기본증명서, 위임시 위임장, 인감증명서
      -장해: 장해진단서</td>
  </tr>
 </tbody>
</table>
</div>



<div class="sub_table_wrap sub_list_wrap ">
<table class="table_t02">
<thead>
   <tr>
    <th>자동차보험 협사합의금보상</th>
    <th>자동차보험자기부담금</th>
    <th>정신적피해보송비용</th>
  </tr>
</thead>
<tbody>
<tr>
    <td>-사고 발생시 개별안내</td>
    <td>-자동차보험증권,자차보험금 지급확인서</td>
    <td>-사고 발생시 개별안내</td>
  </tr>
 </tbody>
</table>
</div>





<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사자 종합보험 관리시스템 상세내용 확인</p></div><!----////타이틀---->
<div class="sub_btn_wrap">
				<a href="https://direct.samsungfire.com/moi1365/index.html" class="btn small round mt10" target="_blank">자원봉사자 종합보험 자세히보기<i class="b_icon icon_down"></i></a>
				
			</div>




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
