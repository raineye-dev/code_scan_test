<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

?>
<!----/// html----->

<div id="body_layout">
  <div class="body_wrap layout"> 
  
 <?include G5_THEME_PATH."/sub_left_08.php"?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap"> 

        <h2 class="page__title">명예의 전당</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">인정보상</a></li>
            <li class="n3"><a href="" class="navi_ov">명예의 전당</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<!----/// html----->
<!----/// 게시판 추가 html----->
<div class="board_contents LIST">
<div class="board_top">
<div class="hall_of_fame">
	<div class="hall_of_fame_L"><img src="/theme/J_basic/img/main_02/hall_of_fame.jpg" alt="명예의 전당"></div>
	<div class="hall_of_fame_R">
		<p class="tit">5,000시간 이상의 값진 봉사활동을 통해 따뜻한 전라남도를 만드는 데 지대한 공헌을 하신 숭고한 공적에 깊은 존경을 표합니다.</p>
		<p>이에 그 헌신을 영원히 기억하고자 전라남도 자원봉사 명예의 전당에 모시며 깊은 감사와 존경의 마음을 담아 드립니다.</p>
	</div>
</div>
<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:<?php echo $width; ?>">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

  

    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <?php if ($is_checkbox) { ?>
    <div id="gall_allchk">
        <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
    </div>
    <?php } ?>

    <ul id="gall_ul" class="gall_row">
<?php for ($i=0; $i<count($list); $i++):

	// ★ 반드시 onclick 전에 썸네일 먼저 생성
	$thumb = get_list_thumbnail(
		$board['bo_table'],
		$list[$i]['wr_id'],
		$board['bo_gallery_width'],
		$board['bo_gallery_height'],
		false,
		true
	);

	$thumb_src = $thumb['src'] ? $thumb['src'] : "";
$files = get_file($bo_table, $list[$i]['wr_id']);

// 두 번째 첨부파일 가져오기 (인덱스 1)
$second_img = "";

if (!empty($files[1]['file'])) {
    $second_img = G5_DATA_URL . "/file/{$bo_table}/" . $files[1]['file'];
}

// 두 번째 파일이 없으면 썸네일 사용
if (!$second_img) {
    $second_img = $thumb_src;
}

$data = [
    'img'    => $second_img,   // ← 이제 두 번째 첨부파일이 제대로 들어감
    'title'  => strip_tags($list[$i]['subject']),
    'area1'  => "지역 : " . strip_tags($list[$i]['wr_1']),
    'area2'  => "봉사시간 : " . strip_tags($list[$i]['wr_2']),
    'area3'  => "주요활동 : " . cut_str(strip_tags($list[$i]['content']), 35)
];

	$json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT);


            $classes = array();
            
            $classes[] = 'gall_li';
            $classes[] = 'col-gn-'.$bo_gallery_cols;

            if( $i && ($i % $bo_gallery_cols == 0) ){
                $classes[] = 'box_clear';
            }

            if( $wr_id && $wr_id == $list[$i]['wr_id'] ){
                $classes[] = 'gall_now';
            }
         ?>
        <li class="gall_li col-gn-<?php echo $bo_gallery_cols; ?>">
            <div class="gall_box">
                <div class="gall_chk">
                <?php if ($is_checkbox) { ?>
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                <?php } ?>
                <span class="sound_only">
                    <?php
                    if ($wr_id == $list[$i]['wr_id'])
                        echo "<span class=\"bo_current\">열람중</span>";
                    else
                        echo $list[$i]['num'];
                     ?>
                </span>
                </div>
                <div class="gall_con">

					<div class="gall_img" style="border:1px solid #ddd;">
						<a href="javascript:void(0);" onclick='openModalData(<?php echo $json; ?>)'>
							<?php
                        if ($list[$i]['is_notice']) { // 공지사항  ?>
                            <span class="is_notice">공지</span>
                        <?php } else {
                            $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                            if($thumb['src']) {
                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                            } else {
                                $img_content = '<span class="no_image"><img src="'.$board_skin_url.'/img/no_img.jpg" alt="no image" ></span>';
                            }

                            echo $img_content;
                        }
                         ?>
						</a>
					</div>

                    <div class="gall_text_href">
                        <?php
                        // echo $list[$i]['icon_reply']; 갤러리는 reply 를 사용 안 할 것 같습니다. - 지운아빠 2013-03-04
                        if ($is_category && $list[$i]['ca_name']) {
                         ?>
                        <!-- <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"> -->[<?php echo $list[$i]['ca_name'] ?>]<!-- </a> -->
                        <?php } ?>
                        <a href="<?php echo $list[$i]['href'] ?>" class="bo_tit">
                            <span><?php echo $list[$i]['subject'] ?></span> / <?php echo $list[$i]['wr_1']; ?>
                            <?php
                            // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                            // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                            //  if (isset($list[$i]['icon_new'])) echo rtrim($list[$i]['icon_new']);
                            //  if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                            //if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                            //if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                            //  if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                             ?>
                         </a>
                    </div>
                </div>
            </div>
        </li>
<?php endfor; ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>
	<!-- 페이지 -->

	<?php echo $write_pages; ?>


	<!-- 페이지 -->
     <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user btn_submits">
            <?php if ($is_checkbox) { ?>
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn_submit"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn_submit"></li>
            <!-- <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_b01"></li> -->
            <?php } ?>
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_submit">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_submit_right">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    </form>
     
       
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
		<div class="fbox">
                    <label for="sfl" class="sound_only">검색대상</label>
					<div class="fbox">
							<p class="s_select">
							<select name="sfl" id="sfl">
							  <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>성명</option>
							  <option value="wr_1">활동지역</option>
							</select>
							</p>
					<p class="s_keyword">
						<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
					</p>
					<button type="submit" value="검색" class="btn_submit"><span class="">검색</span></button>
					</div>
		</div>
                  </form>
                </fieldset>

              </div>
  				
  			
  			<!-- } 게시판 검색 끝 -->
  
</div>
<!-- } 게시판 페이지 정보 및 버튼 끝 -->
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>
 
<!----/// html----->
</div><!---///추가-->

</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

<!----/// html----->


<!-- ===================== 모달 ===================== -->
<div id="imageModal" class="image-modal">
    <div class="image-modal-content">
        <img id="modalImage" src="" alt="">
        <div class="modal-info">
            <h3 id="modalTitle"></h3>
            <p id="modalArea"></p>
            <p id="modalArea2"></p>
            <p id="modalArea3"></p>
        </div>
        <span class="modal-close" onclick="closeModal()">닫기</span>
    </div>
</div>

<!-- ===================== JS ===================== -->
<script>
/* JSON 데이터로 모달 열기 */
function openModalData(data) {
    openModal(data.img, data.title, data.area1, data.area2, data.area3);
}

/* 모달 열기 */
function openModal(imgSrc, title, area1, area2, area3) {
	document.getElementById("modalImage").src = imgSrc;
	document.getElementById("modalTitle").innerText = title;
	document.getElementById("modalArea").innerText  = area1 ? area1 : "";
	document.getElementById("modalArea2").innerText = area2 ? area2 : "";
	document.getElementById("modalArea3").innerText = area3 ? area3 : "";

	document.getElementById("imageModal").style.display = "block";
}

/* 모달 닫기 */
function closeModal() {
	document.getElementById("imageModal").style.display = "none";
}

/* 바깥 클릭 시 모달 닫기 */
window.onclick = function(event) {
	let modal = document.getElementById("imageModal");
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>


<!-- 페이지 -->

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