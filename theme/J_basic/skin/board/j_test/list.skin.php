<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 4;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<style type="text/css">
.bo_tit.1{display:block;}
</style>

<!-- 추가 -->
<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 온라인 영상교육";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

function mytory_asterisk($string) {
	$string = trim($string);
	$length = mb_strlen($string, 'utf-8');
	$string_changed = $string;
	if ($length <= 2) {
		// 한두 글자면 그냥 뒤에 별표 붙여서 내보낸다.
		$string_changed = mb_substr($string, 0, 1, 'utf-8') . '*';
	}
	if ($length >= 3) {
		// 3으로 나눠서 앞뒤.
		$leave_length = floor($length/3); // 남겨 둘 길이. 반올림하니 너무 많이 남기게 돼, 내림으로 해서 남기는 걸 줄였다.
		$asterisk_length = $length - ($leave_length * 2);
		$offset = $leave_length + $asterisk_length;
		$head = mb_substr($string, 0, $leave_length, 'utf-8');
		$tail = mb_substr($string, $offset, $leave_length, 'utf-8');
		$string_changed = $head . implode('', array_fill(0, $asterisk_length, '*')) . $tail;
	}
	return $string_changed;
}
?>


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
</div>

<!----////svisual_layout----->
<!-- 변경 -->
<div id="body_layout">
<div class="body_wrap layout">

<?include G5_THEME_PATH."/sub_left_04.php"?>

        <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">온라인 인증현황</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap">
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">온라인 인증현황</a></li>
         </ul>
        </div><!---///utile_wrap---->
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>



<!----/// html-----> 
<!----/// 게시판 추가 html----->
<div class="board_contents LIST">
<div class="board_top"> 
  
  <!-- 게시판 목록 시작 { -->
  <div id="bo_list" style="width:<?php echo $width; ?>">
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
      <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
      <ul id="bo_cate_ul">
        <?php echo $category_option ?>
      </ul>
    </nav>
    <?php } ?>
    
    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top" class="page-count-wrap clearfix"> 
      
      <!-- 게시판 검색 시작 { -->
      <div class="board_search">
        <fieldset id="bo_sch">
          <legend>게시물 검색</legend>
          <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <div class="fbox">
              <p class="s_select">
                <select name="sfl" id="sfl">
                  <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>발급번호</option>
                </select>
              </p>
              <p class="s_keyword">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
              </p>
              <!-- <input type="button" value="검색" class="btn_submit"> -->
              <button type="submit" value="검색" class="btn_submit"><span class="">검색</span></button>
            </div>
          </form>
        </fieldset>
      </div>
      
      <!-- } 게시판 검색 끝 --> 
      
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
    
    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onSubmit="return fboardlist_submit(this);" method="post">
      <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
      <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
      <input type="hidden" name="stx" value="<?php echo $stx ?>">
      <input type="hidden" name="spt" value="<?php echo $spt ?>">
      <input type="hidden" name="sca" value="<?php echo $sca ?>">
      <input type="hidden" name="sst" value="<?php echo $sst ?>">
      <input type="hidden" name="sod" value="<?php echo $sod ?>">
      <input type="hidden" name="page" value="<?php echo $page ?>">
      <input type="hidden" name="sw" value="">
      <div class="tbl_head01 tbl_wrap">
        <table class="board_list_table">
          <caption>
          <?php echo $board['bo_subject'] ?> 목록
          </caption>
          <thead>
            <tr>
              <?php if ($is_checkbox) { ?>
              <?php } ?>
              <th scope="col" class="table_mobile mobile_no" width="15%">발급번호</th>
              <th scope="col" width="15%">분류</th>
              <th scope="col"  width="45%" class="mobile_no">이름</th>
              <th scope="col"  class="mobile_table" width="25%">등록일</a></th>
            </tr>
          </thead>
          <tbody>
			<!-- 추가 -->
		<?php
			//행, 현재페이지, 총페이지수, URL

			$page_size = 20;

			if ($page < 1) $page = 1;

			$where = "WHERE grade>=70";

			$total_res = sql_fetch(" SELECT count(*) as cnt FROM video_education_info {$where}");
			$total_count = $total_res['cnt'];

			$total_page = (int)($total_count/$page_size) + ($total_count%$page_size==0 ? 0 : 1);
			$page_start = $page_size * ( $page - 1 );

			$vnum = $total_count - (($page-1) * $page_size);

			$sql = " select * from video_education_info {$where} order by idx desc limit $page_start, $page_size ";
			$result = sql_query($sql);

			//$link = "&searchFromType={$searchFromType}&area_code={$area_code}&mb_area_gugundo={$mb_area_gugundo}&result_cash_1={$result_cash_1}&result_cash_2={$result_cash_2}&f_filter={$f_filter}&keyword={$keyword}";
			$link="";

			$url = "/bbs/sub/sub_page_04_04.php";

			while($row = sql_fetch_array($result)){
				$gubun = ($row['etc1']=="T") ? "청소년" : "성인";
				$reg_date = $row['reg_date'];
		?>
				<tr>
					<td><?=$row['idx']?></td>
					<td><span><?=$gubun?></span></td>
					<td>
						<?php if ($is_admin) {  ?>
							<a href="/bbs/sub/sub_page_04_04_001.php?idx=<?=$row['idx']?>"><?=mytory_asterisk($row['name'])?></a>
						<?}else{?>
							<a onClick="alert('관리자만 접근할 수 있는 페이지입니다.');" style="cursor:pointer;"><?=mytory_asterisk($row['name'])?></a>
						<?}?>
					</td>
					<td><?=substr($reg_date, 0, 4)?>. <?=substr($reg_date, 4, 2)?>. <?=substr($reg_date, 6, 2)?></td>
				</tr>
		<?}?>







            <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
            <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
              <?php if ($is_checkbox) { ?>
              <?php } ?>
              <td class="td_num2 table_mobile mobile_no" width="10%"><?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong class="notice_icon"><i class="fa fa-bullhorn" aria-hidden="true"></i><span class="sound_only">공지</span></strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?></td>
              <td class="td_subject" width="50%" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px"><?php
                if ($is_category && $list[$i]['ca_name']) {
                 ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link "><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
                <div class="bo_tit <?php echo $i ?>"> <a href="<?php echo $list[$i]['href'] ?> "> <?php echo $list[$i]['icon_reply'] ?>
                  <?php
                            if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                         ?>
                  <?php echo $list[$i]['subject'] ?> </a>
                  <?php if ($list[$i]['comment_cnt']) { ?>
                  <span class="sound_only">댓글</span><span class="cnt_cmt">+ <?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span>
                  <?php } ?>
                </div></td>
              <td class="td_name sv_use mobile_no" width="20%"><?php
                    if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                  ?></td>
              <td class="td_num table_mobile mobile_no" width="10%"><?php echo $list[$i]['wr_hit'] ?></td>
              <?php if ($is_good) { ?>
              <td class="td_num"><?php echo $list[$i]['wr_good'] ?></td>
              <?php } ?>
              <?php if ($is_nogood) { ?>
              <td class="td_num"><?php echo $list[$i]['wr_nogood'] ?></td>
              <?php } ?>
              <td class="td_datetime" width="10%"><?php echo $list[$i]['datetime2'] ?></td>
            </tr>
            <?php } ?>
            <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
          </tbody>
        </table>
      </div>
      <!-- 페이지 --> 
      
      <?php echo $write_pages; ?> 
      
      <!-- 페이지 -->
<?php if ($list_href || $is_checkbox || $write_href) { ?>
      <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user btn_submits">
          <?php if ($is_checkbox) { ?>
          <li>
            <button type="submit" name="btn_submit" value="선택삭제" onClick="document.pressed=this.value" class="btn_submit">선택삭제</button>
          </li>
          <?php } ?>
          <?php if ($list_href) { ?>
          <li><a href="<?php echo $list_href ?>" class="btn_submit">목록</a></li>
          <?php } ?>
          <?php if ($write_href) { ?>
          <li><a href="<?php echo $write_href ?>" class="btn_submit_right">글쓰기</a></li>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php } ?>
    </form>
    
    <!-- 게시판 검색 시작 { --> 
    
  </div>
  <?php if($is_checkbox) { ?>
  <noscript>
  <p>자바스크립트를 사용하지 않는 경우<br>
    별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
  </noscript>
  <?php } ?>
  
  <!----/// html-----> 
</div>
<!---///추가-->



</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

<!----/// html----->




<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
