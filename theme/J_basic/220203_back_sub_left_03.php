<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>
  
  <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>주요사업</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
		  
		  <li class="<?php if($basename == 'sub_page_03_01.php' || $basename == 'sub_page_03_01_001.php' || $bo_table == 'sub_page_03_01_002') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_01.php" target="_self" onclick="goto('/bbs/sub/sub_page_03_01.php');"><span>블루 재능봉사단</span></a>

		<?php if($basename == 'sub_page_03_01.php' || $basename == 'sub_page_03_01_001.php' || $bo_table == 'sub_page_03_01_002') { ?>
			<div class="depth3_b"></div>
			<ul class="depth3_ul lnb_depth3__list">
			<li class="<?php if($basename == 'sub_page_03_01.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_01.php" target="_self"><span>블루 재능봉사단 소개</span></a></li>
			<!---///<li class="<?php if($bo_table == 'sub_page_03_01_002') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_01_002" target="_self"><span>블루 재능봉사단 활동사진</span></a></li>---->
			<li class="<?php if($basename == 'sub_page_03_01_001.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_01_001.php" target="_self"><span>전남 재능기부 자원봉사단체</span></a></li>
			</ul>
		<?}?>

		</li>
        <li class="<?php if($basename == 'sub_page_03_02.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_02.php" target="_self"><span>도민 협력 남도사랑 봉사단</span></a> </li>
		<li class="<?php if($basename == 'sub_page_03_03.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_03.php" target="_self"><span>은퇴재능 남도친구들</span></a> </li>
		<li class="<?php if($basename == 'sub_page_03_05.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_05.php" target="_self"><span>안녕 가고싶은섬 볼런투어</span></a> </li>
		
		<li class="<?php if($basename == 'sub_page_03_07.php' || $bo_table == 'sub_page_03_11') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_03_07.php" target="_self"><span>나눔 이동 세탁차</span></a> 
		
		<?php if($basename == 'sub_page_03_07.php' || $bo_table == 'sub_page_03_11') { ?>
			<div class="depth3_b"></div>
			<ul class="depth3_ul lnb_depth3__list">
			<li class="on"><a href="/bbs/sub/sub_page_03_07.php" target="_self"><span>나눔 이동 세탁차 안내</span></a></li>
			<li><a href="/bbs/board.php?bo_table=sub_page_03_11" target="_self"><span>나눔 이동 세탁차 일정</span></a></li>
			</ul>
		<?}?>

		</li>
      </ul>
    </aside><!---///lnb_wrap--->
