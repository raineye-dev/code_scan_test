<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}

if(!$is_member){
	alert('로그인이 필요합니다.');
}

// 청소년

include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 온라인 영상교육";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
$dateset = array();
$dateset[] = date('Y-m-d');
$dateset[] = (date('A')=="PM") ? "오후" : "오전";
$dateset[] = date('g:i:s');

$dateStr = implode(" ",$dateset);


?>
<script language="javascript" src="/bbs/js/cs.js"></script>

<script type="text/javascript">
<!--
 $(function(){
  $.datepicker.regional['ko'] = {
  currentText: '오늘',							// 오늘 날짜로 이동하는 버튼 패널
  closeText: '닫기',							// 닫기 버튼 패널
  prevText: '이전달',
  nextText: '다음달',
  yearRange: '2002:c+1',					// 년도 선택 셀렉트박스를 현재 년도에서 이전, 이후로 얼마의 범위를 표시할것인가.
  monthNames: ['1월(JAN)','2월(FEB)','3월(MAR)','4월(APR)','5월(MAY)','6월(JUN)',
  '7월(JUL)','8월(AUG)','9월(SEP)','10월(OCT)','11월(NOV)','12월(DEC)'],
  monthNamesShort: ['1월','2월','3월','4월','5월','6월',
  '7월','8월','9월','10월','11월','12월'],
  dayNames: ['일','월','화','수','목','금','토'],
  dayNamesShort: ['일','월','화','수','목','금','토'],
  dayNamesMin: ['일','월','화','수','목','금','토'],
  weekHeader: 'Wk',
  dateFormat: 'yy-mm-dd',						// 출력형식: 20160624
  autoSize: false,										// 오토리사이즈(body등 상위태그의 설정에 따른다.)
  firstDay: 0,
  isRTL: false,
  showMonthAfterYear: true,						// 년 뒤에 월 표시
  yearSuffix: ''};
  $.datepicker.setDefaults($.datepicker.regional['ko']);


  $('#selecter').datepicker({
   showOn: 'both',
   showOptions : {direction: 'horizontal'},
   buttonImage:  '', //이미지 url
   buttonImageOnly: true,
   buttonText: "",
   changeMonth: true,
   changeYear: true,
   showButtonPanel: true
  });
 $("img.ui-datepicker-trigger").attr("style", "margin-left:2px; vertical-align:middle; cursor: Pointer;");

 });
//-->
</script>

<div id="body_layout">
  <div class="body_wrap layout">

     <?include G5_THEME_PATH."/sub_left_04.php"?>


       <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">청소년 영상교육</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap">
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">청소년 영상교육</a></li>
         </ul>
        </div><!---///utile_wrap---->


      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


	 <div class="member-step">
			<ol>
				<li class="step01"><span class="step">Step 1</span><span class="tit">교육안내</span></li>
				<li class="step02 active"><span class="step">Step 2</span><span class="tit">정보입력</span></li>
				<li class="step03"><span class="step">Step 3</span><span class="tit">동영상교육</span></li>
				<li class="step04"><span class="step">Step 4</span><span class="tit">완료</span></li>
			</ol>
		</div>


<div class="txt_box sub_list_wrap">

	<form name="reser_frm" action="/bbs/sub/sub_write.php" method="post" enctype="multipart/form-data" >

		<input type="hidden" name="sessionid" value="<?=session_id()?>" />
		<input type="hidden" name="com_joindate" value="<?=date('Y-m-d')?>" />
		<input type="hidden" name="curPage" value="" />
		<input type="hidden" name="list_cnt" value="" />
		<input type="hidden" name="ndb" value="" />
		<input type="hidden" name="mNum" value="2" />
		<input type="hidden" name="sNum" value="1" />
		<input type="hidden" name="smFromName" value="" />
		<input type="hidden" name="Ntype" value="<?=date('Y')?>" />
		<input type="hidden" name="stepcode" value="2" />
		<input type="hidden" name="gkind" value="T" />	<!--청소년 성인 구분-->

		<input type="hidden" name="NfromText3" value="<?=$member['mb_name']?>" size="30" readonly="readonly" maxlength="100" />
		<input type="hidden" name="NfromText4" value="<?=$member['mb_1']?>" id="selecter" readonly="readonly" size="30" maxlength="100" />
		<input type="hidden" name="NfromText7" value="<?=$member['mb_email']?>" size="60" maxlength="100" />


			 <div class="subpoint" style="left:-20px;"><span class="dot"><em></em></span><p class="tt1">회원정보 (MYPAGE에서 수정 가능합니다.)</p></div><!----////타이틀---->
			  <div class="sub_table_wrap" style="margin-bottom:20px;">
						  <table class="table_t02">
								<colgroup>
									<col width="30%">
									<col width="*">
								</colgroup>
							<tbody class="text_left01">
							  <tr>
								<th>이름 </th>
								<td class="right"><?=$member['mb_name']?></td>
							  </tr>
							  <tr>
								<th>생년월일 </th>
								<td class="right">
								<?=$member['mb_1']?>
								  </td>
							  </tr>
							  <tr>
								<th>메일</th>
								<td class="right">
									<?=$member['mb_email']?>
								</td>
							  </tr>
							  <tr>
								<th>작성일자</th>
								<td class="right"><?=$dateStr?> (IP : <?=$_SERVER['REMOTE_ADDR']?>)</td>
							  </tr>
							  </tbody>
							 </table>
					</div>




			 <div class="subpoint" style="left:-20px;"><span class="dot"><em></em></span><p class="tt1">필수입력정보</p></div><!----////타이틀---->




			<div class="sub_table_wrap">
			  <table class="table_t02">
					<colgroup>
						<col width="30%">
						<col width="*">
					</colgroup>
				<tbody class="text_left01">
				  <tr>
					<th class="title">필수정보</th>
					<th class="right"><div class="right"><span class="f_red">*</span> 표시항목은 필수사항입니다.</div></th>
				  </tr>
				  <tr>
					<th>지역 <span class="f_red">*</span></th>
					<td class="right">전라남도
						<select name="NfromText8" class="Video">
							<option value=''>선택하세요</option>
							<option value='목포시'>목포시</option>
							<option value='여수시'>여수시</option>
							<option value='순천시'>순천시</option>
							<option value='나주시'>나주시</option>
							<option value='광양시'>광양시</option>
							<option value='담양군'>담양군</option>
							<option value='곡성군'>곡성군</option>
							<option value='구례군'>구례군</option>
							<option value='고흥군'>고흥군</option>
							<option value='보성군'>보성군</option>
							<option value='화순군'>화순군</option>
							<option value='장흥군'>장흥군</option>
							<option value='강진군'>강진군</option>
							<option value='해남군'>해남군</option>
							<option value='영암군'>영암군</option>
							<option value='무안군'>무안군</option>
							<option value='함평군'>함평군</option>
							<option value='영광군'>영광군</option>
							<option value='장성군'>장성군</option>
							<option value='완도군'>완도군</option>
							<option value='진도군'>진도군</option>
							<option value='신안군'>신안군</option>
						</select>
					</td>
				  </tr>
				  <tr>
				   <tr>
					<th>학교 <span class="f_red">*</span></th>
					<td class="right"><input type="text" name="NfromText9" value="" size="60" maxlength="200" class="f_input w35" placeholder="학교명을 입력하세요. 예)자봉고등학교"></td>
				  </tr>
					<th>연락처 <span class="f_red">*</span></th>
					<td class="right"><input type="text" name="NfromText5" value="" size="30" maxlength="13" class="f_input w35" placeholder="연락처를 입력하세요. 예)010-1234-5678"></td>
				  </tr>
				  <tr>
					<th>1365자원봉사포털아이디 <span class="f_red">*</span></th>
					<td class="right"><input type="text" name="NfromText6" value="" size="60" maxlength="30" class="f_input w35" placeholder="1365자원봉사포털아이디 입력하세요."></td>
				  </tr>
				 
				</tbody>
			  </table>
			</div>
			</div>


		  <div>
		  <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">개인정보수집 및 이용에 대한 안내</p></div><!----////타이틀---->
		  <div class="cont_box03">
				<h4 class="title">개인정보 보호 보안 서약서</h4>
				<p>개인정보 보호법 제59조 제2호에 의거하여 업무상 알게 된 개인정보를 누설하거나 권한 없이 다른 사람이 이용하도록 제공한 자 및 그 사정을 알면서도 영리 또는 부정한 목적으로 개인 정보를 제공 받은 자는 5년 이하의 징역 또는 5천만원 이하의 벌금에 처하게 됩니다. </p>
			 </div>
		   <div class="txt_box sub_list_wrap01">
				<ul class="dot_list">
					<li>개인정보의 수집·이용 주체 : 전라남도자원봉사센터</li>
					<li>개인정보의 수집·이용 목적 : 온라인 교육 확인 및 인증자료 등의 활용</li>
					<li>수집하려는 개인정보의 항목 : 이름, 생년월일, 연락처, 1365자원봉사포털아이디, 메일, 주소, 이용기록, 접속로그, 쿠키, 접속 IP 정보 등</li>
					<li>수집된 개인정보는 '개인정보보호법'에 따라 보호되며, 영리목적으로 활용되지 않습니다.</li>
				</ul>
		   </div>
		   <div class="sub_list_wrap  btm_line">
			<input type="checkbox" name="protective" value="1">
			<span>제출되는 개인정보 및 서류(개인정보 보호 보안 서약서)는 자원봉사 온라인 교육 확인과 인증 자료로 활용됨에 동의하며, 결과 통보 및 자원봉사 안내의 수신에 동의합니다.</span> </div>
			</div>
		  <div class="mbtn-wrap">
		  <a onFocus="this.blur();" href="javascript:;" onClick="javascript:history.back();" class="lg-btn"><span>이전으로</span></a>
		  <a onFocus="this.blur();" href="javascript:;" onClick="send();" class="ldp-btn go"><span>다음으로</span></a>
		  </div>

</form>


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end -->
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
