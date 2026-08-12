<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<p class="skip">공지사항</p>
   <ul>
      <?php for ($i=0; $i<count($list); $i++) {  ?>
      <li class="mainList">
        <?php
				$wr_content = preg_replace("(\<(/?[^\>]+)\>)", "", $list[$i]['wr_content']);
				$wr_content = str_replace("\n","",$wr_content);
				$wr_content = str_replace("\r","",$wr_content);
				$wr_content = str_replace("\r\n","",$wr_content);
				$wr_content = str_replace("&nbsp;","",$wr_content);

			?>
       <div class="date"><span><?php echo date("y", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("m", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("d", strtotime($list[$i]['wr_datetime'])); ?> </span></div>
        <dl>
				
			<?php //echo $list[$i]['href'] ?>
          <dt><a href="<?php echo get_pretty_url($bo_table); ?>&wr_id=<?php echo $list[$i]['wr_id'] ?>"><strong><?php echo cut_str($list[$i]['wr_subject'], 52, "..."); ?></strong></a></dt>
          <!--  <dd><?echo conv_subject($wr_content, 60, "…"); ?></dd> -->
        </dl>
      </li>
      <?php }  ?>

	   <div class="more"><a href="/bbs/board.php?bo_table=sub_page_03_01">공지사항 더보기</a></div>
    </ul>




  <!--  <p class="skip">공지사항</p>
                        <ul>
                          <li> <a href="" title="상세이동"> <strong>2020년도 기간제 근로자 공개모집 시행계획 공고</strong>
                            <div class="date">2020.01.10</div>
                            </a> </li>
                          <li> <a href="" title="상세이동"> <strong>2020년도 기간제 근로자 공개모집 시행계획 공고</strong>
                            <div class="date">2020.01.10</div>
                            </a> </li>
                          <li> <a href="" title="상세이동"> <strong>2020년도 기간제 근로자 공개모집 시행계획 공고</strong>
                            <div class="date">2020.01.10</div>
                            </a> </li>
                          <li> <a href="" title="상세이동"> <strong>2020년도 기간제 근로자 공개모집 시행계획 공고</strong>
                            <div class="date">2020.01.10</div>
                            </a> </li>
                        </ul>
                        <div class="more"><a href="/bbs/board.php?bo_table=sub_page_03_01">공지사항 더보기</a></div> -->