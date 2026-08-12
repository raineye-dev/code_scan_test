<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 찾아오시는길";
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
        <h2 class="page__title">CI</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">CI</a></li>
         </ul>
        </div><!---///utile_wrap---->
      </div><!---///title_wrap--->

		<style>
		.ci_mtpt01{margin: 3.4rem 1rem;}
		.ci_text_sub{width:100%;font-weight:500;font-size: 15px;text-align:center;color:#777;margin: 0.3rem 0 5rem 0;}
		.ci_text_title{width:100%;font-weight:500;font-size: 17px;text-align:center;color:#353535;margin:3rem 0 0.3rem;}
		.ci_logo_firstbox{text-align:center;}
		.ci_logo_firstbox img {width:30%;}
		.title4 {font-size: 1.2rem;display: block;margin: 0.8rem 0;color: #111;font-weight: 600;letter-spacing: -0.54px;}
		.title4:first-child,
		.title8:first-child {margin-top: 0;}
					/*로고타입*/
		.ci_box{display:flex;flex-wrap: wrap;gap: 2rem;border:1px solid #ddd;border-radius:1.2rem;padding: 2rem;justify-content: space-between;font-family: 'NanumSquare', '돋움', Dotum, '굴림', Gulim, Helvetica, 'Apple SD Gothic Neo', Tahoma, Geneva, sans-serif, verdana;}
		.ci_box > *{width:calc(50% - 3.5rem);word-break: keep-all;}
		.ci_box .img{background:linear-gradient(90deg, #E8E8E8 1px, transparent 1px), linear-gradient(#eeeeee 1px, transparent 1px);background-size: 0.5rem 0.5rem;height: 13.1rem;display:flex;flex-wrap: wrap;align-items: center;justify-content: center;padding:1.5rem;}
	
		.ci_box .txt{width: calc(53% - 0.5rem);}
		.ci_box > * > .img.t2{padding: 2rem 4rem;justify-content: flex-start;gap: 4rem;}
		.ci_btn{display: flex;align-items: flex-end;justify-content: flex-end;gap:.7rem;}
		.ci_btn > a{width:16.6rem;display: inline-flex;justify-content: space-between;}
		.ci_box.t2 > *{width:47%;}
		/*bullet*/
		[class*="title"] + [class*="bul"]{margin-top:0;}
		[class*="bul"] > li{position:relative;text-align: left;}
		[class*="bul"] > li:before{content:'';position:absolute;left:0;}
		[class*="bul"] > li + li {margin-top: 0.4rem;}
		.bul1 > li > .title:first-child {margin-top: 0;}
		.bul1 > li {padding-left:.9rem;text-align: left;color: #3e3e3e; font-size:1.7rem; font-weight:400;}
		.bul1 > li::before {top: 1rem;width: 0.4rem;height: 0.4rem;border-radius: 100%;background-color: #9A9A9A;}
		.bul1 > li ul {margin-bottom: 1rem;}
		.part01_wrap{margin:2rem 0 3rem;} 

		.ci_btn{display: flex;align-items: flex-end;justify-content: flex-end;gap:.7rem;}
		.ci_btn > a{width:16.6rem;display: inline-flex;justify-content: space-between;}
		[class*="btn_st"].type1 {background-color: #de0057; color: #fff; border: 0;}
		/*버튼*/
		[class*="btn_st"]{ border:1px solid #D3D3D3;border-radius:3px;color:#000;transition:all .3s;background-color:#fff;display:inline-flex;position:relative;font-weight:500;height:6rem;line-height:1.2;vertical-align:middle;z-index:1;overflow:hidden;align-items: center;justify-content: center;}
		.btn_st1{letter-spacing:-0.48px;text-align:left;padding:0 1rem;height:auto;font-size:1rem;height:3.5rem;}
		.btn_st1 > i { font-size:1.6rem;line-height:4.8rem;margin-left:2rem;}
		.sizeimg_01 img{width: 35%;}
		.sizeimg_02 img{width: 85%;}
		.sizeimg_03 img{width: 98%;}
		.sizeimg_04 img{width: 100%;}
		.sizeimg_05 img{width: 80%;}
		.sizeimg_01_001 img{width:60%;}
		.sizeimg_01_002 img{width:100%; margin-top:2rem;}
		.sizeimg_01_002 {}
		.ci-int.ci-box3 .box .text ul li {
    width: 100%;
    display: block;
    font-size: 1.4rem;
    color: #444444;
    padding-left: 4.2rem;
    position: relative;
    margin: 0 0 2.4rem 2.4rem;
}

.ci-int.ci-box3 {
  overflow: hidden;
}
.ci-int.ci-box3 .box {
  background: none;
  padding: 0;
  width: 100%;
}
.ci-int.ci-box3 .box img + img {
  margin-left: 8rem;
}

.ci-int.ci-box3 .box {
    width: calc(50% - 0.6rem);
  }

.ci-int.ci-box3 .box .text ul li span {
    display: block;
    font-weight: 600;
    font-size: 1rem;
    color: #222222;
    margin-bottom: 0.2rem;
}
.ci-int.ci-box3 .box .text ul li {
    width: 100%;
    display: block;
    font-size: 0.77rem;
    color: #444444;
    padding-left: 3.2rem;
    position: relative;
    letter-spacing: -0.08em;
    margin: 0 0 1.4rem .4rem;
}


.ci-int.ci-box3 .box .text ul li::after {
    content: "";
    width: 2.2rem;
    height: 3.4rem;
    border-radius: 0.4rem;
    position: absolute;
    top: 0;
    left: 0;
}
.ci-int.ci-box3 .box:nth-child(1) ul li:nth-child(1), .ci-int.ci-box3 .box:nth-child(1) ul li:nth-child(3), .ci-int.ci-box3 .box:nth-child(2) ul li:nth-child(1){margin-left:0px !important;}
.ci-int.ci-box3 .box:nth-child(1) ul li:nth-child(1)::after {
  background-color: #f47820;
}
.ci-int.ci-box3 .box:nth-child(1) ul li:nth-child(2)::after {
  background-color: #febc11;
}
.ci-int.ci-box3 .box:nth-child(1) ul li:nth-child(3)::after {
  background-color: #1d1d1e;
}
.ci-int.ci-box3 .box:nth-child(1) ul li:nth-child(4)::after {
  background-color: #c3c3c3;
}


.ci-int.ci-box3 .box:nth-child(2) ul li:nth-child(1)::after {
  background-color: #009457;
}
.ci-int.ci-box3 .box:nth-child(2) ul li:nth-child(2)::after {
  background-color: #006fba;
}

.ci_box_radius{
    border: 1px solid #ddd;
    border-radius: 1.2rem;
	padding:2rem;
}

@media only screen and (min-width: 22.5em){
.ci-int.ci-box3 .box .text ul li {
    width: calc(52% - 1rem);
    display: inline-block;
    vertical-align: top;
}
}		
		@media only screen and (min-width: 22.5em){
 .ci-int.ci-box3 .box .text ul li {
    width: calc(50% - 0.rem);
    display: inline-block;
    vertical-align: top;
}
		}
		@media only screen and (min-width: 48em){
.ci-int .box {float: left;}
		}	
		@media screen and (max-width: 640px){

		  .ci_box{flex-direction:column;padding:2.5rem;}
		  .ci_box > *{width:100% !important;}
		  .ci_box .txt li br{display:none;}
		  .ci_box > * > .img.t2{padding:1.5rem;}
		  .ci-int.ci-box3 .box .text ul li {width:100%; margin-left:0px;}
		  .ci-int.ci-box3 .box{width:100%;}
		}
		</style>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
		<div class="sub_page_bg"></div>
		<div class="sub_wrap_page">
			<div class="wrap_direction">
					<div class="">
					<div class="subpoint">
						<span class="dot"><em></em></span><p class="tt1">심볼모티브</p></div>
						<div class="ci_logo_firstbox ci_mtpt01">
						<img src="/bbs/sub/img/sub_page_01_08_img_03.png" alt="자원봉사센터 CI">
						</div>
						<div class="ci_text_title">Motif</div>
						<div class="ci_logo_firstbox">
						<img src="/bbs/sub/img/subpage_0001.png" alt="자원봉사센터 CI"></div>
						<div class="ci_text_title">Concept</div>
						<div class="ci_text_sub">
							‘ 봉사를 통해 함께 나누는 가치, 전라남도자원봉사센터 ’ 라는 컨셉을 담아 디자인한 심볼형 로고입니다.<br/>
							이니셜 ‘ V ‘ 를 모티브로, 맞닿은 그래픽을 통해 함께 나누는 가치의 의미를 표현하였습니다.<br/>
							전라남도의 로고를 이루고 있는 컬러를 매치하여 아이덴티티를 동일시 시켰습니다.</div>
						</div>


				<div class="part01_wrap">
					<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">심볼마크</p></div>
					<div class="ci_box">
							<div class="img sizeimg_01">
								<img src="/bbs/sub/img/sub_page_01_08_img_01.png" alt="자원봉사센터 CI">
							</div>
							<div class=" sizeimg_01_001">
								<img src="/bbs/sub/img/sub_page_01_08_img_01_001.png" alt="자원봉사센터 CI">
							</div>
							<!-- <div class="txt">
								<strong class="title4">심볼</strong>
								<ul class="dot_list">
									<li>‘봉사를 통해 함께 나누는 가치, 전라남도자원봉사센터’ 라는 컨셉을 담아 디자인한 심볼형 로고입니다.</li>
									<li>이니셜 ‘ V ‘ 를 모티브로, 맞닿은 그래픽을 통해 함께 나누는 가치의 의미를 표현하였습니다.</li>
									<li>전라남도의 로고를 이루고 있는 컬러를 매치하여 아이덴티티를 동일시 시켰습니다.</li>
								</ul>
							</div> -->
					</div>
				</div>
				<div class="part01_wrap">
					<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">워드마크</p></div>
					<div class="ci_box">
							<div class="img sizeimg_02">
							<img src="/bbs/sub/img/sub_page_01_08_img_02.png" alt="전라남도자원봉사센터">
							</div>
							<div class=" sizeimg_01_002">
								<img src="/bbs/sub/img/sub_page_01_08_img_01_002.png" alt="자원봉사센터 CI">
							</div>
							<!-- <div class="txt">
								<strong class="title4">로고타입</strong>
								<ul class="dot_list">
									<li>전라남도자원봉사센터 CI의 기본 요소라서 전라남도자원봉사센틔 이미지를 대내외에 알리는 시각 커뮤니케이션의 핵심이 되는 대표적 상징물</li>
								</ul>
							</div> -->
					</div>
				</div>
				<div class="part01_wrap">
				<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">시그니처</p></div>
				<div class="ci_box t2">
				
					<div>
						<strong class="title4">세로 조합형(복합)</strong>
						<div class="img t2 sizeimg_03"><img src="/bbs/sub/img/sub_page_01_08_img_03.png" alt="자원봉사센터 CI"></div>
					</div>
					<div>
						<strong class="title4">가로 조합형(복합)</strong>
						<div class="img t2 sizeimg_04"><img src="/bbs/sub/img/sub_page_01_08_img_04.png" alt="자원봉사센터 가로형 혼합형 CI"></div>
					</div>
				<!-- 	<div>
						<strong class="title4">가로 조합형(국문)</strong>
						<div class="img sizeimg_05"><img src="/bbs/sub/img/sub_page_01_08_img_05.png" alt="자원봉사센터 가로형 국문 CI"></div>
					</div>
					<div class="ci_btn">
						<a href="/bbs/sub/AI.zip" class="btn_st1 type1" target="_blank" title="AI 다운로드">AI 다운로드<i class="xi-long-arrow-down"></i></a>
						<a href="/bbs/sub/JPG.zip" class="btn_st1 " target="_blank" title="JPG 다운로드">JPG 다운로드<i class="xi-long-arrow-down"></i></a>
					</div>
									</div> -->
				</div>
				<div class="part01_wrap ">
				<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">컬러</p></div>
				<div class="ci_box_radius">
				<div class="ci-int ci-box3"> 
				<div class="box"> 
				 <div class="text"> 
				 <ul> 
				 <li><span>Orange</span>R244 / G117 / B33 / #F47521</li> 
				 <li> <span>Yellow</span>R255 / G214 / B0 | #FFD600</li> 
				 <li> <span>Dark Grey</span>R244 / G117 / B33 / #F47521</li> 
				 <li> <span>Gray</span>R255 / G214 / B0 | #FFD600</li> 
				 </ul> 
				 </div> 
				 </div> 
				 <div class="box"> 
				 <div class="text"> 
				 <ul> 
				 <li> <span>Green</span>R0 / G148 / B87 / #009457</li> 
				 <li> <span>Blue</span>R0 / G111 / B186 | #006FBA </li> 
				 
				 </ul> 
				 </div> 
				 </div>
				 </div>
				

				  </div> 
				  
				 </div>
					<div class="ci_btn">
						<a href="/bbs/sub/down/AI.zip" class="btn_st1 type1" target="_blank" title="AI 다운로드">AI 다운로드<i class="xi-long-arrow-down"></i></a>

						<a href="/bbs/sub/down/JPG01.zip" class="btn_st1" target="_blank" title="AI 다운로드">JPG 다운로드<i class="xi-long-arrow-down"></i></a>
						<a href="/bbs/sub/down/PNG.zip" class="btn_st1 " target="_blank" title="JPG 다운로드">PNG 다운로드<i class="xi-long-arrow-down"></i></a>
					</div>

			
			</div>  <!---///wrap_direction-->
		</div><!---///sub_wrap_page-->

	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
