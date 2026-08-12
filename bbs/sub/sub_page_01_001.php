<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 인사말";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    

  
   <?include G5_THEME_PATH."/sub_left_01.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">인사말</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">인사말</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>





<div class="tab_menu01 type02 section">
	<ul>
		<li><a href="/bbs/sub/sub_page_01_01.php"  title="이사장">이사장</a></li>
		<li class="on"><a href="/bbs/sub/sub_page_01_001.php"  title="센터장">센터장</a></li>
	</ul>
</div>

<!-- <div class="about_cont01">
		<img src="/bbs/sub/img/subpage_02_02.jpg">
</div> -->

<div class="about_cont01">
		<p class="t01 mobile_font">
			<!-- 여러분! 반갑습니다.<br> -->
			<strong>전라남도자원봉사센터장<br>
			김상길</strong>입니다.
		</p>
		<!-- <p class="t02 mobile_font">
			전라남도자원봉사센터 홈페이지를 찾아주신 여러분을 진심으로 환영합니다.
		</p> -->
		<p class="t03 mobile_font" style="padding-right: 0px;margin-top: 50px;">존경하는 자원봉사자 여러분!
			안녕하십니까?</p>
			<p class="t03" style="padding-right: 0px;margin-top: 50px;">우리 전남광주는 따뜻한 마음을 가진 자원봉사자 여러분 덕분에 더 나은 지역사회로 나아가고 있습니다. 자원봉사는 나눔과 배려의 실천이며, 우리 이웃과 공동체를 하나로 연결하는 소중한 힘입니다.</p>
					<p class="t04">전라남도자원봉사센터는 자원봉사 문화 확산과 체계적인 지원을 통해 보다 많은 도민이 자원봉사에 참여할 수 있도록 돕고 있습니다. 또한, 재난 대응, 환경 보호, 돌봄 봉사 등 다양한 분야에서 지속가능한 봉사활동을 추진하며, 지역사회와 함께 성장하는 자원봉사 생태계를 만들어가고자 합니다.</p>
					
					<p class="t03" style="padding-right: 0px;margin-top: 20px;">이에 따른 주요사업으로 자원봉사 가치확장과 참여확산, 연대화합으로 따뜻한 전남광주라는 비전으로 자원봉사 문화참여, 인프라 및 관리, 전략사업, 교류협력 등 4대 영역 28개 정책과제로 추진하고 있습니다. </p>
					<p class="t04">전남 61만여명의 자원봉사자 한 분 한 분의 소중한 나눔이 빛날 수 있도록 최선을 다하겠습니다. 여러분의 적극적인 관심과 참여를 부탁드리며, 함께 만들어가는 따뜻한 전남광주를 위해 더욱 노력하겠습니다.  감사합니다.<br><br></p>
					
						


		<p class="sign">전라남도자원봉사센터 센터장 <em>김 상 길</em></p>
		
</div> 




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
