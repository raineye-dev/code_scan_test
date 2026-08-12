<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="new_notice_con">
    <h2 class="sound_only"><?php echo $bo_subject ?></h2>
	<button type="button" class="slick-prev">이전</button>
    <ul class="slider_nnnnn">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li>
        <?php
				$wr_content = preg_replace("(\<(/?[^\>]+)\>)", "", $list[$i]['wr_content']);
				$wr_content = str_replace("\n","",$wr_content);
				$wr_content = str_replace("\r","",$wr_content);
				$wr_content = str_replace("\r\n","",$wr_content);
				$wr_content = str_replace("&nbsp;","",$wr_content);

			?>
		<a href="<?php echo get_pretty_url($bo_table); ?>&wr_id=<?php echo $list[$i]['wr_id'] ?>">
		   <div class="date"><span><?php echo date("y", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("m", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("d", strtotime($list[$i]['wr_datetime'])); ?> </span></div>
			<dl>
				<?php //echo $list[$i]['href'] ?>
			  <dt><strong><?php echo cut_str($list[$i]['wr_subject'], 40, "..."); ?></strong></dt>
			  <dd><?echo conv_subject($wr_content, 35, "…"); ?></dd>
			</dl>
		</a>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
	<button type="button" class="slick-next">다음</button>
    <div><a href="<?php echo get_pretty_url($bo_table); ?>" class="slick-btn-more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a></div>

</div>