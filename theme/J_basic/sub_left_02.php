<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>




    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>자원봉사</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li class="<?php if($basename == 'sub_page_02_01.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_02_01.php" target="_self"><span>자원봉사란?</span></a> </li>
        <li class="<?php if($basename == 'sub_page_02_02.php' || $basename == 'sub_page_02_02_001.php' ) { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_02_02.php" target="_self"><span>자원봉사 활동현황</span></a>
		<?php if($basename == 'sub_page_02_02.php' || $basename == 'sub_page_02_02_001.php') {?> 
		<div class="depth3_b"></div>
			<ul class="depth3_ul lnb_depth3__list">
			<li class="<?php if($basename == 'sub_page_02_02.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_02_02.php" target="_self"><span>연인원 현황</span></a></li>
			<li class="<?php if($basename == 'sub_page_02_02_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_02_02_001.php" target="_self"><span>실인원 현황</span></a></li>
			</ul>
			<? } ?>
		</li>
		<li class="<?php if($basename == 'sub_page_02_03.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_02_03.php" target="_self"><span>자원봉사 신청 및 절차</span></a> </li>
		<li class="<?php if($basename == 'sub_page_02_04.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_02_04.php" target="_self"><span>자원봉사 조회</span></a> </li>
	
      </ul>
    </aside><!---///lnb_wrap--->


