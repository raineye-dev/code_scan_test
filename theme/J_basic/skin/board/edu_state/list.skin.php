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
<!----/// html----->

<div id="body_layout">
<div class="body_wrap layout">

   <?include G5_THEME_PATH."/sub_left_07.php"?>

<div id="contens" class="contents_wrap">
<div id="location" class="title_wrap">
  <h2 class="page__title">나의정보요약</h2>
  <!-- 유틸 시작 -->
  <div class="utile_wrap">
    <ul class="location_wrap">
      <li class="n1 navi_home"><a href="">HOME</a></li>
      <li class="n2"><a href="">마이페이지</a></li>
      <li class="n3"><a href="" class="navi_ov">나의정보요약</a></li>
    </ul>
  </div>
  <!---///utile_wrap----> 
  
</div>
<!---///title_wrap--->
<div class="sub_page_bg"></div>
<!----/// html-----> 
<!----/// 게시판 추가 html----->
<div class="board_contents LIST">
<div class="board_top"> 
  
  <!-- 게시판 목록 시작 { -->
  <div id="bo_list" style="width:<?php echo $width; ?>">

	
	<div><?=$member['mb_name'] ?> 님 반갑습니다.</div>



	<?
	//  완료 상태쿼리 필요
	//  미완료 상태쿼리 필요
	?>
	<div> <?=date('Y')?> 온라인영상교육 : 완료</div>
	


  
   <!-- 게시판 페이지 정보 및 버튼 시작 { -->
   <div id="bo_btn_top" class="page-count-wrap clearfix board_info">

          
  
    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>" />
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>" />
    <input type="hidden" name="stx" value="<?php echo $stx ?>" />
    <input type="hidden" name="spt" value="<?php echo $spt ?>" />
    <input type="hidden" name="sca" value="<?php echo $sca ?>" />
    <input type="hidden" name="sst" value="<?php echo $sst ?>"  />
    <input type="hidden" name="sod" value="<?php echo $sod ?>" />
    <input type="hidden" name="page" value="<?php echo $page ?>" />
	<input type="hidden" name="myp" value="<?php echo $myp ?>" />


    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap board_list">
        <table class="tbl-basic">
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
	         <th scope="col" class="w8">년도</th>
             <th scope="col" class="">온라인영상교육신청</th>
             <th scope="col" class="w10">교육이수일</th>
             <th scope="col" class="w08">보기</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">


            <td class="td_num mobile_none">
				<?php echo $list[$i]['mb_1'] ?>
            </td>
            <td class="td_num mobile_none">

				<a href="<?php echo $list[$i]['href'] ?>&myp=o">
					<?php echo $list[$i]['subject'] ?>
                </a>
			
            </td>

             <td class="td_subject left">

				<a href="<?php echo $list[$i]['href'] ?>&myp=o">
                    <?php echo $list[$i]['wr_2']; ?>
                </a>
            </td>
            <td class="td_date mobile_none">
				<a href="<?php echo $list[$i]['href'] ?>&myp=o">
					상세보기
				</a>			
			</td>
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="4" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </table>
    </div>
		<!-- 페이지 -->
	<?php echo $write_pages; ?>
	<!-- 페이지 -->


    </form>
     
       <!-- 게시판 검색 시작 { -->
 
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>


<!--jd-->
  <!-- content end --> 
    </div>
    <!-- contents_wrap end --> 
  </div>
  <!-- body_wrap layout end --> 
</div>
</div>
</div>

<!--jd-->

<!-- 페이지 -->
<?php echo $write_pages;  ?>


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
