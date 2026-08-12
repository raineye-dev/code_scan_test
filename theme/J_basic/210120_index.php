<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



<div id="body_layout" >
  <div class="main_wrap">
    <div class="mvisual">
      <div class="main-photo__skin photo__popup photo__typeA">
        <div class="photo_list--wrap clearfix" data-slider data-autoplay="true" data-autoplay-interval="5000" data-dot="true" data-arrows="true" data-total="false" data-show="1" data-slides="1" data-fade="true">
          <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(/theme/J_basic/img/main/main_slider_01.jpg);"></div>
          </div>
          <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(http://yd21.go.kr/nogunri/img/main/mvisual02.jpg);"></div>
          </div>
          <div class="photo_list--item" data-item>
            <div class="picture" style="background-image:url(http://yd21.go.kr/nogunri/img/main/mvisual03.jpg);"></div>
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
        <div class="mvisual_tit"> <span>Nogunri Peace Memorial Park 비극의 역사를 가슴깊이 기억하겠습니다. 노근리 평화공원</span> </div>
      </div>
      <!-- //main-photo__skin --> 
      
    </div>
    <!-- //mvisual -->
    

    
    <div class="info_ico">
      <div class="m_layout">
        <div class="tit"><span>Infomation</span><em>주요시설안내</em></div>
        <ul>
          <li><a href="http://yd21.go.kr/site/cyber/tour/tour.html?vr=05"><span class="ico ico1"></span><em>시설안내VR</em></a></li>
          <!-- <li><a href="http://yd21.go.kr/nogunri/html/sub01/0103.html"><span class="ico ico2"></span><em>전화번호안내</em></a></li> -->
          <li><a href="http://yd21.go.kr/nogunri/html/sub01/0104.html"><span class="ico ico3"></span><em>찾아오시는길</em></a></li>
        </ul>
      </div>
      <!-- // m_layout --> 
      
    </div>
    <!-- //info_ico -->
    
    <div class="bbs_wrap">
      <div class="m_layout">
        <div id="bbs_tab">
          <div class="tit">소식</div>
          <ul class="menu_wrap">
            <li><a href="#obj-1" class="ov">공지사항</a></li>
            <li><a href="#obj-2">평화공원소식</a></li>
          </ul>
          <div class="con_wrap">
            <div class="con" id="obj-1">
              <p class="skip">공지사항</p>
              <ul>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0501.html?mode=V&amp;no=fa5823dec8150f3fb597e4676af8f098"> <strong>2020년도 기간제 근로자 공개모집 시행계획 공고</strong>
                  <p>2020년도 기간제 근로자 공개모집 시행계획을 다음과 같이 공개합니다.
                    
                    1. 모집분야
                    총무...</p>
                  <div class="date">2020.01.10</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0501.html?mode=V&amp;no=5322b1bc9c107b59a4cdc4d8e7b8bd92"> <strong>제12회 노근리평화상 시상식 수상자 결정 안내</strong>
                  <p>제12회 노근리평화상 시상식 수상자 결정에 따른 안내
                    
                    *인권상 : 정우성 유엔난민기구 ...</p>
                  <div class="date">2019.09.29</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0501.html?mode=V&amp;no=92b1e4dc3e69de189b7407ee2fdc2cb1"> <strong>노근리평화공원 사진대회 수상자 결정 안내</strong>
                  <p>2019 노근리평화공원 사진대회 수상자가 결정되었습니다.
                    
                    이에 노근리평화공원 사진대회...</p>
                  <div class="date">2019.09.29</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0501.html?mode=V&amp;no=aa013d4f914030a8bee8acb010df8c6c"> <strong>2019년도 제3호 기간제 근로자 공개모집 시행계획 공고</strong>
                  <p>2019년도 기간제 근로자 공개모집 시행 계획을 다음과 같이 공고합니다. 1. 모집 예정 분야...</p>
                  <div class="date">2019.09.10</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <!-- <li>
	                        		<a href="#">
	                        			<strong>제목이 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li>
	                        	<li>
	                        		<a href="#">
	                        			<strong>제목이 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li>
	                        	<li>
	                        		<a href="#">
	                        			<strong>제목이 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li>
	                        	<li>
	                        		<a href="#">
	                        			<strong>제목이 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li> -->
              </ul>
              <div class="more"><a href="http://yd21.go.kr/nogunri/html/sub05/0501.html">공지사항 더보기</a></div>
            </div>
            <!-- //con -->
            <div class="con" id="obj-2">
              <p class="skip">평화공원소식</p>
              <ul>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0502.html?mode=V&amp;no=cc2fa4b716fb6306db61b17567b2c7ef"> <strong>(사)노근리국제평화재단, 유엔평화기념관과 상호업무협약(MOU)체결</strong>
                  <p>(사)노근리국제평화재단, 
                    유엔평화기념관과 상호업무협약(MOU)체결
                    
                    
                    o (사)노근리국...</p>
                  <div class="date">2020.01.08</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0502.html?mode=V&amp;no=7a64dc8d4ee6d7345aa12e96de1cc619"> <strong>제12회 노근리 평화상 시상식 개최</strong>
                  <p>제12회 노근리 평화상 시상식 열려 
                    
                    - 인권상에 유엔난민기구 친선대사 배우 정우성씨 - 
                    ...</p>
                  <div class="date">2020.01.08</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0502.html?mode=V&amp;no=3f4368932c2258c08ce21623cd0112fb"> <strong>제17회 노근리 평화 인권 전국 백일장 대회 개최</strong>
                  <p>&ldquo;제17회 노근리 평화‧인권 전국 백일장대회&rdquo; 열려
                    
                    o 10월 12일 오전 10시부터 ...</p>
                  <div class="date">2020.01.08</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <li> <a href="http://yd21.go.kr/nogunri/html/sub05/0502.html?mode=V&amp;no=2cd2dcc35f18e68a580c5edbfff1fde0"> <strong>노근리정원축제-가을정원축제</strong>
                  <p>가을꽃들과 함께 하는 노근리 가을정원축제 
                    
                    ❍ 노근리평화공원의 넓은 잔디밭이 축...</p>
                  <div class="date">2020.01.08</div>
                  <div class="go">GO<span></span></div>
                  </a> </li>
                <!-- <li>
	                        		<a href="#">
	                        			<strong>평화공원소식 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li>
	                        	<li>
	                        		<a href="#">
	                        			<strong>평화공원소식 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li>
	                        	<li>
	                        		<a href="#">
	                        			<strong>평화공원소식 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li>
	                        	<li>
	                        		<a href="#">
	                        			<strong>평화공원소식 들어갑니다 제목이 들어갑니다.</strong>
	                        			<p>내용이 들어갑니당 내용이 들어갑니다. 내용 내용 내용 내용이 들어갑니다.</p>
	                        			<div class="date">2019-08-02</div>
	                        			<div class="go">GO<span></span></div>
	                        		</a>
	                        	</li> -->
              </ul>
              <div class="more"><a href="http://yd21.go.kr/nogunri/html/sub05/0502.html">평화공원소식 더보기</a></div>
            </div>
            <!-- //con --> 
          </div>
        </div>
        <!-- //bbs_tab -->
        
        <div class="bbs_pop">
          <div class="tit">팝업존</div>
          <div class="main-photo__skin photo__popup photo__typeA">
            <div class="photo_list--wrap clearfix" data-slider data-autoplay="true" data-autoplay-interval="5000" data-dot="false" data-arrows="true" data-total="true" data-show="1" data-slides="1" data-fade="true">
              <div class='photo_list--item' data-item>
                <div class='picture'> <a href='http://ticket.yd21.go.kr/rsvc/rsv_sil.html?b_id=nogunri' target='_blank' title='새창링크'><img src='/_prog/download/?func_gbn_cd=popup_zone&mng_no=84' alt='nogunri_ticket'/></a> </div>
              </div>
              
            </div>
            <!-- //photo_list wrap -->
            <div class="control clearfix">
              <div class="paging" data-paging=""></div>
              <button type="button" class="button prev" data-control="prev"><span>팝업존 이전</span></button>
              <button type="button" class="button pause" data-control="stop"><span>팝업존 정지</span></button>
              <button type="button" class="button play" data-control="play"><span>팝업존 재생</span></button>
              <button type="button" class="button next" data-control="next"><span>팝업존 다음</span></button>
            </div>
            <!-- //control --> 
          </div>
          <!-- //main-photo__skin --> 
          
        </div>
        <!-- //bbs_pop --> 
        
      </div>
      <!-- // m_layout --> 
      
    </div>
    <!-- // bbs_wrap -->
    
    <div class="nogunri_con">
      <div class="m_layout">
        <div class="box1">
          <div class="tit"> <strong>노근리 바로가기</strong> <span>노근리 사건에 대한 자세한 내용을 </span><span>알 수 있습니다.</span> </div>
          <div class="icon_wrap">
            <ul>
              <li><a href="http://yd21.go.kr/nogunri/html/sub04/040101.html"><span class="ico ico1"></span><em>노근리사건<br>
                바로알기</em></a></li>
              <li><a href="http://yd21.go.kr/nogunri/html/sub04/040104.html"><span class="ico ico2"></span><em>언론 속<br>
                노근리</em></a></li>
              <li><a href="http://yd21.go.kr/nogunri/html/sub04/0401050101.html"><span class="ico ico3"></span><em>노근리<br>
                사건자료실</em></a></li>
              <li><a href="http://yd21.go.kr/nogunri/html/sub04/040107.html"><span class="ico ico4"></span><em>관련서적</em></a></li>
              <li><a href="http://yd21.go.kr/nogunri/html/sub04/040108.html"><span class="ico ico5"></span><em>희생자<br>
                심사보고서</em></a></li>
              <li><a href="http://yd21.go.kr/nogunri/html/sub04/04010901.html"><span class="ico ico6"></span><em>관계법령</em></a></li>
            </ul>
          </div>
        </div>
        <!-- //box1 -->
        
        <div class="box2">
          <div class="tit"> <strong>과거 아픔의 추모와, 미래 평화를 위한 격려의 공간</strong>
            <p>인권과 세계평화의 소중함을 알리겠습니다.</p>
          </div>
          <div class="photo_wrap">
            <div class="tit">포토갤러리</div>
            <div id="photo_slide" class="photo_slide">
              <div class="control">
                <button type="button" data-control="prev" class="btn_prev"><span>포토갤러리 이전</span></button>
                <button type="button" data-control="play" class="btn_play"><span>포토갤러리 재생</span></button>
                <button type="button" data-control="stop" class="btn_stop"><span>포토갤러리 정지</span></button>
                <button type="button" data-control="next" class="btn_next"><span>포토갤러리 다음</span></button>
              </div>
              <div class="grap">
                <ul class="obj">
                  <li class="item"> <a href="http://yd21.go.kr/nogunri/html/sub05/0505.html?mode=V&amp;no=27d1377dda72427f18c563a7d88fe9c9">
                    <div class="thumb"> <span><img src='/nogunri/html/sub05/0505.html?mode=IMG&amp;no=27d1377dda72427f18c563a7d88fe9c9&amp;file_id=&amp;thm=Y' alt='노근리국제평화재단, 국립일제강제동원역사관과 상호업무협약 체결 이미지' /></span> </div>
                    <div class="thumb_txt"> <strong>노근리국제평화재단, 국립일제강제동원역사관과 상호업무협약 체결</strong>
                      <p>2019.06.12</p>
                    </div>
                    </a> </li>
                  <li class="item"> <a href="http://yd21.go.kr/nogunri/html/sub05/0505.html?mode=V&amp;no=10f82e6566870ce7c8f6eb3dcbe3be00">
                    <div class="thumb"> <span><img src='/nogunri/html/sub05/0505.html?mode=IMG&amp;no=10f82e6566870ce7c8f6eb3dcbe3be00&amp;file_id=&amp;thm=Y' alt='제69주기(제21회)노근리사건희생자 합동위령행사 이미지' /></span> </div>
                    <div class="thumb_txt"> <strong>제69주기(제21회)노근리사건희생자 합동위령행사</strong>
                      <p>2019.06.12</p>
                    </div>
                    </a> </li>
                  <li class="item"> <a href="http://yd21.go.kr/nogunri/html/sub05/0505.html?mode=V&amp;no=b0638f06f2c84fdd92e5d30136b7757b">
                    <div class="thumb"> <span><img src='/nogunri/html/sub05/0505.html?mode=IMG&amp;no=b0638f06f2c84fdd92e5d30136b7757b&amp;file_id=&amp;thm=Y' alt='인권평화캠프-학산고, 영동중 이미지' /></span> </div>
                    <div class="thumb_txt"> <strong>인권평화캠프-학산고, 영동중</strong>
                      <p>2019.05.29</p>
                    </div>
                    </a> </li>
                  <li class="item"> <a href="http://yd21.go.kr/nogunri/html/sub05/0505.html?mode=V&amp;no=700fc4a1be161751461a204f8c254cc3">
                    <div class="thumb"> <span><img src='/nogunri/html/sub05/0505.html?mode=IMG&amp;no=700fc4a1be161751461a204f8c254cc3&amp;file_id=&amp;thm=Y' alt='평화의 쉼터 준공식 이미지' /></span> </div>
                    <div class="thumb_txt"> <strong>평화의 쉼터 준공식</strong>
                      <p>2019.05.29</p>
                    </div>
                    </a> </li>
                  <li class="item"> <a href="http://yd21.go.kr/nogunri/html/sub05/0505.html?mode=V&amp;no=61c601d4b824d9496a772557c11bbe46">
                    <div class="thumb"> <span><img src='/nogunri/html/sub05/0505.html?mode=IMG&amp;no=61c601d4b824d9496a772557c11bbe46&amp;file_id=&amp;thm=Y' alt='2019년 노근리정원축제-&quot;노근리 꽃길만 걸어요&quot; 이미지' /></span> </div>
                    <div class="thumb_txt"> <strong>2019년 노근리정원축제-&quot;노근리 꽃길만 걸어요&quot;</strong>
                      <p>2019.05.29</p>
                    </div>
                    </a> </li>
                  <li class="item"> <a href="http://yd21.go.kr/nogunri/html/sub05/0505.html?mode=V&amp;no=afa11d5502cc64bdf7363e4bee3959b8">
                    <div class="thumb"> <span><img src='/nogunri/html/sub05/0505.html?mode=IMG&amp;no=afa11d5502cc64bdf7363e4bee3959b8&amp;file_id=&amp;thm=Y' alt='영동교육지원청 주관 사제동행 인권평화 캠프 개최 이미지' /></span> </div>
                    <div class="thumb_txt"> <strong>영동교육지원청 주관 사제동행 인권평화 캠프 개최</strong>
                      <p>2019.05.22</p>
                    </div>
                    </a> </li>
                  <!-- <li class="item">
                                		<a href="#">
                                			<div class="thumb">
                                				<span><img src="/nogunri/img/main/ex_img.jpg" alt=""></span>
                                			</div>
                                			<div class="thumb_txt">
                                				<strong>제목이 들어갑니다111 제목 제목</strong>
                                				<p>2019-06-12</p>
                                			</div>
                                		</a>
                                	</li>
                                	<li class="item">
                                		<a href="#">
                                			<div class="thumb">
                                				<span><img src="/nogunri/img/main/ex_img.jpg" alt=""></span>
                                			</div>
                                			<div class="thumb_txt">
                                				<strong>제목이 들어갑니다222 제목 제목</strong>
                                				<p>2019-06-12</p>
                                			</div>
                                		</a>
                                	</li>
                                	<li class="item">
                                		<a href="#">
                                			<div class="thumb">
                                				<span><img src="/nogunri/img/main/ex_img.jpg" alt=""></span>
                                			</div>
                                			<div class="thumb_txt">
                                				<strong>제목이 들어갑니다333 제목 제목</strong>
                                				<p>2019-06-12</p>
                                			</div>
                                		</a>
                                	</li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- //box2 --> 
      </div>
      <!-- // m_layout --> 
      
    </div>
    <!-- // nogunri_con --> 
    
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
	btn = "#photo_slide .control",
	interval = 3000,
	speed = 300,
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

<!-- 레이어팝업 시작 -->
<div id="lp_layout">
  <div id="lp_pop01" class="lp_wrap" tabindex="0">
    <div class="lp_wrap_inner">
      <div class="inner">
        <div class="pop_wrap">
          <div class="pop_left">
            <div class="pop_inner">
              <div class="tit">알기쉬운 영동군 민원특화 서비스</div>
              <p>다양한 사용자 맞춤형 서비스를 제공하는 영동군 민원특화 서비스</p>
              <div class="botbox">
                <div class="botbox_inner">
                  <div class="tit">민원실안내</div>
                  <ul>
                    <li><a href="http://yd21.go.kr/kr/html/sub01/010201.html">민원실 이용안내</a></li>
                    <li><a href="http://yd21.go.kr/kr/html/sub01/010202.html">민원실 배치도</a></li>
                    <li><a href="http://yd21.go.kr/kr/html/sub01/010203.html">민원사무편람</a></li>
                    <li><a href="http://yd21.go.kr/kr/html/sub01/01020501.html">민원수수료안내</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- //pop_left -->
          
          <div class="pop_right">
            <div id="pop_wrap">
              <ul class="menu_wrap">
                <li><a href="#pop-1" class="ov"><span class="ico ico1"></span>민원<br>
                  도우미</a></li>
                <li><a href="#pop-2"><span class="ico ico2"></span>교육정보<br>
                  안내</a></li>
                <li><a href="#pop-3"><span class="ico ico3"></span>홈페이지<br>
                  바로가기</a></li>
              </ul>
              <div class="con_wrap">
                <div class="con con1" id="pop-1">
                  <p class="skip">민원도우미</p>
                  <strong><span>민원도우미</span><em>사용자에게 편리함을 주는 맞춤형 검색 서비스</em></strong>
                  <div id="search_tap">
                    <ul class="menu_wrap_s">
                      <li><a href="#search-1" class="ov"><span></span><em>카테고리</em><em>검색</em></a></li>
                      <li><a href="#search-2"><span></span><em>검색</em><em>키워드</em></a></li>
                    </ul>
                    <div class="con_wrap_s">
                      <div class="con_s con_s1" id="search-1">
                        <p class="skip">카테고리검색</p>
                        <ul>
                          <!-- <li><a href="#"><span class="ico ico1"></span>전체</a></li> -->
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%ED%9A%8C%EA%B3%84%2F%EC%84%B8%EB%AC%B4"  class="_search_keyword" onclick="getSearchKeyword( '회계/세무'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico2"></span>회계/세무</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EA%B1%B4%EC%B6%95%2F%EA%B1%B4%EC%84%A4"  class="_search_keyword" onclick="getSearchKeyword( '건축/건설'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico3"></span>건축/건설</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EA%B2%BD%EC%A0%9C%2F%EA%B8%B0%EC%97%85"  class="_search_keyword" onclick="getSearchKeyword( '경제/기업'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico4"></span>경제/기업</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EC%82%AC%ED%9A%8C%2F%EB%B3%B5%EC%A7%80"  class="_search_keyword" onclick="getSearchKeyword( '사회/복지'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico5"></span>사회/복지</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%ED%99%98%EA%B2%BD%2F%EC%9C%84%EC%83%9D"  class="_search_keyword" onclick="getSearchKeyword( '환경/위생'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico6"></span>환경/위생</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EB%AC%B8%ED%99%94%2F%EA%B4%80%EA%B4%91"  class="_search_keyword" onclick="getSearchKeyword( '문화/관광'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico7"></span>문화/관광</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EA%B5%90%ED%86%B5%2F%EB%8F%84%EB%A1%9C"  class="_search_keyword" onclick="getSearchKeyword( '교통/도로'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico8"></span>교통/도로</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EB%86%8D%EC%97%85%2F%EC%B6%95%EC%82%B0"  class="_search_keyword" onclick="getSearchKeyword( '농업/축산'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico9"></span>농업/축산</a></li>
                          <li><a href="http://yd21.go.kr/common/tmpl/common_pop_search.php?skey=%EA%B8%B0%ED%83%80"  class="_search_keyword" onclick="getSearchKeyword( '기타'); ajaxprototyOpen(this,'body'); return false;"><span class="ico ico10"></span>기타</a></li>
                        </ul>
                      </div>
                      <!-- //con_s -->
                      
                      <div class="con_s con_s2" id="search-2">
                        <p class="skip">검색키워드</p>
                        <strong><span>&nbsp;</span>검색 키워드</strong>
                        <div class="s_wrap"> 
                          <!--  <form name="searchKeywordFrm" action="#" method="post" target="_blank"> -->
                          <fieldset>
                            <legend>카테고리 검색</legend>
                            <label class="skip" for="_sval">검색어를 입력해주세요</label>
                            <input id="_sval" type="text" name="sval" placeholder="검색어를 입력해주세요.">
                            <div class="submit"> 
                              <!-- <input type="submit" value="검색" id="s2"><label for="s2" class="skip">검색</label> --> 
                              <a  href="http://yd21.go.kr/common/tmpl/common_pop_search.php" onclick="getSearchVal(); ajaxprototyOpen(this,'body'); return false;" class="search_btnpop">검색</a> </div>
                          </fieldset>
                          <!-- </form> --> 
                        </div>
                      </div>
                      <!-- //con_s --> 
                    </div>
                  </div>
                  <!-- //search_tap -->
                  
                  <div class="bot_menu">
                    <div class="bot_ico_l bot_ico">
                      <div class="tit"><em class="ico1"></em>종합민원안내 <span>내가 원하는 정보를 한눈에!종합민원안내</span></div>
                      <ul>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/01030101.html"><span class="ico ico1"></span>토지/지적민원</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/010302.html"><span class="ico ico2"></span>여권안내</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/01030301.html"><span class="ico ico3"></span>자동차민원</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/01030401.html"><span class="ico ico4"></span>가족민원</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/010305.html"><span class="ico ico5"></span>무인민원발급기</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/010306.html"><span class="ico ico6"></span>팩스민원안내</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/010309.html"><span class="ico ico7"></span>민원1회<br>
                          방문처리제</a></li>
                        <li><a href="http://yd21.go.kr/kr/html/sub01/010308.html"><span class="ico ico8"></span>기타민원</a></li>
                      </ul>
                    </div>
                    <!-- //bot_ico_l -->
                    
                    <div class="bot_ico_r bot_ico">
                      <div class="tit"><em class="ico2"></em>외부민원서비스 <span>외부 민원바로가기 서비스를 제공합니다!</span></div>
                      <ul>
                        <li><a href="http://www.minwon.go.kr/main?a=AA020InfoMainApp" target="_blank" rel="noopener noreferrer"><span class="ico ico1"></span>민원24(일반민원)</a></li>
                        <li><a href="http://efamily.scourt.go.kr/index.jsp" target="_blank" rel="noopener noreferrer"><span class="ico ico2"></span>전자가족관계등록시스템<br>
                          (가족관계증명서)</a></li>
                        <li><a href="https://www.car365.go.kr/" target="_blank" rel="noopener noreferrer"><span class="ico ico3"></span>자동차 민원</a></li>
                        <li><a href="https://www.wetax.go.kr/main/" target="_blank" rel="noopener noreferrer"><span class="ico ico4"></span>지방세(위텍스)</a></li>
                        <li><a href="https://www.hometax.go.kr/websquare/websquare.html?w2xPath=/ui/pp/index.xml" target="_blank" rel="noopener noreferrer"><span class="ico ico5"></span>국세(홈텍스)</a></li>
                        <li><a href="https://www.giro.or.kr/index.giro" target="_blank" rel="noopener noreferrer"><span class="ico ico6"></span>인터넷 지로납부</a></li>
                      </ul>
                    </div>
                    <!-- //bot_ico_r --> 
                  </div>
                  <!-- //bot_menu --> 
                  
                </div>
                <!-- //con1 -->
                
                <div class="con con2" id="pop-2">
                  <p class="skip">교육정보안내</p>
                  <strong><span>교육정보안내</span><em>다양한 교육정보를 한눈에! 영동 교육정보 안내입니다.</em></strong>
                  <div id="edu_pop">
                    <ul class="menu_wrap_e type_tab">
                      <li><a href="#educ-1" class="ov"><span>전체</span></a></li>
                      <li><a href="#educ-2"  ><span>정보화교육</span></a></li>
                      <li><a href="#educ-3"  ><span>평생교육</span></a></li>
                      <li><a href="#educ-4"  ><span>여성회관교육</span></a></li>
                      <li><a href="#educ-5"  ><span>주민자치교육</span></a></li>
                      <li><a href="#educ-6"  ><span>농업교육</span></a></li>
                      <li><a href="#educ-7"  ><span>교육청 교육</span></a></li>
                      <li><a href="#educ-8"  ><span>유관기관 교육</span></a></li>
                      <li><a href="#educ-9"  ><span>청소년교육</span></a></li>
                    </ul>
                    <div class="con_wrap_e">
                      <div class="con_e con_e1" id="educ-1">
                        <p class="skip">전체</p>
                        <ul>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate1"><span>접수중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>블로그 및 카페 만들기</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-02-01 00:00~2020-02-29 23:59</span></li>
                                <li><em>교육기간</em><span>2020-03-09~2020-03-27</span></li>
                                <li><em>교육시간</em><span> 10:00 ~ 12:00</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=45&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate1"><span>접수중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>엑셀 활용</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-02-01 00:00~2020-02-29 23:59</span></li>
                                <li><em>교육기간</em><span>2020-03-09~2020-03-27</span></li>
                                <li><em>교육시간</em><span> 19:00 ~ 21:00</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=42&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate1"><span>접수중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>카카오(카톡,스토리,맵) 완전 해부</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-02-01 00:00~2020-02-29 23:59</span></li>
                                <li><em>교육기간</em><span>2020-03-09~2020-03-27</span></li>
                                <li><em>교육시간</em><span> 16:00 ~ 18:00</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=43&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate1"><span>접수중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>파워포인트 기초 및 활용</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-02-01 00:00~2020-02-29 23:59</span></li>
                                <li><em>교육기간</em><span>2020-03-09~2020-03-27</span></li>
                                <li><em>교육시간</em><span> 13:30 ~ 15:30</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=44&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate4"><span>교육중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>인터넷 세상의 시작 & 활용</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-01-01 00:00~2020-01-31 23:59</span></li>
                                <li><em>교육기간</em><span>2020-02-03~2020-02-21</span></li>
                                <li><em>교육시간</em><span> 10:00 ~ 12:00</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=39&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate4"><span>교육중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>한글 문서 편집</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-01-01 00:00~2020-01-31 23:59</span></li>
                                <li><em>교육기간</em><span>2020-02-03~2020-02-21</span></li>
                                <li><em>교육시간</em><span> 13:30 ~ 15:30</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=38&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate4"><span>교육중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>스마트폰 사진 및 영상편집</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-01-01 00:00~2020-01-31 23:59</span></li>
                                <li><em>교육기간</em><span>2020-02-03~2020-02-21</span></li>
                                <li><em>교육시간</em><span> 16:00 ~ 18:00</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=37&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="list_inner">
                              <div class="cate cate4"><span>교육중</span></div>
                              <!-- // cate1접수중 , cate2 접수대기, caate3접수마감, cate4교육중 -->
                              <div class="tab_cate">정보화교육</div>
                              <!-- 교육구분 -->
                              <div class="tit"><span>온라인예약</span><span>유선예약</span></div>
                              <!-- 접수방법 --> 
                              
                              <strong>엑셀 첫걸음</strong>
                              <ul class="e_list">
                                <li><em>접수기간</em><span>2020-01-01 00:00~2020-01-31 23:59</span></li>
                                <li><em>교육기간</em><span>2020-02-03~2020-02-21</span></li>
                                <li><em>교육시간</em><span> 19:00 ~ 21:00</span></li>
                                <li><em>교육장소</em><span>영동읍 행정복지센터 3층 주민정보화교육장</span></li>
                              </ul>
                              <div class="e_btn"> <a href="http://yd21.go.kr/kr/html/sub05/05090101.html?mode=V&amp;mng_no=36&amp;cgubun=ECG01" class="ebtn ebtn1" target="_blank">상세보기</a> </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e1 -->
                      <div class="con_e con_e1" id="educ-2">
                        <p class="skip">정보화교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e2 -->
                      <div class="con_e con_e1" id="educ-3">
                        <p class="skip">평생교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e3 -->
                      <div class="con_e con_e1" id="educ-4">
                        <p class="skip">여성회관교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e4 -->
                      <div class="con_e con_e1" id="educ-5">
                        <p class="skip">주민자치교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e5 -->
                      <div class="con_e con_e1" id="educ-6">
                        <p class="skip">농업교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e6 -->
                      <div class="con_e con_e1" id="educ-7">
                        <p class="skip">교육청 교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e7 -->
                      <div class="con_e con_e1" id="educ-8">
                        <p class="skip">유관기관 교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e8 -->
                      <div class="con_e con_e1" id="educ-9">
                        <p class="skip">청소년교육</p>
                        <ul>
                          <li class="no-edu">
                            <div> <img src="/common/images/common_pop/no-edu.png" alt="등록된 교육정보가 없습니다.">
                              <p><span></span>등록된 교육정보가 없습니다.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- //con_e9 --> 
                      
                    </div>
                    <!-- //con_wrap_e --> 
                    
                  </div>
                  <!-- //edu_pop --> 
                  
                </div>
                <!-- //con2 -->
                
                <div class="con con3" id="pop-3">
                  <p class="skip">홈페이지바로가기</p>
                  <strong><span>홈페이지 바로가기</span><em>영동군 홈페이지를 한번에 바로갈수 있는 바로가기 정보 서비스</em></strong>
                  <div id="home_link">
                    <ul class="menu_wrap_h type_tab">
                      <li><a href='#home-1' class='ov'><span>영동군홈페이지</span></a></li>
                      <li><a href='#home-2' ><span>관과 및 사업소</span></a></li>
                      <li><a href='#home-3' ><span>충북시군</span></a></li>
                      <li><a href='#home-4' ><span>유관기관</span></a></li>
                      <li><a href='#home-5' ><span>외부 서비스</span></a></li>
                      <!--  <li><a href="#home-1" class="ov"><span>영동군홈페이지</span></a></li>
                                                                    <li><a href="#home-2"><span>실과 및 사업소</span></a></li>
                                                                    <li><a href="#home-3"><span>충북시군</span></a></li>
                                                                    <li><a href="#home-4"><span>유관기관</span></a></li>
                                                                    <li><a href="#home-5"><span>외부서비스</span></a></li> -->
                      
                    </ul>
                    <div class="con_wrap_h">
                      <div class="con_h con_h1" id="home-1">
                        <p class="skip">영동군홈페이지</p>
                        <ul>
                          <li> <a href="http://www.yd21.go.kr/tour/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=1&thm=Y" alt="문화관광 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>문화관광</strong>
                                  <p>문화관광 홈페이지</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/media/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=2&thm=Y" alt="미디어소통센터 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>미디어소통센터</strong>
                                  <p>미디어소통센터</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/mayor/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=4&thm=Y" alt="열린군수실 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>열린군수실</strong>
                                  <p>열린군수실</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/portal/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=5&thm=Y" alt="영동군통합예매시스템 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동군통합예매시스템</strong>
                                  <p>영동군통합예매시스템</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/rainbow/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=6&thm=Y" alt="레인보우힐링관광지 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>레인보우힐링관광지</strong>
                                  <p>레인보우힐링관광지</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/fruit/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=7&thm=Y" alt="과일나라테마공원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>과일나라테마공원</strong>
                                  <p>과일나라테마공원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/tunnel/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=8&thm=Y" alt="영동와인터널 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동와인터널</strong>
                                  <p>영동와인터널</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/artcenter/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=9&thm=Y" alt="영동복합문화예술회관 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동복합문화예술회관</strong>
                                  <p>영동복합문화예술회관</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/gugak/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=10&thm=Y" alt="영동국악체험촌 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동국악체험촌</strong>
                                  <p>영동국악체험촌</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/nogunri/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=11&thm=Y" alt="노근리평화공원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>노근리평화공원</strong>
                                  <p>노근리평화공원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.rainbowtraining.kr" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=42&thm=Y" alt="레인보우영동연수원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>레인보우영동연수원</strong>
                                  <p>레인보우영동연수원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.globalpeaceforum.kr" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=43&thm=Y" alt="노근리사건70주년 글로벌평화포럼 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>노근리사건70주년 글로벌평화포럼</strong>
                                  <p>노근리사건70주년 글로벌평화포럼</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                        </ul>
                      </div>
                      <!-- //con_h1 -->
                      
                      <div class="con_h con_h2" id="home-2">
                        <p class="skip">관과 및 사업소</p>
                        <ul>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030101.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=3&thm=Y" alt="기획감사관 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>기획감사관</strong>
                                  <p>기획감사관</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030201.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=12&thm=Y" alt="행정과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>행정과</strong>
                                  <p>행정과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030301.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=13&thm=Y" alt="국악문화체육과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>국악문화체육과</strong>
                                  <p>국악문화체육과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030401.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=14&thm=Y" alt="주민복지과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>주민복지과</strong>
                                  <p>주민복지과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030501.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=15&thm=Y" alt="가족행복과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>가족행복과</strong>
                                  <p>가족행복과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030601.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=16&thm=Y" alt="민원과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>민원과</strong>
                                  <p>민원과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030701.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=17&thm=Y" alt="재무과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>재무과</strong>
                                  <p>재무과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030801.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=18&thm=Y" alt="경제과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>경제과</strong>
                                  <p>경제과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404030901.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=19&thm=Y" alt="농정과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>농정과</strong>
                                  <p>농정과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031001.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=20&thm=Y" alt="환경과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>환경과</strong>
                                  <p>환경과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031101.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=21&thm=Y" alt="산림과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>산림과</strong>
                                  <p>산림과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031201.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=22&thm=Y" alt="건설교통과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>건설교통과</strong>
                                  <p>건설교통과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031301.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=23&thm=Y" alt="안전관리과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>안전관리과</strong>
                                  <p>안전관리과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031401.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=24&thm=Y" alt="도시건축과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>도시건축과</strong>
                                  <p>도시건축과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/04040315.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=25&thm=Y" alt="의회사무과 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>의회사무과</strong>
                                  <p>의회사무과</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031601.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=26&thm=Y" alt="보건소 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>보건소</strong>
                                  <p>보건소</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031701.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=27&thm=Y" alt="농업기술센터 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>농업기술센터</strong>
                                  <p>농업기술센터</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031801.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=28&thm=Y" alt="상수도사업소 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>상수도사업소</strong>
                                  <p>상수도사업소</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404031901.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=29&thm=Y" alt="시설사업소 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>시설사업소</strong>
                                  <p>시설사업소</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.yd21.go.kr/kr/html/sub04/0404032001.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=30&thm=Y" alt="힐링사업소 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>힐링사업소</strong>
                                  <p>힐링사업소</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                        </ul>
                      </div>
                      <!-- //con_h2 -->
                      
                      <div class="con_h con_h3" id="home-3">
                        <p class="skip">충북시군</p>
                        <ul>
                          <li> <a href="http://www.chungbuk.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=31&thm=Y" alt="충청북도 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>충청북도</strong>
                                  <p>충청북도</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.cheongju.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=32&thm=Y" alt="청주시 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>청주시</strong>
                                  <p>청주시</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.chungju.go.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=33&thm=Y" alt="충주시 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>충주시</strong>
                                  <p>충주시</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.jecheon.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=34&thm=Y" alt="제천시 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>제천시</strong>
                                  <p>제천시</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.boeun.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=35&thm=Y" alt="보은군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>보은군</strong>
                                  <p>보은군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.oc.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=36&thm=Y" alt="옥천군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>옥천군</strong>
                                  <p>옥천군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.jp.go.kr/kor.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=37&thm=Y" alt="증평군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>증평군</strong>
                                  <p>증평군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.jincheon.go.kr/home/main.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=38&thm=Y" alt="진천군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>진천군</strong>
                                  <p>진천군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.goesan.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=39&thm=Y" alt="괴산군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>괴산군</strong>
                                  <p>괴산군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.eumseong.go.kr/www/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=40&thm=Y" alt="음성군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>음성군</strong>
                                  <p>음성군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.danyang.go.kr/dy21/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=41&thm=Y" alt="단양군 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>단양군</strong>
                                  <p>단양군</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                        </ul>
                      </div>
                      <!-- //con_h3 -->
                      
                      <div class="con_h con_h4" id="home-4">
                        <p class="skip">유관기관</p>
                        <ul>
                          <li> <a href="http://council.yd21.go.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=44&thm=Y" alt="영동군의회 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동군의회</strong>
                                  <p>영동군의회</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.cbyde.go.kr/cbyde/main.php" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=45&thm=Y" alt="영동교육지원청 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동교육지원청</strong>
                                  <p>영동교육지원청</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.cbpolice.go.kr/yd/index.php" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=46&thm=Y" alt="영동경찰서 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동경찰서</strong>
                                  <p>영동경찰서</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://yd119.chungbuk.go.kr/index.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=47&thm=Y" alt="영동소방서 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동소방서</strong>
                                  <p>영동소방서</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://d.nts.go.kr/yd/Default.asp" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=48&thm=Y" alt="영동세무서 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동세무서</strong>
                                  <p>영동세무서</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.koreapost.go.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=49&thm=Y" alt="영동우체국 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동우체국</strong>
                                  <p>영동우체국</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.naqs.go.kr/main/main.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=50&thm=Y" alt="국립농산물품질관리원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>국립농산물품질관리원</strong>
                                  <p>국립농산물품질관리원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://cheongju.scourt.go.kr/main/new/Main.work" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=51&thm=Y" alt="청주지방법원 영동지원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>청주지방법원 영동지원</strong>
                                  <p>청주지방법원 영동지원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.spo.go.kr/site/yeongdong/main.do" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=52&thm=Y" alt="청주지방검찰청 영동지청 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>청주지방검찰청 영동지청</strong>
                                  <p>청주지방검찰청 영동지청</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://nanum.yd21.net/vol/gov/mogaha/ntis/web/vol/portal/action/VolHomeAction.do?method=executes" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=53&thm=Y" alt="영동군 자원봉사센터 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동군 자원봉사센터</strong>
                                  <p>영동군 자원봉사센터</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.ydsilver.co.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=54&thm=Y" alt="영동군 노인복지관 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동군 노인복지관</strong>
                                  <p>영동군 노인복지관</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.ywcc.or.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=55&thm=Y" alt="영동군장애인복지관 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>영동군장애인복지관</strong>
                                  <p>영동군장애인복지관</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.rainbowtraining.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=56&thm=Y" alt="레인보우영동연수원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>레인보우영동연수원</strong>
                                  <p>레인보우영동연수원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.rainbowlib.go.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=57&thm=Y" alt="레인보우영동도서관 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>레인보우영동도서관</strong>
                                  <p>레인보우영동도서관</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://bojo.yd21.go.kr/haris/main/index.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=58&thm=Y" alt="보조통합관리시스템 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>보조통합관리시스템</strong>
                                  <p>보조통합관리시스템</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                        </ul>
                      </div>
                      <!-- //con_h4 -->
                      
                      <div class="con_h con_h5" id="home-5">
                        <p class="skip">외부 서비스</p>
                        <ul>
                          <li> <a href="http://www.minwon.go.kr/main?a=AA020InfoMainApp" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=59&thm=Y" alt="민원24 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>민원24</strong>
                                  <p>민원24</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.hometax.go.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=60&thm=Y" alt="홈택스 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>홈택스</strong>
                                  <p>홈택스</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.eais.go.kr/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=61&thm=Y" alt="세움터 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>세움터</strong>
                                  <p>세움터</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.scourt.go.kr/scourt/index.html" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=62&thm=Y" alt="대한민국 법원 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>대한민국 법원</strong>
                                  <p>대한민국 법원</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.iros.go.kr/PMainJ.jsp" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=63&thm=Y" alt="인터넷 등기소 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>인터넷 등기소</strong>
                                  <p>인터넷 등기소</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                          <li> <a href="http://www.returnfarm.com/" target="_blank" title="새창으로 링크">
                            <div class="thumb"><img src="/_prog/download/?func_gbn_cd=shortcut&site_dvs_cd=kr&atch=atch_img&mng_no=64&thm=Y" alt="귀농귀촌종합센터 이미지"></div>
                            <div class="thumbtxt">
                              <div class="txt_inner">
                                <div> <strong>귀농귀촌종합센터</strong>
                                  <p>귀농귀촌종합센터</p>
                                </div>
                              </div>
                            </div>
                            </a> </li>
                        </ul>
                      </div>
                      <!-- //con_h5 --> 
                      
                    </div>
                    <!-- //con_wrap_h --> 
                  </div>
                  <!-- //home_link --> 
                  
                </div>
                <!-- //con3 --> 
                
              </div>
            </div>
            <!-- //pop_wrap --> 
            
            <script type="text/javascript">

												function getSearchVal()
												{
													var svalu = $("#_sval").val(); 
													//alert( svalu );
													$(".search_btnpop").attr("href", "http://yd21.go.kr/common/tmpl/common_pop_search.php?sval="+encodeURI(svalu) );
													//alert( $(".search_btnpop").attr('href') );

												}

												// 키워드 검색 
												function getSearchKeyword(keyword)
												{
													//alert( keyword );
													$("._search_keyword").attr("href", "http://yd21.go.kr/common/tmpl/common_pop_search.php?skey="+encodeURI(keyword) );
												}



                                                    $(document).ready(function(){
                                                    var btn = "#pop_wrap > .menu_wrap > li > a",
                                                    option = {lv:1,obj:"#pop_wrap > .con_wrap > .con"}

                                                    targetOpener(btn,option);
                                                    $("#pop_wrap > .con_wrap > .ov").click();

                                                    });

                                                    $(document).ready(function(){
                                                    var btn = "#search_tap > .menu_wrap_s > li > a",
                                                    option = {lv:1,obj:"#search_tap > .con_wrap_s > .con_s"}

                                                    targetOpener(btn,option);
                                                    $("#search_tap > .con_wrap_s > .ov").click();

                                                    });

                                                    $(document).ready(function(){
                                                    var btn = "#edu_pop > .menu_wrap_e > li > a",
                                                    option = {lv:1,obj:"#edu_pop > .con_wrap_e > .con_e"}

                                                    targetOpener(btn,option);
                                                    $("#edu_pop > .con_wrap_e > .ov").click();

                                                    });

                                                    $(document).ready(function(){
                                                    var btn = "#home_link > .menu_wrap_h > li > a",
                                                    option = {lv:1,obj:"#home_link > .con_wrap_h > .con_h"}

                                                    targetOpener(btn,option);
                                                    $("#home_link > .con_wrap_h > .ov").click();

                                                    });

                                            </script> 
          </div>
          <!-- //pop_right --> 
        </div>
        <!-- //pop_wrap --> 
        
      </div>
      <!-- //inner --> 
      
      <a href="#" class="lpClose">닫기</a> </div>
    <!-- //lp_wrap_inner --> 
    
  </div>
  <!-- //lp_pop01 --> 
  
</div>
<!-- 레이어팝업 끝 -->

<footer id="foot_layout"> 
  <!-- 푸터틀 시작 -->
  <div id="banner">
    <div class="layout">
      <div class="banner_box">
        <div id="slider_banner" class="banner_wrap"> <strong>배너</strong>
          <div class="control">
            <button type="button" data-control="prev" class="btn_prev"><span>배너모음 이전</span></button>
            <button type="button" data-control="play" class="btn_play"><span>배너모음 재생</span></button>
            <button type="button" data-control="stop" class="btn_stop"><span>배너모음 정지</span></button>
            <button type="button" data-control="next" class="btn_next"><span>배너모음 다음</span></button>
          </div>
          <div class="grap">
            <ul class="obj">
              <!-- <li class="item"><a href="#" target="_blank" title="새창열림">배너모음1</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음2</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음3</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음4</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음5</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음6</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음7</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음8</a></li>
                                                <li class="item"><a href="#" target="_blank" title="새창열림">배너모음9</a></li> -->
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
	(function(){
	var param = "#banner",
	obj = ".item",
	btn = "#banner .control",
	interval = 3000,
	speed = 300,
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
  <div class="layout">
    <div class="footer-info">
      <ul class="utile_wrap">
        <li class="mo mo1"><a href="http://yd21.go.kr/kr/html/guide/070301.html" target="_blank" rel="noopener noreferrer">개인정보처리방침</a></li>
        <li class="mo mo2"><a href="http://yd21.go.kr/kr/html/guide/0704.html" target="_blank" rel="noopener noreferrer">이메일집단수집거부</a></li>
        <li><a href="http://yd21.go.kr/kr/html/guide/0705.html" target="_blank" rel="noopener noreferrer">저작권정책</a></li>
        <!-- <li><a href="http://yd21.go.kr/nogunri/html/sub01/0103.html">전화번호안내</a></li> -->
        <li><a href="http://yd21.go.kr/nogunri/html/sub01/0104.html">오시는길</a></li>
      </ul>
      <address>
      (29113) 충청북도 영동군 황간면 목화실길 7 <span class="tel">전화 : (043)744-1941, 11943(학예팀)</span> <span class="tel">팩스 : (043)74201940 </span><br>
      대표자명 정구도 <span class="tel">사업자번호 302-82-06134</span> <span class="tel">E-mail : nogunri2018@naver.com</span>
      </address>
      <p class="copy">COPYRIGHT (C) 2019 BY YEONGDONG-GUN. ALL RIGHT RESERVED.</p>
    </div>
    <div class="footlogo">영동군</div>
  </div>
  
  <!-- 푸터틀 끝 --> 
  
</footer>
</body>
</html>










<?php
include_once(G5_THEME_PATH.'/tail.php');