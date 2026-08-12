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
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">실인원</p></div><!----////타이틀---->
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
    <td>21,805</td> 
    <td>237</td> 
    <td>1,512</td> 
    <td>3,119</td> 
    <td>1,626</td> 
    <td>2,838</td> 
    <td>5,353</td> 
    <td>5,313</td> 
    <td>1,807</td> 
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
    <td>1,295</td> 
    <td>7</td> 
    <td>170</td> 
    <td>344</td> 
    <td>77</td> 
    <td>118</td> 
    <td>258</td> 
    <td>245</td> 
    <td>76</td> 
  </tr>
  <tr>
    <td>여수시</td> 
    <td>3,024</td> 
    <td>45</td> 
    <td>298</td> 
    <td>595</td> 
    <td>146</td> 
    <td>321</td> 
    <td>669</td> 
    <td>700</td> 
    <td>250</td> 
  </tr>
  <tr>
    <td>순천시</td>
    <td>4,040</td> 
    <td>38</td> 
    <td>310</td> 
    <td>800</td> 
    <td>275</td> 
    <td>466</td> 
    <td>954</td> 
    <td>906</td> 
    <td>291</td> 
  </tr>
  <tr>
    <td>나주시</td> 
    <td>984</td> 
    <td>7</td> 
    <td>56</td> 
    <td>182</td> 
    <td>92</td> 
    <td>134</td> 
    <td>195</td> 
    <td>184</td> 
    <td>134</td> 
  </tr>
  <tr>
    <td>광양시</td>
    <td>4,351</td> 
    <td>95</td> 
    <td>284</td> 
    <td>444</td> 
    <td>438</td> 
    <td>750</td> 
    <td>1,395</td> 
    <td>819</td> 
    <td>126</td> 
  </tr>
  <tr>
    <td>담양군 
    <td>355</td> 
    <td>0</td> 
    <td>8</td> 
    <td>43</td> 
    <td>5</td> 
    <td>20</td> 
    <td>71</td> 
    <td>118</td> 
    <td>70</td> 
  </tr>
  <tr>
    <td>곡성군</td>
    <td>263</td> 
    <td>1</td> 
    <td>33</td> 
    <td>20</td> 
    <td>3</td> 
    <td>19</td> 
    <td>63</td> 
    <td>75</td> 
    <td>49</td> 
  </tr>
  <tr>
    <td>구례군</td>
    <td>150</td> 
    <td>0</td> 
    <td>2</td> 
    <td>19</td> 
    <td>3</td> 
    <td>14</td> 
    <td>37</td> 
    <td>55</td> 
    <td>20</td> 
  </tr>
  <tr>
    <td>고흥군</td> 
    <td>784</td> 
    <td>1</td> 
    <td>16</td> 
    <td>32</td> 
    <td>25</td> 
    <td>92</td> 
    <td>177</td> 
    <td>278</td> 
    <td>163</td> 
  </tr>
  <tr>
    <td>보성군</td> 
    <td>516</td> 
    <td>0</td> 
    <td>12</td> 
    <td>24</td> 
    <td>13</td> 
    <td>45</td> 
    <td>89</td> 
    <td>233</td> 
    <td>100</td> 
  </tr>
  <tr>
    <td>화순군</td> 
    <td>484</td> 
    <td>11</td> 
    <td>39</td> 
    <td>76</td> 
    <td>12</td> 
    <td>48</td> 
    <td>83</td> 
    <td>161</td> 
    <td>54</td> 
  </tr>
  <tr>
    <td>장흥군</td>
    <td>202</td> 
    <td>2</td> 
    <td>11</td> 
    <td>28</td> 
    <td>3</td> 
    <td>15</td> 
    <td>39</td> 
    <td>88</td> 
    <td>16</td> 
  </tr>
  <tr>
    <td>강진군</td> 
    <td>196</td> 
    <td>0</td> 
    <td>0</td> 
    <td>18</td> 
    <td>22</td> 
    <td>26</td> 
    <td>52</td> 
    <td>65</td> 
    <td>13</td> 
  </tr>
  <tr>
    <td>해남군</td> 
    <td>719</td> 
    <td>6</td> 
    <td>14</td> 
    <td>57</td> 
    <td>23</td> 
    <td>66</td> 
    <td>173</td> 
    <td>293</td> 
    <td>87</td> 
  </tr>
  <tr>
    <td>영암군</td>
    <td>333</td> 
    <td>11</td> 
    <td>27</td> 
    <td>46</td> 
    <td>21</td> 
    <td>44</td> 
    <td>58</td> 
    <td>81</td> 
    <td>45</td> 
  </tr>
  <tr>
    <td>무안군</td> 
    <td>1,720</td> 
    <td>11</td> 
    <td>29</td> 
    <td>204</td> 
    <td>392</td> 
    <td>415</td> 
    <td>408</td> 
    <td>191</td> 
    <td>70</td> 
  </tr>
  <tr>
    <td>함평군</td> 
    <td>283</td> 
    <td>0</td> 
    <td>81</td> 
    <td>24</td> 
    <td>5</td> 
    <td>7</td> 
    <td>36</td> 
    <td>90</td> 
    <td>40</td> 
  </tr>
  <tr>
    <td>영광군</td> 
    <td>225</td> 
    <td>0</td> 
    <td>6</td> 
    <td>36</td> 
    <td>6</td> 
    <td>21</td> 
    <td>52</td> 
    <td>79</td> 
    <td>25</td> 
  </tr>
  <tr>
    <td>장성군</td>
    <td>432
    <td>2</td> 
    <td>41</td> 
    <td>41</td> 
    <td>18</td> 
    <td>45</td> 
    <td>154</td> 
    <td>100</td> 
    <td>31</td> 
  </tr>
  <tr>
    <td>완도군</td> 
    <td>433</td> 
    <td>0</td> 
    <td>9</td> 
    <td>37</td> 
    <td>25</td> 
    <td>68</td> 
    <td>124</td> 
    <td>138</td> 
    <td>32</td> 
  </tr>
  <tr>
    <td>진도군</td> 
    <td>570</td> 
    <td>0</td> 
    <td>43</td> 
    <td>37</td> 
    <td>15</td> 
    <td>75</td> 
    <td>179</td> 
    <td>188</td> 
    <td>33</td> 
  </tr>
  <tr>
    <td>신안군</td> 
    <td>466</td> 
    <td>0</td> 
    <td>23</td> 
    <td>12</td> 
    <td>7</td> 
    <td>29</td> 
    <td>87</td> 
    <td>226</td> 
    <td>82</td> 
  </tr>

  </tbody>
</table>
<p>- 실인원 : 조회년도까지 1회 이상 자원봉사에 참여한 인원수(연단위)</p>
</div>
</div>
</div>



	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
