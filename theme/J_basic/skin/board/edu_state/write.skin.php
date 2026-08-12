<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="/theme/basic/damyang/layout/css/dam_tmpl.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 1);

?>

<link rel="stylesheet" href="/theme/basic/damyang/layout/css/board.css">
<link rel="stylesheet" href="/theme/basic/damyang/layout/css/sub.css">
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9116ef5a19e829ad490ab18f81b18cf7&libraries=services"></script>
<script>

.retext{
    background-image: url('../img/require.png') !important;
    background-repeat: no-repeat !important;
    background-position: right top !important;
}
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
   


    <div class="bo_w_info write_div">


    <?php if ($is_password) { ?>
        <label for="wr_password" class="dis_in"><span class="title_texts">비밀번호 : </span></label>
        <input type="password" name="wr_password" id="wr_password" <?php echo $password_ ?> class="required <?php echo $password_ ?>" placeholder="비밀번호">

    <?php } ?>


    </div>

    <?php if ($is_homepage) { ?>
    <div class="write_div">
        <label for="wr_homepage" class="dis_in"><span class="title_texts">홈페이지 : </span></label>
        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input required" size="50" placeholder="홈페이지">
    </div>
    <?php } ?>



    <div class="bo_w_tit write_div_wp">
        <label for="wr_subject" class="dis_in"><span class="title_texts">마을이름 : </span></label>
          <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject"  class="frm_input retext" size="30" maxlength="255" placeholder="마을이름">
        
    </div>
	 <div class="bo_w_tit write_div">
       <label for="wr_name" class="dis_in"><span class="title_texts">모집인원 : </span></label>
        <input type="text" name="wr_4" value="<?php echo $wr_4 ?>" id="wr_4"  class="frm_input " placeholder="모집인원" onKeyup="this.value=this.value.replace(/[^-0-9]/g,'');">
	    </div>

<!-- 
 <div class="bo_w_tit write_div">
        <label for="wr_name" class="sound_only">마을이름<strong>필수</strong></label>
        <input type="text" name="wr_name" value="<?php echo $wr_name ?>" id="wr_name"  class="frm_input " placeholder="마을이름">
    </div>
 -->
	 <div class="bo_w_tit write_div_wp">
        <label for="wr_6" class="dis_in"><span class="title_texts">마을담당자 : </span></label>
         <input type="text" name="wr_10" value="<?php echo $wr_10;?>" id="wr_10"  class="frm_input retext" maxlength="13" placeholder="마을담당자" />
      
    </div>


	 <div class="bo_w_tit write_div">
			 <label for="wr_email" class="dis_in"><span class="title_texts">마을담당자연락처 : </span></label>
            <input type="text" name="wr_email" onkeyup="hpkey()"  value="<?php echo $wr_email ?>" id="wr_email" class="frm_input retext" placeholder="010-1234-1234">
   </div>


    <div class="bo_w_tit">

        <label for="wr_subject" class="dis_in"><span class="title_texts">재능선택 : </span></label>
        <span id="write_div " class="write_div_wp">
		
			<select name="wr_1" id="wr_1" onchange="selCode1()"  class="box_design" >
				<option value="" >선택</option>
				<option value="지식나눔"<?php echo get_selected($wr_1, '지식나눔', true); ?>>지식나눔</option>
				<option value="문화나눔"<?php echo get_selected($wr_1, '문화나눔'); ?>>문화나눔</option>
				<option value="기능나눔"<?php echo get_selected($wr_1, '기능나눔'); ?>>기능나눔</option>
				<option value="건강나눔"<?php echo get_selected($wr_1, '건강나눔'); ?>>건강나눔</option>
			</select>				

        </span>
        
  
        <label for="wr_subject" class="sound_only">항목<strong>필수</strong></label>
        
        <span id="write_div">

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

        </span>
        



        <label for="wr_subject" class="sound_only">세부항목<strong>필수</strong></label>
        
        <span id="write_div">

			<select name="wr_3" id="wr_3"   class="box_design" >
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

        </span>
        
    </div>


 
 <div class="bo_w_tit write_div_wp">
        <label for="wr_6" class="dis_in"><span class="title_texts">봉사요청기간 : </span></label>
        
        <span id="autosave_wrapper write_div">
            <input type="text" name="wr_8" onkeyup="hpkey()" value="<?php echo $wr_8;?>" id="wr_8" required class="frm_input calendar_box" readonly=readonly maxlength="13" placeholder="시작일" />
			<input type="text" name="wr_9" onkeyup="hpkey()" value="<?php echo $wr_9;?>" id="wr_9" required class="frm_input calendar_box" readonly=readonly maxlength="13" placeholder="종료일" />
			
        </span>
        
    </div>



    <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
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
        <label for="wr_5" >마을주소</label>
        
        <div id="write_div">
            <input type="text" name="wr_5" value="<?php echo $wr_5 ?>" id="wr_5" class="frm_input full_input " size="50" maxlength="255" placeholder="마을주소" onblur="searchAddr($(this).val())" />
        </div>
        
    </div>




	<div>
		<div id="map" style="width:100%;height:350px;"></div>

	</div>


	<div class="bo_w_tit write_div mar_btm">
        <label for="wr_6" >좌표</label>
        
        <div id="write_div">
            <input type="text" name="wr_6" value="<?php echo $wr_6 ?>" id="wr_6" class="frm_input full_input " size="20" maxlength="255" placeholder="위도" readonly="readonly" />
            <input type="text" name="wr_7" value="<?php echo $wr_7 ?>" id="wr_7" class="frm_input full_input " size="20" maxlength="255" placeholder="경도" readonly="readonly" />
        </div>
        
    </div>



    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>


    <div class="btn_confirm write_div">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_submitwp">취소</a>
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="ldp-btn">
    </div>
    </form>


<!--jd-->
  <!-- content end --> 
    </div>
    <!-- contents_wrap end --> 
  </div>
  <!-- body_wrap layout end --> 
</div>

<!--jd-->




	<script>


		var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
			mapOption = { 
				center: new kakao.maps.LatLng(34.75478596408644, 127.73750095488249), // 지도의 중심좌표
				level: 3 // 지도의 확대 레벨
			};

		var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

		
		var geocoder = new kakao.maps.services.Geocoder();
		

		// 마커가 표시될 위치입니다 
		var markerPosition  = new kakao.maps.LatLng(34.75478596408644, 127.73750095488249); 

		// 마커를 생성합니다
		var marker = new kakao.maps.Marker({
			position: markerPosition
		});

		// 마커가 지도 위에 표시되도록 설정합니다
		marker.setMap(map);

		kakao.maps.event.addListener(map, 'click', function(mouseEvent) {        
			var latlng = mouseEvent.latLng;
			$('#wr_6').val(latlng.getLat()); //위도
			$('#wr_7').val(latlng.getLng()); //경도
			
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
					$('#wr_6').val(result[0].y); //위도
					$('#wr_7').val(result[0].x); //경도
					 addMarker(coords);
					 map.setCenter(coords);
				} 
			});    
			return false;
		}

	</script>


<script>

$(function(){
	$("#wr_8, #wr_9").datepicker({
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



<!-- 페이지 -->
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

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
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