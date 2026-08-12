<?php
include_once('./_common.php');

// 온라인 영상교육 1페이지

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사교육"  ;
$g5['title'] = "자원봉사교육 | 온라인 영상교육";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);


$oldage = 17;
$yYear = date('Y') - $oldage;
$myYear = substr($member['mb_1'],0,4);
$etc1 = "";



if($myYear >= $yYear){
	$etc1 = "T";
}else{
	$etc1 = "A";
}


/*
echo $yYear;
echo "<br/>";
echo $oldage;
echo "<br/>";
echo $myYear;
echo "<br/>";

echo $etc1;
*/

$sql = "SELECT kind_tp , count(0) as cnt FROM video_education_info WHERE user_id='" .$member['mb_id'] . "' and reg_date like '".date('Y')."%' and etc1 = '".$etc1."' and CONVERT (grade,DECIMAL(30)) >= 70 group by kind_tp ";
//echo $sql ;
$result = sql_query($sql);
//$row = sql_fetch_array($result);

while($row = sql_fetch_array($result)) {
	$kind[$row['kind_tp']] = $row['cnt'];
}

?>


<div id="body_layout">
  <div class="body_wrap layout"> 
  
    <?include G5_THEME_PATH."/sub_left_04.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">온라인 영상교육</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사교육</a></li>
            <li class="n3"><a href="" class="navi_ov">온라인 영상교육</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


	

<!------온라인 영상 교육------>
<?//echo $myYear?>

<?//echo $myYear + $oldage?>

	<div class="main_section01 section"><div class="fp-tableCell">
    <div class="inwrap padding01">
      <div class="title">
               <p class="stxt">올바른 자원봉사 인식 및 자원봉사 문화확산</p>
        <h2 class="" style="">온라인영상교육</h2>
      </div>
      
	  
	  
	  
	  <div class="bcontainer row fadeIn animated delay09">

        <div class="inwraps_box col-xs-12">



			

				<!-- <div class="col-md-6 col-xs-12 box">
					<?if(!$is_member){?>
					<a href="javascript:alert('로그인이 필요합니다.'); location.href='/bbs/login.php' ">
					<?}else if($myYear == '' ){?>
					<a href="javascript:alert('생년월일이 입력 되지 않았습니다.'); location.href='/bbs/member_confirm.php?url=http://www.jnvc1365.or.kr/bbs/register_form.php' ">
					<?}elseif($myYear < $yYear){?>
					<a href="javascript:alert('청소년이 아닙니다. 성인 과정을 선택해주세요.'); ">						
					<?}else{
						if($kind['1'] > 0){?>
						<a href="javascript:alert('<?=date('Y')?>년 청소년 온라인 영상교육 과정을 수료하였습니다. 마이페이지에서 확인할 수 있습니다.'); ">
						<?}else{?>
						
						<a href="/bbs/sub/sub_page_04_03_002.php?edumov=1">
					<?
						}
					}?>
						<dl class="inbox box_t01">
						<dt>01</dt>
							<dt><i class="icon_s0101"></i>청소년 과정</dt>
							<dd>자원봉사 활동사례</dd>
							<dd><?=$yYear?>년 이후 출생자</dd>
						</dl>
					</a> 
				</div> -->



				<div class="col-md-6 col-xs-12 box">
					<?if(!$is_member){?>
					<a href="javascript:alert('로그인이 필요합니다.'); location.href='/bbs/login.php' ">
					<?}else if($myYear == '' ){?>
					<a href="javascript:alert('생년월일이 입력 되지 않았습니다.'); location.href='/bbs/member_confirm.php?url=/bbs/register_form.php' ">
					<?}elseif($myYear < $yYear){?>
					<a href="javascript:alert('청소년이 아닙니다. 성인 과정을 선택해주세요.'); ">						
					<?}else{
						if($kind['2'] > 0){?>
							<a href="javascript:alert('<?=date('Y')?>년 청소년 온라인 영상교육 과정을 수료하였습니다. 마이페이지에서 확인할 수 있습니다.'); ">
							<?}else{?>
							
							<a href="/bbs/sub/sub_page_04_03_002.php?edumov=2">
						<?
							}
						}?>
					
						<dl class="inbox box_t01">
					<!-- <dt>02</dt> -->
							<dt><i class="icon_s0101"></i>청소년 과정</dt>
							<!-- <dd>자원봉사 생각나누기</dd> -->
							<dd><?=$yYear?>년 이후 출생자</dd>         
						</dl>
					</a> 
				</div> 


		
		
		
	

        <div class="col-md-6 col-xs-12 box m_box_table"> 
			<?if(!$is_member){?>
  			<a href="javascript:alert('로그인이 필요합니다.'); location.href='/bbs/login.php' ">
			<?}else if($myYear == '' ){?>
  			<a href="javascript:alert('생년월일이 입력 되지 않았습니다.'); location.href='/bbs/member_confirm.php?url=/bbs/register_form.php' ">
			<?}elseif($myYear >= $yYear){?>
			<a href="javascript:alert('성인이 아닙니다. 청소년 과정을 선택해주세요.'); ">
			<?}else{
		
					
					if($kind['3'] > 0){?>
						<a href="javascript:alert('<?=date('Y')?>년 성인 온라인 영상교육 과정을 수료하였습니다. 마이페이지에서 확인할 수 있습니다.'); ">
						<?}else{?>
						
						<a href="/bbs/sub/sub_page_04_03_002.php?edumov=3">
					<?
						}
					}?>
			
            <dl class="inbox box_t01">
	<!-- 		<dt>01</dt> -->
              <dt><i class="icon_s0102"></i>성인 과정</dt>
			 <!--  <dd>자원봉사 언박싱</dd> -->
             <dd><?=($yYear-1)?>년 이전 출생자</dd>            
            </dl>
            </a> 
		</div>




		<!--  <div class="col-md-6 col-xs-12 box m_box_table"> 
		 			<?if(!$is_member){?>
		   			<a href="javascript:alert('로그인이 필요합니다.'); location.href='/bbs/login.php' ">
		 			<?}else if($myYear == '' ){?>
		   			<a href="javascript:alert('생년월일이 입력 되지 않았습니다.'); location.href='/bbs/member_confirm.php?url=http://www.jnvc1365.or.kr/bbs/register_form.php' ">
		 			<?}elseif($myYear >= $yYear){?>
		 			<a href="javascript:alert('성인이 아닙니다. 청소년 과정을 선택해주세요.'); ">
		 			<?}else{
		 					
		 					if($kind['4'] > 0){?>
		 						<a href="javascript:alert('<?=date('Y')?>년 성인 온라인 영상교육 2과정을 수료하였습니다. 마이페이지에서 확인할 수 있습니다.'); ">
		 						<?}else{?>
		 						
		 						<a href="/bbs/sub/sub_page_04_03_002.php?edumov=4">
		 					<?
		 						}
		 					}?>
		 			
		 				<dl class="inbox box_t01">
		 				<dt>02</dt>
		 				  <dt><i class="icon_s0102"></i>성인 2과정</dt>
		 				  <dd>자원봉사 언박싱 02</dd>
		 				 <dd><?=($yYear-1)?>년 이전 출생자</dd>             
		 				</dl>
		 				</a> 
		 			</div> -->





      </div>
	  
		
      </div>
	  <div class="cont_box01 mov_text">
			<h4 class="title">온라인 자원봉사 영상교육 시청 안내</h4>
			<ul class="dot_list">
			<li>[필수사항] 해당 페이지에서 교육 영상을 시청해 주세요. 외부 링크(예: 유튜브)로 연결하여 시청할 경우, 이수 확인이 불가합니다.</li>
			<li>인터넷 익스플로러를 통해 접속하여 교육을 시청할 시 오류가 생길 수 있으니, <br/><span class="points_text">타 브라우저(크롬, 엣지 등)나 모바일로 수강</span>하시기 바랍니다.</li>
			</ul>
		 </div>
    </div>
  </div></div>






	




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
