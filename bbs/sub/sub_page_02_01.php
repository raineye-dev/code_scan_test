<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사"  ;
$g5['title'] = "자원봉사 | 자원봉사란?";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    




   <?include G5_THEME_PATH."/sub_left_02.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">자원봉사란?</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사란?</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
	<div class="sub_wrap_page">
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사란?</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>라틴어(Voluntas)에서 유래(의미: 자발, 자주, 자유의지)</li>
			<li>개인 또는 단체가 지역사회·국가 및 인류사회를 위하여 대가 없이 자발적으로 시간과 노력을 제공하는 행위 (자원봉사활동기본법 제3조)</li>
			<li>자원봉사는 사회 또는 공공의 이익을 위한 일을 자기 의지로 행하는 것 (출처: 위키백과)</li>
			<li>과거에는 인간애를 바탕으로 한 ‘가진 자가 일방적으로 베푸는 자선활동’이었지만, 오늘날에는 ‘나눔을 주고받는 활동’으로 시민의 기본적 의무이자 사회적 책임으로 변화</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사활동이란?</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>사회문제의 예방 및 해결 또는 국가의 공익사업을 수행하고 있는 공사조직에 자발적으로 참여하여, 인간존중의 정신과 민주주의 원칙에 입각하여 필요한 서비스를 제공하여 이타심의 실현과 자기실현을 성취하고자 하는 활동 (출처:한국사회복지협의회)</li>
		</ul>
		</div>


		<div class="subpoint mb20"><span class="dot"><em></em></span><p class="tt1">자원봉사의 특성</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="ci-list volun clearfix">
						<li>
						<div class="ci-icon-wrap">
							<img src="/bbs/sub/img/icon_subpage_02_01.png" alt="자원봉사란">
							<span>자발성</span>
						</div>
						<div class="ci-txt-area">
							<p>
								자원봉사의 자발성이란 타인에 의해 강제로 활동하는 
								것이 아닌, 자신의 자유의지에 따라 시간과 재능, 
								경험으로 이웃과 지역사회 공동체 형성에 도움을 주는 
								활동을 말합니다.
							</p>
						</div>
						</li>
						<li class="mg-list">
						<div class="ci-icon-wrap">
							<img src="/bbs/sub/img/icon_subpage_02_02.png" alt="자원봉사란">
							<span>무보수성</span>
						</div>
						<div class="ci-txt-area">
							<p>
								자원봉사의 무보수성이란 금전적.물질적인 대가를 
								바라고 일하는 직업으로서가 아니라 
								순수한 의미에서의 비영리적인 행위 활동을 말합니다.
							</p>
						</div>
						</li>
						<li>
						<div class="ci-icon-wrap">
							<img src="/bbs/sub/img/icon_subpage_02_03.png" alt="자원봉사란">
							<span>공익성</span>
						</div>
						<div class="ci-txt-area">
							<p>
								자원봉사의 공익성이란 자신의 영리나 특정집단의 
								이익 또는 특권을 위한 활동이 아니라, 도움이 필요한 
								이웃과 지역사회내 산재하고 있는 문제를 해결하기 
								위하여 행동하는 활동을 말합니다.
							</p>
						</div>
						</li>
						<li class="mg-list">
						<div class="ci-icon-wrap">
							<img src="/bbs/sub/img/icon_subpage_02_04.png" alt="자원봉사란">
							<span>지속성</span>
						</div>
						<div class="ci-txt-area">
							<p>
								자원봉사의 지속성이란 임의로 변경되거나 단절되는
								활동이 아닌, 일정기간 동안 정기적으로 
								봉사활동에 참여하는 것을 말합니다.
							</p>
						</div>
						</li>
					</ul>
		</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">봉사자의 자세</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>자원봉사 활동을 하는 목적을 분명히 알고 처음의 순수함을 돌아보는 자세를 갖습니다.</li>
			<li>매사에 긍정적인 생각을 가지고 타인에게 모범을 보일 수 있는 성품을 지닐 수 있도록 노력합니다.</li>
			<li>다른 사람들을 보살피고 맡은 바 직책을 충실히 이행합니다.</li>
			<li>자신의 말이나 행동이 어떠한 영향을 미치는지 항상 생각하고 신중한 자세로 임합니다.</li>
			<li>활동에 대한 책임감을 가지고 봉사활동을 시작합니다.</li>
			<li>활동은 성실히 하며, 활동 시간에 대한 약속을 꼭 지킵니다.</li>
			<li>자신의 개인 적인 문제나 감정이 있더라도 이를 자신의 일과 분리할 수 있는 능력과 자질이 있어야 합니다.</li>
			<li>자원봉사자는 양심적이어야 합니다.</li>
			<li>자원봉사자는 끊임없이 공부하며 배우는 자세를 가져야 합니다.</li>
		</ul>
		</div>
	</div>




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
