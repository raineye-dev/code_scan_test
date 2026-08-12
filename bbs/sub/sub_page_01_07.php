<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터역할"  ;
$g5['title'] = "센터소개 | 센터역할";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    

   <?include G5_THEME_PATH."/sub_left_01.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">센터역할</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">센터역할</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		<div class="sub_wrap_page">

 


  <script>
    $({value: 0}).animate({value: 592807}, {
      duration: 3000,
      step: function() {
        var num = numberWithCommas(Math.floor(this.value));
        $(".countArea").text(num);
      },
      complete: function() {
        var num = numberWithCommas(Math.floor(this.value));
        $(".countArea").text(num);
      }
    });

    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
  </script>

<!-- <div class="society">
  <section class="con_wp">
    <h4 class="ctitle">전라남도자원봉사센터 현황</h4>
    <div class="value">
      <h5></h5>
      <ul>
        <li class="con1"> <strong>전남센터</strong>
          <p>28개</p>
        </li>
        <li class="con2"> <strong>도센터</strong>
          <p>1개</p>
        </li>
        <li class="con3"> <strong>시군센터</strong>
          <p>22개</p>
        </li>
      </ul>
	  </div>
		 <h3 class="number"><span>등록자원봉사자</span> &nbsp;<strong class="countArea color_text"></strong> 명</h4>
  </section>
</div> -->






<style>
.effectArea {padding:5rem 5rem 11rem; border:1px solid #ddd;  margin-bottom:4rem; position:relative; background:url('/bbs/sub/img/bg_effect01_bg.png') #ffeacc right bottom no-repeat;}
.effectArea:after {content:"";display:block;clear:both;}
.effectArea .col {display:table-cell;vertical-align:top;position:relative;padding:50px 15px 0;width:50%;}
.effectArea .col:before {content:"";width:92px;height:102px;position:absolute;left:50%;top:0;transform:translateX(-50%);background-repeat:no-repeat;background-position:50% 0;}
.effectArea .col:nth-child(2):before {background-image:url('/bbs/sub/img/bg_effect01.png');}
.effectArea .col:nth-child(3):before {background-image:url('/bbs/sub/img/bg_effect02.png');}
.effectArea .box {padding:55px 30px 40px;height:100%;border:1px solid #dadee5;min-height:330px;  background:#fff; border-radius:10px;}
.effectArea .boxTitle {font-size:23px; letter-spacing:-0.08rem; font-weight:600;text-align:center; color:#353535;}
.effectArea .listStyle02 > li {margin-top:10px;}

.listStyle02 {margin-top:25px;}
.listStyle02:first-child {margin-top:0;}
.listStyle02 > li {position:relative;padding-left:15px;font-size:17px;margin-top:10px;line-height:25px;word-break: keep-all;}
.listStyle02 > li:first-child {margin-top:0;}
.listStyle02 > li:before {content:"";width:4px;height:4px;background:#3d4b66;position:absolute;left:0;top:11px;}
.playing_box{font-size: 24px;left: 28%;width: 45%;margin:0 auto;height: 65px;line-height: 65px;border:1px solid #ddd;background:#fff;text-align:center;position:absolute;top: -31px;color: #353535;font-weight: 500;letter-spacing: -0.09rem;border-radius: 39px;}


.ns{font-family: 'NanumSquare','돋움',Dotum,'굴림',Gulim,Helvetica, 'Apple SD Gothic Neo',Tahoma, Geneva, sans-serif,verdana;
    font-weight: 600; }
.font_pink{color:#ff404b}
.effectArea_box{margin-bottom:4rem; color:#353535; font-size:17px;}
.effectArea_img{width:100%; }

@media screen and (max-width:1023px) {
    .systemVisual {padding:50px 0 134px 0;}
    .systemVisual .pageTitle {padding:0 20px;}
    .effectArea {margin:0;}
    .effectArea .col {display:block;width:100%;padding:25px 0 0;margin-top:20px;}
    .effectArea .col:before {background-size:46px auto;width:46px;height:51px;}
    .effectArea .box {border:1px solid #dadee5;padding:45px 15px 25px 15px;min-height:auto;}
    .effectArea .boxTitle {font-size:17px;}
    .effectArea .listStyle02 > li {margin-top:3px;}
	    .listStyle02 > li {font-size:14px;padding-left:12px;line-height:25px;margin-top:3px;}
    .listStyle02 > li:before {width:3px;height:3px;}
}	
</style>
<p class="effectArea_box">
	<img src="/bbs/sub/img/sub_page_07_01.png" style="max-width:269px; vertical-align:bottom; " class="M_wd_sz195 M_mg_btm5 T_vt_btm" alt=""> 는 <br>
			자원봉사활동 기본법에서 규정한 자원봉사활동 지원, 진흥 및 행복한 시민 공동체 건설에 기여함을 목적으로 하는 기관입니다.
</p>
	<div class="effectArea">
					<div class="playing_box ns">
							전남센터 23개
					</div>
					<div class="col">
						<div class="box box01">
							<p class="boxTitle ns font_pink">도센터</p>
							<ul class="listStyle02">
								<li>광역단위의 자원봉사 기본계획 수립</li>
								<li>중앙센터 및 시군센터 협력체계 구축</li>
								<li>1365자원봉사포털 서비스 이용 및 회원정보 관리운영</li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="box box02">
							<p class="boxTitle  ns font_pink">22개 시군센터</p>
							<ul class="listStyle02">
								<li>자원봉사활동 추진</li>
								<li>자원봉사자 및 수요처 관리</li>
								<li>현장자원봉사센터 설치 및 운영</li>
								<li>1365자원봉사포털 활용</li>
							</ul>
						</div>
					</div>
					<div class="society">
							<h3 class="number  ns"><span>등록자원봉사자</span> &nbsp;<strong class="countArea color_text"></strong> 명</h4>
					</div>


				</div>








 <!-- 
 			<div class="table_box">
 			
 			<h5 class="stitle02">1365자원봉사포털 회원가입 시 유의사항</h5>
 			<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">전라남도자원봉사센터</p></div>--////타이틀--
 			<p class="txt_box">광역단위의 자원봉사 활성화 기본계획 수립, 중앙센터 및 시군센터 협력체계 구축, 22시군센터 간 정보교류 및 사업 조정·지원, 재난대응 및 지원체계 구축(22시군 현장자원봉사센터 설치 및 운영지원 등), 1365자원봉사포털 서비스 이용 및 회원정보 관리·운영, 그 밖에 특별시·광역시·도 지역의 자원봉사 진흥에 기여할 수 있는 사업</p>
 			</div>
 
 			<div class="table_box">
 			<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">22시군자원봉사센터</p></div>--////타이틀--
 			<p class="txt_box">기초단위 자원봉사활동 추진, 지역자원봉사 및 공동체 활성화 거점역할 수행, 자원봉사자 및 수요처 관리, 현장자원봉사센터 설치 및 운영, 1365자원봉사포털 활용</p>
 			</div> -->

				<div class="effectArea_img">
		<!-- 	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">전국 자원봉사센터 현황</p></div> --><!----////타이틀---->
			<p class=""><img src="/bbs/sub/img/sub_page_01_07_img.png"></p>
			</div>

  




              







	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
