<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사"  ;
$g5['title'] = "자원봉사 | 자원봉사 수요처";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

$pageIndex = ($pageIndex) ? $pageIndex : 1;
$searchHopeArea1 = ($searchHopeArea1) ? $searchHopeArea1 : "6460000";
$searchHopeArea2 = ($searchHopeArea2) ? $searchHopeArea2 : "4840000";
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    
   <?include G5_THEME_PATH."/sub_left_02.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">자원봉사 조회</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사 조회</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

		

		<!-- http://ssv1365.or.kr/index.php?MenuID=21       >  서산 시 내용 참고 -->

		<div class="sub_wrap_page">
		<div id="html_content" style="width:100%; height:100%; overflow:hidden; padding-top:20px"><div class="service_overflow2">
			 <!-- <iframe frameborder="0" scrolling="no" class="service_ifr-m" id="service_ifr" name="service_ifr" style="overflow-y: hidden; overflow-x: scroll;" src="https://www.1365.go.kr/vols/P9140/srvcinfo/volsDnttInfo.do;jsessionid=GI4zsWdr5RMcYu-lT1Ry0WY9.node20"></iframe> -->
<!-- 			  <iframe frameborder="0" scrolling="no" class="service_ifr-m" id="service_ifr" name="service_ifr" style="overflow-y: hidden; overflow-x: scroll;" src="/sample.php?pageIndex=1&srchSido=6460000&srchSigu=4840000"></iframe> -->
			  			  <iframe frameborder="0" class="service_ifr-m" id="service_ifr" name="service_ifr" style="overflow-y: scroll; overflow-x: scroll;" src="/sample.php?searchHopeArea1=6460000"></iframe>
		   </div>
		  </div>

		</div>

	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
