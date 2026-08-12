<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>


    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>자원봉사센터소개</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li class="<?php if($basename == 'sub_page_01_01.php' || $basename == 'sub_page_01_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_01.php" target="_self"><span>인사말</span></a> </li>
        <li class="<?php if($basename == 'sub_page_01_02.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_02.php" target="_self"><span>연혁</span></a> </li>
		 <li class="<?php if($basename == 'sub_page_01_07.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_07.php" target="_self"><span>센터역할</span></a> </li>
		<li class="<?php if($basename == 'sub_page_01_03.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_03.php" target="_self"><span>사업소개</span></a> </li>
		<!-- <li class="<?php if($basename == 'sub_page_01_08.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_08.php" target="_self"><span>CI</span></a> </li> -->
		<li class="<?php if($basename == 'sub_page_01_04.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_04.php" target="_self"><span>조직도</span></a> </li>
		
		<li class="<?php if($basename == 'sub_page_01_06.php' || $basename == 'sub_page_01_06_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_06.php" target="_self"><span>협력기관</span></a> 
			<?php if($basename == 'sub_page_01_06.php' || $basename == 'sub_page_01_06_001.php') { ?>
				<div class="depth3_b"></div>
				<ul class="depth3_ul lnb_depth3__list">
					<li class="<?php if($basename == 'sub_page_01_06.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_06.php" target="_self"><span>업무협약기관</span></a></li>
					<li class="<?php if($basename == 'sub_page_01_06_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_06_001.php" target="_self"><span>자원봉사 우수기업</span></a></li>
				</ul>
			<?}?>
		</li>

		<li class="<?php if($basename == 'sub_page_01_05.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_01_05.php" target="_self"><span>찾아오시는길</span></a> </li>
      </ul>
    </aside><!---///lnb_wrap--->

