<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="자원봉사"  ;
$g5['title'] = "자원봉사 | 자원봉사활동현황?";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    


   <?include G5_THEME_PATH."/sub_left_02.php"?>



    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">자원봉사 활동현황</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">자원봉사</a></li>
            <li class="n3"><a href="" class="navi_ov">자원봉사 활동현황</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
	<div class="sub_wrap_page"> 
		<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">연인원</p></div><!----////타이틀---->
<div class="sub_table_wrap">

    <div class=""><span>*연인원 (2026년 2월말 기준) </span> <span>(단위 : 명)</span></div>
  
<table class="table_t02">
<thead>
	
  <tr>
    <th rowspan="2">시군</th>
    <th colspan="9">연 령 별</th>
  </tr>
  <tr>
    <th class="leftline">계</th>
    <th>14세미만</th>
    <th>14세이상</th>
    <th>20대</th>
    <th>30대</th>
    <th>40대</th>
    <th>50대</th>
    <th>60대</th>
    <th>70대이상</th>
  </tr>




  <tr>
    <td>총계</td> 
    <td>81,709</td>
    <td>466</td>
    <td>4,376</td>
    <td>10,861</td>
    <td>3,792</td>
    <td>8,294</td>
    <td>20,639</td>
    <td>24,475</td>
    <td>8,806</td>
  </tr>




  
 <tr>
    <td>전라남도</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
  </tr>
  <tr>
    <td>목포시</td>
    <td>5,927</td>
    <td>24</td>
    <td>459</td>
    <td>1,426</td>
    <td>236</td>
    <td>395</td>
    <td>1,054</td>
    <td>1,733</td>
    <td>600</td>
  </tr>
  <tr>
    <td>여수시</td> 
    <td>11,626</td>
    <td>79</td>
    <td>795</td>
    <td>2,128</td>
    <td>504</td>
    <td>991</td>
    <td>2,663</td>
    <td>3,295</td>
    <td>1,171</td>
  </tr>
  <tr>
    <td>순천시</td>
    <td>18,636</td>
    <td>63</td>
    <td>779</td>
    <td>2,823</td>
    <td>851</td>
    <td>1,766</td>
    <td>4,324</td>
    <td>5,810</td>
   <td>2,220</td>
  </tr>
  <tr>
    <td>나주시</td> 
    <td>2,478</td>
    <td>7</td>
    <td>144</td>
    <td>634</td>
    <td>160</td>
    <td>287</td>
    <td>455</td>
    <td>400</td>
    <td>391</td>
  </tr>
  <tr>
    <td>광양시</td>
    <td>15,933</td>
    <td>225</td>
    <td>1,181</td>
    <td>1,445</td>
    <td>1,088</td>
    <td>2,417</td>
    <td>5,707</td>
    <td>3,295</td>
    <td>575</td>
  </tr>
  <tr>
    <td>담양군 
    <td>852</td>
    <td>0</td>
    <td>28</td>
    <td>142</td>
    <td>6</td>
    <td>71</td>
    <td>167</td>
    <td>252</td>
    <td>186</td> 
  </tr>
  <tr>
    <td>곡성군</td>
    <td>1,527</td>
    <td>1</td>
    <td>57</td>
    <td>81</td>
    <td>13</td>
    <td>108</td>
    <td>385</td>
    <td>519</td>
    <td>363</td>
  </tr>
  <tr>
    <td>구례군</td>
    <td>325</td>
    <td>0</td>
    <td>2</td>
    <td>54</td>
    <td>3</td>
    <td>22</td>
    <td>83</td>
    <td>101</td>
    <td>60</td>
  </tr>
  <tr>
    <td>고흥군</td> 
    <td>2,765</td>
    <td>4</td>
    <td>39</td>
    <td>101</td>
    <td>58</td>
    <td>232</td>
    <td>694</td>
    <td>1,019</td>
    <td>618</td>
  </tr>
  <tr>
    <td>보성군</td> 
    <td>1,385</td>
    <td>0</td>
    <td>26</td>
    <td>86</td>
    <td>19</td>
    <td>136</td>
    <td>264</td>
    <td>577</td>
    <td>250</td>
  </tr>
  <tr>
    <td>화순군</td> 
    <td>1,841</td>
    <td>11</td>
    <td>70</td>
    <td>358</td>
    <td>29</td>
    <td>158</td>
    <td>270</td>
    <td>742</td>
    <td>203</td>
  </tr>
  <tr>
    <td>장흥군</td>
    <td>1,662</td>
    <td>2</td>
    <td>13</td>
    <td>75</td>
    <td>3</td>
    <td>61</td>
    <td>323</td>
    <td>996</td>
    <td>183</td>
  </tr>
  <tr>
    <td>강진군</td> 
    <td>375</td>
    <td>0</td>
    <td>0</td>
    <td>55</td>
    <td>24</td>
    <td>37</td>
    <td>118</td>
    <td>128</td>
    <td>13</td>
  </tr>
  <tr>
    <td>해남군</td> 
    <td>3,732</td>
    <td>6</td>
    <td>36</td>
    <td>231</td>
    <td>95</td>
    <td>269</td>
    <td>825</td>
    <td>1,492</td>
    <td>778</td>
  </tr>
  <tr>
    <td>영암군</td>
    <td>661</td>
    <td>14</td>
    <td>73</td>
    <td>127</td>
    <td>35</td>
    <td>73</td>
    <td>173</td>
    <td>116</td>
    <td>50</td>
  </tr>
  <tr>
    <td>무안군</td> 
    <td>2,812</td>
    <td>17</td>
    <td>80</td>
    <td>448</td>
    <td>437</td>
    <td>501</td>
    <td>631</td>
    <td>531</td>
    <td>167</td>
  </tr>
  <tr>
    <td>함평군</td> 
    <td>966
    <td>0</td>
    <td>257</td>
    <td>87</td>
    <td>13</td>
    <td>18</td>
    <td>150</td>
    <td>340</td>
    <td>101</td>
  </tr>
  <tr>
    <td>영광군</td> 
    <td>684</td>
    <td>0</td>
    <td>14</td>
    <td>112</td>
    <td>18</td>
    <td>34</td>
    <td>133</td>
    <td>281</td>
    <td>92</td>
  </tr>
  <tr>
    <td>장성군</td>
    <td>1,216</td>
    <td>13</td>
    <td>136</td>
    <td>167</td>
    <td>48</td>
    <td>172</td>
    <td>406</td>
    <td>220</td>
    <td>54</td>
  </tr>
  <tr>
    <td>완도군</td> 
    <td>2,155</td>
    <td>0</td>
    <td>33</td>
    <td>131</td>
    <td>91</td>
    <td>283</td>
    <td>888</td>
    <td>611</td>
    <td>88</td>
  </tr>
  <tr>
    <td>진도군</td> 
    <td>1,778</td>
    <td>0</td>
    <td>128</td>
    <td>90</td>
    <td>37</td>
    <td>184</td>
    <td>564</td>
    <td>552</td>
    <td>223</td>
  </tr>
  <tr>
    <td>신안군</td> 
    <td>2,400</td>
    <td>0</td>
    <td>26</td>
    <td>30</td>
    <td>24</td>
    <td>79</td>
    <td>362</td>
    <td>1,465</td>
    <td>414</td>
  </tr>

  </tbody>
</table>
<p>- 연인원 : 조회년도까지 자원봉사에 참여한 인원수(연단위)</p>
</div>
</div>
</div>


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
