<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>


<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="이용안내"  ;
$g5['title'] = "이용안내 | 로그인";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/member.css">', 1);
?>


<?php if ($is_member) {  ?>
<div id="body_layout">
  <div class="body_wrap layout"> 

   
	   <?include G5_THEME_PATH."/sub_left_07.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">회원정보수정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">MYPAGE</a></li>
            <li class="n3"><a href="" class="navi_ov">회원정보수정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


   <?}else{?>

	  <div id="svisual_layout">
	<div class="svisual_wrap">
		<div class="sub__background"></div>
		<div class="subvisual-layout">
		  <div class="layout_sub"> 
			<h2><span>이용안내</span></h2>
			<p class="subvisual-layout__text">지금 이 순간 나 자신만이 내게 주어진 모든 것을 바꿀 수 있습니다.</p>
		  </div>
		</div>
	</div>
</div><!----////svisual_layout----->
<div id="body_layout">  
  <div class="body_wrap layout"> 

   
	   <?include G5_THEME_PATH."/sub_left_06.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">회원가입</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">이용안내</a></li>
            <li class="n3"><a href="" class="navi_ov">회원가입</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


   <?}?>

<!-- 로그인 시작 { -->

<style>

.member-step {width:100%;overflow:hidden;padding:15px 0;border-bottom:2px solid #f3f3f3; margin-bottom:1rem;}
.member-step li {position:relative;float:left;width:33.33%;padding:10px 30px;box-sizing:border-box; text-align:center;}
.member-step li:first-child:before {content:"";display:block;position:absolute;left:0;top:0;width:1px;height:100%;background:#e6e6e6}
.member-step li:after {content:"";display:block;position:absolute;right:0;top:0;width:1px;height:100%;background:#e6e6e6}
.member-step li .step {display:inline-block;font-size:0.778em;color:#333;font-weight:700;line-height:1;padding:7px 13px;border:2px solid #ddd;border-radius:30px;text-transform:uppercase;margin-right:10px}
.member-step li .tit {display:inline-block;font-size:1em;color:#666;font-weight:400;vertical-align:middle; font-weight:500;}
.member-step li.active .step {background:#112f58; color:#fff; border:2px solid #112f58;}
.member-step li.active .tit{color:#232323;}

@media screen and (max-width:767px){

.member-step li .step {
	display: block;
}
.member-step li {
	text-align: center;
	padding:10px 10px;
}
.member-step li .tit {
	display: inline-block;
	font-size: 1em;
	color: #666;
	font-weight: 400;
	vertical-align: middle
}
#sns_register h2 {
    font-size: 1em;
}
#fregister h2 {
    font-size: 1em;
}
}

.retext{
	background-image:url('../img/require.png') !important;
	background-repeat:no-repeat !important;
	background-position:right top !important
}


</style>

<?php if (!$is_member) {  ?>
		<div class="member-step">
					<ol>
						<li class="step01 "><span class="step">Step 1</span><span class="tit">수집동의</span></li>
						<li class="step02 active"><span class="step">Step 2</span><span class="tit">정보입력</span></li>
						<li class="step03"><span class="step">Step 3</span><span class="tit">완료</span></li>
					</ol>
				</div>
<?}?>


<!-- 회원정보 입력/수정 시작 { -->

<div class="register">
<script src="<?php echo G5_JS_URL ?>/jquery.register_form.js"></script>
<?php if($config['cf_cert_use'] && ($config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
<script src="<?php echo G5_JS_URL ?>/certify.js?v=<?php echo G5_JS_VER; ?>"></script>
<?php } ?>

	<form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
	<input type="hidden" name="w" value="<?php echo $w ?>">
	<input type="hidden" name="url" value="<?php echo $urlencode ?>">
	<input type="hidden" name="agree" value="<?php echo $agree ?>">
	<input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
	<input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
	<input type="hidden" name="cert_no" value="">
	<?php if (isset($member['mb_sex'])) {  ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php }  ?>
	<?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면  ?>
	<input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
	<input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
	<?php }else{  ?>

	<input type="hidden" name="mb_nick_default" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>">
	<input type="hidden" name="mb_nick" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>" id="reg_mb_nick" size="10" maxlength="20" >

	<?}?>
	
	<div id="register_form" class="form_01">   
	    <div class="register_form_inner">
	        <h2>사이트 이용정보 입력</h2>
	        <ul>
	            <li>
	                <label for="reg_mb_id">
	                	아이디<strong class="sound_only">필수</strong>
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
						<span class="tooltip">영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.</span>
	                </label>
<?php if ($is_member) {  ?>
             <?php echo $member['mb_id'] ?>
            <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id"  >
<?}else{?>
            <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id"  class="frm_input full_input retext" minlength="3" maxlength="20" placeholder="아이디">
<?}?>
	                <span id="msg_mb_id"></span>
	            </li>
	            <li class="half_input left_input margin_input">
	                <label for="reg_mb_password">비밀번호<strong class="sound_only">필수</strong></label>
	                <input type="password" name="mb_password" id="reg_mb_password"  class="frm_input full_input retext" minlength="3" maxlength="20" placeholder="비밀번호">
				</li>
	            <li class="half_input left_input">
	                <label for="reg_mb_password_re">비밀번호 확인<strong class="sound_only">필수</strong></label>
	                <input type="password" name="mb_password_re" id="reg_mb_password_re"  class="frm_input full_input retext" minlength="3" maxlength="20" placeholder="비밀번호 확인">
	            </li>
	        </ul>
	    </div>
	
	<div class="tbl_frm01 tbl_wrap register_form_inner">
	        <h2>개인정보 입력</h2>
	        <ul>
	            <li>
	                <label for="reg_mb_name">이름<strong class="sound_only">필수</strong></label>


<?php if ($is_member) {  ?>
 	                <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>"  class="frm_input full_input retext" size="10" placeholder="이름">
<?}else{?>
	                <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>"  class="frm_input full_input retext" size="10" placeholder="이름">
	                <?php
	                if($config['cf_cert_use']) {
	                    if($config['cf_cert_ipin'])
	                        echo '<button type="button" id="win_ipin_cert" class="btn_frmline">아이핀 본인확인</button>'.PHP_EOL;
	                    if($config['cf_cert_hp'])
	                        echo '<button type="button" id="win_hp_cert" class="btn_frmline">휴대폰 본인확인</button>'.PHP_EOL;
	    	
	                    echo '<noscript>본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.</noscript>'.PHP_EOL;
	                }
	                ?>
	                <?php
	                if ($config['cf_cert_use'] && $member['mb_certify']) {
	                    if($member['mb_certify'] == 'ipin')
	                        $mb_cert = '아이핀';
	                    else
	                        $mb_cert = '휴대폰';
	                ?>
	    	  
	                <div id="msg_certify">
	                    <strong><?php echo $mb_cert; ?> 본인확인</strong><?php if ($member['mb_adult']) { ?> 및 <strong>성인인증</strong><?php } ?> 완료
	                </div>
	                <?php } ?>
	                <?php if ($config['cf_cert_use']) { ?>
	                <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                <span class="tooltip">아이핀 본인확인 후에는 이름이 자동 입력되고 휴대폰 본인확인 후에는 이름과 휴대폰번호가 자동 입력되어 수동으로 입력할수 없게 됩니다.</span>
	                <?php } ?>
<?}?>



	            </li>


				<li>

	                <label for="reg_mb_1">생년월일<strong class="sound_only">필수</strong></label>
	                <input type="text" name="mb_1" value="<?php echo $member['mb_1']  ?>" id="reg_mb_1" class="frm_input full_input retext" readonly="readonly" maxlength="10" placeholder="2010-05-05" />

	            </li>





	    	
	            <li>
	                <label for="reg_mb_email">E-mail<strong class="sound_only">필수</strong>
	                
	                <?php if ($config['cf_use_email_certify']) {  ?>
	                <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	    					<span class="tooltip">
	                    <?php if ($w=='') { echo "E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다."; }  ?>
	                    <?php if ($w=='u') { echo "E-mail 주소를 변경하시면 다시 인증하셔야 합니다."; }  ?>
	                </span>
	                <?php }  ?>
	    					</label>
	    
	                <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
	                <input type="text" name="mb_email" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>" id="reg_mb_email" class="frm_input email full_input retext" size="70" maxlength="100" placeholder="E-mail">
	            
	            </li>
	    	
	            <?php if ($config['cf_use_homepage']) {  ?>
	            <li>
	                <label for="reg_mb_homepage">홈페이지<?php if ($config['cf_req_homepage']){ ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <input type="text" name="mb_homepage" value="<?php echo get_text($member['mb_homepage']) ?>" id="reg_mb_homepage" <?php echo $config['cf_req_homepage']?"required":""; ?> class="frm_input full_input <?php echo $config['cf_req_homepage']?"required":""; ?>" size="70" maxlength="255" placeholder="홈페이지">
	            </li>
	            <?php }  ?>
	    	
	            <li>
	            <?php if ($config['cf_use_tel']) {  ?>
	            
	                <label for="reg_mb_tel">전화번호<?php if ($config['cf_req_tel']) { ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <input type="text" name="mb_tel" value="<?php echo get_text($member['mb_tel']) ?>" id="reg_mb_tel" <?php echo $config['cf_req_tel']?"required":""; ?> class="frm_input full_input <?php echo $config['cf_req_tel']?"required":""; ?>" maxlength="20" placeholder="전화번호">
	            <?php }  ?>
	    				</li>

				
				<li class="phone_wp">

	                <label for="reg_mb_hp">휴대폰번호<?php if ($config['cf_req_hp']) { ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <?
					$mb_hp_arr = explode("-", $member['mb_hp'] );
					?>
	                <input type="text" name="mb_hp1" value="<?php echo $mb_hp_arr[0] ?>" id="reg_mb_hp1" class="frm_input full_input retext" style="width:100px;" maxlength="3" placeholder="000" /> -
					<input type="text" name="mb_hp2" value="<?php echo $mb_hp_arr[1] ?>" id="reg_mb_hp2" class="frm_input full_input retext" style="width:100px;" maxlength="4" placeholder="0000" /> -
					<input type="text" name="mb_hp3" value="<?php echo $mb_hp_arr[2] ?>" id="reg_mb_hp3" class="frm_input full_input retext" style="width:100px;" maxlength="4" placeholder="0000" />

	            </li>


	    	
	            <?php if ($config['cf_use_addr']) { ?>
	            <li>
	            	<label>주소</label>
	    					<?php if ($config['cf_req_addr']) { ?><strong class="sound_only">필수</strong><?php }  ?>
	                <label for="reg_mb_zip" class="sound_only">우편번호<?php echo $config['cf_req_addr']?'<strong class="sound_only"> 필수</strong>':''; ?></label>
	                <input type="text" name="mb_zip" value="<?php echo $member['mb_zip1'].$member['mb_zip2']; ?>" id="reg_mb_zip" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input twopart_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="5" maxlength="6"  placeholder="우편번호">
	                <button type="button" class="btn_frmline" onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소 검색</button><br>
	                <input type="text" name="mb_addr1" value="<?php echo get_text($member['mb_addr1']) ?>" id="reg_mb_addr1" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input frm_address full_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="50"  placeholder="기본주소">
	                <label for="reg_mb_addr1" class="sound_only">기본주소<?php echo $config['cf_req_addr']?'<strong> 필수</strong>':''; ?></label><br>
	                <input type="text" name="mb_addr2" value="<?php echo get_text($member['mb_addr2']) ?>" id="reg_mb_addr2" class="frm_input frm_address full_input" size="50" placeholder="상세주소">
	                <label for="reg_mb_addr2" class="sound_only">상세주소</label>
	                <br>
	                <input type="text" name="mb_addr3" value="<?php echo get_text($member['mb_addr3']) ?>" id="reg_mb_addr3" class="frm_input frm_address full_input" size="50" readonly="readonly" placeholder="참고항목">
	                <label for="reg_mb_addr3" class="sound_only">참고항목</label>
	                <input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($member['mb_addr_jibeon']); ?>">
	            </li>
	            <?php }  ?>
	        </ul>
	    </div>
	
	    <div class="tbl_frm01 tbl_wrap register_form_inner">
	        <ul>
	            <?php if ($config['cf_use_signature']) {  ?>
	            <li>
	                <label for="reg_mb_signature">서명<?php if ($config['cf_req_signature']){ ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <textarea name="mb_signature" id="reg_mb_signature" <?php echo $config['cf_req_signature']?"required":""; ?> class="<?php echo $config['cf_req_signature']?"required":""; ?>"   placeholder="서명"><?php echo $member['mb_signature'] ?></textarea>
	            </li>
	            <?php }  ?>
	
	            <?php if ($config['cf_use_profile']) {  ?>
	            <li>
	                <label for="reg_mb_profile">자기소개</label>
	                <textarea name="mb_profile" id="reg_mb_profile" <?php echo $config['cf_req_profile']?"required":""; ?> class="<?php echo $config['cf_req_profile']?"required":""; ?>" placeholder="자기소개"><?php echo $member['mb_profile'] ?></textarea>
	            </li>
	            <?php }  ?>
	

	
				<?php if ($config['cf_use_hp']) { ?>
		        <li class="chk_box">
		            <input type="checkbox" name="mb_sms" value="1" id="reg_mb_sms" <?php echo ($w=='' || $member['mb_sms'])?'checked':''; ?> class="selec_chk">
		        	<label for="reg_mb_sms">
		            	<span></span>
		            	<b class="sound_only">SMS 수신여부</b>
		            </label>        
		            <span class="chk_li">휴대폰 문자메세지를 받겠습니다.</span>
		        </li>
		        <?php } ?>
	
		      
	
	            <?php
	            //회원정보 수정인 경우 소셜 계정 출력
	            if( $w == 'u' && function_exists('social_member_provider_manage') ){
	                social_member_provider_manage();
	            }
	            ?>
	            
	            <?php if ($w == "" && $config['cf_use_recommend']) {  ?>
	            <li>
	                <label for="reg_mb_recommend" class="sound_only">추천인아이디</label>
	                <input type="text" name="mb_recommend" id="reg_mb_recommend" class="frm_input" placeholder="추천인아이디">
	            </li>
	            <?php }  ?>
	
	            <li class="is_captcha_use">
	                자동등록방지
	                <?php echo captcha_html(); ?>
	            </li>
	        </ul>
	    </div>
	</div>
 <div class="btn_confirm">
	    <a href="<?php echo G5_URL ?>" class="btn_close">취소</a>
	    <button type="submit" id="btn_submit" class="btn_submit" accesskey="s"><?php echo $w==''?'회원가입':'정보수정'; ?></button>
	</div> 
	</form>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
$(function() {
    $("#reg_zip_find").css("display", "inline-block");

    <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
    // 아이핀인증
    $("#win_ipin_cert").click(function() {
        if(!cert_confirm())
            return false;

        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php";
        certify_win_open('kcb-ipin', url);
        return;
    });

    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
    // 휴대폰인증
    $("#win_hp_cert").click(function() {
        if(!cert_confirm())
            return false;

        <?php
        switch($config['cf_cert_hp']) {
            case 'kcb':
                $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                $cert_type = 'kcb-hp';
                break;
            case 'kcp':
                $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                $cert_type = 'kcp-hp';
                break;
            case 'lg':
                $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                $cert_type = 'lg-hp';
                break;
            default:
                echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                echo 'return false;';
                break;
        }
        ?>

        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>");
        return;
    });
    <?php } ?>
});

// submit 최종 폼체크
function fregisterform_submit(f)
{


    // 회원아이디 검사
    if (f.w.value == "") {
        var msg = reg_mb_id_check();
        if (msg) {
            alert(msg);
            f.mb_id.select();
            return false;
        }
    }

    if (f.w.value == "") {
        if (f.mb_password.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password.focus();
            return false;
        }
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("비밀번호가 같지 않습니다.");
        f.mb_password_re.focus();
        return false;
    }

    if (f.mb_password.value.length > 0) {
        if (f.mb_password_re.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password_re.focus();
            return false;
        }
    }

    // 이름 검사
    if (f.w.value=="") {
        if (f.mb_name.value.length < 1) {
            alert("이름을 입력하십시오.");
            f.mb_name.focus();
            return false;
        }

        /*
        var pattern = /([^가-힣\x20])/i;
        if (pattern.test(f.mb_name.value)) {
            alert("이름은 한글로 입력하십시오.");
            f.mb_name.select();
            return false;
        }
        */

		  if (f.mb_1.value.length < 1) {
            alert("생년월일을 입력하십시오.");
            f.mb_1.focus();
            return false;
        }
    }

    <?php if($w == '' && $config['cf_cert_use'] && $config['cf_cert_req']) { ?>
    // 본인확인 체크
    if(f.cert_no.value=="") {
        alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
        return false;
    }
    <?php } ?>

    // 닉네임 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {

		$('#reg_mb_nick').val(f.mb_id.value);
/*		var msg = reg_mb_nick_check();
        if (msg) {
            alert(msg);
            f.reg_mb_nick.select();
            return false;
        }
*/
    }

    // E-mail 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
        var msg = reg_mb_email_check();
        if (msg) {
            alert(msg);
            f.reg_mb_email.select();
            return false;
        }
    }

	  if (f.mb_hp1.value.length != 3) {
		alert("휴대전화를 입력하십시오.");
		f.mb_hp1.focus();
		return false;
	 }

	  if (f.mb_hp2.value.length < 3) {
		alert("휴대전화를 입력하십시오.");
		f.mb_hp2.focus();
		return false;
	 }

	  if (f.mb_hp3.value.length != 4) {
		alert("휴대전화를 입력하십시오.");
		f.mb_hp3.focus();
		return false;
	 }


    <?php if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {  ?>
    // 휴대폰번호 체크
    var msg = reg_mb_hp_check();
    if (msg) {
        alert(msg);
        f.reg_mb_hp.select();
        return false;
    }
    <?php } ?>

    if (typeof f.mb_icon != "undefined") {
        if (f.mb_icon.value) {
            if (!f.mb_icon.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원아이콘이 이미지 파일이 아닙니다.");
                f.mb_icon.focus();
                return false;
            }
        }
    }

    if (typeof f.mb_img != "undefined") {
        if (f.mb_img.value) {
            if (!f.mb_img.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원이미지가 이미지 파일이 아닙니다.");
                f.mb_img.focus();
                return false;
            }
        }
    }

    if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
        if (f.mb_id.value == f.mb_recommend.value) {
            alert("본인을 추천할 수 없습니다.");
            f.mb_recommend.focus();
            return false;
        }

        var msg = reg_mb_recommend_check();
        if (msg) {
            alert(msg);
            f.mb_recommend.select();
            return false;
        }
    }

    <?php echo chk_captcha_js();  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

jQuery(function($){
	//tooltip
    $(document).on("click", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeIn(400).css("display","inline-block");
    }).on("mouseout", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeOut();
    });
});



$("#reg_mb_1").datepicker({
//	showOn : "both",
//	buttonImage: "button.png",

	showMonthAfterYear : true,
	showButtonPanel : true,
	changeMonth : true,
	changeYear : true,
	yearRange: "-100:+0", 
//	yearRange: "2005:2015",
	nextText : '다음 달',
	prevText : '이전 달',
	currentText : '오늘 날짜',
	closeText : '닫기',
	dateFormat : "yy-mm-dd",
	dayNames : ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'],
	dayNamesMin : ['일','월','화','수','목','금','토'],
	monthNames : ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
	monthNamesShort : ['1','2','3','4','5','6','7','8','9','10','11','12']
});


</script>

<!-- } 회원정보 입력/수정 끝 -->





<!--jd-->
  <!-- content end --> 
    </div>
    <!-- contents_wrap end --> 
  </div>
  <!-- body_wrap layout end --> 
</div>

<!--jd-->


<?php
include_once('./_tail.php');
?>