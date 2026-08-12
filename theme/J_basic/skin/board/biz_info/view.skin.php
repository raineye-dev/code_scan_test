



<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

?>






<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c15cee879955ba1af51f44f2acedce46&libraries=services"></script>

<style type="text/css">
.bo_tit.1{display:block;}


/* 기본테이블 */
.tbl_wrap table {width:100%;border-collapse:collapse;border-spacing:0 5px;background:#fff;border-top:1px solid #ececec;border-bottom:1px solid #ececec} 
.tbl_wrap caption {padding:10px 0;font-weight:bold;text-align:left}
.tbl_head01 {margin:0 0 10px}
.tbl_head01 caption {padding:0;font-size:0;line-height:0;overflow:hidden}
.tbl_head01 thead th {padding:20px 0;font-weight:normal;text-align:center;border-bottom:1px solid #ececec;height:40px}
.tbl_head01 thead th input {vertical-align:top} /* middle 로 하면 게시판 읽기에서 목록 사용시 체크박스 라인 깨짐 */
.tbl_head01 tfoot th, .tbl_head01 tfoot td {padding:10px 0;border-top:1px solid #c1d1d5;border-bottom:1px solid #c1d1d5;background:#d7e0e2;text-align:center}
.tbl_head01 tbody th {padding:8px 0;border-bottom:1px solid #e8e8e8}
.tbl_head01 td {color:#666;padding:10px 5px;border-top:1px solid #ecf0f1;border-bottom:1px solid #ecf0f1;line-height:1.4em;height:52px;word-break:break-all}
.tbl_head01 tbody tr:hover td {background:#fafafa}
.tbl_head01 a:hover {text-decoration:underline}
.tbl-basic {
  margin-bottom: 10px;
  width: 100%;
  border-top: 2px solid transparent;
  border-bottom: 1px solid transparent;
  border-collapse: collapse;
  border-spacing: 0;
}
.tbl-basic th {
  padding: 10px 15px;
  border-left: 1px solid transparent;
  border-bottom: 1px solid transparent;
  margin-left: -1px;
  vertical-align: middle;
  word-wrap: break-word;
  word-break: keep-all;
  font-size: 15px;
  color: #000
}
.tbl-basic td {
  padding: 10px 15px;
  border-left: 1px solid transparent;
  border-bottom: 1px solid transparent;
  margin-left: -1px;
  vertical-align: middle;
  word-wrap: break-word;
  word-break: keep-all;
  font-size: 15px;
  color: #000;
  text-align: center
}
.tbl-basic th:first-child, .tbl-basic td:first-child {
  border-left: none
}
.tbl-basic th.trw, .tbl-basic td.trw {
  border-right: 1px solid #ddd;
}
.tbl-basic tbody th, .tbl-basic thead th {
  vertical-align: middle;
}
.tbl-basic thead th, .tbl-basic tfoot th {
  background-image: none;
}
.tbl-basic tbody th { /*color:#004993;*/ color: #333;
}
.tbl-basic thead th {
  color: #333;
  text-align: center;
  background: #f8f8f8;
}
.tbl-basic td .btn-file {
  font-size: 12px;
}
.tbl-basic thead th.text_left {
  text-align: left;
}
.tbl-basic .left_line {
  border-left: 1px solid #ddd !important;
}
.tbl-basic .tbt_dashed {
  border-bottom-style: dashed;
}
.tbl-basic th {
  text-align: center
}
.tbl-basic {
  border-top-color: #000;
  border-bottom-color: #ddd;
}
.tbl-basic th, .tbl-basic td {
  border-left-color: #ccc;
  border-bottom-color: #ccc;
}
.tbl-basic tbody th {
  background-color: #f4f7fc;
  font-weight: bold
}
.tbl-basic td table {
  border: 1px solid #cccccc;
  font-size: 14px;
  border-bottom: none
}
.tbl-basic th, .tbl-basic td {
    border-left-color: #ccc;
    border-bottom-color: #ccc;
	}
.tbl-basic td table thead th {
  text-align: center
}
.tbl-basic td table th {
  background: #f8f8f8;
  font-size: 14px
}
.tbl-basic td table th, .tbl-basic td table td {
  border-bottom: 1px solid #cccccc;
  text-align: left;
  padding: 8px 10px;
  font-size: 14px
}
.tbl-basic td.ti {
  color: #333;
  text-align: center;
  background: #f8f8f8;
  font-weight: 700;
}
.tbl-basic td.left {
  text-align: left
}
.tbl-basic .noStyle td {
  padding: 0
}
.tbl-basic .toolbar td {
  padding: 0
}
.tbl-basic td input[type="text"], .tbl-basic td input[type="password"], .tbl-basic select {
  height: 34px;
  padding: 6px 10px;
  border: 1px solid #999;
  font-size: 15px !important
}
.w12 {
    width: 15% !important;
}
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

  
    
    <!--wrap-->

<!--jd-->
<div id="bo_v" style="width:<?php echo $width; ?>">
  


<!------상세페이지 적용---------->
<div class="subContent_wrap"> <!-- DEV : sub-con 감싸는 태그 추가 -->

	
<div class="tbl_head01 tbl_wrap board_list">
	<table class="table_t02">
		<tbody>
		<tr>
			<th class="w12">업체명</th>
			<td class="if_date list_view_text"><?php echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력 ?></td>
		</tr>
		<tr>
			<th class="w12">업체구분</th>
			<td class="if_date "><?php echo $view['wr_8']; ?></td>
		</tr>

		<tr>
			<th>지역</th>
			<td class="">
				<?php if ($category_name) { ?>
				<?php echo $view['ca_name']; // 분류 출력 끝 ?> 
				<?php } ?>
			</td>
		</tr>

		<tr>
			<th class="w12">연락처</th>
			<td class="if_date "><?php echo $view['wr_5']; ?></td>
		</tr>
	
		<tr>
			<th class="w12">주소</th>
			<td class="if_date "><?php echo $view['wr_1']; ?> <?php echo $view['wr_2']; ?></td>
		</tr>
		<tr>
			<th class="w12">할인내용</th>
			<td class="if_date "><?php echo $view['content']; ?></td>
		</tr>


 </tbody>
 </table>
        </div>







    <section id="bo_v_atc">
       <!--  <h2 id="bo_v_atc_title">할인내용</h2>
        
               
        
        본문 내용 시작 {
        <div id="bo_v_con"><?php echo $view['content']; ?></div> -->
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>



<?if($view['wr_3'] != '' && $view['wr_4'] != '') {?>
	<div>
		<div id="map" style="max-width:940px;width:100%;height:350px;"></div>
	</div>
<?}?>



        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>

    <div id="bo_v_share">
<!--         <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 스크랩</a><?php } ?> -->

        <?php
        include_once(G5_SNS_PATH."/view.sns.skin.php");
        ?>
    </div>


  

    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
    <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <li>
                <i class="fa fa-link" aria-hidden="true"></i> <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
        ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
        ?>


        <ul class="bo_v_left btn_submits">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn_submit">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn_submit" onclick="del(this.href); return false;"> 삭제</a></li><?php } ?>

        </ul>
        <ul class="bo_v_com btn_submits">
           <li><a href="<?php echo $list_href ?>&sca=<?=$sca?>" class="btn_b01 btn_submit">목록</a></li>
            <!-- <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn"><i class="fa fa-reply" aria-hidden="true"></i> 답변</a></li><?php } ?> -->
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>&sca=<?=$sca?>" class="btn_submit_right"> 글쓰기</a></li><?php } ?>
        </ul>

				<?php if ($prev_href || $next_href) { ?>
					<ul class="bo_v_nb">
						<?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-caret-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
						<?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-caret-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a>  <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
					</ul>
				<?php } ?>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
     ?>


</div>
<!-- } 게시판 읽기 끝 -->
<!--jd-->
       
       
</div>
</div>
<!-----content END----->
</div>
</div>
</div>
</div>
</div>

<!--jd-->
<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
//    $("#bo_v_atc").viewimageresize();

    //sns공유
    $(".btn_share").click(function(){
        $("#bo_v_sns").fadeIn();
   
    });

    $(document).mouseup(function (e) {
        var container = $("#bo_v_sns");
        if (!container.is(e.target) && container.has(e.target).length === 0){
        container.css("display","none");
        }	
    });
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>


<?if($view['wr_3']  != '' && $view['wr_4'] != '') {?>
	<script>


		var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
			mapOption = { 
				center: new kakao.maps.LatLng(<?=$view['wr_3']?>, <?=$view['wr_4']?>), // 지도의 중심좌표
				level: 3 // 지도의 확대 레벨
			};

		var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

		
		var geocoder = new kakao.maps.services.Geocoder();
		

		// 마커가 표시될 위치입니다 
		var markerPosition  = new kakao.maps.LatLng(<?=$view['wr_3']?>, <?=$view['wr_4']?>); 

		// 마커를 생성합니다
		var marker = new kakao.maps.Marker({
			position: markerPosition
		});

		// 마커가 지도 위에 표시되도록 설정합니다
		marker.setMap(map);



	</script>
<?}?>


<!-- } 게시글 읽기 끝 -->