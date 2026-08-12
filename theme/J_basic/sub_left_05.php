<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>

  
 <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>센터소식</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
		<li class="<?php if($bo_table == 'sub_page_03_01') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_01" target="_self"><span>공지사항</span></a> </li>
        <li class="<?php if($bo_table == 'sub_page_03_02') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_02" target="_self"><span>자료실</span></a> </li>
		<li class="<?php if($bo_table == 'sub_page_03_03') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_03" target="_self"><span>보도자료</span></a> </li>
		<li class="<?php if($bo_table == 'sub_page_03_04') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_04" target="_self"><span>뉴스레터</span></a> </li>
		<li class="<?php if($bo_table == 'sub_page_03_05') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_05" target="_self"><span>활동앨범</span></a> </li>
		<li class="<?php if($bo_table == 'sub_page_05_01') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_05_01" target="_self"><span>22색 이야기</span></a> </li>
		<li class="<?php if($bo_table == 'sub_page_03_06') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_06" target="_self"><span>활동영상</span></a> </li>
		<li class="<?php if($bo_table == 'sub_page_03_10') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_10" target="_self"><span>센터일정</span></a> </li>
        <li class="<?php if($basename == 'sub_page_05_01.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_05_01.php" target="_self"><span>시군센터 연락처</span></a> </li>

		<li class="<?php if($bo_table == 'sub_page_03_12' || $bo_table == 'sub_page_03_13' || $bo_table == 'sub_page_03_14' || $bo_table == 'sub_page_03_15') { echo 'on'; } ?>"><a href="/bbs/board.php?bo_table=sub_page_03_12" target="_self"><span>경영공시</span></a> 
			
				<div class="depth3_b"></div>
				<ul class="depth3_ul lnb_depth3__list">
					
					 <li class="<?php if(($basename == 'board.php' || $basename == 'write.php'  || $basename == 'view.php'  ) && $bo_table == 'sub_page_03_12') { echo 'on'; } ?>">
						 <a href="/bbs/board.php?bo_table=sub_page_03_12"><span>예결산</span></a>
					 </li>
					  <li class="<?php if(($basename == 'board.php' || $basename == 'write.php'  || $basename == 'view.php'  ) && $bo_table == 'sub_page_03_13') { echo 'on'; } ?>">
						 <a href="/bbs/board.php?bo_table=sub_page_03_13"><span>업무추진비</span></a>
					 </li>
					  <li class="<?php if(($basename == 'board.php' || $basename == 'write.php'  || $basename == 'view.php'  ) && $bo_table == 'sub_page_03_14') { echo 'on'; } ?>">
						 <a href="/bbs/board.php?bo_table=sub_page_03_14"><span>계약현황</span></a>
					 </li>
					  <!-- //<li class="<?php if(($basename == 'board.php' || $basename == 'write.php'  || $basename == 'view.php'  ) && $bo_table == 'sub_page_03_15') { echo 'on'; } ?>">
					  						 <a href="/bbs/board.php?bo_table=sub_page_03_15"><span>정관규정</span></a>
					  					 </li> -->

				</ul>
	
		</li>




        <li class="<?php if($basename == 'sub_page_05_02.php') { echo 'on'; } ?>"><a href="/bbs/sub/sub_page_05_02.php" target="_self"><span>질문답변</span></a> </li>

      </ul>
    </aside><!---///lnb_wrap--->