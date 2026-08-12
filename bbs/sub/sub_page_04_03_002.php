<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}

if(!$is_member){
	alert('로그인이 필요합니다.');
}

// 성인

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

$oldage = 18;

$yYear = date('Y') - $oldage;
$myYear = substr($member['mb_1'],0,4);

$gkind = "";
$adtitle = '';
if($edumov== '3' || $edumov== '4' ){
	$adtitle = '성인';
	$gkind = "A";
}else{
	$adtitle = '청소년';
	$gkind = "T";
}

/*

$sql = "SELECT count(idx) AS cnt FROM video_education_info WHERE user_id='" .$member['mb_id'] . "' ";
echo $sql ;
$result = sql_query($sql);
$row = sql_fetch_array($result);

if($row['cnt'] > 0){

}

*/
?>
<script language="javascript" src="/bbs/js/cs.js"></script>
<?/*
<script type="text/javascript">
<!--
 $(function(){
  $.datepicker.regional['ko'] = {
  currentText: '오늘',							// 오늘 날짜로 이동하는 버튼 패널
  closeText: '닫기',							// 닫기 버튼 패널
  prevText: '이전달',
  nextText: '다음달',
  yearRange: 'c-120:c+1',					// 년도 선택 셀렉트박스를 현재 년도에서 이전, 이후로 얼마의 범위를 표시할것인가.				
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
*/?>
<div id="body_layout">
  <div class="body_wrap layout"> 
  
    <?include G5_THEME_PATH."/sub_left_04.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title"><?=$adtitle?> 영상교육</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov"><?=$adtitle?> 영상교육</a></li>
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
				<form name="reser_frm" action="/bbs/sub/sub_write.php" method="post" enctype="multipart/form-data">
				  <input type="hidden" name="sessionid" value="<?=session_id()?>">
				  <input type="hidden" name="com_joindate" value="<?=date('Y-m-d')?>">
				  <input type="hidden" name="curPage" value="">
				  <input type="hidden" name="list_cnt" value="">
				  <input type="hidden" name="ndb" value="">
				  <input type="hidden" name="mNum" value="2">
				  <input type="hidden" name="sNum" value="1">
				  <input type="hidden" name="smFromName" value="">
				  <input type="hidden" name="Ntype" value="<?=date('Y')?>">
				  <input type="hidden" name="stepcode" value="2">
				  <input type="hidden" name="gkind" value="<?=$gkind?>">	<!--청소년 성인 구분-->
				  <input type="hidden" name="edumov" value="<?=$edumov?>">	

					
					<input type="hidden" name="NfromText4" value="<?=$member['mb_1']?>" id="selecter" readonly="readonly" size="30" maxlength="100" />
					<input type="hidden" name="NfromText7" value="<?=$member['mb_email']?>" size="60" maxlength="100" />

					<div  style="padding:1rem; margin: 0 0 30px;
						border: 2px solid #e8ebee;
						background: #f5f6f6;
						position: relative;
						border-radius: 10px;"
					>
						
					<?
						if($edumov == '1')  echo "청소년 과정";
						if($edumov == '2')  echo "청소년 과정";
						if($edumov == '3')  echo "성인 과정";
						if($edumov == '4')  echo "성인 과정";									
					?> 영상교육

					</div><!----////타이틀---->



			 <div class="subpoint" style="left:-20px;"><span class="dot"><em></em></span><p class="tt1">회원정보 (MYPAGE에서 수정 가능합니다.)</p></div><!----////타이틀---->
			  <div class="sub_table_wrap" style="margin-bottom:20px;">
						  <table class="table_t02">
								<colgroup>
									<col width="30%">
									<col width="*">
								</colgroup>
							<tbody class="text_left01">
	
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
								<th>이름 </th>
								<td class="right">
									<input type="text" name="NfromText3" value="<?=$member['mb_name']?>" size="30" maxlength="100" />
								</td>
							  </tr>

							  <tr>
								<th>지역 <span class="f_red">*</span></th>
								<td class="right">전라남도
									<select name="NfromText8" id="NfromText8"  class="Video">
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
									<div class="font_red  pt10">*1365자원봉사포털에 등록된 소속센터로 지역을 선택해주세요.</div>
								</td>
							  </tr>



							   <tr>
								<th>
								<? 
									if($edumov  == '1' || $edumov  == '2')  echo "학교";
									if($edumov  == '3' || $edumov  == '4')  echo "소속";
								?>
								<span class="f_red">*</span></th>
								<td class="right">
<!--									<input type="radio" value="직접입력" id="team_tp_1" name="team_tp" value="직접입력" onchange="setTeamCk(1)"  class="inbox" /> <label for="team_tp_1">직접입력</label>&nbsp;&nbsp;&nbsp;
									<input type="radio" value="소속없음" id="team_tp_2" name="team_tp" value="소속없음" onchange="setTeamCk(2)"  class="inbox"/> <label for="team_tp_2">소속없음</label>&nbsp;&nbsp;&nbsp;
									<input type="radio" value="소속검색" id="team_tp_3" name="team_tp" value="소속검색" onchange="setTeamCk(3)" checked="checked"  class="inbox" /> <label for="team_tp_3">
									<?
										if($edumov == '1')  echo "학교검색";
										if($edumov == '2')  echo "학교검색";
										if($edumov == '3')  echo "단체검색";
										if($edumov == '4')  echo "단체검색";									
									?> 
									
									</label>
									
									
									&nbsp;&nbsp;

									<span id=""><input type="button" value="검색" onclick="goPopup();" class="search_box_mov"/></span>

-->



						<?if($edumov  == '3' || $edumov  == '4')  {//학교?>

 

			<!-- 	//<input type="radio" value="전국(장애인)체전" id="team_tp_3" name="team_tp" class="inbox"/> <label for="team_tp_3">전국(장애인)체전</label>&nbsp;&nbsp;&nbsp; -->

									<input type="radio" value="공무원" id="team_tp_4" name="team_tp" class="inbox"/> <label for="team_tp_4">공무원</label>&nbsp;&nbsp;&nbsp;


								   <input type="radio" value="공공기관" id="team_tp_5" name="team_tp" class="inbox"/> <label for="team_tp_5">공공기관</label>&nbsp;&nbsp;&nbsp;

								   <input type="radio" value="민간단체" id="team_tp_6" name="team_tp" class="inbox"/> <label for="team_tp_6">민간단체</label>&nbsp;&nbsp;&nbsp;

								<input type="radio" value="대학생" id="team_tp_7" name="team_tp" class="inbox"/> <label for="team_tp_7">대학생</label>&nbsp;&nbsp;&nbsp;

								<input type="radio" value="기타(개인)" id="team_tp_8" name="team_tp" class="inbox"/> <label for="team_tp_8">기타(개인)</label>&nbsp;&nbsp;&nbsp;

									<input type="text" name="NfromText9" id="NfromText9" value="" size="60" maxlength="200" class="f_input w35 box_textbox mt_07" placeholder="소속명을 입력하세요. 예)대학교명, 기관명, 단체명, 개인"   />

									<input type="hidden" name="team_idx" id="team_idx" value="" class="box_textbox"/>



						<?}else if($edumov  == '1' || $edumov  == '2')  {//성인?>

									<input type="radio" value="초등학교" id="team_tp_4" name="team_tp" class="inbox"/> <label for="team_tp_4">초등학교</label>&nbsp;&nbsp;&nbsp;


<input type="radio" value="중학생" id="team_tp_5" name="team_tp" class="inbox"/> <label for="team_tp_5">중학생</label>&nbsp;&nbsp;&nbsp;

<input type="radio" value="고등학생" id="team_tp_6" name="team_tp" class="inbox"/> <label for="team_tp_6">고등학생</label>&nbsp;&nbsp;&nbsp;

<input type="radio" value="기타(개인)" id="team_tp_8" name="team_tp" class="inbox"/> <label for="team_tp_8">기타(개인)</label>&nbsp;&nbsp;&nbsp;

									<input type="text" name="NfromText9" id="NfromText9" value="" size="60" maxlength="200" class="f_input w35 box_textbox mt_07" placeholder="학교명을 입력하세요. 예)자봉고등학교"   />

									<input type="hidden" name="team_idx" id="team_idx" value="" class="box_textbox"/>


						<?}?>


								</td>
							  </tr>
							  <tr>
								<th>연락처 <span class="f_red">*</span></th>
								<td class="right"><input type="text" name="NfromText5"   value="<?=$member['mb_hp']?>" size="30" maxlength="13" class="f_input w35" placeholder="연락처를 입력하세요. 예)010-1234-5678"></td>
							  </tr>
							  <tr>
								<th>1365자원봉사포털아이디 <span class="f_red">*</span></th>
								<td class="right"><input type="text" name="NfromText6" value="" size="30" maxlength="30" class="f_input w35 box_textbox " placeholder="1365 아이디 입력하세요.">
								
									<div>
										<a href="https://www.1365.go.kr/vols/P9910/mber/volsLogin.do" class="search_box_mov button1365" target="_blank">1365자원봉사포털 아이디 찾기</a>

									</div>
								</td>
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
    <input type="checkbox" name="protective" id="protective" value="1">
    <span>제출되는 개인정보 및 서류(개인정보 보호 보안 서약서)는 자원봉사 온라인 교육 확인과 인증 자료로 활용됨에 동의하며, 결과 통보 및 자원봉사 안내의 수신에 동의합니다.</span> </div>
	</div>
  <div class="mbtn-wrap"> 
  <a onFocus="this.blur();" href="javascript:;" onClick="javascript:history.back();" class="lg-btn"><span>이전으로</span></a> 
  <a onFocus="this.blur();" href="javascript:;" onClick="send();" class="ldp-btn go"><span>다음으로</span></a> 
  </div>

</form>





<script>
	function setTeamCk(no){
		if(no == '1'){
//			$('#NfromText9').removeAttr('readonly');
			$('#NfromText9').attr('readonly',false);
			$('#NfromText9').val('');
			$('#team_idx').val('');
			$('#NfromText9').focus();
		} else if(no == '2') {
//			$('#NfromText9').removeAttr('readonly');
			$('#NfromText9').attr('readonly',true);
			$('#NfromText9').val('소속없음');
			$('#team_idx').val('');
		}else if(no == '3'){
			$('#NfromText9').attr('readonly',true);
			$('#NfromText9').val('');
			$('#team_idx').val('');

		}

	}


	function goPopup(){
		var area_nm = $('#NfromText8').val()
		window.open("/bbs/sub/zone_popup.php?kind_tp=<?=$gkind?>&area_nm="+area_nm+"","zonePopup","left=100,top=100,width=700,height=600");
	}

	function goSelect(nm,idx){
		$('#NfromText9').val(nm);
		$('#team_idx').val(idx);

	}

</script>

	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
