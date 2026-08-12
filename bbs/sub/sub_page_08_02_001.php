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
      <th scope="col" style="width:22%;">업체명</th>
      <th scope="col" style="">주소</th>
      <th scope="col" style="width:15%;">전화번호</th>
      <th scope="col" style="width:15%;">할인률</th>
    </tr>
  </thead>
  <tbody>
		 <tr>
    <td>1</td>
    <td>SK장천연향프라자점</td>
    <td>순천시 연향번영길    122(연향동)<br>
      sk장천연향프라자점</td>
    <td>061-723-6011</td>
    <td>액정필름 무상제공</td>
  </tr>
  <tr>
    <td>2</td>
    <td>휴대폰(서영유통)</td>
    <td>순천시 남산로 46</td>
    <td>061-722-3033</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>글로벌 웃음비젼센터</td>
    <td>순천시 북부시장1길 16</td>
    <td>010-3637-1476</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>동그라미서점</td>
    <td>순천시 왕궁길43</td>
    <td>061-723-7996</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>청암경매학원</td>
    <td>순천시 왕지로 38</td>
    <td>061-751-0040</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>풀잎문화센터</td>
    <td>순천시 중앙로 81-1 2층</td>
    <td>061-744-2228</td>
    <td>15%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>호반태권도장</td>
    <td>순천시 안산길 5 호반1차 상가3층    301호</td>
    <td>061-726-1224</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>M부동산중개법인</td>
    <td>순천시 왕지로 38</td>
    <td>061-726-3339</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>그린벧엘석유</td>
    <td>순천시 풍덕6길 41</td>
    <td>061-743-8023</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>순천 오행생식원</td>
    <td>순천시 서문로 2</td>
    <td>061-743-5557</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>스피드인라인</td>
    <td>순천시 대석길 30</td>
    <td>061-725-6008</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>12</td>
    <td>정원장례식장</td>
    <td>순천시 삼산로 290</td>
    <td>061-754-4444</td>
    <td>분향소/접객실    50% <br>
      광주·전남 운구 무료<br>
      영결식장 사용 무료 </td>
  </tr>
  <tr>
    <td>13</td>
    <td>디자인 클럽</td>
    <td>순천시 중앙로 104, 100</td>
    <td>010-8592-5440</td>
    <td>5~10%</td>
  </tr>
  <tr>
    <td>14</td>
    <td>오렌지</td>
    <td>순천시 중앙로 104, 32</td>
    <td>010-7525-0136</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>쥴리엣</td>
    <td>순천시 중앙로 104, 75</td>
    <td>061-751-7277</td>
    <td>5~10%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>카니발</td>
    <td>순천시 중앙로 104, 18</td>
    <td>010-3063-0858</td>
    <td>5~10%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>꿈꾸는 간판공장</td>
    <td>순천시 남정동 529-9</td>
    <td>010-8601-7650</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>아토애드</td>
    <td>순천시 남산3길 67</td>
    <td>010-8601-7650</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>카페동천 다하다</td>
    <td>순천시 시민로 41-2</td>
    <td>010-4775-7878</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>낙안온천</td>
    <td>순천시 낙안면 조정래길 933</td>
    <td>061-753-0035</td>
    <td> 1,500원</td>
  </tr>
  <tr>
    <td>21</td>
    <td>뎁</td>
    <td>순천시 시민로 30-3</td>
    <td>010-2488-8859</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>22</td>
    <td>비타민 바른체형</td>
    <td>순천시 장자보1길 76</td>
    <td>061-727-8808</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>23</td>
    <td>윤소정 헤어샵</td>
    <td>순천시 중앙2길 25</td>
    <td>010-8518-7804</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>24</td>
    <td>쥬니멤버스헤어살롱</td>
    <td>순천시 연향상가1길 7</td>
    <td>010-5155-4690</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>25</td>
    <td>천담수 사우나</td>
    <td>순천시 조례동 신월큰길 39</td>
    <td>061-726-4948</td>
    <td>  1,000원 </td>
  </tr>
  <tr>
    <td>26</td>
    <td>수지네 보물창고</td>
    <td>순천시 중앙로 104, 51</td>
    <td>010-8605-1744</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>27</td>
    <td>생목화원</td>
    <td>순천시 이수로 224</td>
    <td>061-744-4847</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>28</td>
    <td>인스튜디오</td>
    <td>순천시 연향번영길 129</td>
    <td>061-723-6007</td>
    <td>5%    / 10% </td>
  </tr>
  <tr>
    <td>29</td>
    <td>현대 사진관</td>
    <td>순천시 중앙로 139-2</td>
    <td>061-752-5820</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>30</td>
    <td>사파이어모텔</td>
    <td>순천시 연향상가길 21</td>
    <td>061-722-6655</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>31</td>
    <td>순천만 생태펜션</td>
    <td>순천시 순천만길 476</td>
    <td>010-3634-3101</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>32</td>
    <td>골목안고깃집</td>
    <td>순천시 옥천길 32</td>
    <td>010-5566-4765</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>33</td>
    <td>남흥회관</td>
    <td>순천시 장명2길 4</td>
    <td>061-744-9736</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>34</td>
    <td>뚜레쥬르 터미널점</td>
    <td>순천시 이수로 21</td>
    <td>061-744-8900</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>35</td>
    <td>로얄정육점</td>
    <td>순천시 중앙2길 23-1</td>
    <td>061-743-7823</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>36</td>
    <td>소담치킨 팔마점</td>
    <td>순천시 팔마4길 18</td>
    <td>061-722-6169</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>37</td>
    <td>수궁횟집</td>
    <td>순천시 남신월길 33</td>
    <td>061-723-0001</td>
    <td> 1,000원</td>
  </tr>
  <tr>
    <td>38</td>
    <td>순천 닭집</td>
    <td>순천시 연자로 18</td>
    <td>061-751-9900</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>39</td>
    <td>순천장어명가</td>
    <td>순천시 장천2길 10</td>
    <td>061-741-2000</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>40</td>
    <td>자연발효기정떡 오미당</td>
    <td>순천시 장선배기길 112 1층</td>
    <td>061-726-1237</td>
    <td>5%    / 10%</td>
  </tr>
  <tr>
    <td>41</td>
    <td>하마가든</td>
    <td>순천시 상사 상사호길 315</td>
    <td>061-743-7860</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>42</td>
    <td>회복참옻닭</td>
    <td>순천시 상대석길 72</td>
    <td>061-724-9255</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>43</td>
    <td>카페, 르몽드</td>
    <td>순천시 장천3길 30</td>
    <td>061-744-0355</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>44</td>
    <td>다비치안경 순천연향점</td>
    <td>순천시&nbsp;연향3로&nbsp;5(연향동)1층</td>
    <td>061-721-1357</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>45</td>
    <td>다비치안경 순천점</td>
    <td>순천시 중앙로 105</td>
    <td>061-753-0063</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>46</td>
    <td>빠리안경</td>
    <td>순천시 중앙로 82-1</td>
    <td>061-743-8282</td>
    <td>30%</td>
  </tr>
  <tr>
    <td>47</td>
    <td>새순천 한방병원</td>
    <td>순천시 팔마로 159</td>
    <td>061-746-1199</td>
    <td>15%</td>
  </tr>
  <tr>
    <td>48</td>
    <td>순천 척병원</td>
    <td>순천시 팔마로 205</td>
    <td>061-745-0500</td>
    <td>10%    / 50%</td>
  </tr>
  <tr>
    <td>49</td>
    <td>순천백세한의원</td>
    <td>순천시 조례동 신월큰길 41 2층</td>
    <td>061-725-0099</td>
    <td>15%</td>
  </tr>
  <tr>
    <td>50</td>
    <td>순천우리병원</td>
    <td>순천시 이수로 291</td>
    <td>061-906-8000</td>
    <td> 5% / 10%</td>
  </tr>
  <tr>
    <td>51</td>
    <td>아이피아안경콘택트</td>
    <td>순천시 팔마로 222 홈플러스2층</td>
    <td>061-743-8228</td>
    <td>30%</td>
  </tr>
  <tr>
    <td>52</td>
    <td>청연우리병원</td>
    <td>순천시 팔마로 212</td>
    <td>061-746-2400<br></td>
    <td>10%    / 50% </td>
  </tr>
  <tr>
    <td>53</td>
    <td>포바즈다우한의원</td>
    <td>순천시 중앙로 78</td>
    <td>061-752-0010<br></td>
    <td>10%</td>
  </tr>
  <tr>
    <td>54</td>
    <td>힐링나무병원</td>
    <td>순천시    자경1길 46(조곡동, 수정아파트)<br>
      상가동101</td>
    <td>061-743-8023</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>55</td>
    <td>광장</td>
    <td>순천시 서면 백강로 573</td>
    <td>061-744-2588</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>56</td>
    <td>뉴동부산업</td>
    <td>순천시 중앙로 314</td>
    <td>061-754-8813</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>57</td>
    <td>경동오토하우스</td>
    <td>순천시 순광로38</td>
    <td>061-723-2378</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>58</td>
    <td>순천만 밧데리 전문매장</td>
    <td>순천시 조례못등길 62</td>
    <td>061-721-8330</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>59</td>
    <td>신진카크리닉</td>
    <td>순천시 강남로 7</td>
    <td>061-744-2009</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>60</td>
    <td>타이어 프로 풍덕점</td>
    <td>순천시 역전장1길 3</td>
    <td>061-741-3800</td>
    <td>15%</td>
  </tr>
  <tr>
    <td>61</td>
    <td>현대폰터스(순광전자)</td>
    <td>순천시 장평안길 114</td>
    <td>061-741-4704</td>
    <td>5~10%</td>
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
