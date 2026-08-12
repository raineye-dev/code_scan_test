<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="/theme/basic/damyang/layout/css/dam_tmpl.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 1);

?>

<link rel="stylesheet" href="/theme/basic/damyang/layout/css/board.css">
<link rel="stylesheet" href="/theme/basic/damyang/layout/css/sub.css">

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9116ef5a19e829ad490ab18f81b18cf7&libraries=services"></script>
<style>
	.ckcont{
		display:none;
	}
</style>
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
<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h2 id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
            <?php } ?>
            <span class="bo_v_tit">
            <?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></span>
        </h2>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        <span class="sound_only">작성자</span> <span><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></span>
        <!-- <span class="sound_only">댓글</span><strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong> -->
        <strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>

    </section>


<?
	$query = "SELECT count(0) cnt  from tb_req_give where wr_id = '{$view['wr_id']}'";
		$result = sql_fetch($query);
		$cnt = $result['cnt'] == null ? '0' : $result['cnt'];
?>

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>


   <div class="tbl_head01 tbl_wrap board_list">
	<table class="tbl-basic">
		<tr>
			<th class="w12" >등록일</th><td class="if_date list_view_text"><?php echo date("Y-m-d", strtotime($view['wr_datetime'])) ?></td>
		</tr>

		<tr>
			<th >진행상태</th><td class="list_view_text" >
			
			<?
			if($cnt >= $view['wr_4']){ 
				echo "모집완료";
			}else if(date('Ymd') > str_replace('-','',$view['wr_9'] ) ){ 
				echo "종료" ;
			}else{
				echo "모집중" ;
			}?>
			
			</td>
		</tr>


		<tr>
			<th >모집인원</th><td class="list_view_text" ><?php echo $view['wr_4'] - $cnt?>명 ( <span class="view_personnel_count_01"><?=$cnt?></span> / <span class="view_personnel_count_02"><?php echo $view['wr_4'] ?></span> )</td>
		</tr>
		

		<tr>
			<th >마을이름</th><td class="list_view_text" ><?php echo $view['wr_subject'] ?></td>
		</tr>
		


		<tr>
			<th >담당자</th><td class="list_view_text" ><?php echo $view['wr_10'] ?></td>
		</tr>


		<tr>
			<th >담당자연락처</th><td class="list_view_text" ><?php echo $view['wr_email'] ?></td>
		</tr>

		<tr>
			<th >요청재능분야</th><td class="list_view_text" ><?php echo $view['wr_1'] ?> > <?php echo $view['wr_2'] ?> > <?php echo $view['wr_3'] ?></td>
		</tr>

		<tr>
			<th >활동희망일</th><td class="list_view_text" ><?php echo $view['wr_8'] ?> ~ <?php echo $view['wr_9'] ?></td>
		</tr>
		
		<tr>
			<th >마을주소</th><td class="list_view_text" ><?php echo $view['wr_5'] ?></td>
		</tr>

 </table>


        </div>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con" class="cont_view_wp pop_title"><?php echo html_entity_decode(get_view_thumbnail($view['content'])); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->






		<?if($view['wr_6'] != '' && $view['wr_7'] != '') {?>
			<div>
				<div id="map" style="width:100%;height:350px;"></div>
			</div>
		<?}?>



    </section>





</article>
<!-- } 게시판 읽기 끝 -->

       

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
        ?>


        <ul class="bo_v_left">

<?if($member['mb_level'] == '5') {?>

            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_submitwp">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_submitwp" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
<?}?>

<?if ($is_admin == 'super') {?>

        <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_submitwp">수정</a></li><?php } ?>
        <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_submitwp" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
<?}?>




        </ul>


        <ul class="bo_v_com">
           <li><a href="<?php echo $list_href ?>" class="btn_submitwp">목록</a></li>
        </ul>

        
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->







<?if ($is_admin == 'super') {?>
	

	<div class="volunteer_wp">
		<input type="button" value="봉사자 매칭하기"  class="recruitment_btn" onclick="giveAddBox()" />
	</div>
	

<div style="position:relative;">

<div style="z-index:99;position:absolute;left:0px;top:-550px;width:100%;min-height:500px;background-color:#ffffff;display:none;border:3px solid #00a650; padding:10px;" id="addbox" >


	<div id="userlistbox">

	</div>


	</div>
</div>

<?}?>




<?if(($member['mb_level'] == '5' && $view['mb_id'] == $member['mb_id'])|| $is_admin == 'super') {?>


<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">봉사 지원자</p></div>




   <div class="ceo_table tbl_wrap">
	<table class="">

	<?

		$sql = "SELECT * FROM tb_req_give WHERE wr_id = '".$wr_id."' ORDER BY req_give_idx ASC";

		$result = sql_query($sql);
		$i=1; // layer id

		// 내용을 보여주는 부분
		while ($row = sql_fetch_array($result)) {  // 제목글 뽑아서 링크 문자열 만들기..

?>


				<tr class="table_top_bg">
					<td style="width:30%;">
						<?=$row['wr_1']?> > <?=$row['wr_2']?> > <?=$row['wr_3']?>
					</td>


					<td style="width:20%;">
						<?=$row['give_nm']?>
					</td>

					<td style="width:20%;">
						<?=$row['give_hp']?>
					</td>
					<td  style="width:10%;" >
					<?
						$sql2 = "SELECT count(0) cnt  from tb_req_give where give_id = '{$row['give_id']}'";
							$rs2 = sql_fetch($sql2);
							echo $rs2cnt = $rs2['cnt'] == null ? '0' : $rs2['cnt'];
					?> 회
					</td>

				
					<?if ($is_admin == 'super') {?>
					<td>
						<input type="button" name="ckbox_<?=$i?>" id="ckbox_<?=$i?>" value="취소하기" class="recruitment_on_wp" onclick="giveDel('<?=$view['wr_id']?>','<?=$row['req_give_idx']?>','<?=$row['give_id']?>')" />
					</td>
					<?}?>
				</tr>

		</div>
<?
				$i++;
		}

	?>
		</tr>
</table>

</div>


<?}?>


<div>


 <!--jd-->
  <!-- content end --> 
    </div>
    <!-- contents_wrap end --> 
  </div>
  <!-- body_wrap layout end --> 
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
    $("#bo_v_atc").viewimageresize();

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
<!-- } 게시글 읽기 끝 -->





<?if($view['wr_6']  != '' && $view['wr_7'] != '') {?>
	<script>


		var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
			mapOption = { 
				center: new kakao.maps.LatLng(<?=$view['wr_6']?>, <?=$view['wr_7']?>), // 지도의 중심좌표
				level: 3 // 지도의 확대 레벨
			};

		var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

		
		var geocoder = new kakao.maps.services.Geocoder();
		

		// 마커가 표시될 위치입니다 
		var markerPosition  = new kakao.maps.LatLng(<?=$view['wr_6']?>, <?=$view['wr_7']?>); 

		// 마커를 생성합니다
		var marker = new kakao.maps.Marker({
			position: markerPosition
		});

		// 마커가 지도 위에 표시되도록 설정합니다
		marker.setMap(map);



	</script>
<?}?>



<script>






function userViewShow(no){
	$('.ckcont').hide(); 
	$('#ckcontbox1_'+no).show();	
	$('#ckcontbox2_'+no).show();	
}
function agreeViewShow(no){
	$('.ckcont').hide(); 
	$('#agckcontbox1_'+no).show();	
	$('#agckcontbox2_'+no).show();	
}


function giveAdd(reqidx,idx,id){
	
	var params = {'mode':'add'
					,'reqidx':reqidx
					,'idx':idx
					,'id':id };
	$.post( "/ajax/ajax.sub0302.php",
		params,
		function( data ) {
//		alert(data);
			if(data == 'NO'){
				alert('등록중 문제가 발생하였습니다.');
				return;
			}else if(data == 'DUF'){
				alert('등록된 지원자입니다.');
				return;
			}else if(data == 'OK'){
				
				location.reload();
				return;
			}

	});

}


function giveDel(reqidx,idx,id){
	

	var params = {'mode':"del"
					,'reqidx':reqidx
					,'idx':idx
					,'id':id};


	$.post( "/ajax/ajax.sub0302.php",
		params,
		function( data ) {
//		alert(data);
			if(data == 'NO'){
				alert('등록중 문제가 발생하였습니다.');
				return;
			}else if(data == 'OK'){
				location.reload();
				return;
			}
	});

}

function getUserList(wr_id,maxinwon,stdt){
	if($('#stdt').val() != 'undefined'){
		stdt = $('#stdt').val();
	}

	var params = {'wr_id':wr_id,'maxinwon':maxinwon,'stdt':stdt};


	$.post( "/ajax/ajax_sub0302_requser.php",
		params,
		function( data ) {
			if(data == 'NO'){
				alert('등록중 문제가 발생하였습니다.');
				return;
			}else {
				$('#userlistbox').html(data);

				$("#stdt").datepicker({
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

			}
	});

}


function giveAddBox(){
	$('#addbox').show();
	getUserList('<?=$view['wr_id']?>','<?= $view['wr_4'] ?>','<?=date('Y-m-d')?>');
}
</script>