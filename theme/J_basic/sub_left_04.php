<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>



    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>자원봉사교육</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li class="<?php if($basename == 'sub_page_04_01.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_04_01.php" target="_self"><span>교육안내</span></a> </li>
		<!-- <li class="<?php if($basename == 'sub_page_04_02_006.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_04_02_006.php" target="_self"><span>온라인 영상교육</span></a> </li> -->
	 <li class="<?php if($basename == 'sub_page_04_02_006.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_04_02_006.php" target="_self"><span>온라인 영상교육</span></a> </li>
        <!-- <li class="<?php if($basename == 'sub_page_04_03_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_04_03_001.php" target="_self"><span>온라인 영상교육</span></a> </li> -->
		<li class="<?php if($basename == 'sub_page_04_04.php' || $basename == 'sub_page_04_04_search.php' || $basename == 'sub_page_04_04_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_04_04.php" target="_self"><span>온라인 인증현황</span></a> </li>


      </ul>
    </aside><!---///lnb_wrap--->
