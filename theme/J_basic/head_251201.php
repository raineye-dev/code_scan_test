<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

 <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
</div>
<body class="grid-system ">
<div id="blackout"></div>
<div id="touchArea" style="display: none;"></div>
<div id="shadow_device"></div>
<!-- 스킵네비케이션시작 -->
<div id="skipnavi"> <a href="#body_layout">본문 바로가기</a> <a href="#gnb_layout">대메뉴 바로가기</a> </div>
<!-- 스킵네비케이션끝 -->
<div class="top_link">
  <div class="layout">
    <ul class="top_list1">
      <li><a href="https://www.jeonnam.go.kr/main.do" target="_blank" title="새창열림" rel="noopener noreferrer">전라남도청</a></li>
	  <li><a href="https://www.1365.go.kr/vols/main.do" target="_blank" title="새창열림" rel="noopener noreferrer">1365</a></li>
      <li><a href="https://archives.v1365.or.kr/" target="_blank" title="새창열림" rel="noopener noreferrer">자원봉사아카이브</a></li>

    </ul>



    <ul class="top_list2">
	<?if($is_admin){?>
		<li><a href="/bbs/sub/sub_page_adm.php"  target="_blank" title="새창열림" rel="noopener noreferrer">자원봉사대상관리</a></li>
	<?}?>
		<li><a href="/"  title="새창열림" rel="noopener noreferrer">HOME</a></li>
		<?php if ($is_member) {  ?>
<!--             <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=sub_page_03_01">MYPAGE</a></li>             -->
            <li><a href="/bbs/sub/sub_page_09_01.php">MYPAGE</a></li>            
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a></li>
        
			<?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
		
		<?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
        <?php }  ?>


    </ul>
  </div>
</div>
<header id="top_layout"> 
  <!-- gnb_layout :s --> 
<!--   <script type="text/javascript">
  	function onSearchForm(frm){
  		frm.action="http://search.yd21.go.kr/RSA/front/Search.jsp";
  	}
  	</script> -->
  <div class="top_wrap">
    <h1 class="logo_wrap" id="logo"><a href="/"><em>전라남도자원봉사센터</em></a></h1>
    <ul class="utile_wrap">
      <li class="box pc user-control"> <a id="btnAllmenu" href="/bbs/sub/sub_page_06_01.php" class="sang-ico ico-menu"><span class="hide">전체메뉴</span></a> </li>
      <li class="box mo">
        <button type="button" class="btn-allmenu sang-ico ico-menu " data-toggle="modal" data-target="#mobile-menu"><span class="hide">전체메뉴</span></button>
      </li>
    </ul>
  </div>
  <nav id="gnb_layout">
    <div id="gnb"> 
      <!-- 공통메뉴틀 시작 -->
      <div class="gnb_wrap layout"> 
        <!-- 메뉴 시작 -->
        
        <ul class='depth1_ul n5' >
          <li class='th1 n1 '> <a href='/bbs/sub/sub_page_01_01.php' class='th1_lnk'><span>센터소개</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>센터소개</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/sub/sub_page_01_01.php' target='_self'><em></em><span>인사말</span></a> </li>
                  <li> <a href='/bbs/sub/sub_page_01_02.php' target='_self'><em></em><span>연혁</span></a> </li>
                  <li> <a href='/bbs/sub/sub_page_01_07.php' target='_self'><em></em><span>센터역할</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_01_03.php' target='_self'><em></em><span>사업소개</span></a> </li>
				 <!--  <li> <a href='/bbs/sub/sub_page_01_08.php' target='_self'><em></em><span>CI</span></a> </li> -->
                  <li> <a href='/bbs/sub/sub_page_01_04.php' target='_self'><em></em><span>조직도</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_01_06.php' target='_self'><em></em><span>협력기관</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_01_05.php' target='_self'><em></em><span>찾아오시는길</span></a> </li>
                </ul>
              </div>
            </div>
          </li>
          <li class='th1 n2 '> <a href='/bbs/sub/sub_page_02_01.php' class='th1_lnk'><span>자원봉사</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>자원봉사 정보</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/sub/sub_page_02_01.php' target='_self'  ><em></em><span>자원봉사란?</span></a> </li>
                  <li> <a href='/bbs/sub/sub_page_02_02.php' target='_self'  ><em></em><span>자원봉사 활동현황</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_02_03.php' target='_self'  ><em></em><span>자원봉사 신청 및 절차</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_02_04.php' target='_self'  ><em></em><span>자원봉사 조회</span></a> </li>
				 
                </ul>
              </div>
            </div>
          </li>
          <li class='th1 n3 '> <a href='/bbs/board.php?bo_table=sub_page_03_01' class='th1_lnk'><span>센터소식</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>센터소식</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/board.php?bo_table=sub_page_03_01' target='_self'  ><em></em><span>공지사항</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_02' target='_self'  ><em></em><span>자료실</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_03' target='_self'  ><em></em><span>보도자료</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_04' target='_self'  ><em></em><span>뉴스레터</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_05' target='_self'  ><em></em><span>활동앨범</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_05_01' target='_self'  ><em></em><span>22색 이야기</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_06' target='_self'  ><em></em><span>활동영상</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_10' target='_self'  ><em></em><span>센터일정</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_05_01.php' target='_self'  ><em></em><span>시군센터 연락처</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_12' target='_self'  ><em></em><span>경영공시</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_05_02.php' target='_self'  ><em></em><span>질문답변</span></a> </li>
                </ul>
              </div>
            </div>
          </li>
          <li class='th1 n4 '> <a href='/bbs/sub/sub_page_03_02.php' class='th1_lnk'><span>주요사업</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>주요사업</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
					<li> <a href='/bbs/sub/sub_page_03_02.php' target='_self'  ><em></em><span>남도사랑봉사단</span></a> </li>
                   <li> <a href='/bbs/sub/sub_page_03_01.php' target='_self'  ><em></em><span>블루재능봉사단</span></a> </li>
				   
				   <li> <a href='/bbs/sub/sub_page_03_03.php' target='_self'  ><em></em><span>은퇴재능 남도친구들</span></a> </li>
				   <li class=""> <a href='/bbs/sub/sub_page_03_05.php' target='_self'  ><em></em><span>섬볼런투어</span></a> </li>
				   <li class=""> <a href='/bbs/sub/sub_page_03_09.php' target='_self'  ><em></em><span>재난지원봉사운영</span></a> </li>
				   <li> <a href='/bbs/sub/sub_page_03_07.php' target='_self'  ><em></em><span>나눔 이동 세탁차</span></a> </li>

				    <li class="wid40"> <a href='/bbs/sub/sub_page_03_08.php' target='_self'  ><em></em><span>2025 전국생활체육대축전 자원봉사 운영</span></a> </li>
                </ul>
              </div>
            </div>
          </li>
          <li class='th1 n5 '> <a href='/bbs/sub/sub_page_04_01.php' class='th1_lnk'><span>자원봉사교육</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>자원봉사교육</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/sub/sub_page_04_01.php' target='_self'  ><em></em><span>교육안내</span></a> </li>
				<!--  <li> <a href='/bbs/sub/sub_page_04_02_006.php' target='_self'  ><em></em><span>온라인영상교육</span></a> </li> -->
				  <li> <a href='/bbs/sub/sub_page_04_02_006.php' target='_self'  ><em></em><span>온라인 영상교육</span></a> </li>
				 <li> <a href='/bbs/sub/sub_page_04_04.php' target='_self'  ><em></em><span>온라인 인증현황</span></a> </li>
				
				
                </ul>
              </div>
            </div>
          </li>
		   <li class='th1 n6 '> <a href='/bbs/board.php?bo_table=hall_of_fame' class='th1_lnk'><span>인정보상</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>인정보상</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/board.php?bo_table=hall_of_fame' target='_self'  ><em></em><span>명예의 전당</span></a> </li>
                  <li> <a href='/bbs/sub/sub_page_08_01.php' target='_self'  ><em></em><span>자원봉사 마일리지제</span></a> </li>
                  <li> <a href='/bbs/board.php?bo_table=biz_info' target='_self'  ><em></em><span>할인가맹점</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_08_03.php' target='_self'  ><em></em><span>자원봉사 종합보험</span></a> </li>
				 
				
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!-- 메뉴 끝 --> 
		<div class="only24"><img src="/theme/J_basic/image/common/only.png"></div>
      </div>
      <span class="line"></span> 
      <!-- 공통메뉴틀 끝 --> 
    </div>
  </nav>
  <!-- 모바일 메뉴 -->
  <div class="modal fade" id="mobile-menu" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="mo_top_untill">
        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="https://www.jeonnam.go.kr/main.do" target="_blank" title="새창열림" rel="noopener noreferrer">전남도청</a></li>
          <li><a href="https://www.1365.go.kr/vols/main.do"  target="_blank" title="새창열림">1365</a></li>
        </ul>
      </div>
      <div class="modal-content">
        <div class="modal-body accordion">
          <ul class='depth1_ul n5' >
            <li class='th1 n1 '> <a href='/bbs/sub/sub_page_01_01.php' class='th1_lnk'><span>센터소개</span></a>
              <div class='item'>
                <div class='gnb-title'><strong>센터소개</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
                </div>
                <div class='gnb-depth'>
                  <ul class='depth2_ul'>
					  <li> <a href='/bbs/sub/sub_page_01_01.php' target='_self'><em></em><span>인사말</span></a> </li>
					  <li> <a href='/bbs/sub/sub_page_01_02.php' target='_self'><em></em><span>연혁</span></a> </li>
					   <li> <a href='/bbs/sub/sub_page_01_07.php' target='_self'><em></em><span>센터역할</span></a> </li>
					  <li> <a href='/bbs/sub/sub_page_01_03.php' target='_self'><em></em><span>사업소개</span></a> </li>
					  <li> <a href='/bbs/sub/sub_page_01_04.php' target='_self'><em></em><span>조직도</span></a> </li>
					  <li> <a href='/bbs/sub/sub_page_01_06.php' target='_self'><em></em><span>협력기관</span></a> </li>
					  <li> <a href='/bbs/sub/sub_page_01_05.php' target='_self'><em></em><span>찾아오시는길</span></a> </li>
					 
                  </ul>
                </div>
              </div>
            </li>
            <li class='th1 n2 '> <a href='/bbs/sub/sub_page_02_01.php' class='th1_lnk'><span>자원봉사</span></a>
              <div class='item'>
                <div class='gnb-title'><strong>자원봉사 정보</strong>
                     <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
                </div>
                <div class='gnb-depth'>
                  <ul class='depth2_ul'>
                    <li> <a href='/bbs/sub/sub_page_02_01.php' target='_self'  ><em></em><span>자원봉사란?</span></a> </li>
					<li> <a href='/bbs/sub/sub_page_02_02.php' target='_self'  ><em></em><span>자원봉사활동현황</span></a> </li>
					<li> <a href='/bbs/sub/sub_page_02_03.php' target='_self'  ><em></em><span>자원봉사 신청 및 절차</span></a> </li>
					<li> <a href='/bbs/sub/sub_page_02_04.php' target='_self'  ><em></em><span>자원봉사 수요처</span></a> </li>
                  </ul>
                </div>
              </div>
            </li>
			 <li class='th1 n3 '> <a href='' class='th1_lnk'><span>센터소식</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>센터소식</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/board.php?bo_table=sub_page_03_01' target='_self'  ><em></em><span>공지사항</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_02' target='_self'  ><em></em><span>자료실</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_03' target='_self'  ><em></em><span>보도자료</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_04' target='_self'  ><em></em><span>뉴스레터</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_05' target='_self'  ><em></em><span>활동앨범</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_05_01' target='_self'  ><em></em><span>22색이야기</span></a> </li>
				  <li> <a href='/bbs/board.php?bo_table=sub_page_03_06' target='_self'  ><em></em><span>활동영상</span></a> </li>
				 <li> <a href='/bbs/board.php?bo_table=sub_page_03_10' target='_self'  ><em></em><span>센터일정</span></a> </li>
                   <li> <a href='/bbs/sub/sub_page_05_01.php' target='_self'  ><em></em><span>시군센터연락처</span></a> </li>
				   <li> <a href='/bbs/board.php?bo_table=sub_page_03_12' target='_self'  ><em></em><span>경영공시</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_05_02.php' target='_self'  ><em></em><span>질문답변</span></a> </li>
                </ul>
              </div>
            </div>
          </li>
 <li class='th1 n4 '> <a href='' class='th1_lnk'><span>주요사업</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>주요사업</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li>  <a href='/bbs/sub/sub_page_03_01.php' target='_self'  ><em></em><span>블루 재능 봉사단</span></a> 
					<ul class="depth3_ul">
						<li><a href="/bbs/sub/sub_page_03_01.php" target="_self" class="lnk_2th"><span>블루 재능봉사단 소개</span></a></li>
						<li><a href="/bbs/sub/sub_page_03_01_001.php" target="_self" class="lnk_2th"><span>블루 재능봉사단 참여단체</span></a></li>		
						<li><a href="/bbs/board.php?bo_table=sub_page_03_01_002" target="_self" class="lnk_2th"><span>블루 재능봉사단 활동사진</span></a></li>		
					</ul>		
				  
				  </li>
				   <li> <a href='/bbs/sub/sub_page_03_02.php' target='_self'  ><em></em><span>도민 협력 남도사랑 봉사단</span></a> </li>
				   <li> <a href='/bbs/sub/sub_page_03_03.php' target='_self'  ><em></em><span>은퇴재능 남도친구들</span></a> </li>			  
				   <li> <a href='/bbs/sub/sub_page_03_05.php' target='_self'  ><em></em><span>안녕 가고싶은섬 볼런투어</span></a> </li>
				   <li> <a href='/bbs/sub/sub_page_03_07.php' target='_self'  ><em></em><span>나눔 이동 세탁차</span></a> 
						<ul class="depth3_ul">
						<li><a href="/bbs/sub/sub_page_03_07.php" target="_self" class="lnk_2th"><span>나눔 이동 세탁차 안내</span></a></li>
						<li><a href="/bbs/board.php?bo_table=sub_page_03_11" target="_self" class="lnk_2th"><span>나눔 이동 세탁차 일정</span></a></li>
					</ul>		
				    <li> <a href='/bbs/sub/sub_page_03_08.php' target='_self'  ><em></em><span>2025 전국생활체육대축전 자원봉사 운영</span></a> 
				   </li>
                </ul>
              </div>
            </div>
          </li>
          <li class='th1 n5 '> <a href='' class='th1_lnk'><span>자원봉사교육</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>정보마당</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/sub/sub_page_04_01.php' target='_self'  ><em></em><span>교육안내</span></a> </li>
                  <li> <a href='/bbs/sub/sub_page_04_02_006.php' target='_self'  ><em></em><span>온라인 영상교육</span></a> </li>
					<!-- <ul class="depth3_ul" style="display: block;">
						<li><a href="/bbs/sub/sub_page_04_02.php" target="_self" class="lnk_2th"><span>청소년 영상교육</span></a></li>
						<li><a href="/bbs/sub/sub_page_04_03_001.php" target="_self" class="lnk_2th"><span>성인 영상교육</span></a></li>						
					</ul>			 --> 
				 </li>
				  <li> <a href='/bbs/sub/sub_page_04_04.php' target='_self'  ><em></em><span>온라인인증현황</span></a> </li>
				
                </ul>
              </div>
            </div>
          </li>
		   <li class='th1 n6 '> <a href='/bbs/board.php?bo_table=hall_of_fame' class='th1_lnk'><span>인정보상</span></a>
            <div class='item'>
              <div class='gnb-title'><strong>인정보상</strong>
                  <p>1년 365일<br>
                  자원봉사 하기 좋은날</p>
              </div>
              <div class='gnb-depth'>
                <ul class='depth2_ul'>
                  <li> <a href='/bbs/board.php?bo_table=hall_of_fame' target='_self'  ><em></em><span>명예의 전당</span></a> </li>
                  <li> <a href='/bbs/sub/sub_page_08_01.php' target='_self'  ><em></em><span>자원봉사마일리지제</span></a> </li>
                  <li> <a href='/bbs/board.php?bo_table=biz_info' target='_self'  ><em></em><span>할인가맹점</span></a> </li>
				  <li> <a href='/bbs/sub/sub_page_08_03.php' target='_self'  ><em></em><span>자원봉사종합보험</span></a> </li>
				
                </ul>
              </div>
            </div>
          </li>
          </ul>
          <button type="button" class="mobile-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">닫기</span></button>
        </div>
      </div>
    </div>
  </div>
  <!-- 모바일 메뉴 --> 
  <script src="/theme/J_basic/js/js/mobile/jeonnam.gnb.js"></script> 
  <script src="/theme/J_basic/js/js/mobile/jeonnam.snb.js"></script> 
  <script>
		(function(){
            var param = "#gnb_layout",
                obj = ".item",
                btn = ".th1_lnk",
                wrap = "#top_layout",
                dur = 300,
                meth = "easeOutCubic";
            gnb(param,obj,btn,wrap,dur,meth);
            gnb_open();
            
        }()); 

        $(function(){
			$("[data-print=print]").on('click', function() {
		        $("#txt").print({
		            globalStyles : true,
		            mediaPrint : false,
		            iframe : true,
		            noPrintSelector : ".avoid-this",
		            deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
		        });
			 });
		});

		$(".clickOpen > a").on("click",function(){
            $(this).parent().addClass("on");  
        });
        $(".clickOpen a.clickClose").on("click",function(){
            $(this).parents(".clickOpen").removeClass("on");
        });
	</script> 
  <!-- gnb_layout :e --> 
</header>
<div class="gnb_bg"></div>
<hr>