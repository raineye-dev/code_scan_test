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
    
   <?include G5_THEME_PATH."/sub_left_03.php"?>
    
    <!-- 컨텐츠 -->
    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">마을요청</h2>
        
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <!-- 로케이션 시작 -->
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">재능나눔요청/활동</a></li>
            <li class="n3"><a href="" class="navi_ov">마을요청</a></li>
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


     <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

  
  
   <!-- 게시판 페이지 정보 및 버튼 시작 { -->
   <div id="bo_btn_top" class="page-count-wrap clearfix board_info">
            <!--<div  id="bo_list_total" class="page-count">
              <div  class="page-total"> <span>Total <em><?php echo number_format($total_count) ?></em> 건</span></div>
              <div class="page-now">현재페이지 <em><?php echo $page ?> </em></div>
            </div>-->
			 <!---<div id="bo_list_total" class="page">
            <span class="total">Total <b><?php echo number_format($total_count) ?>건</b></span> 
            <span class="current"><strong><?php echo $page ?> 페이지</strong></span>
        </div>--->
          
          <!-- 게시판 검색 시작 { -->
		<fieldset id="bo_sch">
			<legend>게시물 검색</legend>

			<form name="fsearch" method="get" class="fl_no">
			<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			<input type="hidden" name="sca" value="<?php echo $sca ?>">
			<input type="hidden" name="sop" value="and">
			<div class="form box_display">
			<div class="item  box_display">
				<span class="item_list">
					<span class="">재능선택</span>
				</span>
				
					<span class="talent_search">분야별</span>
					<select name="wr_1" id="wr_1" onchange="selCode1()"  class="box_design">
						<option value="" >선택</option>
						<option value="지식나눔"<?php echo get_selected($wr_1, '지식나눔', true); ?>>지식나눔</option>
						<option value="문화나눔"<?php echo get_selected($wr_1, '문화나눔'); ?>>문화나눔</option>
						<option value="기능나눔"<?php echo get_selected($wr_1, '기능나눔'); ?>>기능나눔</option>
						<option value="건강나눔"<?php echo get_selected($wr_1, '건강나눔'); ?>>건강나눔</option>
					</select>			
					<span class="talent_search">항목</span>
					<select name="wr_2" id="wr_2" onchange="selCode2()"  class="box_design">
						<option value="" >선택</option>
						<?if($wr_1 == '지식나눔'){?>
							<option value="교육"<?php echo get_selected($wr_2, '교육', true); ?>>교육</option>
							<option value="강의"<?php echo get_selected($wr_2, '강의'); ?>>내용</option>
						<?}else if($wr_1 == '문화나눔'){?>
							<option value="문화"<?php echo get_selected($wr_2, '문화', true); ?>>문화</option>
							<option value="예술"<?php echo get_selected($wr_2, '예술'); ?>>예술</option>
						<?}else if($wr_1 == '기능나눔'){?>
							<option value="문화"<?php echo get_selected($wr_2, '문화', true); ?>>문화</option>
							<option value="생활"<?php echo get_selected($wr_2, '생활'); ?>>생활</option>
						<?}else if($wr_1 == '건강나눔'){?>
							<option value="의료"<?php echo get_selected($wr_2, '의료', true); ?>>의료</option>
							<option value="보건"<?php echo get_selected($wr_2, '보건'); ?>>보건</option>
						<?}?>
					</select>			
					<span class="talent_search">세부항목</span>
					<select name="wr_3" id="wr_3"  class="box_design">
						<option value="" >선택</option>
						
						<?if($wr_1 == '지식나눔' && $wr_2 == '교육'){?>
							<option value="글쓰기"<?php echo get_selected($wr_3, '글쓰기', true); ?>>글쓰기</option>
							<option value="학습지도"<?php echo get_selected($wr_3, '학습지도', true); ?>>학습지도</option>
							<option value="통.번역"<?php echo get_selected($wr_3, '통.번역', true); ?>>통.번역</option>
							<option value="외국어"<?php echo get_selected($wr_3, '외국어', true); ?>>외국어</option>
							<option value="동화구연"<?php echo get_selected($wr_3, '동화구연', true); ?>>동화구연</option>
						
						<?}else if($wr_1 == '지식나눔' && $wr_2 == '강의'){?>
							<option value="명강의"<?php echo get_selected($wr_3, '명강의', true); ?>>명강의</option>
							<option value="법률상담"<?php echo get_selected($wr_3, '법률상담', true); ?>>법률상담</option>
							<option value="세무상담"<?php echo get_selected($wr_3, '세무상담', true); ?>>세무상담</option>
						
						<?}else if($wr_1 == '문화나눔' && $wr_2 == '문화'){?>
							<option value="연극"<?php echo get_selected($wr_3, '연극', true); ?>>연극</option>
							<option value="노래"<?php echo get_selected($wr_3, '노래', true); ?>>노래</option>
							<option value="악기"<?php echo get_selected($wr_3, '악기', true); ?>>악기</option>
							<option value="마술"<?php echo get_selected($wr_3, '마술', true); ?>>마술</option>
							<option value="스포츠댄스"<?php echo get_selected($wr_3, '스포츠댄스', true); ?>>스포츠댄스</option>
							<option value="공연"<?php echo get_selected($wr_3, '공연', true); ?>>공연</option>
						
						<?}else if($wr_1 == '문화나눔' && $wr_2 == '예술'){?>
							<option value="미술"<?php echo get_selected($wr_3, '미술', true); ?>>미술</option>
							<option value="음악"<?php echo get_selected($wr_3, '음악', true); ?>>음악</option>
							<option value="조각"<?php echo get_selected($wr_3, '조각', true); ?>>조각</option>
							<option value="서예"<?php echo get_selected($wr_3, '서예', true); ?>>서예</option>
							<option value="사진"<?php echo get_selected($wr_3, '사진', true); ?>>사진</option>
						
						<?}else if($wr_1 == '기능나눔' && $wr_2 == '문화'){?>
							<option value="미술"<?php echo get_selected($wr_3, '미술', true); ?>>미술</option>
							<option value="사진"<?php echo get_selected($wr_3, '사진', true); ?>>사진</option>
							<option value="음악(노래/음악)"<?php echo get_selected($wr_3, '음악(노래/음악)', true); ?>>음악(노래/음악)</option>
							<option value="공예"<?php echo get_selected($wr_3, '공예', true); ?>>공예</option>
							<option value="디자인"<?php echo get_selected($wr_3, '디자인', true); ?>>디자인</option>
						
						<?}else if($wr_1 == '기능나눔' && $wr_2 == '생활'){?>
							<option value="컴퓨터활용"<?php echo get_selected($wr_3, '컴퓨터활용', true); ?>>컴퓨터활용</option>
							<option value="음식조리"<?php echo get_selected($wr_3, '음식조리', true); ?>>음식조리</option>
							<option value="제과제빵"<?php echo get_selected($wr_3, '제과제빵', true); ?>>제과제빵</option>
							<option value="이미용"<?php echo get_selected($wr_3, '이미용', true); ?>>이미용</option>
							<option value="수예"<?php echo get_selected($wr_3, '수예', true); ?>>수예</option>
							<option value="수화"<?php echo get_selected($wr_3, '수화', true); ?>>수화</option>

						<?}else if($wr_1 == '건강나눔' && $wr_2 == '의료'){?>
							<option value="의료서비스(내과/외과/한의학)"<?php echo get_selected($wr_3, '의료서비스(내과/외과/한의학)', true); ?>>의료서비스(내과/외과/한의학)</option>
							<option value="간호서비스"<?php echo get_selected($wr_3, '간호서비스', true); ?>>간호서비스</option>
						
						<?}else if($wr_1 == '건강나눔' && $wr_2 == '보건'){?>
							<option value="건강마사지"<?php echo get_selected($wr_3, '건강마사지', true); ?>>건강마사지</option>
							<option value="물리치료"<?php echo get_selected($wr_3, '물리치료', true); ?>>물리치료</option>
							<option value="운동지도"<?php echo get_selected($wr_3, '운동지도', true); ?>>운동지도</option>

						<?}?>

					</select>			
					
					</div><!---item type1--->
					<div class="box_display mt05">
							<span class="item_list">
							희망일
							</span>
							<span class="item type1">

							<input type="text" name="stdt" id="stdt" autocomplete="off"  value="<?=$stdt?>" class="calendar_box"/>
<!-- 							<input type="text" name="eddt" id="eddt" autocomplete="off" value="<?=$eddt?>"   class="calendar_box" /> -->

						</div>

					
						<div class="box_display mt05">
							<span class="item_list">
							마을검색
							</span>
							<span class="item type1">

							<input type="text" name="wr_subject" id="wr_subject" class="village_box" value="<?=$wr_subject?>"/>

						</div>
					<div class="item type1 btn listbox_ceo">
							<button type="submit" value="검색">검색</button>
					</div>
			</div>
			
			</form>
		</fieldset>
</div>
<!-- } 게시판 검색 끝 -->
  

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap board_list">
        <table class="tbl-basic">
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
	         <th scope="col" class="w8">번호</th>
             <th scope="col" class="w10">이름</th>
             <th scope="col" class="">나눔재능요청정보</th>
             <th scope="col" class="w09">모집인원</th>
             <th scope="col" class="w13">희망일</th>
             <th scope="col" class="w11">진행상태</th>
             <th scope="col" class="w12">등록일</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>

<?
		$query = "SELECT count(0) cnt  from tb_req_give where wr_id = '{$list[$i]['wr_id']}'";
		$result = sql_fetch($query);
		$cnt = $result['cnt'] == null ? '0' : $result['cnt'];
?>

        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">


            <td class="td_num mobile_none">
            <?php echo $list[$i]['num']; ?>
            </td>
            <td class="td_num mobile_none">
            <?php echo $list[$i]['subject']; ?>
            </td>

             <td class="td_subject left">

				<a href="<?php echo $list[$i]['href'] ?>">
                    <?php echo $list[$i]['wr_1']; ?> >                	    <?php echo $list[$i]['wr_2']; ?> >                	    <?php echo $list[$i]['wr_3']; ?>
                </a>
            </td>
            <!--bo_subject이 공지사항일때 작성자 제거 -->
			<td class="td_num mobile_none number">( <span class="num_point"><?=$cnt?></span>/<span class="num_point_01"><?php echo $list[$i]['wr_4']  ?></span> )</td> 
            <td class="td_date mobile_none"><?php echo $list[$i]['wr_8'] ?>~<?php echo $list[$i]['wr_9'] ?></td>
            <td class="td_num mobile_none">
			</span>
			<?
			if($cnt >= $list[$i]['wr_4']){ ?>
			<span class="recruitment_done">
				<? 
					echo "모집완료";
				?>
			</span>
			<?
			}else if(date('Ymd') > str_replace('-','',$list[$i]['wr_9'] ) ){ ?>
			<span class="recruitment_end">
				<?
					echo "종료" ;
				?>
			</span>
			<?
			}else{ ?>
			<span class="recruitment_ing">
				<?
					echo "모집중" ;
				}?>
			</span>



            </td>
            <td class="td_date mobile_none"><?php echo $list[$i]['datetime'] ?></td>
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="6" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </table>
    </div>
		<!-- 페이지 -->
	<?php echo $write_pages; ?>
	<!-- 페이지 -->

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($is_checkbox) { ?>
            <!-- <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn_submitwp">선택삭제</button></li> -->
            <!-- <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li> -->
            <?php } ?>
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_submitwp">목록</a></li><?php } ?>

	<?if($member['mb_level'] >= '5') {?>

			<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="ldp-btn">마을요청</a></li><?php } ?>

	<?}?>

        </ul>
        <?php } ?>
    </div>
    <?php } ?>

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
