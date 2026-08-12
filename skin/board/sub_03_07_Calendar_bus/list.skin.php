<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

?>


<link rel="stylesheet" type="text/css" media="all" href="<?php echo $board_skin_url;?>/wz.js/fullcalendar.css" />
<link rel="stylesheet" type="text/css" media="print" href="<?php echo $board_skin_url;?>/wz.js/fullcalendar.print.min.css" />
<script type="text/javascript" src="<?php echo $board_skin_url;?>/wz.js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo $board_skin_url;?>/wz.js/fullcalendar.js"></script>
<script type="text/javascript" src="<?php echo $board_skin_url;?>/wz.js/ko.js"></script>
<style>
a.fc-event:link, a.fc-event:visited {
    color: #fff;
}
a.fc-event:hover {
    color: #fff;
    text-decoration: underline;
}
.fc-view, .fc-view > table {background-color: #fff;}
.fc-view .fc-day-header {padding:10px 0}
</style>
<script type="text/javascript">
<!--
$(document).ready(function() {

    var initialLocaleCode = 'ko';

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '<?php echo G5_TIME_YMD?>',
        navLinks: true, // can click day/week names to navigate views
        editable: false,
        eventLimit: false, // allow "more" link when too many events
        height: 'auto',
        events: {
            url: '<?php echo $board_skin_url;?>/get-events.php?bo_table='+g5_bo_table,
            error: function() {
                $('#script-warning').show();
            }
        },
        loading: function(bool) {
            $('#loading').toggle(bool);
        }
    });

});
//-->
</script>


<!----/// html----->

<div id="svisual_layout">
	<div class="svisual_wrap">
		<div class="sub__background"></div>
		<div class="subvisual-layout">
		  <div class="layout_sub"> 
			<h2><span>센터소식</span></h2>
			<p class="subvisual-layout__text">지금 이 순간 나 자신만이 내게 주어진 모든 것을 바꿀 수 있습니다.</p>
		  </div>
		</div>
	</div>
</div><!----////svisual_layout----->
<div id="body_layout">
  <div class="body_wrap layout"> 
  
    <aside id="lnb_layout" class="lnb_wrap">
      <div class="title_wrap lnb__title"><strong>주요사업</strong> </div>
      <ul id="snb" class="depth2_ul lnb_depth2__list n4">
        <li><a href="/bbs/sub/sub_page_03_01.php" target="_self"><span>블루 재능봉사단</span></a> </li>
        <li><a href="/bbs/sub/sub_page_03_02.php" target="_self"><span>도민 협력 남도사랑 봉사단</span></a> </li>
		<li><a href="/bbs/sub/sub_page_03_03.php" target="_self"><span>은퇴재능 남도친구들</span></a> </li>
		<li><a href="/bbs/sub/sub_page_03_05.php" target="_self"><span>안녕 가고싶은섬 볼런투어</span></a> </li>
		<li class="on"><a href="/bbs/sub/sub_page_03_07.php" target="_self"><span>나눔 이동 세탁차</span></a> 
			<div class="depth3_b"></div>
			<ul class="depth3_ul lnb_depth3__list">
			<li><a href="/bbs/sub/sub_page_03_07.php" target="_self"><span>나눔 이동 세탁차 안내</span></a></li>
			<li class="on"><a href="/bbs/board.php?bo_table=sub_page_03_08" target="_self"><span>나눔 이동 세탁차 일정</span></a></li>
			</ul>		
		</li>
      </ul>
    </aside><!---///lnb_wrap--->


 <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">나눔 이동 세탁차 일정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">나눔 이동 세탁차 일정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<!----/// html----->

<div id="bo_list" style="width:<?php echo $width; ?>">

   

    <div id="calendar"></div>

</div>
 <div id="bo_btn_top">
        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user btn_submits">
            
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_submit_right">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
<!----/// html----->
</div><!---///추가-->



</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

<!----/// html----->