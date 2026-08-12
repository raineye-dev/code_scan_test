<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>

 <!-- simple left -->
    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title">
   	  <strong>마이페이지</strong> 
	  </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
			 <li class="<?php if($basename == 'sub_page_09_01.php' || $basename == 'sub_page_09_01_001.php') { echo 'on'; } ?>"> 
				<a href="/bbs/sub/sub_page_09_01.php"><span>나의수강내역</span></a> 
			 </li>

		<?php if ($is_member) {  ?>
			 <li class="<?php if($basename == 'register_form.php') { echo 'on'; } ?>"> 
				<a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><span>회원정보수정</span></a> 
			 </li>
		 <?php } ?>


		   <li class="<?php if($nowUrl == '/bbs/member_confirm.php?url=member_leave.php') { echo 'on'; } ?>">
			 <a href="/bbs/member_confirm.php?url=member_leave.php"><span>회원탈퇴</span></a>
		  </li>



      </ul>
    </aside>
    <!---///lnb_wrap--->

