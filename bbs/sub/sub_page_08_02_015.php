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
    <td>건화베스파</td>
    <td>광양읍 인덕로 1121</td>
    <td>762-9811</td>
    <td>사우나14.2%,찜질방 28.5%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>뼈통감자탕</td>
    <td>광양읍 인덕로 901</td>
    <td>763-6001</td>
    <td>이용료 10%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>이렇게좋은날</td>
    <td>광양읍 대림오성로 53</td>
    <td>763-1455</td>
    <td>이용료 5%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>안경박사(광양점)</td>
    <td>광양읍 매천로 861</td>
    <td>763-3342</td>
    <td>이용료 20%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>리헤어피카소</td>
    <td>광양읍 읍내중앙길 31</td>
    <td>763-3117</td>
    <td>이용료 5%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>민스헤어</td>
    <td>광양읍 매천로 850</td>
    <td>763-6231</td>
    <td>이용료 10%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>광양유림웨딩홀</td>
    <td>광양읍 매천로 856</td>
    <td>762-4004</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>도화식당</td>
    <td>광양읍 희향현로 6</td>
    <td>763-4422</td>
    <td>이용료 20%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>대호불고기</td>
    <td>광양읍 서북1길 4</td>
    <td>762-5678</td>
    <td>이용료 10%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>삼대광양불고기집</td>
    <td>광양읍 서천1길 52</td>
    <td>763-9250</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>1001서독안경점</td>
    <td>중마중앙로 126(중동)</td>
    <td>791-1001</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>12</td>
    <td>협동인쇄 .광고</td>
    <td>오류로 46(중동)</td>
    <td>792-2433</td>
    <td>이용료 30%</td>
  </tr>
  <tr>
    <td>13</td>
    <td>선인요가테라피센타</td>
    <td>중동 대동빌딩 6층</td>
    <td>791-5209</td>
    <td>20%할인</td>
  </tr>
  <tr>
    <td>14</td>
    <td>보디가드</td>
    <td>금호동 폭포사랑길 99,(백운쇼핑내)</td>
    <td>799-7632</td>
    <td>30%할인</td>
  </tr>
  <tr>
    <td>15</td>
    <td>아모레 휴플레이스제철점</td>
    <td>금호동 폭포사랑길 99,(백운쇼핑내)</td>
    <td>799-1811</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>16</td>
    <td>뉴타이어뱅크</td>
    <td>중마로 210</td>
    <td>794-1314</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>17</td>
    <td>여수식육점</td>
    <td>광양읍 호북길 26</td>
    <td>762-7939</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>18</td>
    <td>섬마을수산시장</td>
    <td>광장로 10(중동)</td>
    <td>792-2358</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>19</td>
    <td>㈜태양관광여행사</td>
    <td>광양읍 순광로 691</td>
    <td>763-9090</td>
    <td>5%할인</td>
  </tr>
  <tr>
    <td>20</td>
    <td>투다리(만남의광장점)</td>
    <td>오류로 46(중동)</td>
    <td>793-2111</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>21</td>
    <td>㈜그린안전개발</td>
    <td>도촌길 7-10(광영동)</td>
    <td>791-3863</td>
    <td>20%할인</td>
  </tr>
  <tr>
    <td>22</td>
    <td>강남고속관광㈜</td>
    <td>광양읍 인덕로 1010</td>
    <td>762-3115,3116</td>
    <td>5%할인</td>
  </tr>
  <tr>
    <td>23</td>
    <td>매실한우2호점</td>
    <td>광양읍 인덕로 1121(1층)</td>
    <td>762-9191</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>24</td>
    <td>광영 암소한마리 정육점</td>
    <td>광영로 41(광영동)</td>
    <td>794-2255</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>25</td>
    <td>광영암소한마리</td>
    <td>광영로 41(1층)(광영동)</td>
    <td>794-5003</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>26</td>
    <td>서평뜰</td>
    <td>광양읍 서평7길 52</td>
    <td>763-6878</td>
    <td>3% 할인</td>
  </tr>
  <tr>
    <td>27</td>
    <td>세원찬방</td>
    <td>광영시장길 1-1(광영동)</td>
    <td>791-9985</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>28</td>
    <td>타이어앤피트</td>
    <td>광양읍 인덕로 920</td>
    <td>761-1888</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>29</td>
    <td>금호헤어갤러리</td>
    <td>사동로 186(마동)(1층)</td>
    <td>762-5306</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>30</td>
    <td>종가집 돌솥설렁탕</td>
    <td>광장로 143(중동)</td>
    <td>791-2626</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>31</td>
    <td>안경나라 광양중동점</td>
    <td>중마로 221(중동)</td>
    <td>791-6343</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>32</td>
    <td>광명아이시스</td>
    <td>사동로 206(마동)</td>
    <td>791-4304</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>33</td>
    <td>글라스박스안경원</td>
    <td>중마 중앙로 106</td>
    <td>795-5725</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>34</td>
    <td>㈜현대에스앤에이</td>
    <td>항만12로 29</td>
    <td>793-7040</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>35</td>
    <td>B/G헤어살롱</td>
    <td>중동 1759-2</td>
    <td>793-5653</td>
    <td>20% 할인</td>
  </tr>
  <tr>
    <td>36</td>
    <td>줄리의 옷장</td>
    <td>오류로 72</td>
    <td>792-1868</td>
    <td>5% 할인 현금결재시</td>
  </tr>
  <tr>
    <td>37</td>
    <td>싱글벙글복집</td>
    <td>행정1길 6-5(중동)</td>
    <td>793-0161</td>
    <td>5%할인 현금결제시만</td>
  </tr>
  <tr>
    <td>38</td>
    <td>해송축산 도•소매센터</td>
    <td>중마로 225(중동)</td>
    <td>791-7377</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>39</td>
    <td>풍년추어탕</td>
    <td>항만13로 40(중동)</td>
    <td>791-6839</td>
    <td>5% 할인 현금결제시만</td>
  </tr>
  <tr>
    <td>40</td>
    <td>성풍건강원</td>
    <td>광양읍 매천로 888</td>
    <td>763-0440</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>41</td>
    <td>티파니</td>
    <td>광양읍 신재로 58-1</td>
    <td>761-1470</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>42</td>
    <td>시크릿 헤어</td>
    <td>광양읍 칠성로 82</td>
    <td>763-7667</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>43</td>
    <td>김지원 미용실</td>
    <td>옥곡면 옥진로 673-1</td>
    <td>772-1311</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>44</td>
    <td>광영스파렉스</td>
    <td>광포로 56(광영동)</td>
    <td>793-8051</td>
    <td>구입가격의 20% 할인</td>
  </tr>
  <tr>
    <td>45</td>
    <td>보이네안경원</td>
    <td>광양읍 용강로 35(창덕@ 202동    건너편)</td>
    <td>763-0113</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>46</td>
    <td>톰슨바닷가재</td>
    <td>아미1길 14(중동)</td>
    <td>791-8480</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>47</td>
    <td>평생문화센터 소담수공예공방</td>
    <td>무등길2, 새마을금고 무등점 뒷블럭2층</td>
    <td>061-792-2440</td>
    <td> 10%할인현금결재시</td>
  </tr>
  <tr>
    <td>48</td>
    <td>㈜액티브시니어 아쿠아카페</td>
    <td>광장로 2 아쿠아센터 4층</td>
    <td>061-761-8777</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>49</td>
    <td>92(구이)</td>
    <td>눈소5길 31-6</td>
    <td>061-793-9229</td>
    <td>5%할인카드결재시</td>
  </tr>
  <tr>
    <td>50</td>
    <td>행복한 밥상</td>
    <td>발섬4길 17-5</td>
    <td>061-793-8001</td>
    <td> 5%할인현금결재시</td>
  </tr>
  <tr>
    <td>51</td>
    <td>㈜대한</td>
    <td>광양읍 대림오성로 92</td>
    <td>061-763-6622</td>
    <td> 10%할인현금결재시</td>
  </tr>
  <tr>
    <td>52</td>
    <td>백운광고</td>
    <td>광양읍 대림오성로 92</td>
    <td>061-762-8090</td>
    <td>10%할인현금결재시</td>
  </tr>
  <tr>
    <td>53</td>
    <td>디샤</td>
    <td>바장1길 5-19</td>
    <td>010-9187-4218</td>
    <td>5%할인,현금,카드모두</td>
  </tr>
  <tr>
    <td>54</td>
    <td>광양장어</td>
    <td>중마 용소6길 3-11</td>
    <td>010-5201-9693</td>
    <td>5%할인,현금,카드모두</td>
  </tr>
  <tr>
    <td>55</td>
    <td>바른자세 건강관리</td>
    <td>중마청룡길 8-3</td>
    <td>795-0102</td>
    <td>30대미만10%, 30대이상 30%할인</td>
  </tr>
  <tr>
    <td>56</td>
    <td>아이유뷰티샵</td>
    <td>사동로 112(중동)</td>
    <td>070-8786-0667</td>
    <td>30대미만10%, 30대이상30% 할인</td>
  </tr>
  <tr>
    <td>57</td>
    <td>몰오브광양특산품</td>
    <td>광양시 금호로 26, 205호(금호동,    몰오브광양점)</td>
    <td>010-2730-1954</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>58</td>
    <td>몰오브망고스토리</td>
    <td>광양시 금호로 26, 214호(금호동, 몰오브광양점)</td>
    <td>010-2730-1954</td>
    <td>10%할인</td>
  </tr>
  <tr>
    <td>59</td>
    <td>아비뇽</td>
    <td>광양시 폭포사랑길 99,(금호동,    백운쇼핑센터내)</td>
    <td>010-3626-0702</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>60</td>
    <td>백운문구</td>
    <td>광양시 폭포사랑길 99, (금호동,    백운쇼핑센터내)</td>
    <td>799-1725</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>61</td>
    <td>감쪽</td>
    <td>광양시 폭포사랑길 99, 1층(금호동,    백운쇼핑센터내)</td>
    <td>010-3501-9777</td>
    <td>5% 할인(1만원이상 결재시)</td>
  </tr>
  <tr>
    <td>62</td>
    <td>매화김밥</td>
    <td>광양시 폭포사랑길 99,(금호동,    백운쇼핑센터내)</td>
    <td>799-8276</td>
    <td>현금결재시30%, 카드결재시20% 할인</td>
  </tr>
  <tr>
    <td>63</td>
    <td>윤스튜디오</td>
    <td>광양시 폭포사랑길 99, (금호동,    백운쇼핑센터내)</td>
    <td>799-1723</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>64</td>
    <td>송학</td>
    <td>광양시 폭포사랑길 99, (금호동,    백운쇼핑센터내)</td>
    <td>799-1603</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>65</td>
    <td>루루악세사리, 비너스</td>
    <td>광양시 폭포사랑길 99, (금호동,    백운쇼핑센터내)</td>
    <td>010-5203-5005</td>
    <td>5% 할인(비너스는 3만원이상결재시)</td>
  </tr>
  <tr>
    <td>66</td>
    <td>제철화원</td>
    <td>광양시 폭포사랑길 99, (금호동,    백운쇼핑센터내)</td>
    <td>792-6636</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>67</td>
    <td>나들이</td>
    <td>광양시 폭포사랑길 99,(금호동,    백운쇼핑센터내)</td>
    <td>010-2080-8742</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>68</td>
    <td>더만족(제철점)</td>
    <td>광양시 금호로    26,(304호)(금호동, 몰오브광양점)</td>
    <td>010-9099-7523</td>
    <td>2% 할인</td>
  </tr>
  <tr>
    <td>69</td>
    <td>디어골드</td>
    <td>광양시 금호로    26,(107호)(금호동, 몰오브광양점)</td>
    <td>791-3233</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>70</td>
    <td>파스쿠찌몰오브광양점</td>
    <td>광양시 금호로    26,(104호)(금호동, 몰오브광양점)</td>
    <td>010-8474-4773</td>
    <td>10% 할인</td>
  </tr>
  <tr>
    <td>71</td>
    <td>청년다방제철점</td>
    <td>광양시 금호로 26,    (209호)(금호동, 몰오브광양점)</td>
    <td>010-4175-8853</td>
    <td>5% 할인</td>
  </tr>
  <tr>
    <td>72</td>
    <td>꾸이닭금호점</td>
    <td>광양시 금호로 26, 114호(금호동,    몰오브광양점)</td>
    <td>010-4175-8853</td>
    <td>5% 할인</td>
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
