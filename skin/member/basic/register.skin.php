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

<!-- 로그인 시작 { -->

<!-- 회원가입약관 동의 시작 { -->



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
#fregister_private table th, #fregister_private table td {
   font-size: .9em;
}
#fregister textarea {display:block;padding:20px;width:100%;height:150px;background:#fff;border:0;line-height:1.6em; font-size:.9em;}
}



</style>

		<div class="member-step">
					<ol>
						<li class="step01 active"><span class="step">Step 1</span><span class="tit">수집동의</span></li>
						<li class="step02"><span class="step">Step 2</span><span class="tit">회원구분</span></li>
						<li class="step03"><span class="step">Step 3</span><span class="tit">완료</span></li>
					</ol>
				</div>


<!-- 회원가입약관 동의 시작 { -->
<div class="register">

    <form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

    <!--<p><i class="fa fa-check-circle" aria-hidden="true"></i> 회원가입약관 및 개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.</p>-->
    
    <?php
    // 소셜로그인 사용시 소셜로그인 버튼
    @include_once(get_social_skin_path().'/social_register.skin.php');
    ?>
    <section id="fregister_term">
        <h2>회원가입약관</h2>
        <textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
        <fieldset class="fregister_agree">
            <input type="checkbox" name="agree" value="1" id="agree11" class="selec_chk">
            <label for="agree11"><span></span><b class="sound_only">회원가입약관의 내용에 동의합니다.</b></label>
        </fieldset>
    </section>

    <section id="fregister_private">
        <h2>개인정보처리방침안내</h2>
        <div>
            <table>
                <caption>개인정보처리방침안내</caption>
                <thead>
                <tr>
                    <th>목적</th>
                    <th>항목</th>
                    <th>보유기간</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>이용자 식별 및 본인여부 확인</td>
                    <td>아이디, 이름, 비밀번호</td>
                    <td>회원 탈퇴 시까지</td>
                </tr>
                <tr>
                    <td>고객서비스 이용에 관한 통지,<br>CS대응을 위한 이용자 식별</td>
                    <td>연락처 (이메일, 휴대전화번호)</td>
                    <td>회원 탈퇴 시까지</td>
                </tr>
                </tbody>
            </table>
        </div>

        <fieldset class="fregister_agree">
            <input type="checkbox" name="agree2" value="1" id="agree21" class="selec_chk">
            <label for="agree21"><span></span><b class="sound_only">개인정보처리방침안내의 내용에 동의합니다.</b></label>
       </fieldset>
    </section>
	
	<div id="fregister_chkall" class="chk_all fregister_agree">
        <input type="checkbox" name="chk_all" id="chk_all" class="selec_chk">
        <label for="chk_all"><span></span>회원가입 약관에 모두 동의합니다</label>
    </div>
	    
    <div class="btn_confirm">
    	<a href="<?php echo G5_URL ?>" class="btn_close">취소</a>
        <button type="submit" class="btn_submit">회원가입</button>
    </div>

    </form>

    <script>
    function fregister_submit(f)
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

        return true;
    }
    
    jQuery(function($){
        // 모두선택
        $("input[name=chk_all]").click(function() {
            if ($(this).prop('checked')) {
                $("input[name^=agree]").prop('checked', true);
            } else {
                $("input[name^=agree]").prop("checked", false);
            }
        });
    });

    </script>
</div>
<!-- } 회원가입 약관 동의 끝 -->
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