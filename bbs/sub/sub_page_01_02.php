<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 연혁";
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
        <h2 class="page__title">연혁</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">연혁</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>


<style>.na{font-family: 'Malgun Gothic' !important;}</style>
<div class="yearbox">
            <div class="head"> <strong>전라남도자원봉사센터 연혁</strong>
              <p> <span>2004년부터 현재까지의<br>
                전라남도자원봉사센터</span> </p>
              <div class="boxs"> 
			  <img src="/bbs/sub/img/history_01.jpg" alt=""> 
			  <img src="/bbs/sub/img/history_02.jpg" alt=""> 
			  <img src="/bbs/sub/img/history_03.jpg" alt=""> 
			  <img src="/bbs/sub/img/history_04.jpg" alt=""> 
			  <img src="/bbs/sub/img/history_05.jpg" alt=""> 
			  <img src="/bbs/sub/img/history_06.jpg" alt=""> 
			 </div>
            </div>
 <div class="midd">
              <ol>

				<li> <strong>2025</strong>
                  <ol>
				  	
					 <li> <strong>02</strong>
                      <p>제2<span class="na">代</span> 센터장 김상길 취임</p>
                    </li>

						
                  </ol>
                </li>




				<li> <strong>2024</strong>
                  <ol>
				  	<li> <strong>12</strong>
                      <p>제주항공 여객기 사고 재난현장 통합자원봉사지원단 운영</p>
                    </li>
					
					<li> <strong>09</strong>
                      <p>사랑실은 가족봉사단 운영</p>
                    </li>

					<li> <strong>05</strong>
                      <p>제53회 전국소년(장애학생)체육대회 자원봉사 운영</p>
                    </li>

					 <li> <strong>02</strong>
                      <p>제6<span class="na">代</span> 이사장 김형석 취임</p>
                    </li>

						
                  </ol>
                </li>




				<li> <strong>2023</strong>
                  <ol>
					<li> <strong>11</strong>
                      <p>전남자원봉사 온마음나눔카드 지원사업 추진</p>
                    </li>

					 <li> <strong>10</strong>
                      <p>제104회 전국(장애인)체육대회 자원봉사 운영</p>
                    </li>

					
                  </ol>
                </li>

				 <li> <strong>2022</strong>
                  <ol>
					<li> <strong>12</strong>
                      <p>대한민국자원봉사대상 '대통령상' 수상</p>
                    </li>

					 <li> <strong>10</strong>
                      <p>경상북도, 동서화합 영호남 교류협력사업 추진</p>
                    </li>

					 <li> <strong>03</strong>
                      <p>대학생 연합봉사단 발대식 개최</p>
                    </li>
					
                  </ol>
                </li>


				<li> <strong>2021</strong>
                  <ol>
					
					<li> <strong>12</strong>
                      <p>전라남도블루이코노미 자원봉사박람회 개최</p>
                    </li>
					 <li> <strong>09</strong>
                      <p>나눔 이동세탁차량 2호차 인도 및 운용</p>
                    </li>
					 <li> <strong>09</strong>
                      <p>우수사례 공모 자원봉사 이그나이트 전남 대회 개최</p>
                    </li>

					 <li> <strong>07</strong>
                      <p>전라남도자원봉사센터 사무실 이전 (전남전문건설회관 6층)</p>
                    </li>
					
                  </ol>
                </li>



			<li> <strong>2020</strong>
                  <ol>  

					 <li> <strong>08</strong>
                      <p>폭우피해복구지원 (구례,곡성,담양,나주)</p>
                    </li>
					
                  </ol>
                </li>



                <li> <strong>2019</strong>
                  <ol>  
					 <li> <strong>11</strong>
                      <p>제1<span class="na">代</span> 센터장 허강숙 취임</p>
                    </li>
					 <li> <strong>08</strong>
                      <p>제5<span class="na">代</span> 이사장 김형석 취임</p>
                    </li>
					 <li> <strong>03</strong>
                      <p>제4<span class="na">代</span> 이사장 김호남 연임</p>
                    </li>
					
                  </ol>
                </li>
                <li> <strong>2018</strong>
                  <ol>
					<li> <strong>09</strong>
                      <p>2018 전남국제수묵비엔날레 지원</p>
                    </li>
					<li> <strong>02</strong>
                      <p>평창동계올림픽 자원봉사 지원</p>
                    </li>
				
                  </ol>
                </li>
                <li> <strong>2017</strong>
                  <ol>
					<li> <strong>06</strong>
                      <p>전국자원봉사센터 우수프로그램 공모 - 광역 최우수(행안부 장관상)</p>
                    </li>
					 <li> <strong>04</strong>
                      <p>목포신항 세월호 현장자원봉사센터 운영</p>
                    </li> 
					<li> <strong>01</strong>
                      <p>여수 수산시장 화재사고 현장자원봉사센터 운영</p>
                    </li>
                   
                  </ol>
                </li>
                <li> <strong>2016</strong>
                  <ol>
                    <li> <strong>06</strong>
                      <p>2018 평창 동계올림픽대회 및 패럴림픽대회 자원봉사 지원업무</p>
                    </li>
                    <li> <strong>03</strong>
                      <p>제3<span class="na">代</span> 이사장 김호남 취임</p>
                    </li>
                   
                  </ol>
                </li>
                <li> <strong>2015</strong>
                  <ol>
                    <li> <strong>09</strong>
                      <p>나눔 실은 이동세탁차량 인도 및 운용</p>
                    </li>
                    <li> <strong>07</strong>
                      <p>2015 광주하계유니버시아드 자원봉사참여</p>
                    </li>
                    
                  </ol>
                </li>
                <li> <strong>2014</strong>
                  <ol>
                    <li> <strong>12</strong>
                      <p>‘팽목항 자원봉사 리포트’ 발간</p>
                    </li>
					<li> <strong>07</strong>
                      <p>제21회 전국자원봉사대축제 특별상</p>
                    </li>
					<li> <strong>04</strong>
                      <p>세월호 진도 현장자원봉사센터 운영</p>
                    </li>
					
			               
                  </ol>
                </li>
                <li> <strong>2013</strong>
                  <ol>
				  <li> <strong>03</strong>
                      <p>제2<span class="na">代</span> 이사장 최상준 취임</p>
                    </li>
                    
                  </ol>
                </li>
                <li> <strong>2012</strong>
                  <ol>
                    <li> <strong>10</strong>
                      <p>2012 영암F1대회 자원봉사운영(모집 및 배치)</p>
                    </li>
					 <li> <strong>05</strong>
                      <p>2012 여수세계박람회 자원봉사운영(모집 및 심사)</p>
                    </li>

                  </ol>
                </li>
                <li> <strong>2011</strong>
                  <ol>
					<li> <strong>09</strong>
                      <p>전라남도 자원봉사실태조사 보고서 발간</p>
                    </li>
                    
                  </ol>
                </li>
                <li> <strong>2010</strong>
                  <ol>
                    <li> <strong>01</strong>
                      <p>(사)전라남도자원봉사센터 법인설립</p>
                    </li>
                   
                  </ol>
                </li>
                <li> <strong>2006</strong>
                  <ol>
                    <li> <strong>12</strong>
                      <p> (사)전라남도자원봉사센터 창립총회<br/>
                        <span class="na">初代</span> 이사장 노성만 취임</p>
                    </li>
                   
                  </ol>
                </li>
				 <li> <strong>2005</strong>
                  <ol>
					<li> <strong>10</strong>
                      <p>전라남도자원봉사센터 이전 (청사 : 무안)</p>
                    </li>
					
                  </ol>
                </li>
				 <li> <strong>2004</strong>
                  <ol>
					<li> <strong>10</strong>
                      <p>전라남도자원봉사센터 개소 (청사 : 광주)</p>
                    </li>
					
                  </ol>
                </li>
              </ol>
            </div>
          </div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
