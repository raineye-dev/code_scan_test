<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 온라인 영상교육";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
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
				<li class="step01 active"><span class="step">Step 1</span><span class="tit">교육안내</span></li>
				<li class="step02"><span class="step">Step 2</span><span class="tit">정보입력</span></li>
				<li class="step03"><span class="step">Step 3</span><span class="tit">동영상교육</span></li>
				<li class="step04"><span class="step">Step 4</span><span class="tit">완료</span></li>
			</ol>
		</div>
     
	<div class="cont_box01">
		<h4 class="title">온라인 자원봉사 영상교육</h4>
		<p>전라남도 온라인 자원봉사 교육플랫폼에 오신 것을 환영합니다!<br/>
이 교육은 자원봉사자 여러분들을 대상으로 접근성이 용이하고, 흥미 있는 영상교육을 통해 자원봉사의 개념과 가치 등 올바른 자원봉사 인식과 자원봉사에 대한 참 의미를 심어주기 위한 온라인 교육입니다.</p>
	 </div>
	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">수강안내</p></div><!----////타이틀---->
		<!-- <div class="txt_box sub_list_wrap">
			<ul class="dot_list">
				<li>1365 자원봉사포털 회원가입</li>
				<li>전라남도 온라인 자원봉사 교육플랫폼 접속</li>
				<li>필수입력사항 입력 및 개인정보이용 동의</li>
				<li>자원봉사 교육영상 시청 및 과제 수행</li>
				<li>교육 이수 후 수료증 발급</li>
				<li>1365 자원봉사포털에서 봉사시간 확인</li>
			</ul>
		</div> -->

<!--추가--->
<div class="icon_box type1">
        <ul class="col3">
            <li>
                <div class="cir">
                    <img src="/bbs/sub/img/sub_list_bg_01.png" alt="">
                </div>
				<span class="number">01</span>
                <b class="icon_box_sub_tit">1365 자원봉사포털<br/>회원가입</b>
            </li>
            <li>
                <div class="cir">
                    <img src="/bbs/sub/img/sub_list_bg_02.png" alt="">
                </div>
				<span class="number">02</span>
                <b class="icon_box_sub_tit">전라남도 온라인 자원봉사<br/>교육플랫폼 접속</b>
            </li>
            <li>
                <div class="cir">
                    <img src="/bbs/sub/img/sub_list_bg_03.png" alt="">
                </div>
				<span class="number">03</span>
                <b class="icon_box_sub_tit">필수입력사항 입력 및<br/>개인정보이용 동의</b>
            </li>
			 <li class="">
                <div class="cir">
                    <img src="/bbs/sub/img/sub_list_bg_04.png" alt="">
                </div>
				<span class="number">04</span>
                <b class="icon_box_sub_tit">자원봉사 교육영상 시청 및<br/>과제 수행</b>
            </li>
			 <li class="">
                <div class="cir">
                    <img src="/bbs/sub/img/sub_list_bg_05.png" alt="">
                </div>
				<span class="number">05</span>
                <b class="icon_box_sub_tit">교육 이수 후<br/>수료증 발급</b>
            </li>
			 <li class="">
                <div class="cir">
                    <img src="/bbs/sub/img/sub_list_bg_06.png" alt="">
                </div>
				<span class="number">06</span>
                <b class="icon_box_sub_tit">1365 자원봉사포털에서<br/>봉사시간 확인</b>
            </li>
        </ul>
    </div>
<!----추가--->




	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">이용안내사항</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap btm_line">
			<ul class="dot_list">
				<li>1365 자원봉사포털 회원가입 및 봉사희망지역을 전라남도로 선택</li>
				<li>필수정보(이름, 생년월일 등) 입력 시 오타없이 정확하게 기입하셔야 합니다.<br/> <span style="font-size:15px; color:#f71919; font-weight:600;  " >※ 기입된 정보는 실적입력을 위한 자료로만 사용되며 입력된 정보와 1365포털 개인정보가 불일치할 경우 실적승인이 불가할 수 있습니다.</span></li>
				<li>온라인 자원봉사교육 이수 직후, 교육수료증이 발급되며 프린트 및 이메일 발송으로 수료증을 받으실 수 있습니다.</li>
				<li>온라인 교육은 연 1인, 1회, 1시간만 인정됩니다.</li>
			</ul>
		</div>

		<div class="mbtn-wrap">
			<a href="#" class="lg-btn"><span>취소</span></a>


			<?php if ($is_member) {  ?>
				<a href="/bbs/sub/sub_page_04_02_001.php?edumov=<?=$edumov?>" class="ldp-btn go"><span>다음으로</span></a>					
			<?}else{?>
				<a href="javascript:goLogin();" class="ldp-btn go"><span>다음으로</span></a>			
			<?}?>

		</div>


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->




<script>

	function goLogin(){
		alert('로그인이 필요합니다.');
		location.href="/bbs/login.php";
	}
</script>



<?php
include_once('./_tail.php');
?>
