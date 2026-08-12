<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 전남 재능기부 자원봉사단체";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
  
   <?include G5_THEME_PATH."/sub_left_11.php"?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">전남 재능기부 자원봉사단체</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="navi_ov">전남 재능기부 자원봉사단체</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
		
     <?include G5_THEME_PATH."/subpage_08_text.php"?>
	 <?include G5_THEME_PATH."/subpage_08_tab.php"?>

<div class="sub_table_wrap">
<table class="table_t02">
  <caption>
  전남 재능기부 자원봉사단체 목록
  </caption>
  <thead>
    <tr>
      <th scope="col" style="width:7%;">번호</th>
      <th scope="col" style="width:10%;">지역</th>
      <th scope="col" style="width:25%;">단체명</th>
      <th scope="col" style="width:10%;">활동분야</th>
      <th scope="col" style="">활동내용</th>
	  <th scope="col" style="width:10%;">회원수</th>
    </tr>
  </thead>
  <tbody>
	 <tr>
    <td>1</td>
    <td>광양시</td>
    <td>(사)스마트소셜연구회</td>
    <td>기타</td>
    <td>스마트폰지도</td>
    <td> 11 </td>
  </tr>
  <tr>
    <td>2</td>
    <td>광양시</td>
    <td>레인보우 유튜브봉사단</td>
    <td>기타</td>
    <td>유튜브제작</td>
    <td> 24 </td>
  </tr>
  <tr>
    <td>3</td>
    <td>광양시</td>
    <td>광양시청마술동호회</td>
    <td>문화공연</td>
    <td>마술공연</td>
    <td> 8 </td>
  </tr>
  <tr>
    <td>4</td>
    <td>광양시</td>
    <td>대한가수협회 광양시지부</td>
    <td>문화공연</td>
    <td>노래공연</td>
    <td> 59 </td>
  </tr>
  <tr>
    <td>5</td>
    <td>광양시</td>
    <td>마로윈드 오케스트라</td>
    <td>문화공연</td>
    <td>오케스트라공연</td>
    <td> 10 </td>
  </tr>
  <tr>
    <td>6</td>
    <td>광양시</td>
    <td>뮤지션봉사단</td>
    <td>문화공연</td>
    <td>통기타공연</td>
    <td> 32 </td>
  </tr>
  <tr>
    <td>7</td>
    <td>광양시</td>
    <td>보금자리</td>
    <td>문화공연</td>
    <td>동극공연</td>
    <td> 62 </td>
  </tr>
  <tr>
    <td>8</td>
    <td>광양시</td>
    <td>청흥둥가야금</td>
    <td>문화공연</td>
    <td>가야금공연</td>
    <td> 15 </td>
  </tr>
  <tr>
    <td>9</td>
    <td>광양시</td>
    <td>후레쉬댄스동호회</td>
    <td>문화공연</td>
    <td>챈스공연</td>
    <td> 24 </td>
  </tr>
  <tr>
    <td>10</td>
    <td>광양시</td>
    <td>디딤새무용단</td>
    <td>문화공연</td>
    <td>전통무용</td>
    <td> 14 </td>
  </tr>
  <tr>
    <td>11</td>
    <td>광양시</td>
    <td>천사의소리음악봉사단</td>
    <td>문화공연</td>
    <td>노래공연</td>
    <td> 23 </td>
  </tr>
  <tr>
    <td>12</td>
    <td>광양시</td>
    <td>광양만패밀리웃음봉사단</td>
    <td>문화공연</td>
    <td>웃음치료</td>
    <td> 23 </td>
  </tr>
  <tr>
    <td>13</td>
    <td>광양시</td>
    <td>션샤인색소폰봉사단</td>
    <td>문화공연</td>
    <td>색소폰공연</td>
    <td> 10 </td>
  </tr>
  <tr>
    <td>14</td>
    <td>광양시</td>
    <td>통키타는내친구</td>
    <td>문화공연</td>
    <td>톨기타공연</td>
    <td> 39 </td>
  </tr>
  <tr>
    <td>15</td>
    <td>광양시</td>
    <td>광양포에버윈드오케스트라</td>
    <td>문화공연</td>
    <td>오케스트라공연</td>
    <td> 42 </td>
  </tr>
  <tr>
    <td>16</td>
    <td>광양시</td>
    <td>금빛소리그린봉사단</td>
    <td>문화공연</td>
    <td>노래공연</td>
    <td> 15 </td>
  </tr>
  <tr>
    <td>17</td>
    <td>광양시</td>
    <td>중마농악단</td>
    <td>문화공연</td>
    <td>농악공연</td>
    <td> 43 </td>
  </tr>
  <tr>
    <td>18</td>
    <td>광양시</td>
    <td>대한민국병채로통채로공연단</td>
    <td>문화공연</td>
    <td>웃음치료, 마술공연</td>
    <td> 11 </td>
  </tr>
  <tr>
    <td>19</td>
    <td>광양시</td>
    <td>락위더스(樂 with Us)</td>
    <td>문화공연</td>
    <td>공연활동</td>
    <td> 9 </td>
  </tr>
  <tr>
    <td>20</td>
    <td>광양시</td>
    <td>광양시아우름무대마술봉사단</td>
    <td>문화공연</td>
    <td>마술공연</td>
    <td> 10 </td>
  </tr>
  <tr>
    <td>21</td>
    <td>광양시</td>
    <td>대한민국백백치공연단</td>
    <td>문화공연</td>
    <td>웃음치료, 마술공연</td>
    <td> 11 </td>
  </tr>
  <tr>
    <td>22</td>
    <td>광양시</td>
    <td>마로풍물패 얼쑤</td>
    <td>문화공연</td>
    <td>풍물공연</td>
    <td> 19 </td>
  </tr>
  <tr>
    <td>23</td>
    <td>광양시</td>
    <td>광양시마술협회</td>
    <td>문화공연</td>
    <td>마술공연</td>
    <td> 13 </td>
  </tr>
  <tr>
    <td>24</td>
    <td>광양시</td>
    <td>광영 농악단</td>
    <td>문화공연</td>
    <td>풍물공연</td>
    <td> 36 </td>
  </tr>
  <tr>
    <td>25</td>
    <td>광양시</td>
    <td>어울림 장구 봉사단</td>
    <td>문화공연</td>
    <td>장구공연</td>
    <td> 9 </td>
  </tr>
  <tr>
    <td>26</td>
    <td>광양시</td>
    <td>우리는 여고 동창생 </td>
    <td>문화공연</td>
    <td>웃음치료</td>
    <td> 10 </td>
  </tr>
  <tr>
    <td>27</td>
    <td>광양시</td>
    <td>가야색소폰동호회</td>
    <td>문화공연</td>
    <td>색소폰공연</td>
    <td> 34 </td>
  </tr>
  <tr>
    <td>28</td>
    <td>광양시</td>
    <td>전래놀이문화봉사단</td>
    <td>문화공연</td>
    <td>전래놀이공연활동</td>
    <td> 17 </td>
  </tr>
  <tr>
    <td>29</td>
    <td>광양시</td>
    <td>색동나무</td>
    <td>문화공연</td>
    <td>공연활동(다문화)</td>
    <td> 12 </td>
  </tr>
  <tr>
    <td>30</td>
    <td>광양시</td>
    <td>동그라미봉사단</td>
    <td>기타</td>
    <td>공예활동</td>
    <td> 31 </td>
  </tr>
  <tr>
    <td>31</td>
    <td>광양시</td>
    <td>채움소통아카데미</td>
    <td>문화공연</td>
    <td>웃음치료공연</td>
    <td> 16 </td>
  </tr>
  <tr>
    <td>32</td>
    <td>광양시</td>
    <td>행복한 꿈나무 축구교실 </td>
    <td>문화공연</td>
    <td>어린이축구지도</td>
    <td> 42 </td>
  </tr>
  <tr>
    <td>33</td>
    <td>광양시</td>
    <td>광양평생교육개발원</td>
    <td>기타</td>
    <td>다양한 재능기부</td>
    <td> 18 </td>
  </tr>
  <tr>
    <td>34</td>
    <td>광양시</td>
    <td>광양만사람들</td>
    <td>기타</td>
    <td>장수사진 찍어주기</td>
    <td> 33 </td>
  </tr>
  <tr>
    <td>35</td>
    <td>광양시</td>
    <td>한땀봉사단</td>
    <td>기타</td>
    <td>수의만들기, 소품만들기</td>
    <td> 32 </td>
  </tr>
  <tr>
    <td>36</td>
    <td>광양시</td>
    <td>건모(건전한엄마들의모임)</td>
    <td>기타</td>
    <td>양말목,손뜨개,캘리</td>
    <td> 7 </td>
  </tr>
  <tr>
    <td>37</td>
    <td>광양시</td>
    <td>꽃뜨루</td>
    <td>기타</td>
    <td>화분가꾸기 및 소품만들기</td>
    <td> 15 </td>
  </tr>
  <tr>
    <td>38</td>
    <td>광양시</td>
    <td>광양시도배전문봉사단</td>
    <td>주거개선</td>
    <td>도배, 장판</td>
    <td> 21 </td>
  </tr>
  <tr>
    <td>39</td>
    <td>광양시</td>
    <td>둘로스</td>
    <td>주거개선</td>
    <td>도배,전기,발마사지</td>
    <td> 36 </td>
  </tr>
  <tr>
    <td>40</td>
    <td>광양시</td>
    <td>사)반달문화원광양지회</td>
    <td>주거개선</td>
    <td>벽화 및 소품만들기</td>
    <td> 65 </td>
  </tr>
  <tr>
    <td>41</td>
    <td>광양시</td>
    <td>붓의느낌</td>
    <td>주거개선</td>
    <td>소품만들기</td>
    <td> 8 </td>
  </tr>
  <tr>
    <td>42</td>
    <td>광양시</td>
    <td>또바기</td>
    <td>주거개선</td>
    <td>정리수납</td>
    <td> 18 </td>
  </tr>
  <tr>
    <td>43</td>
    <td>광양시</td>
    <td>종이무지개봉사단</td>
    <td>기타</td>
    <td>오카리나공연</td>
    <td> 16 </td>
  </tr>
  <tr>
    <td>44</td>
    <td>광양시</td>
    <td>Love Builder</td>
    <td>주거개선</td>
    <td>집수리</td>
    <td> 13 </td>
  </tr>
  <tr>
    <td>45</td>
    <td>광양시</td>
    <td>백운탁구동호회</td>
    <td>기타</td>
    <td>탁구지도</td>
    <td> 95 </td>
  </tr>
  <tr>
    <td>46</td>
    <td>광양시</td>
    <td>경락마사지동호회</td>
    <td>뷰티</td>
    <td>마사지</td>
    <td> 10 </td>
  </tr>
  <tr>
    <td>47</td>
    <td>광양시</td>
    <td>손마사지봉사단</td>
    <td>뷰티</td>
    <td>마사지</td>
    <td> 24 </td>
  </tr>
  <tr>
    <td>48</td>
    <td>광양시</td>
    <td>대광이미용봉사</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td> 178 </td>
  </tr>
  <tr>
    <td>49</td>
    <td>광양시</td>
    <td>사랑하이 이미용봉사단</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td> 151 </td>
  </tr>
  <tr>
    <td>50</td>
    <td>광양시</td>
    <td>대한미용사회광양시지부마중물봉사회</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td> 16 </td>
  </tr>
  <tr>
    <td>51</td>
    <td>광양시</td>
    <td>광양뷰티연구소</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td> 33 </td>
  </tr>
  <tr>
    <td>52</td>
    <td>광양시</td>
    <td>사랑굽는사람들</td>
    <td>음식나눔</td>
    <td>제빵</td>
    <td> 76 </td>
  </tr>
  <tr>
    <td>53</td>
    <td>광양시</td>
    <td>토방愛봉사대</td>
    <td>음식나눔</td>
    <td>한과</td>
    <td> 14 </td>
  </tr>
  <tr>
    <td>54</td>
    <td>광양시</td>
    <td>커피나무</td>
    <td>음식나눔</td>
    <td>커피</td>
    <td> 19 </td>
  </tr>
  <tr>
    <td>55</td>
    <td>광양시</td>
    <td>행복한 빵세상</td>
    <td>음식나눔</td>
    <td>빵</td>
    <td> 13 </td>
  </tr>
  <tr>
    <td>56</td>
    <td>광양시</td>
    <td>남정체험교육농장빵나눔연대</td>
    <td>음식나눔</td>
    <td>빵나눔</td>
    <td> 10 </td>
  </tr>
  <tr>
    <td>57</td>
    <td>광양시</td>
    <td>광양시일어통역봉사단</td>
    <td>기타</td>
    <td>일어통역</td>
    <td> 21 </td>
  </tr>
  <tr>
    <td>58</td>
    <td>광양시</td>
    <td>광양시통역봉사단</td>
    <td>기타</td>
    <td>통역봉사</td>
    <td> 79 </td>
  </tr>
  <tr>
    <td>59</td>
    <td>광양시</td>
    <td>광양한중친목회</td>
    <td>기타</td>
    <td>중국어통역</td>
    <td> 33 </td>
  </tr>
  <tr>
    <td>60</td>
    <td>광양시</td>
    <td>사랑실은교통봉사대</td>
    <td>음식나눔</td>
    <td>짜장면봉사</td>
    <td>86</td>
  </tr>
  <tr>
    <td>61</td>
    <td>광양시</td>
    <td>동광양중학교빵보드레</td>
    <td>음식나눔</td>
    <td>제빵봉사</td>
    <td>15</td>
  </tr>
  <tr>
    <td>62</td>
    <td>광양시</td>
    <td>옥곡면바르게살기협의회</td>
    <td>뷰티</td>
    <td>염색봉사</td>
    <td>22</td>
  </tr>
  <tr>
    <td>63</td>
    <td>광양시</td>
    <td>감사웃음나눔봉사단</td>
    <td>문화공연</td>
    <td>웃음치료</td>
    <td> 12 </td>
  </tr>
  <tr>
    <td>64</td>
    <td>광양시</td>
    <td>프리덤통기타재능봉사단</td>
    <td>문화공연</td>
    <td>통기타공연</td>
    <td> 26 </td>
  </tr>
  <tr>
    <td>65</td>
    <td>광양시</td>
    <td>응급처치교육 재능봉사단</td>
    <td>기타</td>
    <td>응급처치</td>
    <td> 62 </td>
  </tr>
  <tr>
    <td>66</td>
    <td>광양시</td>
    <td>코딩교육 재능봉사단</td>
    <td>기타</td>
    <td>유튜브제작</td>
    <td> 34 </td>
  </tr>
  <tr>
    <td>67</td>
    <td>광양시</td>
    <td>포스코 마음이음 봉사단 </td>
    <td>주거개선</td>
    <td>소품만들기</td>
    <td> 71 </td>
  </tr>
  <tr>
    <td>68</td>
    <td>광양시</td>
    <td>광양제철소도배전문봉사단</td>
    <td>주거개선</td>
    <td>도배, 장판</td>
    <td> 30 </td>
  </tr>
  <tr>
    <td>69</td>
    <td>광양시</td>
    <td>POSCO 희망나무 목공예 봉사단</td>
    <td>주거개선</td>
    <td>목공예품제작</td>
    <td> 71 </td>
  </tr>
  <tr>
    <td>70</td>
    <td>광양시</td>
    <td>포스코발마사지봉사단</td>
    <td>뷰티</td>
    <td>발마사지</td>
    <td> 104 </td>
  </tr>
  <tr>
    <td>71</td>
    <td>광양시</td>
    <td>에버그린 벽화 재능봉사단 </td>
    <td>주거개선</td>
    <td>벽화</td>
    <td> 46 </td>
  </tr>
  <tr>
    <td>72</td>
    <td>광양시</td>
    <td>깍아헤어재능봉사단</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td> 39 </td>
  </tr>
  <tr>
    <td>73</td>
    <td>광양시</td>
    <td>포스코농기계수리재능봉사단</td>
    <td>주거개선</td>
    <td>농기계수리</td>
    <td> 89 </td>
  </tr>
  <tr>
    <td>74</td>
    <td>광양시</td>
    <td>반딧불봉사단</td>
    <td>주거개선</td>
    <td>전기수리</td>
    <td> 106 </td>
  </tr>
  <tr>
    <td>75</td>
    <td>광양시</td>
    <td>포스코컴퓨터봉사단</td>
    <td>기타</td>
    <td>　</td>
    <td> 131 </td>
  </tr>
  <tr>
    <td>76</td>
    <td>광양시</td>
    <td>프렌즈봉사단</td>
    <td>기타</td>
    <td>다문화지원</td>
    <td> 502 </td>
  </tr>
  <tr>
    <td>77</td>
    <td>광양시</td>
    <td>하늬바람풍선아트봉사단</td>
    <td>기타</td>
    <td>풍선아트</td>
    <td> 36 </td>
  </tr>
  <tr>
    <td>78</td>
    <td>광양시</td>
    <td>포스코클린오션봉사단</td>
    <td>기타</td>
    <td>해양환경쓰레기수거</td>
    <td> 83 </td>
  </tr>
  <tr>
    <td>79</td>
    <td>광양시</td>
    <td>도서지역 깨끗한 해양 지킴이 봉사단</td>
    <td>기타</td>
    <td>해양환경쓰레기수거</td>
    <td> 76 </td>
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
