<?
	$nowmenu;
	$nowUrl =  $_SERVER['REQUEST_URI']; //uri를 구합니다.
	$basename = basename($_SERVER["PHP_SELF"]);

?>

<style>

#bo_cate {background:#eeeff1;padding:7px;margin:10px 0; border:1px solid #ddd; border-radius:5px;}
#bo_cate h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
#bo_cate ul {zoom:1}
/* #bo_cate li:first-child a{display:none;} */
#bo_cate ul:after {display:block;visibility:hidden;clear:both;content:""}
#bo_cate li {display:inline-block;padding:2px;}
#bo_cate a {display:block;line-height:26px;padding:0 5px;border-radius:3px;border:1px solid transparent; font-size:14px; letter-spacing:-0.08em;}
#bo_cate a:focus, #bo_cate a:hover, #bo_cate a:active {text-decoration:none;background:#d2d6dc;}
#bo_cate #bo_cate_ul li.on {z-index:2;background:#112f58;
	height: 25px;
    border-radius: 40px;

    padding: 0 10px;

    

}

#bo_cate #bo_cate_ul li.on a{color:#fff;font-weight:300; line-height: 25px;display:block;
}
</style>

<div id="bo_cate">
	<ul id="bo_cate_ul">
		<li class="<?php if($basename == 'sub_page_03_02_001.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_001.php"  title="전체">전체</a></li>	
		<li class="<?php if($basename == 'sub_page_03_02_002.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_002.php"  title="목포">목포</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_003.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_003.php"  title="여수">여수</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_004.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_004.php"  title="순천">순천</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_005.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_005.php"  title="나주">나주</a></li>	
		<li class="<?php if($basename == 'sub_page_03_02_006.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_006.php"  title="광양">광양</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_007.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_007.php"  title="담양">담양</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_008.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_008.php"  title="곡성">곡성</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_009.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_009.php"  title="구례">구례</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_010.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_010.php"  title="고흥">고흥</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_011.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_011.php"  title="보성">보성</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_012.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_012.php"  title="화순">화순</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_013.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_013.php"  title="장흥">장흥</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_014.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_014.php"  title="강진">강진</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_015.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_015.php"  title="해남">해남</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_016.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_016.php"  title="영암">영암</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_017.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_017.php"  title="무안">무안</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_018.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_018.php"  title="함평">함평</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_019.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_019.php"  title="영광">영광</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_020.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_020.php"  title="장성">장성</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_021.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_021.php"  title="완도">완도</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_022.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_022.php"  title="진도">진도</a></li>
		<li class="<?php if($basename == 'sub_page_03_02_023.php') { echo 'on'; } ?>"><a href="/kr/bbs/sub/sub_page_03_02_023.php"  title="신안">신안</a></li>

	</ul>
</div>


