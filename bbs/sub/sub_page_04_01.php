<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 교육안내";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 


   <?include G5_THEME_PATH."/sub_left_04.php"?>




    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">교육안내</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">교육안내</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

	  <div class="cont_box01">
		<h4 class="title">자원봉사 교육</h4>
		<p>전라남도자원봉사센터에서는 올바른 자원봉사 인식 및 건전한 시민의식 확립으로 자원봉사 문화 확산을 도모하기 위해 도내 학교, 기업, 단체 등을 대상으로 자원봉사 교육을 진행하고 있습니다.</p>
	 </div>
	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">찾아가는 청소년 자원봉사교육(초,중,고등학교/동아리 등)</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
			<ul class="dot_list">
				<li>교육기간 : 연중</li>
				<li>교육장소 : 신청학교</li>
				<li>교육내용 : 자원봉사 개념, 가치와 필요성, 활동분야 및 자원봉사 활동 계획 방법, 1365 자원봉사포털 활용방법 안내 등</li>
				<li>신청방법 : 시·군 자원봉사센터와 협의 후, 교육신청서 제출</li>
			</ul>
			<div class="sub_btn_wrap">
				<a href="/bbs/sub/sub_page_05_01.php" class="btn small round mt10">시·군센터 연락처 바로가기<i class="b_icon icon_down"></i></a>
				<a href="/bbs/sub/down/교육신청_양식1.hwp" class="btn small round mt10 mobile_btnwp">교육신청서 다운로드<i class="b_icon icon_down"></i></a>
			</div>
		</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">찾아가는 자원봉사교육(대학교, 기업·기관, 단체 등)</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
			<ul class="dot_list">
				<li>교육기간 : 연중</li>
				<li>교육장소 : 신청기관</li>
				<li>교육내용 : 자원봉사 개념, 가치와 필요성, 활동분야 및 자원봉사 활동 계획 방법, 1365 자원봉사포털 활용방법 안내 등</li>
				<li>신청방법 : 시·군 자원봉사센터와 협의 후, 교육신청서 제출</li>
			</ul>
			<div class="sub_btn_wrap">
				<a href="/bbs/sub/sub_page_05_01.php" class="btn small round mt10">시·군센터 연락처 바로가기<i class="b_icon icon_down"></i></a>
				<a href="/bbs/sub/down/교육신청_양식2.hwp" class="btn small round mt10 mobile_btnwp">교육신청서 다운로드<i class="b_icon icon_down"></i></a>
			</div>
		</div>
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">온라인 자원봉사교육</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
			<ul class="dot_list">
				<li>교육기간 : 3월~12월</li>
				<li>교육대상 : 전남도내에서 활동하는 자원봉사자 누구나</li>
				<li>참여방법 : 자원봉사 교육영상 시청 후 과제(평가문항) 작성 및 제출</li>
				<li>안내사항 : 
					<dl>
						<dt>· 교육수료 시 1강좌 당 자원봉사시간 1시간(총 두개 강좌)을 인정해 드립니다. (수료 후 2주 이내 1365 자원봉사포털에서 확인 가능)</dt>
						<!-- <dt>· <span class="points_text">전남도내 소속 자원봉사자가 아닌 경우는 승인이 불가합니다.</span></dt> -->
					</dl>
				</li>
				<li>교육문의 : 전라남도자원봉사센터 대외협력팀<br/><!-- <span><img src="/bbs/sub/img/phone_bg.png"></span> --> <a href="tel:061-240-2324" class="tel fc_blue">061-240-2332</a> (문의시간: 평일 09:00 ~ 18:00)</li>
			</ul>
			
		</div>





	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
