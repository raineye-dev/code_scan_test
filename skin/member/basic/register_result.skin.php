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
}
.member-step li .tit {
	display: inline-block;
	font-size: 1em;
	color: #666;
	font-weight: 400;
	vertical-align: middle
}
}

.retext{

}

</style>

		<div class="member-step">
					<ol>
						<li class="step01 "><span class="step">Step 1</span><span class="tit">수집동의</span></li>
						<li class="step02"><span class="step">Step 2</span><span class="tit">정보입력</span></li>
						<li class="step03 active"><span class="step">Step 3</span><span class="tit">완료</span></li>
					</ol>
				</div>

<!-- 회원가입결과 시작 { -->
<div id="reg_result" class="register">
    <p class="reg_result_p">
		<div class=""><img src="/skin/member/basic/img/logo_png.png"></div>
    	<br>
		<div class="member_texts">
        <strong><?php echo get_text($mb['mb_name']); ?></strong>님의 회원가입을 진심으로 축하합니다.
		</div>
    </p>

    <?php if (is_use_email_certify()) {  ?>
    <p class="result_txt">
        회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
        발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
    </p>
    <div id="result_email">
        <span>아이디</span>
        <strong><?php echo $mb['mb_id'] ?></strong><br>
        <span>이메일 주소</span>
        <strong><?php echo $mb['mb_email'] ?></strong>
    </div>
    <p>
        이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
    </p>
    <?php }  ?>

    <p class="result_txt">
        회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.<br>
        아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.
    </p>

    <p class="result_txt">
        회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>
        감사합니다.
    </p>
</div>
<!-- } 회원가입결과 끝 -->
<div class="btn_confirm_reg">
	<a href="<?php echo G5_URL ?>/" class="reg_btn_submit">메인으로</a>
</div>





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