<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="이용안내"  ;
$g5['title'] = "이용안내 | 개인정보처리방침";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
  
	
	
	
	<?include G5_THEME_PATH."/sub_left_06.php"?>





    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">개인정보처리방침</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">이용안내</a></li>
            <li class="n3"><a href="" class="navi_ov">개인정보처리방침</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

		

<div id="txt" class="sub0101">
<!-- content start -->
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보의 처리 목적</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<p class="information03">전라남도가 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집·보유 및 처리되고 있습니다.</p>
		</div>
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보의 처리 및 보유기간</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
<p class="information03">개인정보 처리는 정보주체의 동의, 법률 규정 등 일정한 경우에만 개인정보를 수집하며, 개인정보를 수집하는 경우에는 그 목적에 필요한 최소한의 정보를 수집합니다. 또한 수집한 개인정보는 수집목적 범위 안에서 이용합니다. 보유기간은 개인정보파일 보유기간 책정 기준표에서 제시한 기준과「공공기록물 관리에 관한 법률 시행령」에 따른 기록관리 기준표를 준수하며 개인정보의 수집 및 이용 목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.</p>
</div>
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보의 제3자 제공에 관한 사항</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">

<p class="information03">전라남도가 수집·보유하고 있는 개인정보는 일반 행정정보와 달리 이용 및 제공에 엄격한 제한이 있으며 다른 기관에 제공하는 개인정보 현황은 다음과 같습니다.</p>
<p class="information03">전라남도는 개인정보의 이용 및 제공에 있어 관계 법령을 엄수하여 부당하게 이용되지 않도록 노력하겠습니다. 다음사항의 경우에는 「개인정보 보호법」 제18조(개인정보의 이용·제공의 제한)에 의거 정보주체 또는 제3자의 이익을 부당하게 침해할 우려가 있을 때를 제외하고는 당해 개인정보파일의 보유목적 외의 목적으로 처리정보를 이용하거나 제공할 수 있습니다.</p>
<ul class="dot_list">
  <li>정보주체로부터 별도의 동의를 받은 경우</li>
  <li>다른 법률에 특별한 규정이 있는 경우</li>
  <li>정보주체 또는 그 법정대리인이 의사표시를 할 수 없는 상태에 있거나 주소불명 등으로 사전 동의를 받을 수 없는 경우로서 명백히 정보주체 또는 제3자의 급박한 생명, 신체, 재산의 이익을 위하여 필요하다고 인정되는 경우</li>
  <li>통계작성 및 학술연구 등의 목적을 위하여 필요한 경우로서 특정 개인을 알아볼 수 없는 형태로 개인정보를 제공하는 경우</li>
  <li>개인정보를 목적 외의 용도로 이용하거나 이를 제3자에게 제공하지 아니하면 다른 법률에서 정하는 소관 업무를 수행할 수 없는 경우로서 보호위원회의 심의·의결을 거친 경우</li>
  <li>조약, 그 밖의 국제협정의 이행을 위하여 외국정부 또는 국제기구에 제공하기 위하여 필요한 경우</li>
  <li>범죄의 수사와 공소의 제기 및 유지를 위하여 필요한 경우</li>
  <li>법원의 재판업무 수행을 위하여 필요한 경우</li>
  <li>형(刑) 및 감호, 보호처분의 집행을 위하여 필요한 경우</li>
</ul>
</div>

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보 처리의 위탁에 관한 사항</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">전라남도에서 관리하는 개인정보의 처리를 다른 공공기관 또는 다른 전문기관에 위탁하는 경우, 그 업무에 종사하거나 종사하였던 자에 대해 직무상 알게 된 개인정보를 누설 또는 권한 없이 처리하거나 타인의 이용에 제공하는 등 부당한 목적을 위하여 사용하지 않도록 위탁부서에서 아래에 대한 사항에 관하여 필요한 제한이나 절차를 수탁기관으로 하여금 준수토록하고 있습니다.</p>
<ul class="dot_list">
  <li>위탁업무 수행 목적 외 개인정보의 처리 금지에 관한 사항</li>
  <li>개인정보의 기술적·관리적 보호조치에 관한 사항</li>
  <li>그 밖에 개인정보의 안전한 관리를 위하여 대통령령으로 정한 사항</li>
</ul>
</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">정보주체와 법정대리인의 권리·의무 및 그 행사방법에 관한 사항</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">정보주체(만 14세 미만인 경우에는 법정대리인을 말함)는 개인정보 처리와 관련하여 다음의 권리를 갖고 있습니다.</p>
<ul class="dot_list">
  <li>개인정보의 처리에 관한 정보를 제공받을 권리</li>
  <li>개인정보의 처리에 관한 동의 여부, 동의 범위 등을 선택하고 결정할 권리</li>
  <li>개인정보의 처리 여부를 확인하고 개인정보에 대하여 열람(사본의 발급을 포함한다. 이하 같다)을 요구할 권리</li>
  <li>개인정보의 처리 정지, 정정·삭제 및 파기를 요구할 권리</li>
  <li>개인정보의 처리로 인하여 발생한 피해를 신속하고 공정한 절차에 따라 구제받을 권리</li>
  <li>정보주체가 개인정보 열람, 정정·삭제, 처리정지 요구시 대통령령으로 정하는 기간 내에 청구의 허용, 연기 또는 제한·거부를 결정하여 처리하고 있습니다. 이 경우 해당기간 내에 요구사항을 수용할 수 없는 정당한 사유가 있는 경우에는 정보주체에게 그 사유를 알려드리며, 14세 미만 아동의 법정대리인은 그 아동의 개인정보 열람 등 요구할 수 있습니다.<br>
    * [개인정보보호법 시행규칙 별지 제8호] 개인정보(열람, 정정·삭제, 처리정지) 요구서<br>
    * [개인정보보호법 시행규칙 별지 제11호] 위임장 </li>
</ul>
<p class="information03">개인정보 열람.정정.삭제.처리정지 요구</p>
<p class="information03">개인정보보호 종합지원포털( www.privacy.go.kr )의 “개인정보 열람.정정.삭제.처리정지 요구”를 통하여 하실 수 있으며, 이에 대해 지체 없이 조치하겠습니다.</p>
</div>

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">처리하는 개인정보의 항목</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">전라남도는 법령의 규정과 정보주체의 동의에 의해서만 개인정보를 수집·보유하며 개인정보 수집 시 수집에 관한 수집방법, 법적 근거, 처리목적, 보유기간, 열람청구 부서, 연락처 등에 관한 사항을 게시하고 있습니다. 전라남도가 보유하고 있는 여러분의 개인정보는 관계법령에 따라 적법하고 적정하게 처리하여, 여러분의 권익이 침해받지 않도록 노력할 것이며, 전라남도에서 수집 보유하고 있는 개인정보파일은 다음과 같습니다. </p>
<p class="mt10">※ 개인정보보호 종합지원포털( <a href="http://www.privacy.go.kr" target="_blank" title="개인정보 종합지원포털 새창이동">www.privacy.go.kr</a> ) → 개인정보민원 → 개인정보열람 요구 → 개인정보파일 목록검색 → 기관명에 "전라남도" 입력 후 조회</p>
</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보의 파기에 관한 사항</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">개인정보 삭제 또는 개인정보파일 파기 사유가 발생한 경우 지체 없이 삭제 및 파기하고 있습니다. 다만, 다른 법률에 따라 보존하여야하는 경우에는 그러하지 않습니다.</p>
</div>
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보 삭제 및 파기 사유</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<div class="sub_table_wrap">
  <table class="table_t02">
    <caption>
    개인정보 삭제 및 파기 사유
    </caption>
    <thead>
      <tr>
        <th scope="col" width="30%">구 분</th>
        <th scope="col" class="right">내 용</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>개인정보 삭제사유</td>
        <td class="t_left">- 정보주체의 삭제 요청시</td>
      </tr>
      <tr>
        <td>개인정보파일 파기사유</td>
        <td class="t_left">- 개인정보파일 보유목적 달성 시<br>
          - 개인정보수집시 안내한 보유기간의 만료 시<br>
          - 이외 개인정보파일의 보유가 불필요하게 된 경우 </td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보 저장형태별 삭제 및 파기방법</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<div class="sub_table_wrap">
  <table class="table_t02">
    <caption>
    개인정보 저장형태별 삭제 및 파기방법
    </caption>
    <thead>
      <tr>
        <th scope="col"  width="30%">구 분</th>
        <th scope="col"  class="right">내 용</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>전자적 파일 형태</td>
        <td class="t_left">- 재생 불가능한 기술적 방법을 사용하여 파기<br>
          - 파기여부 확인<br>
          ※ 컴퓨터 등의 불용처분 및 매각 시 저장된 내용 완전 삭제 </td>
      </tr>
      <tr>
        <td>기록물, 인쇄물, 서면, 그 밖의 기록매체</td>
        <td class="t_left">- 폐·휴지 수집업자에 출력물의 원형으로 매각 등 금지<br>
          ※ 원형으로 매각할 경우 제지공장의 용해작업을 현장 확인<br>
          - 직접 파쇄 조치 후 매각(분쇄기로 분쇄 혹은 소각)<br>
          ※ 매각 및 처리를 위탁할 경우에는 사전에 대책 강구 </td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보 자동수집 장치의 설치·운영 및 거부에 관한 사항</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<ul class="dot_list">
  <li>우리 홈페이지는 이용자에게 개인형 서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 '쿠키(cookie)'를 사용합니다.</li>
  <li>쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다.
    <p class="information03">쿠키의 사용 목적 : 자주 찾는 서비스를 설정할 수 있도록 하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다.</p>
    <p class="information03">쿠키의 설치·운영 및 거부 : 웹브라우저 상단의 도구 &gt; 인터넷 옵션 &gt; 개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부할 수 있습니다.</p>
    <p class="information03">쿠키 저장을 거부할 경우 개인형 서비스 이용에 어려움이 발생할 수 있습니다.</p>
  </li>
</ul>
</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보의 안전성 확보 조치에 관한 사항</p></div><!----////타이틀---->
<h5 class="stitle02">접근권한의 관리 및 비밀번호 관리</h5>
<div class="txt_box sub_list_wrap">
<ul class="dot_list">
  <li>전남도에서는 개인정보처리시스템에 대한 접근권한을 업무 수행에 필요한 최소한의 범위로 업무담당자에게 부여하고 있습니다. 또한 개인정보취급자 변경 시 즉시 접근권한을 변경 또는 말소하고 있습니다. 개인정보파일의 비밀번호를 설정하여 안전하게 관리하고 있습니다.</li>
</ul>
</div>
<h5 class="stitle02">접근통제시스템 설치 및 운영</h5>
<div class="txt_box sub_list_wrap">
<ul class="dot_list">
  <li>전남도는 정보통신망을 통한 불법적인 접근 및 침해사고 방지를 위해 다음 기능을 포함한 시스템을 설치·운영하고 있습니다.
    <p class="information03">개인정보처리시스템에 대한 접속 권한을 IP(Internet Protocol)주소 등으로 제한하여 인가받지 않은 접근을 제한</p>
    <p class="information03">개인정보처리시스템에 접속한 IP(Internet Protocol)주소 등을 재분석하여 불법적인 개인정보 유출 시도를 탐지</p>
  </li>
  <li>접속기록의 보관 및 위·변조 방지 대책
    <p class="information03">개인정보처리시스템에 접속한 기록 및 위·변조 및 도난, 분실되지 않도록 해당 접속기록을 안전하게 보관하고 있습니다.</p>
  </li>
  <li>보안프로그램 설치 및 운영
    <p class="information03">개인정보처리시스템 또는 업무용 컴퓨터에 악성프로그램 등을 방지·치료할 수 있는 백신 소프트웨어 등의 보안 프로그램을 설치·운영하고 있습니다.</p>
  </li>
  <li>물리적 접근 방지
    <p class="information03">개인정보파일이 보관된 전산실 등에 감시 및 출입통제장치 설치, 비인가자 출입통제, 외부인 방문 시 출입관리대장 작성 등 물리적 접근 방지를 이행하고 있습니다.</p>
  </li>
</ul>
</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보보호 책임자 및 담당자에 관한 사항</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<ul class="dot_list">
  <li>전라남도는 개인정보의 적법성 및 절차의 적정성을 확보하여 국민의 권익보호 및 공공업무의 적정한 수행을 도모하기 위해 개인정보보호책임자를 다음과 같이 지정ㆍ운영하고 있습니다. 전라남도가 보유하고 있는 개인정보파일과 개인정보 보호방침 등에 관한 문의· 확인 등은 다음의 연락처로 하여 주시기 바랍니다.</li>
  <li>전라남도 개인정보보호 책임자 : 센터장 김 상 길</li>
  <li>전라남도 개인정보보호 담당자 : 주임 김 연 화
    <p class="information03">이 메 일 : jnvc1365@hanmail.net</p>
    <p class="information03">전화번호 : 061)286-2348 / Fax : 061)286-4373</p>
    <p class="information03">주 소 : 우)534-700 전남 무안군 삼향읍 오룡길 1</p>
  </li>
</ul>
</div>

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">정보주체의 권익침해 구제방법</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">개인정보주체는 개인정보침해로 인한 구제를 받기 위하여 개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보 침해신고센터 등에 분쟁해결이나 상담 등을 신청하실 수 있습니다.</p>
<ul class="dot_list">
  <li>개인정보 분쟁조정위원회 : 1833-6972 (www.kopico.go.kr)</li>
  <li>개인정보 침해신고센터 : (국번없이) 118 (privacy.kisa.or.kr)</li>
  <li>대검찰청 사이버수사과 : (국번없이) 1301, privacy@spo.go.kr, (www.spo.go.kr)</li>
  <li>경찰청 사이버안전국 : (국번없이) 182, (cyberbureau.police.go.kr)</li>
</ul>
</div>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보 파일에 대한 열람 및 문의</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">전라남도에서 관리하는 개인정보 파일에 대한 사항은 개인정보파일 관리 대장에 기재된 해당과를 찾아 열람 및 문의 가능</p>
</div>

<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보 처리방침의 변경</p></div><!----////타이틀---->
<div class="txt_box sub_list_wrap">
<p class="information03">이 개인정보처리방침은 2019. 5. 7.부터 적용됩니다. 이전의 개인정보처리방침은 아래에서 확인할 수 있습니다.</p>
<p class="information03">이전의 개인정보 보호방침은 아래에서 확인하실 수 있습니다</p>
<p class="information03">2014. 6. 1. ~ 2019. 5. 6. 처리방침</p>
<p class="information03">2013. 1. 23. ~ 2014. 5. 31. 처리방침</p>
<p class="information03">법 시행일부터 ~ 2013. 1. 22. 처리방침</p>
<div style="position: relative;bottom:0;right:0;overflow:hidden;padding-top:30px;text-align:right;">
<div> <a href="http://www.kogl.or.kr/info/licenseType1.do" target="_blank"> <img alt="제1유형" src="https://www.kogl.or.kr/open/web/images/images_2014/codetype/new_img_opentype01.png" class="nuri_img"> </a> </div>
<div style="color:#999;font-size:0.9em;text-align:right;"> 본 저작물은 "공공누리" <a href="http://www.kogl.or.kr/info/licenseType1.do" target="_blank">제1유형:출처표시</a> 조건에 따라 이용 할 수 있습니다. </div>
</div>
</div>
<!-- content end --> 




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
