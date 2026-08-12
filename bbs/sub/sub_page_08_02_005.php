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
    <td>님프만</td>
    <td>장흥군 장흥읍 동교1길 19</td>
    <td>864-8657</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>장흥군 정남진 전망대</td>
    <td>장흥군 관산읍 정남진해안로 242-58</td>
    <td>863-7071</td>
    <td>50%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>장흥국민체육센터 수영장</td>
    <td>장흥군 흥성로 43 국민체육센터</td>
    <td>862-7900</td>
    <td>30%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>장흥군 정남진과학관</td>
    <td>장흥군 장흥읍 평화우산길 180-608</td>
    <td>860-7855</td>
    <td>50%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>레드페이스</td>
    <td>장흥군 장흥읍 중앙로 21-1</td>
    <td>010-6406-7738</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>편백숲하우스</td>
    <td>장흥군 장흥읍 우드랜드길 142</td>
    <td>010-5622-3940</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>명동의류</td>
    <td>장흥군 장흥읍 건산로 23</td>
    <td>010-2518-3777</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>마코</td>
    <td>장흥군 장흥읍 중앙로 29</td>
    <td>863-8013</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>미장원 1979</td>
    <td>장흥군 장흥읍 물레방앗간길 25 - 6    2층</td>
    <td>010-4711-0329</td>
    <td>20%(일부)</td>
  </tr>
  <tr>
    <td>10</td>
    <td>박현정 헤어샵</td>
    <td>장흥군 장흥읍 동교 1길 38 -    1번지</td>
    <td>863-8892</td>
    <td>20%(일부)</td>
  </tr>
  <tr>
    <td>11</td>
    <td>수 헤어라인</td>
    <td>장흥군 장흥읍 중앙로 39</td>
    <td>863-6635</td>
    <td>20%(일부)</td>
  </tr>
  <tr>
    <td>12</td>
    <td>핑크핑크플라워샵</td>
    <td>장흥군 장흥읍 남부관광로 23</td>
    <td>863-2533</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>13</td>
    <td>해창식품</td>
    <td>장흥군 회진면 회진선창길 10</td>
    <td>867-5168</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>14</td>
    <td>백림방앗간</td>
    <td>장흥군 장흥읍 토요시장 2길 17</td>
    <td>010-3643-8378</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>전진청과</td>
    <td>장흥군 장흥읍 토요시장 1길 53</td>
    <td>863-3210</td>
    <td>1,000원 </td>
  </tr>
  <tr>
    <td>16</td>
    <td>시장야채</td>
    <td>장흥군 관산읍 옥당2길 7-5</td>
    <td>867-0936</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>MBM고려상사</td>
    <td>장흥군 장흥읍 장흥로 7</td>
    <td>863-3611</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>동백화원</td>
    <td>장흥군 장흥읍 건산리 722 - 8</td>
    <td>864-9060</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>트라이 장흥점</td>
    <td>장흥군 장흥읍 중앙로 34</td>
    <td>864-4000</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>20</td>
    <td>정남진 (은영)수산</td>
    <td>장흥군 장흥읍 동교 1길 26</td>
    <td>863-7272</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>21</td>
    <td>유진수산</td>
    <td>장흥군 장흥읍 토요시장 1길 53</td>
    <td>863-5988</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>22</td>
    <td>똥강아지</td>
    <td>장흥군 장흥읍 의향길 9</td>
    <td>010-3328-3760</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>23</td>
    <td>전진청과</td>
    <td>장흥군 장흥읍 토요시장 1길 53</td>
    <td>010-6256-2725</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>24</td>
    <td>안경세상</td>
    <td>장흥군 장흥읍 중앙로 51</td>
    <td>864-6600</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>25</td>
    <td>아디다스</td>
    <td>장흥군 장흥읍 장흥로 18 - 1</td>
    <td>863-2222</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>26</td>
    <td>무등전자</td>
    <td>장흥군 장흥읍 중앙로 34 - 3</td>
    <td>010-3618-4352</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>27</td>
    <td>가자카 인테리어</td>
    <td>장흥군 장흥읍 흥성로 28</td>
    <td>864-3000</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>28</td>
    <td>종합 의류</td>
    <td>장흥군 대덕읍 신월리 대대로 922</td>
    <td>010-3559-1526</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>29</td>
    <td>까치 야생화</td>
    <td>장흥군 장흥읍 물레방앗간길 28 - 5</td>
    <td>863-6161</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>30</td>
    <td>오렌지</td>
    <td>장흥군 장흥읍 중앙로 41</td>
    <td>864-5678</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>31</td>
    <td>달콤 꽃시루 </td>
    <td>장흥군 장흥읍 동부루 23-1</td>
    <td>862-8133</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>32</td>
    <td>늘봄식당</td>
    <td>장흥군 관산읍 칠관로 1571</td>
    <td>010-5122-2241</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>33</td>
    <td>커피하우스</td>
    <td>장흥군 장흥읍 토요시장 3길 15</td>
    <td>010-2651-3542</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>34</td>
    <td>연지보리밥</td>
    <td>장흥군 장흥읍 장흥토요시장 208호</td>
    <td>863-8634</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>35</td>
    <td>한끼</td>
    <td>장흥군 장흥로 39</td>
    <td>862-5030</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>36</td>
    <td>코뚜레 식당</td>
    <td>장흥군 장흥읍 토요시장2길 3-5</td>
    <td>864-8484</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>37</td>
    <td>황칠돼지한마리</td>
    <td>장흥군 장흥읍 동교2길 21</td>
    <td>863-3858</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>38</td>
    <td>황칠나라</td>
    <td>장흥읍 건산로 62-2</td>
    <td>864-5288</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>39</td>
    <td>승모네</td>
    <td>장흥군 장흥읍 동교로 15</td>
    <td>010-9885-6511</td>
    <td>10%(일부)</td>
  </tr>
  <tr>
    <td>40</td>
    <td>달보드레</td>
    <td>장흥군 장흥읍 중앙로 76</td>
    <td>010-8098-0981</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>41</td>
    <td>셰시봉</td>
    <td>장흥군 장흥읍 읍성로 150 - 1</td>
    <td>010-6799-8698</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>42</td>
    <td>카페쉼표</td>
    <td>장흥군 장흥읍 건산로 62 - 2</td>
    <td>863-6006</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>43</td>
    <td>작은 주방 후야</td>
    <td>장흥군 장흥읍 동부로 8</td>
    <td>864-1541</td>
    <td>15%</td>
  </tr>
  <tr>
    <td>44</td>
    <td>카페51</td>
    <td>장흥군 장흥읍 중앙로 51</td>
    <td>070-8863-5151</td>
    <td>10%(일부)</td>
  </tr>
  <tr>
    <td>45</td>
    <td>위치커피 전남장흥점</td>
    <td>장흥군 장흥읍 동부로 56</td>
    <td>863-9134</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>46</td>
    <td>까페 팜파스</td>
    <td>장흥군 장흥읍 우드랜드길 86</td>
    <td>010-9284-2090</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>47</td>
    <td>커피마마퀸 장흥점</td>
    <td>장흥군 장흥읍 중앙로 37 - 3</td>
    <td>864-7149</td>
    <td>10%(일부)</td>
  </tr>
  <tr>
    <td>48</td>
    <td>벌크커피 장흥점</td>
    <td>장흥군 장흥읍 중앙로 38 - 1</td>
    <td>864-7728</td>
    <td>10%(일부)</td>
  </tr>
  <tr>
    <td>49</td>
    <td>노가네 족발&amp;국밥</td>
    <td>장흥군 장흥읍 중앙로 40</td>
    <td>864-1960</td>
    <td>10%(일부)</td>
  </tr>
  <tr>
    <td>50</td>
    <td>써니 스윗</td>
    <td>장흥군 대덕읍 거정 2길 3 - 2</td>
    <td>010-6460-4588</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>51</td>
    <td>소솜갤러리카페</td>
    <td>장흥군 관산읍 정남진해안로 228</td>
    <td>010-3777-7343</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>52</td>
    <td>팡야</td>
    <td>장흥군 안양면 로하스로 48</td>
    <td>863-9663</td>
    <td>20%(일부)</td>
  </tr>
  <tr>
    <td>53</td>
    <td>왕벌식당</td>
    <td>장흥군 회진면 회진중앙길 11 - 1</td>
    <td>867-8686</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>54</td>
    <td>형제다방</td>
    <td>장흥군 회진면 회진중앙길 15</td>
    <td>867-8119</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>55</td>
    <td>속초 명태마을</td>
    <td>장흥군 회진면 가락회진로 1601</td>
    <td>867-8885</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>56</td>
    <td>혜진</td>
    <td>장흥군 관산읍 칠관로 1572</td>
    <td>010-5177-3014</td>
    <td>5%(일부)</td>
  </tr>
  <tr>
    <td>57</td>
    <td>이안경</td>
    <td>장흥군 장흥읍 중앙로 1길 5-1</td>
    <td>863-5655</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>58</td>
    <td>회진한의원</td>
    <td>장흥군 회진면 회진로 435 - 1</td>
    <td>867-6668</td>
    <td>10%(일부)</td>
  </tr>
  <tr>
    <td>59</td>
    <td>제이디자인</td>
    <td>장흥군 장흥읍 동부로 33</td>
    <td>010-2685-9243</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>60</td>
    <td>숙희네반찬</td>
    <td>장흥군 장흥읍 동교로 21</td>
    <td>862-0491</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>61</td>
    <td>현대광고</td>
    <td>장흥군 장흥읍 동교 2길 11 - 6</td>
    <td>863-5638</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>62</td>
    <td>옛골 박순진</td>
    <td>장흥군 장흥읍 토요시장</td>
    <td>010-5652-8589</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>63</td>
    <td>삼시세끼</td>
    <td>장흥군 대덕읍 신월리 거정 2길 7 -    2</td>
    <td>867-2332</td>
    <td>5%(일부)</td>
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
