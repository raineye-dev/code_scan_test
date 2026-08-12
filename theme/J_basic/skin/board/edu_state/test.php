<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="/theme/basic/damyang/layout/css/dam_tmpl.css">', 0);

?>

<link rel="stylesheet" href="/theme/basic/damyang/layout/css/board.css">
<link rel="stylesheet" href="/theme/basic/damyang/layout/css/sub.css">
		
<script>

$(function(){
	$("#stdt, #eddt").datepicker({
	//	showOn : "both",
	//	buttonImage: "button.png",

		showMonthAfterYear : true,
		showButtonPanel : true,
		changeMonth : true,
		changeYear : true,
		nextText : '다음 달',
		prevText : '이전 달',
		currentText : '오늘 날짜',
		closeText : '닫기',
		dateFormat : "yy-mm-dd",
		dayNames : ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'],
		dayNamesMin : ['일','월','화','수','목','금','토'],
		monthNames : ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		monthNamesShort : ['1','2','3','4','5','6','7','8','9','10','11','12']
	});
});

</script>
<div id="body_layout">
  <div class="body_wrap layout"> 
    
   <?include G5_THEME_PATH."/sub_left_07.php"?>
    
    <!-- 컨텐츠 -->
    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">재능매칭현황</h2>
        
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <!-- 로케이션 시작 -->
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">마이페이지</a></li>
            <li class="n3"><a href="" class="navi_ov">재능매칭현황</a></li>
          </ul>
          <!-- 로케이션 끝 --> 
        </div>
        <!-- 유틸 끝 --> 
        
      </div>
      <!-- Contents -->
      <div class="sub_page_bg"></div>

        <!-- content start -->
<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">
<div class="txtwrap">
	<div  class="h-box border_top_title">
		아름다운 재능기부를 통해<br/>
아름다운 담양군을 만들겠습니다.
	</div>
</div>

  
   <!-- 게시판 페이지 정보 및 버튼 시작 { -->
   <div id="bo_btn_top" class="page-count-wrap clearfix board_info">

          
  
    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
	    <input type="hidden" name="myp" value="<?php echo $myp ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap board_list">
        <table class="tbl-basic">
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
	         <th scope="col" class="w8">번호</th>
             <th scope="col" class="w11">이름</th>
             <th scope="col" class="">나눔재능요청정보</th>
             <th scope="col" class="w11">모집인원</th>
             <th scope="col" class="w12">등록일</th>
             <th scope="col" class="w11">진행상태</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">


            <td class="td_num mobile_none">
            <?php echo $list[$i]['num']; ?>
            </td>
            <td class="td_num mobile_none">
            <?php if ($is_admin) {  ?>
				<a href="<?php echo $list[$i]['href'] ?>&myp=o">
					<?php echo $list[$i]['subject'] ?>
                </a>
			<?}else{?>

				<a href="<?php echo $list[$i]['href'] ?>&myp=o">
                    <?php echo iconv_substr($list[$i]['subject'],0,1,'utf-8') ?>**

                </a>
			<?}?>
            </td>

             <td class="td_subject left">

				<a href="<?php echo $list[$i]['href'] ?>&myp=o">
                    <?php echo $list[$i]['wr_1']; ?> >                	    <?php echo $list[$i]['wr_2']; ?> >                	    <?php echo $list[$i]['wr_3']; ?>
                </a>
            </td>
            <!--bo_subject이 공지사항일때 작성자 제거 -->
            <td class="td_num mobile_none number">( <span class="num_point">0</span>/<span class="num_point_01">9</span> )</td>           
            <td class="td_date mobile_none"><?php echo $list[$i]['datetime'] ?></td>
            <td class="td_num mobile_none">
				<span class="recruitment_on">모집중</span> 
				<span class="recruitment_off">기간만료</span> 

            </td>
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="6" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
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
