<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 294;
$thumb_height = 230;
?>
<div class="grap">
  <ul class="obj">
  		<?php
            for ($i=0; $i<count($list); $i++) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['src'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
            ?>
    <li class="item"> <a href="<?php echo get_pretty_url($bo_table); ?>&wr_id=<?php echo $list[$i]['wr_id'] ?>">
      <div class="thumb"> 
      	<span><?php echo $img_content; ?></span> 
       </div>
      <div class="thumb_txt"> 
      		<strong><?php echo $list[$i]['subject'] ?></strong>
        	<p> <span><?php echo date("y", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("m", strtotime($list[$i]['wr_datetime'])); ?></span>.<span><?php echo date("d", strtotime($list[$i]['wr_datetime'])); ?></span></p>

      </div>
      </a> </li>

    	<?php }  ?>
  </ul>
</div>
