<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="인정보상"  ;
$g5['title'] = "인정보상 | 할인가맹점";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 


   <?include G5_THEME_PATH."/sub_left_08.php"?>





    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">할인가맹점</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">인정보상</a></li>
            <li class="n3"><a href="" class="navi_ov">할인가맹점</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		
 <?include G5_THEME_PATH."/subpage_08_tab.php"?>
<div class="discount_text">※할인가맹점 방문 전 전화상으로 휴무 여부와 할인조건 등을 다시 확인하여 주시기 바랍니다.</div>
<div class="sub_table_wrap">
<table class="table_t02">
  <caption>
  할인가맹점 목록
  </caption>
  <thead>
   <tr>
      <th scope="col" style="width:7%;">번호</th>
      <th scope="col" style="width:18%;">업체명</th>
      <th scope="col" style="">주소</th>
      <th scope="col" style="width:18%;">전화번호</th>
      <th scope="col" style="width:20%;">할인률</th>
    </tr>
  </thead>
  <tbody>
		<tr>
    <td>1</td>
    <td>아르페지오</td>
    <td>무안군  삼향읍 남악4로34번길 6</td>
    <td>061-287-3008</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>새무안에너지</td>
    <td>무안군  현경면 현해로 283</td>
    <td>061-452-8785</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>유한회사진주</td>
    <td>무안군  현경면 현해로 109</td>
    <td>061-452-1193</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>(유)해달</td>
    <td>무안군  청계면 청계공단길 69</td>
    <td>061-453-0015</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>백련스파</td>
    <td>무안군  무안읍 창포로 44-7</td>
    <td>061-454-7877</td>
    <td>18%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>코코네일</td>
    <td>무안군  무안읍 동문안길 52</td>
    <td>070-8811-2633</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>임태숙헤어</td>
    <td>무안군  무안읍 무안중앙로 24</td>
    <td>061-452-8562</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>케네스레이디(롯데아울렛)</td>
    <td>무안군  삼향읍 남악로162번길 80 1층</td>
    <td>061-801-2131</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>듀엘(롯데아울렛)</td>
    <td>무안군  삼향읍 남악로162번길 80 1층</td>
    <td>061-801-2120</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>뉴발란스(롯데아울렛)</td>
    <td>무안군  삼향읍 남악로162번길 80 2층</td>
    <td>061-801-2219</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>무안화원</td>
    <td>무안군  무안읍 면성2길 45</td>
    <td>061-454-8888</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>12</td>
    <td>베이플라워</td>
    <td>무안군  무안읍 면성1길 109</td>
    <td>061-452-9305</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>13</td>
    <td>뉴빅마트</td>
    <td>무안군  무안읍 무안로 511</td>
    <td>061-453-4636</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>14</td>
    <td>용산상회</td>
    <td>무안군  무안읍 무안중앙로 35</td>
    <td>061-453-0084</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>자뎅플레리</td>
    <td>무안군  삼향읍 남악4로34번길 6</td>
    <td>061-284-2356</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>먹거리장터</td>
    <td>무안군  무안읍 승달로 11 404호</td>
    <td>010-2202-0022</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>무안식당</td>
    <td>무안군  무안읍 면성2길 36</td>
    <td>061-453-1919</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>승달가든</td>
    <td>무안군  무안읍 면성2길 27</td>
    <td>061-454-3400</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>정다운식당</td>
    <td>무안군  무안읍 승달로 11 407호</td>
    <td>010-3035-1268</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>젤라리소</td>
    <td>무안군  무안읍 불무로 43</td>
    <td>061-454-8007</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>21</td>
    <td>천년식당</td>
    <td>무안군  무안읍 불무로 38-6</td>
    <td>061-454-0263</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>22</td>
    <td>충만치킨</td>
    <td>무안군  무안읍 불무로 43</td>
    <td>061-453-7676</td>
    <td>마리당 2000원</td>
  </tr>
  <tr>
    <td>23</td>
    <td>커피에빠진붕어</td>
    <td>무안군  무안읍 승달로 11 206호</td>
    <td>061-941-9983</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>24</td>
    <td>그집</td>
    <td>무안군  현경면 현해로 85</td>
    <td>061-452-2025</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>25</td>
    <td>맛나곰탕</td>
    <td>무안군  현경면 현해로 87</td>
    <td>061-452-9345</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>26</td>
    <td>멕시칸치킨호프</td>
    <td>무안군  현경면 현중길 4</td>
    <td>061-453-5683</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>27</td>
    <td>승달먹거리</td>
    <td>무안군  무안읍 성남1길 146</td>
    <td>061-454-2666</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>28</td>
    <td>은하수식당</td>
    <td>무안군  삼향읍 남악3로82번길 37 107호</td>
    <td>061-282-9173</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>29</td>
    <td>송원바베큐치킨 (도청오룡점)</td>
    <td>무안군  삼향읍 남악5로22번길 9-1</td>
    <td>061-287-9282</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>30</td>
    <td>벤허</td>
    <td>무안군  무안읍 무안중앙로 27 2층</td>
    <td>061-452-5419</td>
    <td>10%</td>
  </tr>
  
  <tr>
    <td>31</td>
    <td>카페프론</td>
    <td>무안군  현경면 현해로 92</td>
    <td>061-454-2049</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>32</td>
    <td>유성식육점</td>
    <td>무안군 무안읍 무안중앙로 29</td>
    <td>061-452-1147</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>33</td>
    <td>중앙모터사</td>
    <td>무안군  현경면 현해로 93</td>
    <td>061-452-1773</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>34</td>
    <td>아우라</td>
    <td>무안군  무안읍 성남1길 123</td>
    <td>010-6419-7459</td>
    <td>20%</td>
  </tr>
  </tbody>
</table>
</div>





	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
