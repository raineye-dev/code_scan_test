<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="이용안내"  ;
$g5['title'] = "이용안내 | 이메일집단수집거부";
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
        <h2 class="page__title">이메일집단수집거부</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">이용안내</a></li>
            <li class="n3"><a href="" class="navi_ov">이메일집단수집거부</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


	 <div id="txt" class="sub0101"> 
        <!-- content start -->
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">이메일 무단수집을 거부합니다.</p></div><!----////타이틀---->
			<div class="txt_box sub_list_wrap">
			<p class="information03">본 웹사이트에 게시된 이메일 주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치를 이용하여 무단으로 수집되는 것을 거부하며, 이를 위반시 정보통신망법에 의해 형사처벌됨을 유념하시기 바랍니다. [게시일 2008년 7월 1일]</p>
		</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">정보통신법 제 50조의 2(전자우편주소의 수집행위등 금지)</p></div><!----////타이틀---->
			<div class="txt_box sub_list_wrap">
				<ul class="dot_list">
					<li><strong>[ 제1항 ]</strong> 누구든지 전자우편주소의 수집을 거부하는 의사가 명시된 인터넷 홈페이지에서 자동으로 전자우편 주소를 수집하는 프로그램 그 밖의 기술적 장치를 이용하여 전자우편주소를 수집하여서는 아니된다.</li>
					<li><strong>[ 제2항 ]</strong> 누구든지 제1항의 규정을 위반하여 수집된 전자우편주소를 판매·유통하여서는 아니된다.</li>
					<li><strong>[ 제3항 ]</strong> 누구든지 제1항 및 제2항의 규정에 의하여 수집·판매 및 유통이 금지된 전자우편주소임을 알고 이를 정보전송에 이용하여서는 아니된다.</li>
				</ul>
			</div>
        <!-- content end --> 
      </div>




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
