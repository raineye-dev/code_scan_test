<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>
  
    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>인정보상</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li class="<?php if(strpos($bo_table , 'hall_of_fame') !== false ) { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=hall_of_fame" target="_self"><span>명예의 전당</span></a> </li>
		<li class="<?php if($basename == 'sub_page_08_01.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_08_01.php" target="_self"><span>자원봉사 마일리지제</span></a> </li>
<!--         <li class="<?php if(strpos($basename , 'sub_page_08_02') !== false ) { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_08_02.php" target="_self"><span>할인가맹점</span></a> </li> -->
        <li class="<?php if(strpos($bo_table , 'biz_info') !== false ) { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=biz_info" target="_self"><span>할인가맹점</span></a> </li>
        <li class="<?php if($basename == 'sub_page_08_03.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_08_03.php" target="_self"><span>자원봉사 종합보험</span></a> </li>
		

      </ul>
    </aside><!---///lnb_wrap--->
