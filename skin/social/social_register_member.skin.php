
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if( ! $config['cf_social_login_use']) {     //소셜 회원가입을 사용하지 않으면
    return;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/remodal/remodal.css">', 11);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/remodal/remodal-default-theme.css">', 12);
add_stylesheet('<link rel="stylesheet" href="'.get_social_skin_url().'/style.css?ver='.G5_CSS_VER.'">', 13);
add_javascript('<script src="'.G5_JS_URL.'/remodal/remodal.js"></script>', 10);

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/member.css">', 1);



$email_msg = $is_exists_email ? '등록할 이메일이 중복되었습니다.다른 이메일을 입력해 주세요.' : '';
?>
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
<!-- 회원정보 입력/수정 시작 { -->
<div class="mbskin" id="register_member" style="width:100%; padding:0px;">

    <script src="<?php echo G5_JS_URL ?>/jquery.register_form.js"></script>
    
    <!-- 새로가입 시작 -->
    <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url; ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w; ?>">
    <input type="hidden" name="url" value="<?php echo $urlencode; ?>">
<!--     <input type="hidden" name="mb_name" value="<?php echo $user_name ? $user_name : $user_nick ?>" > -->
    <input type="hidden" name="provider" value="<?php echo $provider_name;?>" >
    <input type="hidden" name="action" value="register">

    <input type="hidden" name="mb_id" value="<?php echo $user_id; ?>" id="reg_mb_id">
    <input type="hidden" name="mb_nick_default" value="<?php echo $user_id; ?>">
    <input type="hidden" name="mb_nick" value="<?php echo $user_id; ?>" id="reg_mb_nick">

    <div class="toggle">
        <div class="toggle-title">
		<span class="right_i"><i></i> 자세히보기</span>
		<span class="title-name"><input type="checkbox" name="agree" value="1" id="agree11"> <label for="agree11">회원가입약관</label></span>
        </div>
        <div class="toggle-inner">
            <p><?php echo conv_content($config['cf_stipulation'], 0); ?></p>
        </div>
    </div>  <!-- END OF TOGGLE -->
    <div class="toggle">
        <div class="toggle-title">
		<span class="right_i"><i></i> 자세히보기</span>
		<span class="title-name"><input type="checkbox" name="agree2" value="1" id="agree21"> <label for="agree21">개인정보처리방침안내</label></span>
        </div>
        <div class="toggle-inner">
            <p><?php echo conv_content($config['cf_privacy'], 0); ?></p>
        </div>
    </div>  <!-- END OF TOGGLE -->
    <div class="all_agree">
		<span class="title-name"><input type="checkbox" name="chk_all" value="1" id="chk_all"> <label for="chk_all">전체약관에 동의합니다.</label></span>
    </div>

    <div class="sns_tbl tbl_wrap">
        <table>
        <caption>개인정보 입력</caption>
        <tbody>
		        <tr>
            <th scope="row"><label for="reg_mb_name">이름<strong class="sound_only">필수</strong></label></th>
            <td>
                <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo $user_name ? $user_name : $user_nick ?>"  <?php echo $readonly; ?> class="frm_input full_input retext" size="10" placeholder="이름">
            </td>
        </tr>


		        <tr>
            <th scope="row"><label for="reg_mb_1">생년월일<strong class="sound_only">필수</strong></label></th>
            <td>
               <input type="text" name="mb_1" value="<?php echo $member['mb_1']  ?>" id="reg_mb_1" class="frm_input full_input retext" readonly="readonly" maxlength="10" placeholder="2010-05-05" />
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="reg_mb_email">E-mail<strong class="sound_only">필수</strong></label></th>
            <td>
                <input type="text" name="mb_email" value="<?php echo isset($user_email)?$user_email:''; ?>" id="reg_mb_email" required class="frm_input email required" size="70" maxlength="100" placeholder="이메일을 입력해주세요." >
                <p class="email_msg"><?php echo $email_msg; ?></p>
            </td>
        </tr>

		 <tr>
            <th scope="row"><label for="reg_mb_hp">휴대폰번호<?php if ($config['cf_req_hp']) { ?><strong class="sound_only">필수</strong><?php } ?></label></th>
            <td>
                 <?
					$mb_hp_arr = explode("-", $member['mb_hp'] );
					?>
	                <input type="text" name="mb_hp1" value="<?php echo $mb_hp_arr[0] ?>" id="reg_mb_hp1" class="frm_input full_input retext" style="width:100px;" maxlength="3" placeholder="010" /> -
					<input type="text" name="mb_hp2" value="<?php echo $mb_hp_arr[1] ?>" id="reg_mb_hp2" class="frm_input full_input retext" style="width:100px;" maxlength="4" placeholder="0000" /> -
					<input type="text" name="mb_hp3" value="<?php echo $mb_hp_arr[2] ?>" id="reg_mb_hp3" class="frm_input full_input retext" style="width:100px;" maxlength="4" placeholder="0000" />
            </td>
        </tr>


        </tbody>
        </table>
    </div>

    <div class="btn_confirm">
        <input type="submit" value="회원가입" id="btn_submit" class="btn_submit" accesskey="s">
        <a href="<?php echo G5_URL ?>" class="btn_cancel">취소</a>
    </div>
    </form>
    <!-- 새로가입 끝 -->

    <!-- 기존 계정 연결 -->

    <!-- <div class="member_connect">
        <p class="strong">혹시 기존 회원이신가요?</p>
        <button type="button" class="connect-opener btn-txt" data-remodal-target="modal">
            기존 계정에 연결하기
            <i class="fa fa-angle-double-right"></i>
        </button>
    </div> -->

    <div id="sns-link-pnl" class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button type="button" class="connect-close" data-remodal-action="close">
            <i class="fa fa-close"></i>
            <span class="txt">닫기</span>
        </button>
        <div class="connect-fg">
            <form method="post" action="<?php echo $login_action_url ?>" onsubmit="return social_obj.flogin_submit(this);">
            <input type="hidden" id="url" name="url" value="<?php echo $login_url ?>">
            <input type="hidden" id="provider" name="provider" value="<?php echo $provider_name ?>">
            <input type="hidden" id="action" name="action" value="social_account_linking">

            <div class="connect-title">기존 계정에 연결하기</div>

            <div class="connect-desc">
                기존 아이디에 SNS 아이디를 연결합니다.<br>
                이 후 SNS 아이디로 회원가입 하시면 기존 아이디로 회원가입 할 수 있습니다.
            </div>

            <div id="login_fs">
                <label for="login_id" class="login_id">아이디<strong class="sound_only"> 필수</strong></label>
                <span class="lg_id"><input type="text" name="mb_id" id="login_id" class="frm_input required" size="20" maxLength="20" ></span>
                <label for="login_pw" class="login_pw">비밀번호<strong class="sound_only"> 필수</strong></label>
                <span class="lg_pw"><input type="password" name="mb_password" id="login_pw" class="frm_input required" size="20" maxLength="20"></span>
                <br>
                <input type="submit" value="연결하기" class="login_submit btn_submit">
            </div>

            </form>
        </div>
    </div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script>

    // submit 최종 폼체크
    function fregisterform_submit(f)
    {

        if (!f.agree.checked) {
            alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree.focus();
            return false;
        }

        if (!f.agree2.checked) {
            alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree2.focus();
            return false;
        }

        // E-mail 검사
        if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
            var msg = reg_mb_email_check();
            if (msg) {
                alert(msg);
                jQuery(".email_msg").html(msg);
                f.reg_mb_email.select();
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



        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }

    function flogin_submit(f)
    {
        var mb_id = $.trim($(f).find("input[name=mb_id]").val()),
            mb_password = $.trim($(f).find("input[name=mb_password]").val());

        if(!mb_id || !mb_password){
            return false;
        }

        return true;
    }

    jQuery(function($){
        if( jQuery(".toggle .toggle-title").hasClass('active') ){
            jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
        }
        jQuery(".toggle .toggle-title .right_i").click(function(){

            var $parent = $(this).parent();
            
            if( $parent.hasClass('active') ){
                $parent.removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
            } else {
                $parent.addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
            }
        });
        // 모두선택
        $("input[name=chk_all]").click(function() {
            if ($(this).prop('checked')) {
                $("input[name^=agree]").prop('checked', true);
            } else {
                $("input[name^=agree]").prop("checked", false);
            }
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

</div>
<!-- } 회원정보 입력/수정 끝 -->


</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
