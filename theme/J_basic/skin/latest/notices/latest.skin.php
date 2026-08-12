<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<p class="skip">공지사항</p>
<ul class="clear">
 <?php for ($i=0; $i<count($list); $i++) {  ?>
  <li> 
	<?php
		$wr_content = preg_replace("(\<(/?[^\>]+)\>)", "", $list[$i]['wr_content']);
		$wr_content = str_replace("\n","",$wr_content);
		$wr_content = str_replace("\r","",$wr_content);
		$wr_content = str_replace("\r\n","",$wr_content);
		$wr_content = str_replace("&nbsp;","",$wr_content);
	?>
	<a href="<?php echo get_pretty_url($bo_table); ?>&wr_id=<?php echo $list[$i]['wr_id'] ?>"> 
		<em class="date"><span><span><?php echo date("y", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("m", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("d", strtotime($list[$i]['wr_datetime'])); ?> </span> </em>
		<b class="news_tit"><?php echo cut_str($list[$i]['wr_subject'], 43, "..."); ?></b>
		<!--<span class="news_txt"><?echo conv_subject($wr_content, 16, "…"); ?></span>-->
		
    </a> </li>
	<?php }  ?>
	  <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
</ul>
<div class="more"><a href="/bbs/board.php?bo_table=sub_page_05_01">공지사항 더보기</a></div>



 <!--  <p class="skip">공지사항</p>
	                        <ul class="clear">					
	                        								<li>
	                        									<a href="/notice/view/id/90">
	                        										<em class="date">2021.09.25</em>
	                        										<b class="news_tit">황새바위순교성지 순교자 현양의 날 안내</b>
	                        										<span class="news_txt">
	                        											성 김대건 신부님 탄생 200주년을 맞이하여 한국교회에서 가장 많은 순교자들이 계신 공주 황새바위 순교성지에서 순교자들을 현
	                        										</span>                              
	                        									</a>
	                        								</li>
	                        								<li>
	                        									<a href="/notice/view/id/90">
	                        										<em class="date">2021.09.25</em>
	                        										<b class="news_tit">황새바위순교성지 순교자 현양의 날 안내</b>
	                        										<span class="news_txt">
	                        											성 김대건 신부님 탄생 200주년을 맞이하여 한국교회에서 가장 많은 순교자들이 계신 공주 황새바위 순교성지에서 순교자들을 현
	                        										</span>                              
	                        									</a>
	                        								</li>
	                        								<li>
	                        									<a href="/notice/view/id/90">
	                        										<em class="date">2021.09.25</em>
	                        										<b class="news_tit">황새바위순교성지 순교자 현양의 날 안내</b>
	                        										<span class="news_txt">
	                        											성 김대건 신부님 탄생 200주년을 맞이하여 한국교회에서 가장 많은 순교자들이 계신 공주 황새바위 순교성지에서 순교자들을 현
	                        										</span>                              
	                        									</a>
	                        								</li>        	                 
	                        </ul>
	                        	                  		<div class="more"><a href="">공지사항 더보기</a></div> -->