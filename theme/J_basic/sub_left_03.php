<?
    $nowUrl = $_SERVER['REQUEST_URI'];
    $basename = basename($_SERVER["PHP_SELF"]);

    // 블루재능봉사단에 속하는 페이지 리스트 (001 추가됨)
    $blue_pages = array(
        'sub_page_03_01.php', 'sub_page_03_02_001.php', 'sub_page_03_02_002.php', 
        'sub_page_03_02_003.php', 'sub_page_03_02_004.php', 'sub_page_03_02_005.php', 
        'sub_page_03_02_006.php', 'sub_page_03_02_007.php', 'sub_page_03_02_008.php', 
        'sub_page_03_02_009.php', 'sub_page_03_02_010.php', 'sub_page_03_02_011.php', 
        'sub_page_03_02_012.php', 'sub_page_03_02_013.php', 'sub_page_03_02_014.php', 
        'sub_page_03_02_015.php', 'sub_page_03_02_016.php', 'sub_page_03_02_017.php', 
        'sub_page_03_02_018.php', 'sub_page_03_02_019.php', 'sub_page_03_02_020.php', 
        'sub_page_03_02_021.php', 'sub_page_03_02_022.php', 'sub_page_03_02_023.php'
    );
    
    // 현재 페이지가 블루재능봉사단 관련 페이지인지 확인
    $is_blue_active = in_array($basename, $blue_pages);
?>

<aside id="lnb_layout" class="lnb_wrap">
    <div class="title_wrap lnb__title"><strong>주요사업</strong></div>
    <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        
        <li class="<?php if($basename == 'sub_page_03_02.php') { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_02.php" target="_self"><span>남도사랑봉사단</span></a>
        </li>

        <li class="<?php if($is_blue_active) { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_01.php" target="_self"><span>블루재능봉사단</span></a> 
            
            <?php if($is_blue_active) { ?>
                <div class="depth3_b"></div>
                <ul class="depth3_ul lnb_depth3__list">
                    <li class="<?php if($basename == 'sub_page_03_01.php') { echo 'on'; } ?>">
                        <a href="/bbs/sub/sub_page_03_01.php" target="_self"><span>블루재능봉사단 소개</span></a>
                    </li>
                    <li class="<?php if($basename != 'sub_page_03_01.php' && $is_blue_active) { echo 'on'; } ?>">
                        <a href="/bbs/sub/sub_page_03_02_001.php" target="_self"><span>전남 재능기부 자원봉사단체</span></a>
                    </li>
                </ul>
            <?php } ?>
        </li>
        
        <li class="<?php if($basename == 'sub_page_03_03.php') { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_03.php" target="_self"><span>은퇴재능봉사단</span></a>
        </li>
        <li class="<?php if($basename == 'sub_page_03_05.php') { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_05.php" target="_self"><span>가고싶은 전남 볼런투어</span></a>
        </li>  
        <li class="<?php if($basename == 'sub_page_03_09.php') { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_09.php" target="_self"><span>재난자원봉사운영</span></a>
        </li>   
        
        <li class="<?php if($basename == 'sub_page_03_07.php' || $bo_table == 'sub_page_03_11') { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_07.php" target="_self"><span>나눔 이동 세탁차</span></a>   
            <?php if($basename == 'sub_page_03_07.php' || $bo_table == 'sub_page_03_11') { ?>
                <div class="depth3_b"></div>
                <ul class="depth3_ul lnb_depth3__list">
                    <li class="<?php if($basename == 'sub_page_03_07.php') { echo 'on'; } ?>">
                        <a href="/bbs/sub/sub_page_03_07.php" target="_self"><span>나눔 이동 세탁차 안내</span></a>
                    </li>
                    <li class="<?php if($bo_table == 'sub_page_03_11') { echo 'on'; } ?>">
                        <a href="/bbs/board.php?bo_table=sub_page_03_11" target="_self"><span>나눔 이동 세탁차 일정</span></a>
                    </li>
                </ul>
            <?php } ?>
        </li>
        
        <li class="<?php if($basename == 'sub_page_03_08.php') { echo 'on'; } ?>">
            <a href="/bbs/sub/sub_page_03_08.php" target="_self"><span>전남 청년봉사단 운영</span></a>
        </li>

    </ul>
</aside>