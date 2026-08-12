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
		<li class="on"><a href="/bbs/sub/sub_page_01_01.php"  title="이사장">이사장</a></li>
		<li><a href="/bbs/sub/sub_page_01_001.php"  title="센터장">센터장</a></li>
	</ul>
</div>
		<div class="about_cont01 center_jang">
		<p class="t01 mobile_font">
			여러분! 반갑습니다.<br>
			<strong>전라남도자원봉사센터 이사장<br>
			김형석</strong>입니다.
		</p>
		<p class="t02 mobile_font">
			자원봉사로 하나되는<br>"행복한 전남광주"
		</p>
		<p class="t03 mobile_font" style="padding-right: 0px;margin-top: 50px;">선진 시민사회에 척도는 '나눔 문화'의 성숙도에 있다고 생각합니다.
자신에게 있는 지식, 재능 등을 어려운 이웃과 나누고, 지역사회, 국가, 지구촌에 사랑을 실천하는 자원봉사야말로 대단히 아름다운 일이라고 봅니다.</p>
<p class="t03" style="padding-right: 0px;margin-top: 50px;">우리들의 손을 자기 자신만을 위해서 만들어 놓은 것이 아니라, '오른손은 내 자신을 위해, 왼손은 남을 위해' 쓰라고 주신 것 같습니다. 자원봉사자 여러분들은 자신보다는 늘 남을 위해 나눔과 봉사를 실천하신 따뜻한 손과 마음을 지니신 분들입니다.</p>
		<p class="t04">전라남도자원봉사센터가 '자원봉사로 하나되는 행복한 전남광주도민'이라는 비전을 세웠습니다.
자원봉사 시민의식 향상을 위한 교육, 훈련, 재능나눔, 자원봉사 문화 확산, 생애주기별 자원봉사단 운영 등 다양한 활동을 도민 여러분들과 함께하여 사랑과 희망 가득한 지역사회를 만들어 가겠습니다.
행복하고 훈훈한 공동체 실현은, 도민의 자발적인 자원봉사 참여에서 비롯됩니다.
자원봉사자 여러분 감사합니다. <br><br></p>

		<p class="sign">전라남도자원봉사센터 이사장 <em>김 형 석</em></p>
		
	</div>




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
