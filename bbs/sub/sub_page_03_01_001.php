<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 블루 재능봉사단";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    



   <?include G5_THEME_PATH."/sub_left_03.php"?>



    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">전남 재능기부 자원봉사단체</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <li class="n3"><a href="" class="">블루 재능봉사단</a></li>
			<li class="n4"><a href="" class="navi_ov">전남 재능기부 자원봉사단체</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>
	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">재능 주거니(재능기부 자원봉사단체)란?</p></div><!----////타이틀---->
	<p class="txt_box sub_list_wrap">단순 노력자원봉사활동을 넘어서 자신이 가진 기술이나 전문지식, 경험 등을 활용한 전문자원봉사단체 재능기부 자원봉사단 요청은 061-287-1365로 문의바랍니다</p>

	<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">전남 재능기부 자원봉사 단체 현황(2021. 4월 기준) 6개 영역/166단체</p></div><!----////타이틀---->
	<div class="sub_table_wrap sub_list_wrap">
	<table class="table_t02">
	<thead>
			<tr>
		         <th>총계</th>
		         <th>주거</th>
		         <th>건강</th>
		         <th>뷰티</th>
		         <th>음식</th>
		         <th>문화</th>
		         <th>기타</th>
			</tr>
	</thead>
	<tbody>
			 <tr>
				 <td>166</td>
				 <td>48</td>
				 <td>10</td>
				 <td>27</td>
				 <td>26</td>
				 <td>31</td>
				 <td>24</td>
		       </tr>
	</tbody>
	</table>
	</div>

	<div class="sub_table_wrap sub_list_wrap">
	<table class="table_t02">
	<thead>
		<tr>
            <th width="7%">번호</th>
            <th width="10%">지역</th>
            <th>단체명</th>
            <th width="10%">대표자명</th>
            <th width="13%">활동분야</th>
            <th>활동내용</th>
            <th width="10%">회원수</th>
           </tr>
	</thead>
		<tbody>
	<tr>
    <td>1</td>
    <td>목포시</td>
    <td>건강복지발전소</td>
    <td>강*훈</td>
    <td>건강지원</td>
    <td>물리치료 등</td>
    <td>20</td>
  </tr>
  <tr>
    <td>2</td>
    <td>목포시</td>
    <td>늘벗장애인후원회</td>
    <td>김*진</td>
    <td>문화공연</td>
    <td>가수공연, 댄스(밸리) 등</td>
    <td>100</td>
  </tr>
  <tr>
    <td>3</td>
    <td>목포시</td>
    <td>두꺼비봉사단</td>
    <td>김*진</td>
    <td>주거개선</td>
    <td>집수리 자원봉사활동</td>
    <td>12</td>
  </tr>
  <tr>
    <td>4</td>
    <td>목포시</td>
    <td>목포여성자원봉사협의회</td>
    <td>박*금</td>
    <td>뷰티</td>
    <td>이미용봉사</td>
    <td>114</td>
  </tr>
  <tr>
    <td>5</td>
    <td>목포시</td>
    <td>반딧불벽화봉사단</td>
    <td>정*순</td>
    <td>주거개선</td>
    <td>벽화봉사</td>
    <td>15</td>
  </tr>
  <tr>
    <td>6</td>
    <td>목포시</td>
    <td>사랑나눔봉사회</td>
    <td>최*일</td>
    <td>뷰티</td>
    <td>이미용봉사</td>
    <td>48</td>
  </tr>
  <tr>
    <td>7</td>
    <td>목포시</td>
    <td>소리터</td>
    <td>임*욱</td>
    <td>문화공연</td>
    <td>풍물놀이, 민요, 한량무, 진도북놀이</td>
    <td>10</td>
  </tr>
  <tr>
    <td>8</td>
    <td>목포시</td>
    <td>(사)목포사랑봉사회</td>
    <td>문*희</td>
    <td>주거개선</td>
    <td>집수리,    대청소 자원봉사활동</td>
    <td>40</td>
  </tr>
  <tr>
    <td>9</td>
    <td>목포시</td>
    <td>목만사봉사단</td>
    <td>안*찬</td>
    <td>건강지원</td>
    <td>치과,한방,양방    의료지원</td>
    <td>62</td>
  </tr>
  <tr>
    <td>10</td>
    <td>목포시</td>
    <td>한국열관리시공협회 전라남도회</td>
    <td>황*용</td>
    <td>주거개선</td>
    <td>보일러    시공, 점검 수리</td>
    <td>300</td>
  </tr>
  <tr>
    <td>11</td>
    <td>여수시</td>
    <td>(사)해양환경인명구조단여수구조대</td>
    <td>박*호</td>
    <td>기타</td>
    <td>수중정화    활동 및 해안가 청결활동 등</td>
    <td>83</td>
  </tr>
  <tr>
    <td>12</td>
    <td>여수시</td>
    <td>낭만여수 장구사랑</td>
    <td>고*규</td>
    <td>문화공연</td>
    <td>복지시설    장구공연</td>
    <td>24</td>
  </tr>
  <tr>
    <td>13</td>
    <td>여수시</td>
    <td>놀이마당 들풀</td>
    <td>전*제</td>
    <td>문화공연</td>
    <td>저소득층    대상 국악공연 </td>
    <td>164</td>
  </tr>
  <tr>
    <td>14</td>
    <td>여수시</td>
    <td>여성안전자원봉사대</td>
    <td>이*심</td>
    <td>기타</td>
    <td>방범활동</td>
    <td>56</td>
  </tr>
  <tr>
    <td>15</td>
    <td>여수시</td>
    <td>요리조리 행복나눔</td>
    <td>김*진</td>
    <td>음식나눔</td>
    <td>소외계층    음식지원 등</td>
    <td>17</td>
  </tr>
  <tr>
    <td>16</td>
    <td>여수시</td>
    <td>여수착한 한마음봉사단</td>
    <td>최*영</td>
    <td>뷰티</td>
    <td>이·미용 및 네일아트</td>
    <td>26</td>
  </tr>
  <tr>
    <td>17</td>
    <td>여수시</td>
    <td>지구사랑봉사단</td>
    <td>정*아</td>
    <td>기타</td>
    <td>환경개선</td>
    <td>15</td>
  </tr>
  <tr>
    <td>18</td>
    <td>여수시</td>
    <td>사랑그루터기</td>
    <td>김*오</td>
    <td>주거개선</td>
    <td>소외계층    집수리 등</td>
    <td>77</td>
  </tr>
  <tr>
    <td>19</td>
    <td>여수시</td>
    <td>차이나 친붕</td>
    <td>박*숙</td>
    <td>기타</td>
    <td>중국어    통역 등</td>
    <td>70</td>
  </tr>
  <tr>
    <td>20</td>
    <td>여수시</td>
    <td>현애울림</td>
    <td>고*림</td>
    <td>문화공연</td>
    <td>소외계층    국악공연</td>
    <td>10</td>
  </tr>
  <tr>
    <td>21</td>
    <td>여수시</td>
    <td>힐링뮤직단</td>
    <td>전*림</td>
    <td>문화공연</td>
    <td>저소득    대상 음악공원</td>
    <td>41</td>
  </tr>
  <tr>
    <td>22</td>
    <td>여수시</td>
    <td>엑스포예술단</td>
    <td>윤*심</td>
    <td>문화공연</td>
    <td>복지시설    전통공연 등</td>
    <td>80</td>
  </tr>
  <tr>
    <td>23</td>
    <td>순천시</td>
    <td>극단&quot;인형&quot;</td>
    <td>박*자</td>
    <td>문화공연</td>
    <td>인형극    공연, 인형 제작</td>
    <td>16</td>
  </tr>
  <tr>
    <td>24</td>
    <td>순천시</td>
    <td>대한어머니회 순천시지회</td>
    <td>임*심</td>
    <td>문화공연</td>
    <td>무용(댄스 스포츠)</td>
    <td>32</td>
  </tr>
  <tr>
    <td>25</td>
    <td>순천시</td>
    <td>새우리봉사단</td>
    <td>이*재</td>
    <td>주거개선</td>
    <td>집수리,    방충망 교체</td>
    <td>27</td>
  </tr>
  <tr>
    <td>26</td>
    <td>순천시</td>
    <td>순천사랑해피바이러스</td>
    <td>이*숙</td>
    <td>뷰티</td>
    <td>이·미용</td>
    <td>33</td>
  </tr>
  <tr>
    <td>27</td>
    <td>순천시</td>
    <td>순천시발사랑봉사회</td>
    <td>박*태</td>
    <td>건강지원</td>
    <td>발 마사지 및 장애인 스포츠 재활    마사지</td>
    <td>17</td>
  </tr>
  <tr>
    <td>28</td>
    <td>순천시</td>
    <td>순천제일대학교안전봉사대</td>
    <td>박*춘</td>
    <td>주거개선</td>
    <td>전기/가스(LED 전등    교체, LPG 호스 교체)</td>
    <td>161</td>
  </tr>
  <tr>
    <td>29</td>
    <td>순천시</td>
    <td>전라남도순천의료원두룸박봉사단</td>
    <td>정*</td>
    <td>건강지원</td>
    <td>의료</td>
    <td>24</td>
  </tr>
  <tr>
    <td>30</td>
    <td>순천시</td>
    <td>제일대 SA봉사대</td>
    <td>박*연</td>
    <td>건강지원</td>
    <td>재활 마사지, 스포츠 테이핑</td>
    <td>55</td>
  </tr>
  <tr>
    <td>31</td>
    <td>순천시</td>
    <td>햇살 도배봉사단</td>
    <td>이*구</td>
    <td>주거개선</td>
    <td>도배</td>
    <td>17</td>
  </tr>
  <tr>
    <td>32</td>
    <td>순천시</td>
    <td>금당나눔봉사대</td>
    <td>이*관</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>16</td>
  </tr>
  <tr>
    <td>33</td>
    <td>나주시</td>
    <td>나주신문시민기자단</td>
    <td>조*화</td>
    <td>기타</td>
    <td>제과제빵,    꽃꽂이, 전통놀이</td>
    <td>20</td>
  </tr>
  <tr>
    <td>34</td>
    <td>나주시</td>
    <td>세땀봉사단</td>
    <td>김*미</td>
    <td>기타</td>
    <td>재봉틀봉사</td>
    <td>15</td>
  </tr>
  <tr>
    <td>35</td>
    <td>나주시</td>
    <td>한무란</td>
    <td>오*임</td>
    <td>문화공연</td>
    <td>한춤    공연</td>
    <td>17</td>
  </tr>
  <tr>
    <td>36</td>
    <td>나주시</td>
    <td>도배봉사회</td>
    <td>권*희</td>
    <td>주거개선</td>
    <td>도배지원</td>
    <td>6</td>
  </tr>
  <tr>
    <td>37</td>
    <td>나주시</td>
    <td>빵나눔봉사회</td>
    <td>조*희</td>
    <td>기타</td>
    <td>제과제빵</td>
    <td>12</td>
  </tr>
  <tr>
    <td>38</td>
    <td>나주시</td>
    <td>선난봉사회</td>
    <td>최*옥</td>
    <td>기타</td>
    <td>수의제작</td>
    <td>7</td>
  </tr>
  <tr>
    <td>39</td>
    <td>나주시</td>
    <td>나주더줌우쿨렐레봉사단</td>
    <td>정*락</td>
    <td>문화공연</td>
    <td>우쿨렐레    공연</td>
    <td>17</td>
  </tr>
  <tr>
    <td>40</td>
    <td>나주시</td>
    <td>한국부인회</td>
    <td>오*라</td>
    <td>문화공연</td>
    <td>국악공연</td>
    <td>20</td>
  </tr>
  <tr>
    <td>41</td>
    <td>광양시</td>
    <td>광양만패밀리웃음봉사단</td>
    <td>심*선</td>
    <td>건강지원</td>
    <td>웃음치료</td>
    <td>23</td>
  </tr>
  <tr>
    <td>42</td>
    <td>광양시</td>
    <td>인터랙트    푸른비젼</td>
    <td>김*태</td>
    <td>음식나눔</td>
    <td>제과제빵</td>
    <td>33</td>
  </tr>
  <tr>
    <td>43</td>
    <td>광양시</td>
    <td>광양시도배전문봉사단</td>
    <td>백*동</td>
    <td>주거개선</td>
    <td>도배, 장판</td>
    <td>18</td>
  </tr>
  <tr>
    <td>44</td>
    <td>광양시</td>
    <td>광양시아우름무대마술봉사단</td>
    <td>최*국</td>
    <td>건강지원</td>
    <td>마술, 웃음치료</td>
    <td>11</td>
  </tr>
  <tr>
    <td>45</td>
    <td>광양시</td>
    <td>대한가수협회광양시지부</td>
    <td>황*근</td>
    <td>문화공연</td>
    <td>공연봉사</td>
    <td>59</td>
  </tr>
  <tr>
    <td>46</td>
    <td>광양시</td>
    <td>사랑실은교통봉사대</td>
    <td>김*광</td>
    <td>음식나눔</td>
    <td>짜장면봉사</td>
    <td>86</td>
  </tr>
  <tr>
    <td>47</td>
    <td>광양시</td>
    <td>사랑실은음악봉사대</td>
    <td>현*진</td>
    <td>문화공연</td>
    <td>공연    봉사</td>
    <td>30</td>
  </tr>
  <tr>
    <td>48</td>
    <td>광양시</td>
    <td>스마일봉사단</td>
    <td>신*원</td>
    <td>문화공연</td>
    <td>공연봉사</td>
    <td>30</td>
  </tr>
  <tr>
    <td>49</td>
    <td>광양시</td>
    <td>이우연LF하모니</td>
    <td>이*연</td>
    <td>문화공연</td>
    <td>공연봉사</td>
    <td>14</td>
  </tr>
  <tr>
    <td>50</td>
    <td>광양시</td>
    <td>중마112자전거봉사대</td>
    <td>김*진</td>
    <td>음식나눔</td>
    <td>밑반찬봉사</td>
    <td>189</td>
  </tr>
  <tr>
    <td>51</td>
    <td>광양시</td>
    <td>채움소통아카데미</td>
    <td>이*혜</td>
    <td>건강지원</td>
    <td>웃음치료</td>
    <td>15</td>
  </tr>
  <tr>
    <td>52</td>
    <td>담양군</td>
    <td>가족봉사단</td>
    <td>한*덕</td>
    <td>주거개선</td>
    <td>도배,    장판</td>
    <td>70</td>
  </tr>
  <tr>
    <td>53</td>
    <td>담양군</td>
    <td>고서증암봉사회</td>
    <td>전*학</td>
    <td>주거개선</td>
    <td>도배,    장판</td>
    <td>20</td>
  </tr>
  <tr>
    <td>54</td>
    <td>담양군</td>
    <td>녹색환경감시단</td>
    <td>이*철</td>
    <td>환경정화</td>
    <td>환경정화활동    및 노후 대문 도색</td>
    <td>25</td>
  </tr>
  <tr>
    <td>55</td>
    <td>담양군</td>
    <td>남도사랑봉사단    담양군지회</td>
    <td>김*근</td>
    <td>주거개선</td>
    <td>전기수리    및 도배장판</td>
    <td>21</td>
  </tr>
  <tr>
    <td>56</td>
    <td>담양군</td>
    <td>담양미용봉사회</td>
    <td>최*진</td>
    <td>뷰티</td>
    <td>이미용(커트,    염색 등)</td>
    <td>13</td>
  </tr>
  <tr>
    <td>57</td>
    <td>담양군</td>
    <td>새순주거복지회</td>
    <td>김*범</td>
    <td>주거개선</td>
    <td>도배,    장판</td>
    <td>25</td>
  </tr>
  <tr>
    <td>58</td>
    <td>담양군</td>
    <td>우리춤너울회</td>
    <td>정*숙</td>
    <td>문화공연</td>
    <td>공연활동(전통    무용)</td>
    <td>28</td>
  </tr>
  <tr>
    <td>59</td>
    <td>담양군</td>
    <td>울랄라시니어밴드</td>
    <td>조*주</td>
    <td>문화공연</td>
    <td>공연활동(가요    등)</td>
    <td>19</td>
  </tr>
  <tr>
    <td>60</td>
    <td>담양군</td>
    <td>전남도립대학교    피부미용과</td>
    <td>서*희</td>
    <td>뷰티</td>
    <td>네일아트    등</td>
    <td>32</td>
  </tr>
  <tr>
    <td>61</td>
    <td>담양군</td>
    <td>조선대학교    한송이봉사단</td>
    <td>송*래</td>
    <td>기타</td>
    <td>전통    공예 만들기</td>
    <td>4</td>
  </tr>
  <tr>
    <td>62</td>
    <td>담양군</td>
    <td>차담</td>
    <td>박*희</td>
    <td>기타</td>
    <td>전통차    문화 보급</td>
    <td>7</td>
  </tr>
  <tr>
    <td>63</td>
    <td>담양군</td>
    <td>효사랑봉사단</td>
    <td>이*석</td>
    <td>음식나눔</td>
    <td>중국음식나눔(짜장,    우동)</td>
    <td>8</td>
  </tr>
  <tr>
    <td>64</td>
    <td>곡성군</td>
    <td>곡성심청로타리클럽</td>
    <td>유*숙</td>
    <td>음식나눔</td>
    <td>김장김치    만들어 배달</td>
    <td>19</td>
  </tr>
  <tr>
    <td>65</td>
    <td>곡성군</td>
    <td>생활개선회</td>
    <td>김*자</td>
    <td>음식나눔</td>
    <td>밑반찬만들기    및 배달</td>
    <td>149</td>
  </tr>
  <tr>
    <td>66</td>
    <td>곡성군</td>
    <td>스마일립스</td>
    <td>김*미</td>
    <td>문화공연</td>
    <td>시설    및 마을 문화공연</td>
    <td>24</td>
  </tr>
  <tr>
    <td>67</td>
    <td>곡성군</td>
    <td>곡성군새마을회</td>
    <td>박*숙</td>
    <td>주거개선</td>
    <td>저소득층    주거개선 및 환경정리</td>
    <td>46</td>
  </tr>
  <tr>
    <td>68</td>
    <td>곡성군</td>
    <td>곡성군귀농귀촌협의회</td>
    <td>이*윤</td>
    <td>주거개선</td>
    <td>저소득층    전기수리 및 형광등 교체</td>
    <td>16</td>
  </tr>
  <tr>
    <td>69</td>
    <td>구례군</td>
    <td>구례군 간병사협회</td>
    <td>임*수</td>
    <td>주거개선</td>
    <td>취약계층    집 청소 등</td>
    <td>16</td>
  </tr>
  <tr>
    <td>70</td>
    <td>구례군</td>
    <td>구례군 귀농귀촌협의회</td>
    <td>이*식</td>
    <td>주거개선</td>
    <td>취약개층    등 집 수리 등</td>
    <td>58</td>
  </tr>
  <tr>
    <td>71</td>
    <td>구례군</td>
    <td>구례 라이온스클럽</td>
    <td>조*수</td>
    <td>주거개선</td>
    <td>취약계충    주거개선 등</td>
    <td>27</td>
  </tr>
  <tr>
    <td>72</td>
    <td>구례군</td>
    <td>구례군 미용업협회</td>
    <td>고*숙</td>
    <td>뷰티</td>
    <td>군부대    및 독거노인 미용봉사</td>
    <td>11</td>
  </tr>
  <tr>
    <td>73</td>
    <td>구례군</td>
    <td>구례군 초심회</td>
    <td>왕*전</td>
    <td>뷰티</td>
    <td>장수사진 촬영 및 액자만들기, 독거노인    가스안전밸브 설치 등</td>
    <td>39</td>
  </tr>
  <tr>
    <td>74</td>
    <td>구례군</td>
    <td>남도    사랑봉사단</td>
    <td>김*순</td>
    <td>음식나눔</td>
    <td>저소득층    보약 도시락 나눔</td>
    <td>26</td>
  </tr>
  <tr>
    <td>75</td>
    <td>구례군</td>
    <td>천주교회</td>
    <td>이*한</td>
    <td>음식나눔</td>
    <td>사랑의    밑반찬 배달 및 가사봉사</td>
    <td>10</td>
  </tr>
  <tr>
    <td>76</td>
    <td>고흥군</td>
    <td>팜앤빌더</td>
    <td>김*주</td>
    <td>주거개선</td>
    <td>방충망    교체 등</td>
    <td>7</td>
  </tr>
  <tr>
    <td>77</td>
    <td>고흥군</td>
    <td>고흥여성농업인센터    예쁜손모아</td>
    <td>이*행</td>
    <td>기타</td>
    <td>재봉틀봉사</td>
    <td>20</td>
  </tr>
  <tr>
    <td>78</td>
    <td>고흥군</td>
    <td>고흥경찰서모범운전자회</td>
    <td>장*</td>
    <td>기타</td>
    <td>교통정리</td>
    <td>29</td>
  </tr>
  <tr>
    <td>79</td>
    <td>고흥군</td>
    <td>고흥벽화사랑</td>
    <td>육*연</td>
    <td>주거개선</td>
    <td>벽화</td>
    <td>14</td>
  </tr>
  <tr>
    <td>80</td>
    <td>고흥군</td>
    <td>대한미용사회    고흥군지부</td>
    <td>김*숙</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>118</td>
  </tr>
  <tr>
    <td>81</td>
    <td>고흥군</td>
    <td>한국해양구조단고흥구조대</td>
    <td>김*환</td>
    <td>기타</td>
    <td>수중정화활동</td>
    <td>39</td>
  </tr>
  <tr>
    <td>82</td>
    <td>고흥군</td>
    <td>행복나눔봉사단</td>
    <td>양*호</td>
    <td>주거개선</td>
    <td>도배</td>
    <td>11</td>
  </tr>
  <tr>
    <td>83</td>
    <td>고흥군</td>
    <td>팜앤빌더</td>
    <td>김*주</td>
    <td>주거개선</td>
    <td>방충망    교체 등</td>
    <td>7</td>
  </tr>
  <tr>
    <td>84</td>
    <td>고흥군</td>
    <td>고흥여성농업인센터    예쁜손모아</td>
    <td>이*행</td>
    <td>기타</td>
    <td>재봉틀봉사</td>
    <td>20</td>
  </tr>
  <tr>
    <td>85</td>
    <td>보성군</td>
    <td>(사)보성군새마을회</td>
    <td>임*호</td>
    <td>주거개선</td>
    <td>집수리</td>
    <td>620</td>
  </tr>
  <tr>
    <td>86</td>
    <td>보성군</td>
    <td>고운손도우미회</td>
    <td>이*정</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>10</td>
  </tr>
  <tr>
    <td>87</td>
    <td>보성군</td>
    <td>명전예명원차인회</td>
    <td>이*화</td>
    <td>기타</td>
    <td>차봉사</td>
    <td>12</td>
  </tr>
  <tr>
    <td>88</td>
    <td>보성군</td>
    <td>보성군여성자원봉사협의회</td>
    <td>김*순</td>
    <td>음식나눔</td>
    <td>밑반찬만들기    및 배달</td>
    <td>404</td>
  </tr>
  <tr>
    <td>89</td>
    <td>보성군</td>
    <td>채동선문화사업단</td>
    <td>강*경</td>
    <td>문화공연</td>
    <td>문화공연</td>
    <td>52</td>
  </tr>
  <tr>
    <td>90</td>
    <td>보성군</td>
    <td>초록빛봉사대</td>
    <td>김*재</td>
    <td>주거개선</td>
    <td>주거환경    개선 활동</td>
    <td>23</td>
  </tr>
  <tr>
    <td>91</td>
    <td>보성군</td>
    <td>희망의손봉사단</td>
    <td>문*자</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>9</td>
  </tr>
  <tr>
    <td>92</td>
    <td>보성군</td>
    <td>소비자교육중앙회보성군지회</td>
    <td>김*희</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>44</td>
  </tr>
  <tr>
    <td>93</td>
    <td>보성군</td>
    <td>보성성당빈첸시오회</td>
    <td>손*구</td>
    <td>주거개선</td>
    <td>주거환경    개선 활동</td>
    <td>16</td>
  </tr>
  <tr>
    <td>94</td>
    <td>보성군</td>
    <td>보성미용사회</td>
    <td>이*순</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>23</td>
  </tr>
  <tr>
    <td>95</td>
    <td>화순군</td>
    <td>행복바라지나눔봉사단</td>
    <td>김*식</td>
    <td>문화공연 </td>
    <td>공연활동(다문화) 등</td>
    <td>150</td>
  </tr>
  <tr>
    <td>96</td>
    <td>화순군</td>
    <td>세계평화여성연합 화순군지부</td>
    <td>엔*하루미</td>
    <td>문화공연</td>
    <td>공연활동</td>
    <td>74</td>
  </tr>
  <tr>
    <td>97</td>
    <td>화순군</td>
    <td>아름다운 동행</td>
    <td>김*석</td>
    <td>문화공연</td>
    <td>공연활동</td>
    <td>40</td>
  </tr>
  <tr>
    <td>98</td>
    <td>화순군</td>
    <td>화순 온누리 노래봉사단</td>
    <td>이*보</td>
    <td>문화공연</td>
    <td>공연활동</td>
    <td>14</td>
  </tr>
  <tr>
    <td>99</td>
    <td>화순군</td>
    <td>남도사랑봉사단 화순군지회</td>
    <td>조*성</td>
    <td>주거개선</td>
    <td>도배 장판</td>
    <td>26</td>
  </tr>
  <tr>
    <td>100</td>
    <td>화순군</td>
    <td>신아행복나눔봉사단</td>
    <td>최*영</td>
    <td>주거개선</td>
    <td>도배 장판 집수리</td>
    <td>23</td>
  </tr>
  <tr>
    <td>101</td>
    <td>화순군</td>
    <td>고인돌 봉사회</td>
    <td>배*복</td>
    <td>주거개선</td>
    <td>도배 장판</td>
    <td>20</td>
  </tr>
  <tr>
    <td>102</td>
    <td>화순군</td>
    <td>대한미용사회동부지회 화순미용봉사회</td>
    <td>김*숙</td>
    <td>뷰티</td>
    <td>미용봉사</td>
    <td>8</td>
  </tr>
  <tr>
    <td>103</td>
    <td>화순군</td>
    <td>여미힐링 발관리 동호회</td>
    <td>최*영</td>
    <td>뷰티</td>
    <td>손발 마사지</td>
    <td>22</td>
  </tr>
  <tr>
    <td>104</td>
    <td>화순군</td>
    <td>한국프로사진협회 전남지회 화순지부</td>
    <td>김*국</td>
    <td>기타</td>
    <td>사진봉사</td>
    <td>4</td>
  </tr>
  <tr>
    <td>105</td>
    <td>장흥군</td>
    <td>대한적십자사장흥지구 협의회</td>
    <td>백*심</td>
    <td>음식나눔</td>
    <td>독거노인    생일상 차려드리기</td>
    <td>89</td>
  </tr>
  <tr>
    <td>106</td>
    <td>장흥군</td>
    <td>사랑을 실천하는 모임</td>
    <td>신*용</td>
    <td>주거개선</td>
    <td>저소득층    집수리</td>
    <td>11</td>
  </tr>
  <tr>
    <td>107</td>
    <td>장흥군</td>
    <td>서포터즈 봉사단</td>
    <td>박*천</td>
    <td>주거개선</td>
    <td>저소득층    집수리</td>
    <td>27</td>
  </tr>
  <tr>
    <td>108</td>
    <td>장흥군</td>
    <td>장흥군여성자원봉사회</td>
    <td>이*숙</td>
    <td>음식나눔</td>
    <td>독거노인    및 저소득층 밑반찬 전달,가사봉사</td>
    <td>43</td>
  </tr>
  <tr>
    <td>109</td>
    <td>장흥군</td>
    <td>정남진 사랑나눔 봉사대</td>
    <td>김*석</td>
    <td>기타</td>
    <td>이미용서비스,    밑반찬배달, 집수리 등 20개 분야</td>
    <td>196</td>
  </tr>
  <tr>
    <td>110</td>
    <td>장흥군</td>
    <td>장흥새마을회 </td>
    <td>김*두</td>
    <td>기타</td>
    <td>집수리사업,    이미용서비스, 김장담그기 등</td>
    <td>543</td>
  </tr>
  <tr>
    <td>111</td>
    <td>장흥군</td>
    <td>장흥군 여성단체협의회 </td>
    <td>마*숙</td>
    <td>음식나눔</td>
    <td>독거노인    및 저소득층 밑반찬 전달,가사봉사</td>
    <td>11</td>
  </tr>
  <tr>
    <td>112</td>
    <td>강진군</td>
    <td>강진군방범연합회</td>
    <td>최*호</td>
    <td>기타</td>
    <td>환경정화활동</td>
    <td>30</td>
  </tr>
  <tr>
    <td>113</td>
    <td>강진군</td>
    <td>강진로타리클럽</td>
    <td>정*수</td>
    <td>주거개선</td>
    <td>주거개선</td>
    <td>30</td>
  </tr>
  <tr>
    <td>114</td>
    <td>강진군</td>
    <td>강진청자 로타리클럽</td>
    <td>나*열</td>
    <td>주거개선</td>
    <td>주거개선</td>
    <td>25</td>
  </tr>
  <tr>
    <td>115</td>
    <td>강진군</td>
    <td>군민행복봉사단</td>
    <td>임*정</td>
    <td>뷰티</td>
    <td>헤어커트    봉사</td>
    <td>5</td>
  </tr>
  <tr>
    <td>116</td>
    <td>강진군</td>
    <td>너랑나랑</td>
    <td>김*정</td>
    <td>뷰티</td>
    <td>얼굴마사지    봉사</td>
    <td>15</td>
  </tr>
  <tr>
    <td>117</td>
    <td>강진군</td>
    <td>다문화가족지원센터</td>
    <td>조*옥</td>
    <td>뷰티</td>
    <td>네일아트봉사자    양성 및 봉사활동</td>
    <td>10</td>
  </tr>
  <tr>
    <td>118</td>
    <td>강진군</td>
    <td>맘스쿡봉사단</td>
    <td>위*숙</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>25</td>
  </tr>
  <tr>
    <td>119</td>
    <td>강진군</td>
    <td>발사모</td>
    <td>박*순</td>
    <td>뷰티</td>
    <td>발마사지    봉사</td>
    <td>7</td>
  </tr>
  <tr>
    <td>120</td>
    <td>강진군</td>
    <td>해피바이러스</td>
    <td>박*심</td>
    <td>뷰티</td>
    <td>염색    봉사</td>
    <td>8</td>
  </tr>
  <tr>
    <td>121</td>
    <td>강진군</td>
    <td>행복봉사단</td>
    <td>안*관</td>
    <td>문화공연</td>
    <td>공연활동    봉사</td>
    <td>10</td>
  </tr>
  <tr>
    <td>122</td>
    <td>강진군</td>
    <td>강진군새마을회</td>
    <td>박*재</td>
    <td>음식나눔</td>
    <td>음식나눔,    주거개선</td>
    <td>364</td>
  </tr>
  <tr>
    <td>123</td>
    <td>해남군</td>
    <td>한국전기안전공사 전남남부지사</td>
    <td>오*진</td>
    <td>주거개선</td>
    <td>전기점검    및 보수</td>
    <td>26</td>
  </tr>
  <tr>
    <td>124</td>
    <td>해남군</td>
    <td>해남군 미용협회</td>
    <td>박*진</td>
    <td>뷰티</td>
    <td>이미용봉사</td>
    <td>50</td>
  </tr>
  <tr>
    <td>125</td>
    <td>해남군</td>
    <td>대한적십자사 우슬봉사회</td>
    <td>김*호</td>
    <td>주거개선</td>
    <td>집수리봉사</td>
    <td>22</td>
  </tr>
  <tr>
    <td>126</td>
    <td>해남군</td>
    <td>한국열관리협회해남지회</td>
    <td>김*관</td>
    <td>주거개선</td>
    <td>보일러점검    및 수리</td>
    <td>7</td>
  </tr>
  <tr>
    <td>127</td>
    <td>해남군</td>
    <td>행복나눔강사협회</td>
    <td>강*심</td>
    <td>문화공연</td>
    <td>실버체조    및 웃음치료 등</td>
    <td>28</td>
  </tr>
  <tr>
    <td>128</td>
    <td>영암군</td>
    <td>꿈을 짓는 집수리 봉사단</td>
    <td>이*충</td>
    <td>주거개선</td>
    <td>집수리    봉사</td>
    <td>24</td>
  </tr>
  <tr>
    <td>129</td>
    <td>영암군</td>
    <td>언니쓰클럽</td>
    <td>김*주</td>
    <td>건강지원</td>
    <td>퓨젼    에어로빅</td>
    <td>24</td>
  </tr>
  <tr>
    <td>130</td>
    <td>영암군</td>
    <td>영암군여성자원봉사협의회</td>
    <td>이*숙</td>
    <td>음식나눔</td>
    <td>반찬지원</td>
    <td>223</td>
  </tr>
  <tr>
    <td>131</td>
    <td>영암군</td>
    <td>영암사랑의 봉사단</td>
    <td>문*일</td>
    <td>문화공연</td>
    <td>공연봉사    (섹소폰)</td>
    <td>9</td>
  </tr>
  <tr>
    <td>132</td>
    <td>영암군</td>
    <td>돌쇠봉사회</td>
    <td>김*연</td>
    <td>주거개선</td>
    <td>노후주택    수리봉사</td>
    <td>56</td>
  </tr>
  <tr>
    <td>133</td>
    <td>무안군</td>
    <td>남도사랑봉사단 무안지회</td>
    <td>박*화</td>
    <td>뷰티</td>
    <td>이미용,    목욕봉사</td>
    <td>22</td>
  </tr>
  <tr>
    <td>134</td>
    <td>무안군</td>
    <td>bello-B</td>
    <td>오*연</td>
    <td>뷰티</td>
    <td>이미용,    염색, 네일아트, 마사지, 향수제작</td>
    <td>36</td>
  </tr>
  <tr>
    <td>135</td>
    <td>무안군</td>
    <td>케어복지전문봉사단</td>
    <td>나*숙</td>
    <td>뷰티</td>
    <td>피부마사지,    손발마사지</td>
    <td>41</td>
  </tr>
  <tr>
    <td>136</td>
    <td>무안군</td>
    <td>하늘로봉사단</td>
    <td>이*철</td>
    <td>주거개선</td>
    <td>집수리(전기,    보일러 등)</td>
    <td>80</td>
  </tr>
  <tr>
    <td>137</td>
    <td>무안군</td>
    <td>푸른나무</td>
    <td>김*대</td>
    <td>주거개선</td>
    <td>집수리(전기,    보일러 등)</td>
    <td>11</td>
  </tr>
  <tr>
    <td>138</td>
    <td>함평군</td>
    <td>나르단예술단</td>
    <td>박*님</td>
    <td>문화공연</td>
    <td>전통문화공연</td>
    <td>38</td>
  </tr>
  <tr>
    <td>139</td>
    <td>함평군</td>
    <td>담쟁이꿈</td>
    <td>최*연</td>
    <td>기타</td>
    <td>냅킨아트 및 종이접기 등</td>
    <td>13</td>
  </tr>
  <tr>
    <td>140</td>
    <td>함평군</td>
    <td>카네이션봉사회</td>
    <td>나*복</td>
    <td>문화공연</td>
    <td>동극 및 전래놀이</td>
    <td>14</td>
  </tr>
  <tr>
    <td>141</td>
    <td>함평군</td>
    <td>함평군 이미용봉사회</td>
    <td>김*임</td>
    <td>뷰티</td>
    <td>이미용 봉사</td>
    <td>15</td>
  </tr>
  <tr>
    <td>142</td>
    <td>함평군</td>
    <td>으랏차차 나눔봉사단</td>
    <td>김*영</td>
    <td>문화공연</td>
    <td>베트남, 몽골 등 이주여성 모국    전통춤,벨리댄스,오카리나 연주</td>
    <td>10</td>
  </tr>
  <tr>
    <td>143</td>
    <td>영광군</td>
    <td>대한적십자사 영광지구협의회</td>
    <td>정*자</td>
    <td>기타</td>
    <td>무료급식봉사,    재난재해응급</td>
    <td>129</td>
  </tr>
  <tr>
    <td>144</td>
    <td>영광군</td>
    <td>사랑누림</td>
    <td>김*섭</td>
    <td>건강지원</td>
    <td>고령화    시대의 여가 프로그램 개발 및 심리 상담, 행사공연활동</td>
    <td>22</td>
  </tr>
  <tr>
    <td>145</td>
    <td>영광군</td>
    <td>영광군여성자원봉사대</td>
    <td>나*주</td>
    <td>기타</td>
    <td>이동목욕서비스</td>
    <td>40</td>
  </tr>
  <tr>
    <td>146</td>
    <td>영광군</td>
    <td>영광군재향군인회</td>
    <td>심*동</td>
    <td>기타</td>
    <td>이동빨래서비스</td>
    <td>51</td>
  </tr>
  <tr>
    <td>147</td>
    <td>영광군</td>
    <td>천빛예술봉사단</td>
    <td>신*호</td>
    <td>문화공연</td>
    <td>예술공연서비스</td>
    <td>34</td>
  </tr>
  <tr>
    <td>148</td>
    <td>영광군</td>
    <td>행복나무</td>
    <td>형*정</td>
    <td>뷰티</td>
    <td>소외계층    이.미용서비스</td>
    <td>9</td>
  </tr>
  <tr>
    <td>149</td>
    <td>장성군</td>
    <td>대한적십자사봉사회 장성지구협의회</td>
    <td>정*남</td>
    <td>음식나눔</td>
    <td>떡국 나눔 및 송편 나눔</td>
    <td>121</td>
  </tr>
  <tr>
    <td>150</td>
    <td>장성군</td>
    <td>마음을 움직이는 사람들</td>
    <td>김*춘</td>
    <td>주거개선</td>
    <td>취약계층 집수리</td>
    <td>23</td>
  </tr>
  <tr>
    <td>151</td>
    <td>장성군</td>
    <td>사)밀알중앙회전남지구장성지회</td>
    <td>김*중</td>
    <td>주거개선</td>
    <td>취약계층 집수리</td>
    <td>67</td>
  </tr>
  <tr>
    <td>152</td>
    <td>장성군</td>
    <td>사)한국여성소비자연합장성지부</td>
    <td>위*금</td>
    <td>음식나눔</td>
    <td>취약계층 밑반찬(고추장)나눔</td>
    <td>36</td>
  </tr>
  <tr>
    <td>153</td>
    <td>장성군</td>
    <td>장성군여성자원봉사회</td>
    <td>김*희</td>
    <td>음식나눔</td>
    <td>거동불편 독거노인 도시락 배달</td>
    <td>192</td>
  </tr>
  <tr>
    <td>154</td>
    <td>장성군</td>
    <td>장성미래발전청년위원회</td>
    <td>김*환</td>
    <td>주거개선</td>
    <td>취약계층 집수리 봉사 </td>
    <td>44</td>
  </tr>
  <tr>
    <td>155</td>
    <td>장성군</td>
    <td>장성군여성단체협의회</td>
    <td>장*애</td>
    <td>음식나눔</td>
    <td>취약계층 김장김치 나눔</td>
    <td>30</td>
  </tr>
  <tr>
    <td>156</td>
    <td>완도군</td>
    <td>남도사랑봉사단 완도군지회</td>
    <td>문*필</td>
    <td>주거개선</td>
    <td>취약계층 대상 집짓기, 집수리 자원봉사    활동</td>
    <td>32</td>
  </tr>
  <tr>
    <td>157</td>
    <td>완도군</td>
    <td>대한적십자사완도군지회협의회</td>
    <td>김*수</td>
    <td>주거개선</td>
    <td>취약계층 대상 집짓기, 집수리 자원봉사    활동</td>
    <td>400</td>
  </tr>
  <tr>
    <td>158</td>
    <td>완도군</td>
    <td>완도군 생활개선회완도군농가주부모임</td>
    <td>김*순</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>218</td>
  </tr>
  <tr>
    <td>159</td>
    <td>완도군</td>
    <td>완도군농가주부모임</td>
    <td>김*숙</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>32</td>
  </tr>
  <tr>
    <td>160</td>
    <td>완도군</td>
    <td>한국부인회 완도군지회</td>
    <td>장*순</td>
    <td>음식나눔</td>
    <td>식사・반찬지원</td>
    <td>40</td>
  </tr>
  <tr>
    <td>161</td>
    <td>진도군</td>
    <td>국제와이즈맨 천년학 클럽</td>
    <td>박*희</td>
    <td>뷰티</td>
    <td>이미용</td>
    <td>13</td>
  </tr>
  <tr>
    <td>162</td>
    <td>진도군</td>
    <td>국제와이즈맨 진도 옥주클럽</td>
    <td>차*진</td>
    <td>주거개선</td>
    <td>집수리</td>
    <td>74</td>
  </tr>
  <tr>
    <td>163</td>
    <td>진도군</td>
    <td>의신청년회</td>
    <td>박*선</td>
    <td>음식나눔</td>
    <td>취약계층 음식나눔</td>
    <td>50</td>
  </tr>
  <tr>
    <td>164</td>
    <td>진도군</td>
    <td>진도군 여성단체 협의회</td>
    <td>변*경</td>
    <td>음식나눔</td>
    <td>취약계층 음식나눔</td>
    <td>826</td>
  </tr>
  <tr>
    <td>165</td>
    <td>진도군</td>
    <td>칠우회</td>
    <td>박*석</td>
    <td>주거개선</td>
    <td>도배, 장판, 전기 수리 등</td>
    <td>12</td>
  </tr>
  <tr>
    <td>166</td>
    <td>신안군</td>
    <td>신안군여성자원봉사자회</td>
    <td>김*자</td>
    <td>주거개선</td>
    <td>도배, 장판 등</td>
    <td>365</td>
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
