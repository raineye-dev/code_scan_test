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
        <h2 class="page__title">비밀번호찾기</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">이용안내</a></li>
            <li class="n3"><a href="" class="navi_ov">비밀번호찾기</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

<!-- 로그인 시작 { -->
<!-- 회원정보 찾기 시작 { -->
<div id="find_info" class="new_win">
    <div class="new_win_con">
        <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
        <fieldset id="info_fs">
            <p>
                회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
            </p>
            <label for="mb_email" class="sound_only">E-mail 주소<strong class="sound_only">필수</strong></label>
            <input type="text" name="mb_email" id="mb_email" required class="required frm_input full_input email" size="30" placeholder="E-mail 주소">
        </fieldset>
        <?php echo captcha_html();  ?>

        <div class="win_btn">
           
            <button type="button" onclick="window.close();" class="button left">창닫기</button>  
			 <button type="submit" class="button">확인</button>
        </div>
        </form>
    </div>
</div>

<script>
function fpasswordlost_submit(f)
{
    <?php echo chk_captcha_js();  ?>

    return true;
}

$(function() {
    var sw = screen.width;
    var sh = screen.height;
    var cw = document.body.clientWidth;
    var ch = document.body.clientHeight;
    var top  = sh / 2 - ch / 2 - 100;
    var left = sw / 2 - cw / 2;
    moveTo(left, top);
});
</script>
<!-- } 회원정보 찾기 끝 -->




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