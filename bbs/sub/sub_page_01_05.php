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

<style>
.kakao_map {
    position: relative;
}
.root_daum_roughmap {
    position: relative;
    width: 550px;
    margin: 0 auto;
    background-color: #efefef;
}
.root_daum_roughmap_landing {
    overflow: hidden;
    margin: 0;
    background: transparent;
}
.kakao_map .root_daum_roughmap {
    width: 100%;
}
.kakao_map .cont{display:none;}
</style>
<div id="body_layout">
  <div class="body_wrap layout"> 
    

   <?include G5_THEME_PATH."/sub_left_01.php"?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">찾아오시는길</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">찾아오시는길</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
<div class="sub_wrap_page">
	<div class="wrap_direction">
			<div class="kakao_map">
	<div id="daumRoughmapContainer1626926407015" class="root_daum_roughmap root_daum_roughmap_landing"></div>
	<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>	
	<script charset="UTF-8">new daum.roughmap.Lander({"timestamp" : "1626926407015","key" : "26pwo","mapHeight" : "422"}).render();</script>
</div>

<style>
.PT_ly_2{margin-top:2rem;}
.T_ds_table, .T_ds_Ctable > *, .T_ds_table_a, .T_ds_table_span span, .T_ds_table_div, .T_ds_table_strong table, .T_ds_table_em em, .T_ds_table_p p {
    display: table;
}
@media only screen and (min-width: 1023px){
.PC_ly_2 > *, .PT_ly_2 > * {
    float: left;
    width: calc( 100% / 2);
}
.PT_ds_block{
    display: block;
}
.PC_pd_lt30, .PT_pd_lt30 {
    padding-left: 30px;
}
}
.T_ds_cell, .T_ds_Ccell > *, .T_ds_cell_a a, .T_ds_cell_span span, .T_ds_cell_div, .T_ds_cell_strong table, .T_ds_cell_em em, .T_ds_cell_p p {
    display: table-cell;
}
@media only screen and (min-width: 1023px){
.PC_wd_sz125, .PC_wd_Csz125 > *, .PT_wd_sz125, .PT_wd_Csz125 > * {
    width: 80px;
}
}
@media only screen and (max-width: 640px){
.M_wd_p30 {
    width: 15%;
}
.M_wd_full, .TM_wd_full {
    width: 100%;
}
.M_pd_Plt5, .TM_pd_Plt5 {
    padding-left: 5%;
}
.M_mg_btm15, .TM_mg_btm15 {
    margin-bottom: 15px;
}
.M_mg_top30{margin-top:2.5rem;}

}
.sir_icon06 {
    position: relative;
}
.sir_icon06 span {
    position: relative;
	font-weight:700;
	color:#353535;
}
.sir_icon06 > span:before {
    content: "";
    display: block;
    position: absolute;
    width: 105%;
    left: -2.5%;
    height: 60%;
    bottom: -10%;
    background: #ffea00;
}
</style>


<div class="PT_ly_2 U_ft_c000">
	<div class="T_ds_table">
		<div class="T_ds_cell PC_wd_sz125 M_wd_p30"><img class=" M_wd_full TAB_fl_rt" src="/bbs/sub/img/map_new_01.png" alt=""></div>
		<div class="T_ds_cell T_vt_md PT_pd_lt30 M_pd_Plt5">
	<strong class="sir_icon06 U_ft_wh500 M_ft_rem16 PT_ft_sz25 PT_mg_btm20 T_ds_block M_mg_btm15"><span><span>주소</span></span></strong>
						<p><span class="PT_ds_block">[58567] 전남광주 무안군 삼향읍 후광대로 282,</span><span class="PT_ds_block">전남광주전문건설회관 6층</span></p>
		</div>
	</div>
	<div class="T_ds_table M_mg_top30">
		<div class="T_ds_cell PC_wd_sz125 M_wd_p30"><img src="/bbs/sub/img/map_new02.png" alt="" class=" M_wd_full TAB_fl_rt"></div>
		<div class="T_ds_cell T_vt_md PT_pd_lt30 M_pd_Plt5">
								<strong class="sir_icon06 U_ft_wh500  M_ft_rem16 PT_ft_sz25 PT_mg_btm20 T_ds_block M_mg_btm15"><span><span>전화번호</span></span></strong>
			<p><span class="PT_ds_block">전화 : 061-287-1365</span><span class="PT_ds_block">팩스 : 061-240-2399</span></p>
		</div>
	</div>
</div>
		
	




</div>




	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
