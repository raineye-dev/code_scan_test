
<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<link rel="stylesheet" href="/theme/J_basic/css/new_main.css" />
<div id="body_layout" >
  <div class="main_wrap">
    <div class="mvisual">
      <div class="main-photo__skin photo__popup photo__typeA">
        <div class="photo_list--wrap clearfix" data-slider data-autoplay="true" data-autoplay-interval="5000" data-dot="true" data-arrows="true" data-total="false" data-show="1" data-slides="1" data-fade="true">
		<!-- <div class="photo_list--item" data-item>
		              <a href="http://www.jnvc1365.or.kr/bbs/board.php?bo_table=sub_page_03_02&wr_id=44"><div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_0216.png);"></div></a>
		            </div> -->
<!-- <div class="photo_list--item" data-item>
 <a href="https://forms.gle/kKvD6ALnBCoqSHFq5" target="_blank"><div class="picture" style="background-image:url(/theme/J_basic/img/main/mainslider0808.jpg);"></div>
 </a>
</div> -->

<div class="photo_list--item" data-item>
   <a href="https://pf.kakao.com/_Uqrbxj?default_tab=hometab" target="_blank"><div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_0731.jpg);"></div></a>
 </div>

		
<div class="photo_list--item" data-item>
 <div class="picture" style="background-image:url(/theme/J_basic/img/main/mainslider0729.jpg);"></div>
</div>
 
          <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_02.jpg);"></div>
          </div>
          <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_03.jpg);"></div>
          </div>
          <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_04.jpg);"></div>
          </div>
		    <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_05.jpg);"></div>
          </div>
        </div>
        <!-- //photo_list wrap -->
        <div class="control clearfix">
          <div class="control1">
            <button type="button" class="button prev" data-control="prev"><span>비주얼 이전</span></button>
            <button type="button" class="button next" data-control="next"><span>비주얼 다음</span></button>
          </div>
          <div class="control2">
            <button type="button" class="button pause" data-control="stop"><span>비주얼 정지</span></button>
            <button type="button" class="button play" data-control="play"><span>비주얼 재생</span></button>
          </div>
        </div>
        <!-- //control -->
        <div class="mvisual_tit"> <span>자원봉사로 하나되는 '행복한 전라남도' 전라남도 자원봉사센터가 만들어갑니다.</span> </div>
      </div>
      <!-- //main-photo__skin --> 
      
    </div>
    <!-- //mvisual -->
   


    <div class="bbs_wrap">
      <div class="m_layout">
				

				<div id="bbs_tab" class="">
				
	                <ul class="menu_wrap">
	                    <li class="left_list_notice"><a href="#obj-1" class="ov">공지사항</a></li>
	                    <li><a href="#obj-2">보도자료</a></li>
						 <li><a href="#obj-3">자료실</a></li>
	                </ul>
	                <div class="con_wrap">
	                    <div class="con" id="obj-1">
						  <?php
							 echo latest('theme/jd_basic', 'sub_page_03_01', 7, 42);
							?>

	                    </div><!-- //con -->
	                    <div class="con" id="obj-2">
	                        <?php
							 echo latest('theme/press', 'sub_page_03_03', 7, 34);
							?>
	                    </div><!-- //con -->
						 <div class="con" id="obj-3">
	                        <?php
							 echo latest('theme/press', 'sub_page_03_02', 7, 34);
							?>
	                    </div><!-- //con -->
	                </div>
	            </div><!-- //bbs_tab -->



				<div class="bbs_pop">
					<div class="video_1240_left">
						 <h3 class="na mobile_font">홍보영상</h3>

							<div class="iframe">	
								<iframe width="100%" height="220" src="https://www.youtube.com/embed/0VrID4svU-0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
								
							</div>
						<!-- </a> -->
						<!-- </P> -->
					</div>
					<div class="more"><a href="/bbs/board.php?bo_table=sub_page_03_06">홍보영상 더보기</a></div>
				</div><!-- //bbs_pop -->

        
      </div>
      <!-- // m_layout --> 
      
    </div>
    <!-- // bbs_wrap -->


<div class="info_ico">
			<div class="m_layout">





<div class="main_diagnosis">
  <h2 class="ir">개인 맞춤 메뉴</h2>

  <ul>
		<li>
			<a href="/bbs/sub/sub_page_04_02_006.php" title="온라인영상교육">
				<div></div>
				<span>온라인영상교육</span>
			</a>
		</li>
		<li>
			<a href="/bbs/board.php?bo_table=sub_page_03_10" title="센터일정">
				<div></div>
				<span>센터일정</span>
			</a>
		</li>
		<li>
			<a href="/bbs/board.php?bo_table=sub_page_03_04" title="뉴스레터">
				<div></div>
				<span>뉴스레터</span>
			</a>
		</li>
		<li>
			<a href="/bbs/sub/sub_page_02_04.php" title="자원봉사조회">
				<div></div>
				<span>자원봉사조회</span>
			</a>
		</li>
		<li>
			<a href="/bbs/board.php?bo_table=sub_page_03_02" title="자료실">
				<div></div>
				<span>자료실</span>
			</a>
		</li>
		<li>
			<a href="/bbs/sub/sub_page_03_07.php" title="나눔이동세탁차">
				<div></div>
				<span>나눔이동세탁차</span>
			</a>
		</li>
		<li>
			<a href="/bbs/sub/sub_page_08_01.php" title="자원봉사마일리지제">
				<div></div>
				<span>자원봉사마일리지제</span>
			</a>
		</li>
		<li>
			<a href="/bbs/sub/sub_page_05_01.php" title="시군센터연락처">
				<div></div>
				<span>시군센터연락처</span>
			</a>
		</li>
		<!-- <li>
			<a href="/bbs/board.php?bo_table=sub_page_03_05" title="활동앨범">
				<div></div>
				<span>활동앨범</span>
			</a>
		</li>
		<li>
			<a href="/bbs/sub/sub_page_01_05.php" title="찾아오시는길">
				<div></div>
				<span>찾아오시는길</span>
			</a>
		</li> -->
	</ul>
 
</div>

			</div><!-- // m_layout -->

		</div><!-- //info_ico -->





    <div class="jeollanamdo_con">
      <div class="m_layout">
        <h2 class="activity na"><b>ACTIVITY</b> ALBUM</h2>
        <div class="box1">
          <dl class="title">
            <dt><strong class="na">활동앨범</strong></dt>
            <dd>
              <p>나눔과 봉사를 실천하실 따뜻한 손과<br/>
                마음을 지닌 봉사자 분들의 <br/>
                이야기를 소개합니다.</p>
              <button type="button" class="btn-place" onclick="document.location='/bbs/board.php?bo_table=sub_page_03_05'">더보기</button>
              <div id="photo_slide01">
                <div class="control slide-arrs">
                  <button type="button" data-control="prev" class="btn_prev slick-prev slick-arrow poto"><span>포토갤러리 이전</span></button>

                  <button type="button" data-control="next" class="btn_next slick-next slick-arrow poto"><span>포토갤러리 다음</span></button>
                </div>
              </div>
              <p class="page pc-only"></p>
            </dd>
          </dl>
        </div>
        <!-- //box1 -->
        
        <div class="box2">
          <div class="photo_wrap">
            <div id="photo_slide" class="photo_slide">
					<?php
					 echo latest('theme/people', 'sub_page_03_05', 6, 34);
					?>
            
            </div>
          </div>
        </div>
        <!-- //box2 --> 
      </div>
      <!-- // m_layout --> 
      
    </div>
    <!-- // jeollanamdo_con --> 
    
  </div>
  <!--//main_wrap --> 
  
</div>
<!-- //body_layout -->

<link rel="stylesheet" href="/theme/J_basic/css/pluigs/slick.css" />
<script src="/theme/J_basic/css/pluigs/slick.js"></script> 
<script src="/theme/J_basic/css/pluigs/slick.slider.js"></script> 
<script type="text/javascript">
    $(document).ready(function(){
    var btn = "#bbs_tab .menu_wrap li> a",
    option = {lv:1,obj:"#bbs_tab .con_wrap .con"}

    targetOpener(btn,option);
    $("#bbs_tab .con_wrap .ov").click();

    });

    (function(){
	var param = "#photo_slide",
	obj = ".item",
	btn = "#photo_slide01 .control",
	interval = 4000,
	speed = 450,
	viewSize = 0,
	moreSize = 0,
	dir = "x",
	data = 0,
	auto = true,
	hover = false,
	method = "easeInOutCubic",
	op1 = false;

	stateScrollObj(param,obj,btn,interval,speed,viewSize,moreSize,dir,data,auto,hover,method,op1);
	}());
</script> 
<!-- content  -->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
