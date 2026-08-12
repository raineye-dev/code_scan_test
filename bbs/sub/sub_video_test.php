 <?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 협력기관";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="svisual_layout">
	<div class="svisual_wrap">
		<div class="sub__background"></div>
		<div class="subvisual-layout">
		  <div class="layout_sub"> 
			<h2><span>센터소개</span></h2>
			<p class="subvisual-layout__text">지금 이 순간 나 자신만이 내게 주어진 모든 것을 바꿀 수 있습니다.</p>
		  </div>
		</div>
	</div>
</div><!----////svisual_layout----->
<div id="body_layout">
  <div class="body_wrap layout"> 
    

    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>센터소개</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li><a href="/bbs/sub/sub_page_01_01.php" target="_self"><span>인사말</span></a> </li>
        <li><a href="/bbs/sub/sub_page_01_02.php" target="_self"><span>연혁</span></a> </li>
		<li><a href="/bbs/sub/sub_page_01_03.php" target="_self"><span>사업소개</span></a> </li>
		<li><a href="/bbs/sub/sub_page_01_04.php" target="_self"><span>조직도</span></a> </li>

		<li class="on"><a href="/bbs/sub/sub_page_01_06.php" target="_self" onclick="goto('/bbs/sub/sub_page_01_06.php');"><span>협력기관</span></a>
			<div class="depth3_b"></div>
			<ul class="depth3_ul lnb_depth3__list">
			<li class="on"><a href="/bbs/sub/sub_page_01_06.php" target="_self"><span>업무협약기관</span></a></li>
			<li><a href="/bbs/sub/sub_page_01_06_001.php" target="_self"><span>자원봉사 우수기업</span></a></li>
			</ul>
		</li>

		<li><a href="/bbs/sub/sub_page_01_05.php" target="_self"><span>찾아오시는길</span></a> </li>
      </ul>
    </aside><!---///lnb_wrap--->


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">업무협약기관</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">업무협약기관</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<script src="http://www.youtube.com/player_api"></script>
		<div class="contents">
   
<!--    <iframe class="movie_wrap" id="playerLayer" frameborder="0" allowfullscreen="1" title="YouTube video player" width="500" height="500" src="https://www.youtube.com/embed/6K4SllzKxiA?autoplay=0&amp;controls=1&amp;autohide=0&amp;rel=0&amp;wmode=transparent&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fdg.readersclub.co.kr&amp;widgetid=1"></iframe>  -->
    <div id="playerLayer"></div>
    <div class="box_wrap alignC">
        교육영상을 시청하고 과제를 작성해주세요!<br>
        동영상 시청, 과제 제출 확인 후 교육 봉사시간은 1시간만 인정됩니다.<br>
        단, 온라인 교육은 1년에 1회만 인정됩니다.<br>
        동영상 시청 후 과제양식을 다운받아서 e-mail로 보내주세요!<br>
    </div>
    <p class="movie_text alignC">온라인 동영상을 끝까지 수강하시면 <span class="emph_orange">다운로드 버튼이 생성</span> 됩니다.</p>
    <div class="btn_wrap alignC">
        <a href="/Ivyimages/site/phvc/online_edu_new.hwp" class="commit_btn" target="_blank" style="visibility: hidden;">다운로드</a>
    </div>
</div>

<script type="text/javascript">
var player;

// 유튜브 플레이어를 생성한다.
function onYouTubePlayerAPIReady() {
    try {
        player = new YT.Player('playerLayer', {
            height: '500',
            width: '100%',
            videoId: '0l_78WWyIqw',
            playerVars: {
                'autoplay': 0, // 자동실행여부
                'controls': 0, // 재생컨트롤 노출여부
                'autohide': 0, // 재생컨트롤이 자동으로 사라질지의 여부
                'rel': 0, // 동영상 재생완료 후 유사동영상 노출여부
                'wmode': 'transparent'
            },
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    } catch (e) {}
}

// 동영상의 재생이 완료되었을 때 호출됨
function onPlayerStateChange(event) {
    if (event.data === 0) {
        document.getElementsByClassName("commit_btn")[0].style.visibility = "visible"
    }
}
</script>


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
