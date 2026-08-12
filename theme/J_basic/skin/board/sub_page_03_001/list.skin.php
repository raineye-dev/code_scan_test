<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c15cee879955ba1af51f44f2acedce46&libraries=services"></script>


<style type="text/css">
.bo_tit.1{display:block;}
</style>
<!----/// html----->

<div id="svisual_layout">
  <div class="svisual_wrap">
    <div class="sub__background"></div>
    <div class="subvisual-layout">
      <div class="layout_sub">
        <h2><span>주요산업</span></h2>
        <p class="subvisual-layout__text">자원봉사의 빛으로 함께 밝히는 전남</p>
      </div>
    </div>
  </div>
</div>
<!----////svisual_layout----->
<div id="body_layout">
<div class="body_wrap layout">

   <?include G5_THEME_PATH."/sub_left_03.php"?>

<div id="contens" class="contents_wrap">
<div id="location" class="title_wrap">
  <h2 class="page__title">전남 재능기부 자원봉사단체</h2>
  <!-- 유틸 시작 -->
  <div class="utile_wrap">
    <ul class="location_wrap">
      <li class="n1 navi_home"><a href="">HOME</a></li>
      <li class="n2"><a href="">주요산업</a></li>
      <li class="n3"><a href="" class="navi_ov">전남 재능기부 자원봉사단체</a></li>
    </ul>
  </div>
  <!---///utile_wrap----> 
  
</div>
<!---///title_wrap--->
<div class="sub_page_bg"></div>
<!----/// html-----> 


	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">전남 재능기부 자원봉사단체란?</p></div><!----////타이틀---->
	<p class="txt_box sub_list_wrap">1365자원봉사포털에 등록되어 있는 재능나눔 자원봉사 단체로, 자신이 가진 기술이나 전문지식을 활용하여 각 지역에서 봉사활동을 하고 있습니다.</p>

	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">전남 재능기부 자원봉사 단체 현황(2023. 04월 기준)</p></div>
	<div class="sub_table_wrap sub_list_wrap">
	<table class="table_t02">
	<thead>
			<tr>
		         <th>총계</th>
		         <th>주거</th>
		         <th>건강</th>
		         <th>뷰티</th>
		         <th>음식</th>
		         <th>문화</th>
		         <th>기타</th>
			</tr>
	</thead>
	<tbody>
			 <tr>
				 <td>424</td>
				 <td>83</td>
				 <td>10</td>
				 <td>45</td>
				 <td>58</td>
				 <td>127</td>
				 <td>101</td>
		       </tr>
	</tbody>
	</table>
	</div> 


<!----/// 게시판 추가 html----->
<div class="board_contents LIST">
<div class="board_top"> 
  
  <!-- 게시판 목록 시작 { -->
  <div id="bo_list" style="width:<?php echo $width; ?>">


    <!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap page-count-wrap clearfix">
	
        <fieldset class="bo_sch">
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">

			<input type="hidden" name="sfl" value="<?php echo $sfl ?>" />
			<input type="hidden" name="stx" value="<?php echo $stx ?>" />
			<input type="hidden" name="spt" value="<?php echo $spt ?>" />
			<input type="hidden" name="sst" value="<?php echo $sst ?>"  />
			<input type="hidden" name="sod" value="<?php echo $sod ?>" />
			<input type="hidden" name="myp" value="<?php echo $myp ?>" />

		    <input type="hidden" name="sw" value="">


    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->


	<div class="board_search">
		<div class="fbox">
			<label for="sfl" class="sound_only">검색대상</label>
			<p class="s_select">
				<select name="sfl" id="sfl">
				<option value="wr_5">활동분야</option>
					<option value="wr_subject">단체명</option>
					
					<!-- <option value="wr_8">업태</option> -->

					
				</select>
			</p>
			<p class="s_keyword">
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>		
			
					<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
	
			</p>
			<button type="submit" value="검색" class="btn_submit"><span class="">검색</span></button>
                
            </div>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
</div>
    </div>
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





<!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

  <!--  <ul class="btn_bo_user">
        
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
        	<?php if ($is_admin == 'super' || $is_auth) {  ?>
        	<li>
        		<button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
        		<?php if ($is_checkbox) { ?>	
        		        <ul class="more_opt is_list_btn">  
        		            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
        		            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
        		            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
        		        </ul>
        		        <?php } ?>
        	</li>
        	<?php }  ?>
        </ul>  -->
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->



    <div class="tbl_head01 tbl_wrap">
        <table class="board_list_table">
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col" class="all_chk chk_box" width="4%">
            	<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                <label for="chkall">
                	<span></span>
                	<b class="sound_only">현재 페이지 게시물  전체선택</b>
				</label>
            </th>
            <?php } ?>
            <th scope="col"  width="7%">번호</th>
            <th scope="col"  width="10%">지역</th>
            <th scope="col"  width="26%">단체명</th>
            <th scope="col"  width="10%">활동분야</th>
            <th scope="col"  width="">활동내용</th>
            <th scope="col" width="10%">회원수</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        	if ($i%2==0) $lt_class = "even";
        	else $lt_class = "";
		?>
        <tr class="<?php echo $lt_class ?><?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> ">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk chk_box">
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
            	<label for="chk_wr_id_<?php echo $i ?>">
            		<span></span>
            		<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
            	</label>
            </td>
            <?php } ?>
            <td class="td_num2">
			<a href="<?php echo $list[$i]['href'] ?>">
				<?php echo $list[$i]['num']; ?>
			</a>
            </td>
			<td class="td_num2" >
			<a href="<?php echo $list[$i]['href'] ?>">
				<?php echo $list[$i]['ca_name'] ?>
			</a>
	        </td>
			<td class="td_num2" >
			<a href="<?php echo $list[$i]['href'] ?>">
				<?php echo $list[$i]['wr_subject'] ?>
			</a>
	        </td>
			<td class="" >
			 <a href="<?php echo $list[$i]['href'] ?>">
			<?php echo $list[$i]['wr_5'] ?>
				<!-- //<?php echo mb_substr($list[$i]['wr_6'],0,1,'utf-8')  ?>** 이름 뒷자리 히든// -->
			</a>
	        </td>

			

			<td class="" >
			<a href="<?php echo $list[$i]['href'] ?>">
				<?php echo $list[$i]['wr_content'] ?>
			</a>
	        </td>

		<td class="" >
			<a href="<?php echo $list[$i]['href'] ?>">
				<?php echo $list[$i]['wr_8'] ?>
			</a>
	        </td>

        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>
	<?php echo $write_pages;  ?>
			
	<?if($myp != '') {$write_pages = str_replace("bo_table=biz_info","bo_table=biz_info&myp=".$myp,$write_pages);}?>



	
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


    <script>
    jQuery(function($){
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
        });
    });
    </script>
    <!-- } 게시판 검색 끝 --> 
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





	<script>

	function mapMove(mapX, mapY){
		map.panTo(new kakao.maps.LatLng(mapX,mapY));
	}

	$(function(){
	
	
	var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스

	var mapCenter; //지도 초기화 중심 변수
	
	
		mapCenter = new kakao.maps.LatLng('34.9268789715533', '127.496146462539'); //지도의 중심좌표.

		var options = { //지도를 생성할 때 필요한 기본 옵션
			center: mapCenter, //지도의 중심좌표.
			level: 2 //지도의 레벨(확대, 축소 정도)
		};


		
		var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴



	var positions = [
		 <?php for ($i=0; $i<count($list); $i++) { ?>
		{
				title : "<?=$list[$i]['wr_subject']?>"
			,	latlng : new kakao.maps.LatLng("<?=$list[$i]['wr_3']?>", "<?=$list[$i]['wr_4']?>")
		},
		<?php }?>
			
	];

	var bounds = new kakao.maps.LatLngBounds();

	for (var i = 0; i < positions.length; i ++) {

		// 마커를 생성합니다
		var marker = new kakao.maps.Marker({
			map: map, // 마커를 표시할 지도
			position: positions[i].latlng, // 마커를 표시할 위치
			title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
		});

		bounds.extend(positions[i].latlng) // 마커를 표시할 위치
	}

	map.setBounds(bounds);


});
	</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
