<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>

<!-- 밑에 add_stylesheet 함수를 사용하지 않는이유은 가끔 홈페이지 개발시 오류로 add_stylesheet 함수가 먹지 않는 현상으로 인해 사용하지 않습니다. -->
<link href="<?php echo $board_skin_url;?>/fullcalendar/packages/core/main.css" rel="stylesheet" />
<link href="<?php echo $board_skin_url;?>/fullcalendar/packages/daygrid/main.css" rel="stylesheet" />
<link href="<?php echo $board_skin_url;?>/fullcalendar/packages/timegrid/main.css" rel="stylesheet" />
<link href="<?php echo $board_skin_url;?>/fullcalendar/packages/list/main.css" rel="stylesheet" />
<script src="<?php echo $board_skin_url;?>/fullcalendar/packages/core/main.js"></script>
<script src="<?php echo $board_skin_url;?>/fullcalendar/packages/interaction/main.js"></script>
<script src="<?php echo $board_skin_url;?>/fullcalendar/packages/daygrid/main.js"></script>
<script src="<?php echo $board_skin_url;?>/fullcalendar/packages/timegrid/main.js"></script>
<script src="<?php echo $board_skin_url;?>/fullcalendar/packages/list/main.js"></script>
<link href="<?php echo $board_skin_url;?>/wzappend.css" rel="stylesheet" />

<script type="text/javascript">
<!--
document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'ko';
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        defaultDate: '<?php echo G5_TIME_YMD?>',
        locale: initialLocaleCode,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: {
            url: '<?php echo $board_skin_url;?>/get-events.php?bo_table='+g5_bo_table+'&sca=<?php echo $sca?>',
            error: function() {
                $('#script-warning').show();
            }
        },
        loading: function(bool) {
            $('#loading').toggle(bool);
        }
    });
    calendar.render();
});
//-->
</script>

<div id="bo_list" style="width:<?php echo $width; ?>">

    <div id="bo_btn_top">
        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <div id="calendar"></div>

</div>