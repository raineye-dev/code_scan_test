<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>

 <!-- simple left -->
    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title">
   	  <strong>이용안내</strong> 
	  </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
		
		<?php if ($is_member) {  ?>
			 <li class="<?php if($basename == 'login.php') { echo 'on'; } ?>"> 
				<a href="/bbs/board.php?bo_table=edu_state&myp=o"><span>마이페이지</span></a> 
			 </li>
		 <?php } else {  ?>

			 <li class="<?php if(($basename == 'login.php' || $basename == 'password_lost.php' )) { echo 'on'; } ?>"> 
				<a href="/bbs/login.php"><span>로그인</span></a> 
			 </li>
			<li class="<?php if(($basename == 'register.php' || $basename == 'register_result.php'  || $basename == 'register_form.php'  )) { echo 'on'; } ?>">
				<a href="/bbs/register.php"><span>회원가입</span></a>
			</li>
		 <?php }  ?>



		<li class="<?php if($basename == 'sub_page_06_01.php') { echo 'on'; } ?>"> <a href="/bbs/sub/sub_page_06_01.php"><span>SITEMAP</span></a> </li>
		<li class="<?php if($basename == 'sub_page_06_02.php') { echo 'on'; } ?>"> <a href="/bbs/sub/sub_page_06_02.php"><span>개인정보처리방침</span></a> </li>
		<li class="<?php if($basename == 'sub_page_06_03.php') { echo 'on'; } ?>"> <a href="/bbs/sub/sub_page_06_03.php"><span>이용약관</span></a> </li>

      </ul>
    </aside>
    <!---///lnb_wrap--->

