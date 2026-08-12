<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);


include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>


<div id="body_layout">
  <div class="body_wrap layout"> 
  
<?include G5_THEME_PATH."/sub_left_05.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">센터일정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소식</a></li>
            <li class="n3"><a href="" class="navi_ov">센터일정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<!----/// html----->
  <div class="section"> 
    <!--jd-->
<!-- 게시물 읽기 시작 { -->
<!-- <div id="bo_v_table"><?php echo $board['bo_subject']; ?></div> -->

<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h1 id="bo_v_title">
            <?php if ($category_name) { ?>
            <div style="float:left; line-height:26px; height:26px; padding:10px 10px 0 0px;"><?php echo $view['ca_name'].' | '; // 분류 출력 끝 ?></div>
			<?php } ?>
            <div style="float:left;" class="bo_v_tit"><?php echo cut_str(get_text($view['wr_subject']), 70)."</span>"; // 글제목 출력 ?></div>
            <div style="float:left; line-height:26px; height:26px; padding:5px 0 5px 10px;"><?php echo " (".substr($view['wr_1'],0,4)."-".substr($view['wr_1'],4,2)."-".substr($view['wr_1'],6,2).")"; ?></div> <?//." ~ ".substr($view['wr_2'],4,2)."/".substr($view['wr_2'],6,2)." ?>
            <div style="clear:both;"></div>
        </h1>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        작성자 <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
        <span class="sound_only">작성일</span><strong><?php echo date('y-m-d H:i', strtotime($view['wr_datetime'])) ?></strong>
        조회<strong><?php echo number_format($view['wr_hit']) ?>회</strong>
    </section>

    <?php
    if ($view['file']['count']) {
        $cnt = 0;
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                    <?php echo $view['file'][$i]['bf_content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
                <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php
    if (implode('', $view['link'])) {
     ?>
     <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
         ?>
            <li>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <img src="<?php echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크">
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>





    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
        }
        ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view[rich_content]; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

       
    </section>


    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_bot">
        <?php
        ob_start();
         ?>
        <?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>" class="btn_b01 btn2">이전글</a></li><?php } ?>
            <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>" class="btn_b01 btn2">다음글</a></li><?php } ?>
        </ul>
        <?php } ?>

        <ul class="bo_v_com btn_submits">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn2 btn_submit">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn2 btn_submit" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            <li><a href="<?php echo $list_href ?>" class="btn_b01 btn2 btn_submit_right">목록</a></li>
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
		?>
        <?php //echo $link_buttons ?>
    </div>
    <!-- } 링크 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

</div>
<script>



function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->

</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

<!----/// html----->