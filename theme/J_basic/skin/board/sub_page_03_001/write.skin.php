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
.red_text{color:#f00; margin-left:1rem;}
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

        <label for="wr_subject" >단체명<strong class="red_text">*필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="단체명">
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
        <label for="wr_6" >대표자명 <strong class="red_text">*필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_6" value="<?php echo $wr_6 ?>" id="wr_6" class="frm_input full_input " size="20" maxlength="20" placeholder="대표자명" />
        </div>
        
    </div>





  <div class="bo_w_tit write_div">
        <label for="wr_5" >활동분야 <strong class="red_text">*필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_5" value="<?php echo $wr_5 ?>" id="wr_5" class="frm_input full_input " size="20" maxlength="20" placeholder="활동분야" />
        </div>
        
    </div>



    <div class="write_div">
        <label for="wr_content" >활동내용 <strong class="red_text">*필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 
			<strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>
 <div class="bo_w_tit write_div">
        <label for="wr_8" >회원수 <strong class="red_text">*필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_8" value="<?php echo $wr_8 ?>" id="wr_8" class="frm_input full_input " size="20" maxlength="20" placeholder="회원수" />
        </div>
        
    </div>

 <style>
 .tbl_frm01 textarea, .write_div textarea{height:100px !important;} 
 #bo_w .bo_w_tit .frm_input {color:#f00; }
 </style> 

	 
	



	


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