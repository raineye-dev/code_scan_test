<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/board.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/calendar.css">', 0);

include_once($board_skin_path."/moonday.php"); // 석봉운님의 음력날짜 함수

if(stristr($width, '%') === FALSE) {
	$col_width = "14%"; //표의 가로 폭이 100보다 크면 픽셀값입력
} else{
	$col_width = ($width/7)."%"; //표의 가로 폭이 100보다 작거나 같으면 백분율 값을 입력
}
//echo "col_width=".$col_width."<br>";

$col_height= 80 ;//내용 들어갈 사각공간의 세로길이를 가로 폭과 같도록
$today = getdate(); 
$b_mon = $today['mon']; 
$b_day = $today['mday']; 
$b_year = $today['year']; 
if ($year < 1) { // 오늘의 달력 일때
  $month = $b_mon;
  $mday = $b_day;
  $year = $b_year;
}

if(!$year) 	$year = date("Y");
$file_index = $board_skin_path."/day"; ### 기념일 폴더 위치 지정

### 양력 기념일 파일 지정 : 해당년도 파일이 없으면 기본파일(solar.txt)을 불러온다
if(file_exists($file_index."/".$year.".txt")) {
	$dayfile = file($file_index."/".$year.".txt");
} else { 
	$dayfile = file($file_index."/solar.txt");
}

$lastday=array(0,31,28,31,30,31,30,31,31,30,31,30,31);
if ($year%4 == 0) $lastday[2] = 29;
$dayoftheweek = date("w", mktime (0,0,0,$month,1,$year));
?>

<div id="body_layout">
  <div class="body_wrap layout"> 
  
	<?include G5_THEME_PATH."/sub_left_05.php"?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">센터일정</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소식</a></li>
            <li class="n3"><a href="" class="navi_ov">센터일정</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<!----/// html----->
  
  <!--wrap-->
  <div class="section"> 
    <!--jd-->
    <div>
      <div id="bo_list"> 
        <!--width="<?php echo $width?>" -->
        <div class="sub_contents">
          <div class="">
            <div class="ds-ct">
            <div class="calendar"> 
				<div class="cal">
				<div class="cal-nav">
		
					<a href="<?php 
						echo $_SERVER['PHP_SELF']."?bo_table={$bo_table}&";
						if ($month == '1') { 
							$year_pre  = $year-1; 
							$month_pre = '12'; 
						} else {
							$year_pre  = $year; 
							$month_pre = $month-1;
						} 
						echo "year={$year_pre}&month={$month_pre}&sc_no={$sc_no}";
					?>"  class="month-prev"><i class="fa fa-chevron-left"> 지난달</i>
					</a> 
			
					  
					<h5>
						  <a href="<?php 
							echo $_SERVER['PHP_SELF']."?bo_table=".$bo_table; 
							?>" title="오늘로" onFocus="this.blur()"><?php echo "{$year}년&nbsp;{$month}월"; ?>
							</a></h5>
					
					
			 
					<a href="<?php 
						echo $_SERVER['PHP_SELF']."?bo_table={$bo_table}&";
						if ($month == '12') { 
							$year_pre  = $year+1; 
							$month_pre = '1'; 
						} else {
							$year_pre  = $year; 
							$month_pre = $month+1;
						} 
						echo "year={$year_pre}&month={$month_pre}&sc_no={$sc_no}";
					?>"  class="month-next">다음달 <i class="fa fa-chevron-right"></i>
					</a> 
			  </div>
           


            <div>
              <table border="0" cellspacing="1" cellpadding="5">
                <thead>
                  <tr bgcolor="#efefef" align="center">
                    <th style="color:#ff0000">일</th>
                    <th>월</th>
                    <th>화</th>
                    <th>수</th>
                    <th>목</th>
                    <th>금</th>
                    <th style="color:#0000ff">토</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
		$cday = 1;
		$sel_mon = sprintf("%02d",$month);
			
		$query = "select * from {$write_table} WHERE left(wr_1,6) = '{$year}{$sel_mon}' ORDER BY wr_id asc";//and left(wr_2,6) >= '{$year}{$sel_mon}' 

		$result = sql_query($query);
		$j=0; // layer id

		$datelists = "";
		// 내용을 보여주는 부분
		while ($row = sql_fetch_array($result)) {  // 제목글 뽑아서 링크 문자열 만들기..

			$datelists .= ",".$row['wr_1'];


			if( substr($row['wr_1'],0,6) <  $year.$sel_mon ) {
				$start_day =1; 
				$start_day= (int)$start_day;
			} else {
				$start_day = substr($row['wr_1'],6,2);
				$start_day= (int)$start_day;
			}
		
			if( substr($row['wr_2'],0,6) >  $year.$sel_mon ) {
				$end_day = $lastday[$month];
				$end_day= (int)$end_day;
			} else {
				$end_day = substr($row['wr_2'],6,2);
				$end_day= (int)$end_day;
			}
		
			// 아이디에 따라 다른 아이콘이미지 출력 하고 싶을때 ///주석을 해제
			$imgown = 'icon';
			
			for ($i = $start_day; $i <= $end_day;  $i++) {
				if (strlen($row['wr_3']) > '0') {  // 입력된 아이콘 값이 있을 때
					$imgown = $row['wr_3'] ;
				}
		
				$j++; // layer ID
				
				$list['comment_cnt'] = " ".$row['wr_comment']; // row에 대하여 코멘트 카운터 정의
				if($row['wr_comment'] == '0') {
					$list['comment_cnt'] = null ;
				} else {
					if($list['comment_cnt']!=null) $list['comment_cnt'] = "<b><font color=\"#ff6600\">{$list['comment_cnt']}</font></b>"; 
				}
				
				$row['wr_subject'] = cut_str(get_text($row['wr_subject']),$board['bo_subject_len'],"…"); // subject length cut
				
				$list['icon_new'] = '';
				if ($row['wr_datetime'] >= date("Y-m-d H:i:s", G5_SERVER_TIME - ($board['bo_new'] * 3600)))
					$list['icon_new'] = " <img src=\"{$board_skin_url}/img/icon_new.gif\" align=\"absmiddle\" alt=\"새글\">";
				
				if ($member['mb_level'] < $board['bo_read_level']) {
					$showLayer="" ;
				} else { 
					$showLayer=" onmouseover=\"PopupShow('{$j}')\" onmouseout=\"PopupHide('{$j}')\" ";
				}
				//$html_day[$i].= "<br /><img src=\"{$board_skin_url}/img/{$imgown}.gif\" align=\"absmiddle\"> <a href=\"".G5_BBS_URL."/board.php?bo_table={$bo_table}&year={$year}&month={$month}&wr_id={$row['wr_id']}&sc_no={$sc_no}\" id=\"subject_{$j}\" {$showLayer}>{$row['wr_subject']}</a>".$list['icon_new'].$list['comment_cnt'];
				?>
                  <!-- 뷰 팝업레이어 -->
                <div id="popup_<?php echo $j?>" class="popup_layer">
                  <?php
					$html = 0;
					if (strstr($row['wr_option'], "html1"))
						$html = 1;
					else if (strstr($row['wr_option'], "html2"))
						$html = 2;
					
					$viewlist = cut_str(conv_content($row['wr_content'], $html),200,"…");
					echo "( 작성자 : ".$row['wr_name']." )<br />";
					echo strip_tags ($viewlist);
					?>
                </div>
                <?php


		
					//오늘 스케줄 구하기



//			if ($row['wr_id'] != $sc_id && date('Ymd', strtotime($row['wr_1'])) <= date('Ymd') && date('Ymd', strtotime($row['wr_2'])) >= date('Ymd')) {
					if ($row['wr_id'] != $sc_id && date('Ymd', strtotime($row['wr_1'])) == date('Ymd') ) {
						$today_schedule .= "<p><img src=\"{$board_skin_url}/img/{$imgown}.gif\" align=\"absmiddle\">";
						$today_schedule .= " <a href=\"".G5_BBS_URL."/board.php?bo_table={$bo_table}&year={$year}&month={$month}&wr_id={$row['wr_id']}&sc_no={$sc_no}\"><b>{$row['wr_subject']}</b></a>";
						$today_schedule .= " (".substr($row['wr_1'],4,2)."/".substr($row['wr_1'],6,2)." ~ ".substr($row['wr_2'],4,2)."/".substr($row['wr_2'],6,2).")<br />";
						$today_schedule .= $viewlist."</p>";
					}		
					$sc_id = $row['wr_id'];
				}
			}







		
			// 달력의 틀을 보여주는 부분
			$temp = 7- (($lastday[$month]+$dayoftheweek)%7);
			
			if ($temp == 7) $temp = 0;
				$lastcount = $lastday[$month]+$dayoftheweek + $temp;
		
			for ($iz = 1; $iz <= $lastcount; $iz++) { // 42번을 칠하게 된다.
				$bgcolor = "#ffffff";  // 쭉 흰색으로 칠하고

				
				// 오늘 날짜 표시
				if ($b_year==$year && $b_mon==$month && $b_day==$cday) $bgcolor = "#DEFADE";      //  "#DFFDDF"; // 오늘날짜 연두색으로 표기



				if (($iz%7) == 1) echo ("        <tr>\n"); // 주당 7개씩 한쎌씩을 쌓는다.
				if ($dayoftheweek < $iz  &&  $iz <= $lastday[$month]+$dayoftheweek)	{
				
				// 전체 루프안에서 숫자가 들어가는 셀들만 해당됨
				// 즉 11월 달에서 1일부터 30 일까지만 해당
				$daytext = $cday;   // $cday 는 숫자 예> 11월달은 1~ 30일 까지
				//$daytext 은 셀에 써질 날짜 숫자 넣을 공간
				$daycontcolor = "" ; 
				$daycolor = ""; 
				if ($iz%7 == 1) $daycolor = "#ff0000"; // 일요일
				if ($iz%7 == 0) $daycolor = "#0000ff"; // 토요일
				
				// 여기까지 숫자와 들어갈 내용에 대한 변수들의 세팅이 끝나고 
				// 이제 여기 부터 직접 셀이 그려지면서 그 안에 내용이 들어 간다.
				$f_date = $year.sprintf("%02d",$month).sprintf("%02d",$cday);
				
				// 기념일 파일 내용 비교위한 변수 선언, 월과 일을 두자리 포맷으로 고정
				if (strlen($month) == 1) { 
					$monthp = "0".$month ;
				} else {
					$monthp = $month ; 
				}
				
				if (strlen($cday) == 1) {
					$cdayp = "0".$cday ;
				} else { 
					$cdayp = $cday ; 
				}
				
				$memday = $year.$monthp.$cdayp;
				$daycont = "" ;


			

				$todaycls = ""; 
				if ($b_year==$year && $b_mon==$month && $b_day==$cday){
					$todaycls = "_today"; 
				}


				$eventcls = "";
				// 삭제해도됨 오늘날짜에 이미지등 tag 추가 하기
				if(strpos($datelists ,$memday) ){
					$eventcls = "_eventYn";
				}
				// 삭제해도됨

				echo ("            <td class='".$todaycls.' '.$eventcls."'>");



				// 날짜 표시
				echo "<font color=\"{$daycolor}\">{$daytext}</font>{$moonday} <font color=\"{$daycontcolor}\">{$daycont}</font>{$blank} {$annivmoonday}";	
				

				echo ("</td>\n");  // 한칸을 마무리
				$cday++; // 날짜를 카운팅
			} 
			
			// 유효날짜가 아니면 그냥 회색을 칠한다.
			else { echo ("            <td>&nbsp;</td>\n"); }
			if (($iz%7) == 0) echo ("        </tr>\n");
		   
		} // 반복구문이 끝남
		?>
                  </tbody>
                
              </table>
            </div>
 </div>

		<div class="today-items">
              <section id="today_schedule">
                 <h5><i class="far fa-clock"></i>금일 주요행사</h5>
                <div>
                  <?php 
		 		

						

							$query = "select * from {$write_table} WHERE wr_1 = '".date('Ymd')."' ORDER BY wr_id asc"; //and wr_2 >= '".date('Ymd')."' 
							$result = sql_query($query);

							
							$today_sc = "N";

							while ($row = sql_fetch_array($result)) {  // 제목글 뽑아서 링크 문자열 만들기..
								$today_sc = "Y";

								echo "<div class='line_bord'>";
								echo  "<a href=\"".G5_BBS_URL."/board.php?bo_table={$bo_table}&year={$year}&month={$month}&wr_id={$row['wr_id']}&sc_no={$sc_no}\">";
								echo "<p>";
								echo "<span class='category category4'>행사</span>";
								echo "<b>{$row['wr_subject']}</b>";
								echo  " (".substr($row['wr_1'],4,2)."/".substr($row['wr_1'],6,2) .")<br />";
								echo "</p>";
								echo "</a>";
								echo "</div>";
							}

							if($today_sc == 'N'){
								echo "금일 주요행사 일정이 없습니다."; 
							}
					?>
                </div>
              </section>
            </div><!-----today-items----->
		</div>
           
          </div>
</div>
<div class="ds-ct">
		   <!--<div>아래 분류를 선택하시면 해당 분류에 해당되는 일정만 보실 수 있습니다.</div> -->
          <!-- <div class="daylist"> <h5>이달의 행사</h5> </div> -->
		  <div class="daylist">
		  <div class="subpoint line"><span class="dot"><em></em></span><p class="tt1">이달의 행사</p></div>
		  </div>
          <div class="event_box">
            <?php


			$weekWord = array("일" , "월"  , "화" , "수" , "목" , "금" ,"토") ;
			

			$eventData = "";
			$eventEdDat = "";



			$query = "select * from {$write_table} WHERE left(wr_1,6) = '{$year}{$sel_mon}' ORDER BY wr_1 asc"; //and left(wr_2,6) >= '{$year}{$sel_mon}' 
			$result = sql_query($query);
			$month_schedule = "";
			
			while ($row = sql_fetch_array($result)) {  // 제목글 뽑아서 링크 문자열 만들기..

					$stdt = substr($row['wr_1'],0,4)."-".substr($row['wr_1'],4,2)."-".substr($row['wr_1'],6,2);
//					$eddt = substr($row['wr_2'],0,4)."-".substr($row['wr_2'],4,2)."-".substr($row['wr_2'],6,2);
				
					echo "<div  class='line_bord'>";
					echo "<a href=\"".G5_BBS_URL."/board.php?bo_table={$bo_table}&year={$year}&month={$month}&wr_id={$row['wr_id']}&sc_no={$sc_no}\">";
					echo " <font color='#ff0000'>";
					echo $stdt."(".$weekWord[ date('w'  , strtotime($stdt)  ) ].") ";
					
	//				echo " ~ ".$eddt."(".$weekWord[ date('w'  , strtotime($stdt)  ) ].") ";
					echo "</font>";

					echo "&nbsp;&nbsp;<span>";

					echo  "<b>".$row['wr_subject']."</b>";

					echo  "</span>";
					echo "</a>";
					echo "</div>";

		}





		?>
          </div>

      <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user btn_submits">
           <!--  <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?> -->
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn btn_submit_right"> 일정추가</a></li><?php } ?>
        </ul>
        <?php } ?>







        <script type="text/javascript">
<!--
// 미리보기 팝업 보이기
function PopupShow(n) {
	var position = $("#subject_"+n).position(); 
	$("#popup_"+n).animate({left:position.left-10+"px", top:position.top+30+"px"},0);
	$("#popup_"+n).show();
}

// 미리보기 팝업 숨기기
function PopupHide(n) {
	$("#popup_"+n).hide();
}
//-->
</script>
        
        
        <!--jd--> 
      </div>
      <!--//wrap--> 
    </div>
    <!--page E--> 
  </div>
  <!--jd-->
  </div>
</div>
<!--section-->
</div>
</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->

<!----/// html----->