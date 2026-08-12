<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사"  ;
$g5['title'] = "자원봉사 | 자원봉사 신청 및 절차";
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
        <h2 class="page__title">자원봉사 신청 및 절차</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사 신청 및 절차</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

<div class="sub_wrap_page">
	 <div class="subpoint mb20"><span class="dot"><em></em></span><p class="tt1">자원봉사 활동 참여 절차</p></div><!----////타이틀---->
		<div class="step_list_box col4">
	    <ul>
	    	<li><span class="texts">1365 자원봉사포털 회원가입</span></li>
	    	<li><span class="texts">봉사활동 신청</span></li>
	    	<li><span class="texts">교육</span></li>
	    	<li><span class="texts">배치</span></li>
	    	<li><span class="texts">봉사</span></li>
			<li><span class="texts">실적확인서 발급</span></li>
	    	
	    </ul>
    </div>
		
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">1365자원봉사포털 회원가입</p></div><!----////타이틀---->
		<h5 class="stitle02">1365자원봉사포털 회원가입 시 유의사항</h5>
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>1365자원봉사포털(<a href="1365자원봉사포털(www.1365.go.kr) 회원가입" target="_blank">www.1365.go.kr</a>) 회원가입</li>
			<li>봉사희망지역(소속센터)을 ‘전라남도’로 선택</li>
			<li>봉사활동 안내가 문자로 안내될 수 있으니 ‘정보제공 및 수신 동의’</li>
			<li>봉사실적 연계(VMS, NEIS, DOVOL) 필요할시 ‘연계 동의’</li>
			<li>자원봉사 활동 중 발생하는 사고에 대비해 상해보험 처리를 위해서 ‘보험가입 활용 동의’<br/>※ 만 14세 미만은 보호자(법정대리인) 동의 후 가입 가능</li>
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사 교육</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>신규 자원봉사자, 교육을 받지 않은 자원봉사자 및 단체를 대상으로 올바른 자원봉사에 대한 이해를 돕기 위해 자원봉사 교육 진행</li>
			<li><span>온라인 교육 : 도센터 홈페이지 '자원봉사교육 - 온라인영상교육'</span>
				<span class="">
					<a href="http://www.jnvc1365.or.kr/bbs/sub/sub_page_04_02_006_back.php" class="btn small round mt10">온라인영상교육 시청<i class="b_icon icon_down"></i></a>	
				</span>
			</li>
			<li><span>오프라인 교육 : 도 및 시·군자원봉사센터 문의</span><span>
					<a href="http://www.jnvc1365.or.kr/bbs/sub/sub_page_05_01.php" class="btn small round mt10">시·군자원봉사센터<i class="b_icon icon_down"></i></a>	
				</span></li>
			<li>단체 시 외부출장 교육가능</li>
		</ul>
		</div>
		
		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사 신청</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>1365자원봉사포털에 접속하여 지역, 분야 등 자신의 조거에 맞는 자원봉사를 조회</li>
			<li>자원봉사 상세 정보를 꼼꼼히 확인하여 자원봉사 신청</li>
			
			
		</ul>
		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사 활동</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>책임감을 갖고 활동약속 지키기</li>
			<li>대상자의 입장에서 활동하기</li>
			<li>활동기관이나 대상자의 비밀지키기</li>
			<li>봉사활동 불참 시 사전에 미리 양해전화 하기</li>
			<li>봉사활동 하기 전 1365자원봉사포털 회원가입 하기</li>
		</ul>


		</div>

		<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">자원봉사 실적확인서 발급</p></div><!----////타이틀---->
		<div class="txt_box sub_list_wrap">
		<ul class="dot_list">
			<li>시·도, 시·도·군구 및 연계기관 통합실적 확인서 발급이 가능</li>
			<li>문서 위·변조 방지 솔루션을 적용하여 확인서 발급</li>
			
		</ul>
		</div>
</div>


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
