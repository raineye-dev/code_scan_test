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

<div id="body_layout">
<div class="body_wrap layout">

   <?include G5_THEME_PATH."/sub_left_08.php"?>

<div id="contens" class="contents_wrap">
<div id="location" class="title_wrap">
  <h2 class="page__title">할인가맹점</h2>
  <!-- 유틸 시작 -->
  <div class="utile_wrap">
    <ul class="location_wrap">
      <li class="n1 navi_home"><a href="">HOME</a></li>
      <li class="n2"><a href="">인정보상</a></li>
      <li class="n3"><a href="" class="navi_ov">할인가맹점</a></li>
    </ul>
  </div>
  <!---///utile_wrap----> 
  
</div>
<!---///title_wrap--->
<div class="sub_page_bg"></div>
<!----/// html-----> 




	<!---jd--->
<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
   
<!-- 	<input type="hidden" name="ca_name" value="<?=$sca?>" /> -->
	<input type="hidden" name="sca" value="<?=$sca?>" />

<style>
.btn_submit_righ_address{padding:6px; background:#000; margin-left:2rem; color:#fff; font-weight:200; border-radius: 3px; font-size:15px;}
</style>
    <?php if ($is_category) { ?>



    <div class="bo_w_select write_div">
		지역구분
        <label for="ca_name"  class="sound_only">분류<strong>필수</strong></label>
        <select name="ca_name" id="ca_name" required>
            <option value="">직역구분를 선택하세요</option>
            <?php echo $category_option ?>
        </select>
    </div>
    <?php } ?>





    <div class="bo_w_tit write_div">

        <label for="wr_subject" >업체명<strong>필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="업체명">
            <?php if ($is_member) { // 임시 저장된 글 기능 ?>
            <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
            <?php if($editor_content_js) echo $editor_content_js; ?>
           <!--  <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button> -->
            <div id="autosave_pop">
                <strong>임시 저장된 글 목록</strong>
                <ul></ul>
                <div><button type="button" class="autosave_close">닫기</button></div>
            </div>
            <?php } ?>
        </div>
        
    </div>



 <div class="bo_w_tit write_div">
        <label for="wr_6" >업체구분</label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_8" value="<?php echo $wr_8 ?>" id="wr_8" class="frm_input full_input " size="20" maxlength="20" placeholder="업체구분" />
        </div>
        
    </div>




    <div class="write_div">
        <label for="wr_content" >할인내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>


   <div class="bo_w_tit write_div">
        <label for="wr_5" >연락처</label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_5" value="<?php echo $wr_5 ?>" id="wr_5" class="frm_input full_input " size="20" maxlength="20" placeholder="연락처" />
        </div>
        
    </div>

	   <div class="bo_w_tit write_div">
        <label for="wr_6" >휴대폰</label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_6" value="<?php echo $wr_6 ?>" id="wr_6" class="frm_input full_input " size="20" maxlength="20" placeholder="휴대폰" />
        </div>
        
    </div>

	   <div class="bo_w_tit write_div">
        <label for="wr_1" >주소</label>
		<input type="button" id="btn_addr" value="주소검색" class="btn_submit_righ_address"/>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" class="frm_input full_input " size="50" maxlength="255" placeholder="주소" onblur="searchAddr($(this).val())" />
            <input type="text" name="wr_2" value="<?php echo $wr_2 ?>" id="wr_2" class="frm_input full_input " size="50" maxlength="255" placeholder="상세주소" />
        </div>
        
    </div>



	<div>
		<div id="map" style="width:100%;height:350px;"></div>

	</div>

	    <div class="bo_w_tit write_div">
        <label for="wr_3" >좌표</label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_3" value="<?php echo $wr_3 ?>" id="wr_3" class="frm_input full_input " size="20" maxlength="255" placeholder="위도" readonly="readonly" />
            <input type="text" name="wr_4" value="<?php echo $wr_4 ?>" id="wr_4" class="frm_input full_input " size="20" maxlength="255" placeholder="경도" readonly="readonly" />
        </div>
        
    </div>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script> 
<script>
window.onload = function(){
    document.getElementById("btn_addr").addEventListener("click", function(){ //주소입력칸을 클릭하면
        //카카오 지도 발생
        new daum.Postcode({
            oncomplete: function(data) { //선택시 입력값 세팅
                document.getElementById("wr_1").value = data.address; // 주소 넣기
				searchAddr(document.getElementById("wr_1").value);
                document.getElementById("wr_2").focus();
                //document.querySelector("input[name=address_detail]").focus(); //상세입력 포커싱
            }
        }).open();
    });
}

</script>

	<script>


		var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
			mapOption = { 
				center: new kakao.maps.LatLng(34.8139775009004, 126.462385799871), // 지도의 중심좌표
				level: 3 // 지도의 확대 레벨
			};

		var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

		
		var geocoder = new kakao.maps.services.Geocoder();
		

		// 마커가 표시될 위치입니다 
		var markerPosition  = new kakao.maps.LatLng(34.8139775009004, 126.462385799871); 

		// 마커를 생성합니다
		var marker = new kakao.maps.Marker({
			position: markerPosition
		});

		// 마커가 지도 위에 표시되도록 설정합니다
		marker.setMap(map);

		kakao.maps.event.addListener(map, 'click', function(mouseEvent) {        
			var latlng = mouseEvent.latLng;
			$('#wr_3').val(latlng.getLat()); //위도
			$('#wr_4').val(latlng.getLng()); //경도
			
			addMarker(mouseEvent.latLng);
			
		});




		// 마커를 생성하고 지도위에 표시하는 함수입니다
		function addMarker(position) {
			marker.setMap(null);
			marker = new kakao.maps.Marker({
				position: position
			});
			marker.setMap(map);
			
		}



		function searchAddr(str){
			geocoder.addressSearch(str, function(result, status) {
				 if (status === kakao.maps.services.Status.OK) {
					var coords = new kakao.maps.LatLng(result[0].y, result[0].x);
					$('#wr_3').val(result[0].y); //위도
					$('#wr_4').val(result[0].x); //경도
					 addMarker(coords);
					 map.setCenter(coords);
				} 
			});    
		}

	</script>

<!-- 
    <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
    <div class="bo_w_link write_div">
        
    		<label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> SNS  #<?php echo $i ?></span></label>
        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
    </div>
    <?php } ?> -->


    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>





 <div class="btn_confirm write_div ">
		<ul class="btn_bo_user  btn_submits">
          <li><a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn_submit">취소</a></li>
          <li><input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit  btn_submit_righ"></li>
		</ul>
    </div>



    </form>

<!--jd-->
       
       
</div>
</div>
<!-----content END----->
</div>
</div>
</div>
</div>


<!--jd-->

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

	
        if (subject) {
            alert("업체명에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("할인정보에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }




        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->