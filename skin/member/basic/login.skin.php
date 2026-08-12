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
        <h2 class="page__title">로그인</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">이용안내</a></li>
            <li class="n3"><a href="" class="navi_ov">로그인</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

<!-- 로그인 시작 { -->




	
<div id="mb_login"  class=" member login">
		<div class=" mbskin_box mem_top">
			<h1><?php echo $g5['title'] ?></h1>
		</div>

		<div class="mem_mid">
			<div class="mem_login">
				<div class="lt">
					<!-- <ul class="login_tab infit">
						<li class="on"><a href="#">개인회원</a></li>
						<li><a href="#">마을회원</a></li>
					</ul> -->

                <?php
                    $login_csrf_token = bin2hex(random_bytes(32));
                    set_session('ss_login_csrf_token', $login_csrf_token);
                ?>

				 <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
						 <input type="hidden" name="url" value="<?php echo $login_url ?>">

                     <input type="hidden" name="csrf_token" value="<?php echo $login_csrf_token; ?>">


					<div class="form_login">
						<div class="form_login_con on"><!--------개인회원--------->
						<!---그누보드 적용된 소스-->
						<form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
						 <input type="hidden" name="url" value="<?php echo $login_url ?>">
						 	<!---그누보드 적용된 소스-->
							<dl>  
								<dt><label for="login_id" class="sound_only hidden">아이디</label></dt>
								<dd class="id"><input type="text" name="mb_id" id="login_id" size="20" maxLength="20" class="input_basic" placeholder="아이디를 입력하세요" value=""></dd>
								<dt><label for="login_pw" class=" sound_only hidden">비밀번호</label></dt>
								<dd class="password"><input type="password" name="mb_password" id="login_pw" size="20" maxLength="20" class="input_basic" placeholder="비밀번호를 입력하세요"></dd>
							</dl>

							<div id="login_info" class="login">
							 <div class="login_if_auto chk_box"> 
								 <input type="checkbox" name="auto_login" style="border:0px" id="login_auto_login" class="selec_chk chk"><label for="login_auto_login" class="chk_label"><span class="auto_box"></span><span class="auto_text">자동로그인</span></label>  </div>
							 </div>

							
							<button type="submit" class="btn_login indivi btn_submit">로그인</button>
							</form>
							<div class="btn_area infit">
								<a href="/bbs/register.php" class="bd">회원가입</a> 
								<a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" >아이디/비밀번호찾기</a>
							</div>
						</div><!--------개인회원--------->


						<div class="form_login_con"><!--------기업회원--------->
							<form name="bForm" method="post" action="https://seoul.rnbd.kr/client/cLogin/cLogin_01.jsp?flag=" onsubmit="loginChk2();return false">
							<input type="hidden" name="userId">
							<input type="hidden" name="userPasswd">
							<input type="hidden" name="personYn">
							<input type="hidden" name="saveMidp" value="N">
							<input type="hidden" name="saveMidb" value="N">
							<input type="hidden" name="outParm" value="null">
							<dl>
								<dt><label for="userId2" class="hidden">아이디</label></dt>
								<dd class="id"><input type="text" name="userId2" id="userId2" class="input_basic id" placeholder="아이디를 입력하세요22" value=""></dd>
								<dt><label for="userPasswd2" class="hidden">비밀번호</label></dt>
								<dd class="password"><input type="password" name="userPasswd2" id="userPasswd2" class="input_basic password" placeholder="비밀번호를 입력하세요"></dd>
							</dl>
							<p><input type="checkbox" style="border:0px" name="saveMidbFrm" id="saveMidbFrm" value="Y" class="chk"><label for="saveMidbFrm" class="chk_label">아이디 저장</label></p>
							<input type="submit" class="btn_login company" value="로그인">
							</form>


						</div><!--------기업회원--------->

					</div>
					<p class="new">로그인 및 회원가입은 홈페이지 관리자만 회원가입 및 로그인을 부탁드립니다.</a></p>
					<div class="btn_area infit">


						  <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
					</div>
				</div>
	
			</div>
		</div>
	</div>
	
        </form>
       
    </div>
</div>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->



</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
