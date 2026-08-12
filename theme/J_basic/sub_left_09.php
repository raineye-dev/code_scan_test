<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>

  
    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>뉴스레터</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
		<li class="<?php if($bo_table == 'sub_page_10') { echo 'on'; } ?>"><a href="" target="_self"><span>뉴스레터</span></a> </li>
		

      </ul>
    </aside><!---///lnb_wrap--->

