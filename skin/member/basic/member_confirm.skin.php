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
  
   <?include G5_THEME_PATH."/sub_left_07.php"?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">회원정보수정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">마이페이지</a></li>
            <li class="n3"><a href="" class="navi_ov">회원정보수정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

<!-- 로그인 시작 { -->
<div class="cntsGuide descript">
		
		<strong class="type1"> 
		비밀번호를 한번 더 입력해주세요.<br/>
		<?php if ($url == 'member_leave.php') { ?>
        비밀번호를 입력하시면 회원탈퇴가 완료됩니다.
        <?php }else{ ?>
        회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.
        <?php }  ?></strong> 
	</div>

<!-- 회원 비밀번호 확인 시작 { -->
<div id="mb_confirm" class="mbskin">


 

    <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
    <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
    <input type="hidden" name="w" value="u">

    <fieldset>
        <span class="confirm_id">회원아이디</span>
        <span id="mb_confirm_id"><?php echo $member['mb_id'] ?></span>
        <label for="confirm_mb_password" class="sound_only">비밀번호<strong>필수</strong></label>
        <input type="password" name="mb_password" id="confirm_mb_password" required class="required frm_input" size="15" maxLength="20" placeholder="비밀번호">
        <input type="submit" value="확인" id="btn_submit" class="btn_submit">
    </fieldset>

    </form>

</div>

<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 비밀번호 확인 끝 -->



</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
