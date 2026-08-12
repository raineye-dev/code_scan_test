<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="이용안내"  ;
$g5['title'] = "이용안내 | SITEMAP";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 


   
   <?include G5_THEME_PATH."/sub_left_06.php"?>



    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">SITEMAP</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">이용안내</a></li>
            <li class="n3"><a href="" class="navi_ov">SITEMAP</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

	<div class="sitemap type2 clearfix n7">
  <dl>
    <dt>센터소개</dt>
    <dd> <b><a href="/bbs/sub/sub_page_01_01.php">인사말</a></b></dd>
    <dd> <b><a href="/bbs/sub/sub_page_01_02.php">연혁</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_01_03.php">사업소개</a></b> </dd>
	<dd> <b><a href="/bbs/sub/sub_page_01_07.php">센터역할</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_01_04.php">조직도</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_01_06.php">협력기관</a></b></dd>
    <dd> <b><a href="/bbs/sub/sub_page_01_05.php">찾아오시는길</a></b></dd>
  </dl>
  <dl>
    <dt>자원봉사</dt>
    <dd> <b><a href="/bbs/sub/sub_page_02_01.php">자원봉사란?</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_02_02.php">자원봉사 활동현황</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_02_03.php">자원봉사 신청 및 절차</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_02_04.php">자원봉사 조회</a></b> </dd>
  </dl>
  <dl>
    <dt>센터소식</dt>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_01">공지사항</a></b> </dd>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_02">자료실</a></b> </dd>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_03">보도자료</a></b> </dd>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_04">뉴스레터</a></b> </dd>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_05">활동앨범</a></b> </dd>
	<dd> <b> <a href="/bbs/board.php?bo_table=sub_page_05_01">22색 이야기</a></b> </dd>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_06">활동영상</a></b> </dd>
    <dd> <b><a href="/bbs/board.php?bo_table=sub_page_03_10">센터일정</a></b> </dd>
	<dd> <b><a href="/bbs/sub/sub_page_05_01.php">시군센터 연락처</a></b> </dd>
	<dd> <b><a href='/bbs/board.php?bo_table=sub_page_03_12' target='_self'  ><em></em><span>경영공시</span></a></b> </dd>
	<dd> <b><a href="/bbs/sub/sub_page_05_02.php">질문답변</a></b> </dd>
  </dl>
  
  <dl>
    <dt>주요사업</dt>
	<dd> <b><a href="/bbs/sub/sub_page_03_02.php">남도사랑봉사단</a></b> </dd>
     <dd> <b><a href="/bbs/sub/sub_page_01_01.php">블루재능봉사단</a></b> </dd>
     <dd> <b><a href="/bbs/sub/sub_page_03_03.php">은퇴재능봉사단</a></b> </dd>
	 <dd> <b><a href="/bbs/sub/sub_page_03_05.php">섬볼런투어</a></b> </dd>
	 <dd> <b><a href="/bbs/sub/sub_page_03_09.php">재난지원봉사운영</a></b> </dd>
	 <dd> <b><a href="/bbs/sub/sub_page_03_07.php">나눔 이동 세탁차</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_03_08.php">2025 전국생활체육대축전 자원봉사 운영</a></b> </dd>
  </dl>
  <dl>
    <dt>자원봉사교육</dt>
     <dd> <b><a href="/bbs/sub/sub_page_04_01.php">교육안내</a></b></dd>
    <dd> <b><a href="/bbs/sub/sub_page_04_02_006.php">온라인 영상교육</a></b> </dd>
    <dd> <b><a href="/bbs/sub/sub_page_04_03.php">온라인 인증현황</a></b> </dd>
  </dl>
  <dl>
    <dt>인정보상</dt>
     <dd> <b><a href="/bbs/sub/sub_page_08_01.php">자원봉사 마일리지제</a></b></dd>
     <dd> <b><a href="/bbs/sub/sub_page_08_02.php">할인가맹점</a></b> </dd>
	 <dd> <b><a href="/bbs/sub/sub_page_08_03.php">자원봉사 종합보험</a></b> </dd>
  </dl>
   <dl>
    <dt>이용안내</dt>
     <dd> <b><a href="/bbs/sub/sub_page_06_01.php">SITEMAP</a></b></dd>
     <dd> <b><a href="/bbs/sub/sub_page_06_02.php">개인정보처리방침</a></b> </dd>
      <dd> <b><a href="/bbs/sub/sub_page_06_02.php">이메일집단수집거부</a></b> </dd>

  </dl>
</div>





	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
