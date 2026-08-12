<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

 <div class="new_sns_quick_btn">
		<a class="snsbtn_01" href="https://www.instagram.com/jnvc1365/" target="_blank"><img src="/theme/J_basic/img/main_02/sns_btn_01.png" alt="인스타그램"></a>
		<a class="snsbtn_02" href="https://www.youtube.com/channel/UC9De5YgU_wCPzRQFv-8noGA" target="_blank"><img src="/theme/J_basic/img/main_02/sns_btn_02.png" alt="유튜브"></a>
		<a class="snsbtn_03" href="https://pf.kakao.com/_Uqrbxj?default_tab=hometab" target="_blank"><img src="/theme/J_basic/img/main_02/sns_btn_03.png" alt="카카오톡 채널"></a>
   </div>
   
 <footer id="foot_layout">
  <footer class="new_foot_layout_color">
  <!-- 푸터틀 시작 -->
       
	<div class="layout">
			<div class="footer-info">
					<ul class="utile_wrap">
						<li class="mo mo1"><a href="/bbs/sub/sub_page_06_02.php" target="_self">개인정보처리방침</a></li>
						<li class="mo mo2"><a href="/bbs/sub/sub_page_06_03.php" target="_self">이메일집단수집거부</a></li>
						<li><a href="/bbs/sub/sub_page_01_05.php" target="_self">찾아오시는길</a></li> 
					</ul>
					<div class="food_right">
								<div class="familysite">
									<a href="#" class="familysite_btn">
										<span class="">관련사이트 바로가기</span>
										<img src="/theme/J_basic/image/common/familysite_up.png" alt="">
									</a>
									<ul class="f_list" style="display: none;">
										<li><a href="https://www.1365.go.kr/vols/main.do" target="_blank">1365자원봉사포털</a></li>
										<li><a href="https://www.v1365.or.kr/new/main/main.php" target="_blank">한국중앙자원봉사센터</a></li>
										<li><a href="http://www.kfvc.or.kr/contents/main/" target="_blank">kv한국자원봉사센터협회</a></li>
										<li><a href="https://www.jeonnam-gwangju.go.kr/" target="_blank">전남광주통합특별시</a></li>
										<li><a href="https://archives.v1365.or.kr/" target="_blank">자원봉사아카이브</a></li>
									</ul>
								</div>
						
							</div>
					  </div>
					<address class="pc_footer_wp">58567 전남광주 무안군 삼향읍 후광대로 282 전문건설회관 6층 &nbsp;/&nbsp; 사업자등록번호 : 411-82-11678 &nbsp;/&nbsp; 대표전화  : 061-287-1365 &nbsp;/&nbsp; E-mail : jnvc1365@hanmail.net  <p><?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?></p></address>
					<!-- <address class="mobile_footer_wp">58567 전남광주 무안군 삼향읍 후광대로 282 <br/>   대표전화 : 061-287-1365 <br/>E-mail : jnvc1365@hanmail.net<br/><?php echo visit('theme/basic'); ?></address> -->
					<p class="copy">ⓒ 2025 jnvc1365 CENTER. ALL RIGHT RESERVED.</p>
			</div>
			<div class="footlogo">1366여성긴급전화 전남센터</div>
	</div>
 
        

  <!-- 푸터틀 끝 -->
  </div>
 </footer>

  
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });


		// Footer - familysite
    // ------------------------------------------
    $('.familysite_btn').click(function(e){ 
        e.preventDefault();
        $(this).toggleClass('active');
        $('.f_list').slideToggle();

        if($(this).hasClass('active')) {
            $('.familysite_btn img').attr('src', '/theme/J_basic/image/common/familysite_down.png');
        } else {
            $('.familysite_btn img').attr('src', '/theme/J_basic/image/common/familysite_up.png');
        }
    });
    // ------------------------------------------


    });
    </script>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->


<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>