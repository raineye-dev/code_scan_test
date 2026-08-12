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
<td>순천시</td>
<td>순천시 직능자원봉사단</td>
<td>주거개선</td>
<td>재능기부 봉사활동, 산업안전, 용접,농기구 수리 등</td>
<td>15</td>
  </tr>
  <tr>
<td>2</td>
<td>순천시</td>
<td>국학기공</td>
<td>문화공연</td>
<td>기체조</td>
<td>13</td>
  </tr>
  <tr>
<td>3</td>
<td>순천시</td>
<td>별량 농악 풍물회</td>
<td>문화공연</td>
<td>공연</td>
<td>20</td>
  </tr>
  <tr>
<td>4</td>
<td>순천시</td>
<td>순천제일대학교 안전봉사대</td>
<td>주거개선</td>
<td>재능기부(전기, 가스 점검 등)</td>
<td>74/71</td>
  </tr>
  <tr>
<td>5</td>
<td>순천시</td>
<td>순천미술치료사모임(순미모)</td>
<td>문화공연</td>
<td>미술치료</td>
<td>10</td>
  </tr>
  <tr>
<td>6</td>
<td>순천시</td>
<td>순천시 120팔마콜봉사단</td>
<td>음식나눔</td>
<td>농촌일손돕기, 교통캠페인, 반찬나눔,방충망 교체, 이미용 등</td>
<td>13</td>
  </tr>
  <tr>
<td>7</td>
<td>순천시</td>
<td>순천시제과제빵봉사단</td>
<td>음식나눔</td>
<td>매주 1회 나눔봉사, 분기별순천여성문화회관 합동봉사, 재능기부(제과제빵)</td>
<td>14/13</td>
  </tr>
  <tr>
<td>8</td>
<td>순천시</td>
<td>예명차</td>
<td>음식나눔</td>
<td>다도봉사</td>
<td>15</td>
  </tr>
  <tr>
<td>9</td>
<td>순천시</td>
<td>팔마음악봉사단</td>
<td>문화공연</td>
<td>매월 셋째주 금,토 어르신 생신잔치 및공연 봉사(색소폰 등)-상사비촌9988, 은빛마을, 가곡동 예광마을 등</td>
<td>16/12</td>
  </tr>
  <tr>
<td>10</td>
<td>순천시</td>
<td>제일대 SA봉사대</td>
<td>건강지원</td>
<td>재능기부(스포츠마사지)</td>
<td>55</td>
  </tr>
  <tr>
<td>11</td>
<td>순천시</td>
<td>송죽회</td>
<td>뷰티</td>
<td>이미용</td>
<td>11</td>
  </tr>
  <tr>
<td>12</td>
<td>순천시</td>
<td>순천다인회</td>
<td>음식나눔</td>
<td>야생차 체험관 홍보 및 관광객 차봉사, 경로당 무료 식사 등</td>
<td>14</td>
  </tr>
  <tr>
<td>13</td>
<td>순천시</td>
<td>통기타 다듬이소리</td>
<td>문화공연</td>
<td>공연</td>
<td>10</td>
  </tr>
  <tr>
<td>14</td>
<td>순천시</td>
<td>넝쿨사랑봉사회</td>
<td>문화공연</td>
<td>웃음치료, 스포츠 마사지</td>
<td>18</td>
  </tr>
  <tr>
<td>15</td>
<td>순천시</td>
<td>남도문화유산연구회</td>
<td>문화공연</td>
<td>문화해설봉사(관내 초등학생 역사교육)</td>
<td>14</td>
  </tr>
  <tr>
<td>16</td>
<td>순천시</td>
<td>대한적십자 웃음봉사회</td>
<td>음식나눔</td>
<td>각종 시정활동 지원, 제빵봉사등 </td>
<td>30</td>
  </tr>
  <tr>
<td>17</td>
<td>순천시</td>
<td>한마음 노래봉사단</td>
<td>문화공연</td>
<td>공연</td>
<td>10</td>
  </tr>
  <tr>
<td>18</td>
<td>순천시</td>
<td>예림회</td>
<td>주거개선</td>
<td>재능기부(도배,건축디자인)</td>
<td>13</td>
  </tr>
  <tr>
<td>19</td>
<td>순천시</td>
<td>이웃사랑실천회&lt;예향예술단&gt;</td>
<td>문화공연</td>
<td>공연(국악팀, 가요팀)</td>
<td>71</td>
  </tr>
  <tr>
<td>20</td>
<td>순천시</td>
<td>우리들복지센터</td>
<td>건강지원</td>
<td>의료봉사</td>
<td>20/19</td>
  </tr>
  <tr>
<td>21</td>
<td>순천시</td>
<td>대한민국특수임무유공자회 전남지부순천지회</td>
<td>기타</td>
<td>　</td>
<td>78/73</td>
  </tr>
  <tr>
<td>22</td>
<td>순천시</td>
<td>나르샤무용단</td>
<td>문화공연</td>
<td>공연(무용)</td>
<td>8</td>
  </tr>
  <tr>
<td>23</td>
<td>순천시</td>
<td>웃음사랑봉사단</td>
<td>문화공연</td>
<td>웃음치료, 마술, 공연, 한국무용,민요, 대금, 색소폰 등</td>
<td>17</td>
  </tr>
  <tr>
<td>24</td>
<td>순천시</td>
<td>다이나믹 댄스팀</td>
<td>문화공연</td>
<td>공연</td>
<td>18</td>
  </tr>
  <tr>
<td>25</td>
<td>순천시</td>
<td>순천시 발사랑 봉사회</td>
<td>건강지원</td>
<td>발마사지 및 장애인 스포츠 재활 마사지</td>
<td>17/16</td>
  </tr>
  <tr>
<td>26</td>
<td>순천시</td>
<td>이야기사랑</td>
<td>기타</td>
<td>학습지도, 웃음, 체조, 동화구연</td>
<td>14</td>
  </tr>
  <tr>
<td>27</td>
<td>순천시</td>
<td>국제문화예술단</td>
<td>문화공연</td>
<td>공연</td>
<td>19/17</td>
  </tr>
  <tr>
<td>28</td>
<td>순천시</td>
<td>에코뷰티사랑봉사단</td>
<td>뷰티</td>
<td>재능기부(이미용)</td>
<td>34</td>
  </tr>
  <tr>
<td>29</td>
<td>순천시</td>
<td>순천팔마색소폰</td>
<td>문화공연</td>
<td>공연(색소폰)</td>
<td>10</td>
  </tr>
  <tr>
<td>30</td>
<td>순천시</td>
<td>행복굽는사람들</td>
<td>음식나눔</td>
<td>재능기부(제과제빵)</td>
<td>16</td>
  </tr>
  <tr>
<td>31</td>
<td>순천시</td>
<td>주택관리사 순천봉사단</td>
<td>주거개선</td>
<td>연중 6~7회 연계기관으로부터재가장애인 및 취약계층 가정을 추천받아 도배,장판교체,싱크대 교체 등 주택 개보수 및 주변환경 정비</td>
<td>43/37</td>
  </tr>
  <tr>
<td>32</td>
<td>순천시</td>
<td>순천만습지 자연생태 해설사</td>
<td>문화공연</td>
<td>순천만 해설 등</td>
<td>24</td>
  </tr>
  <tr>
<td>33</td>
<td>순천시</td>
<td>무지개예술봉사단</td>
<td>문화공연</td>
<td>재능기부(공연)</td>
<td>10/8</td>
  </tr>
  <tr>
<td>34</td>
<td>순천시</td>
<td>(사)한국가수협회전남지회</td>
<td>문화공연</td>
<td>재능기부(공연)</td>
<td>9</td>
  </tr>
  <tr>
<td>35</td>
<td>순천시</td>
<td>선비문화 예다회</td>
<td>음식나눔</td>
<td>다도</td>
<td>15</td>
  </tr>
  <tr>
<td>36</td>
<td>순천시</td>
<td>다봉사회</td>
<td>기타</td>
<td>흰여울 세탁봉사 이불 운반 등</td>
<td>9</td>
  </tr>
  <tr>
<td>37</td>
<td>순천시</td>
<td>(사)한국다문화연예인연합회순천지부</td>
<td>문화공연</td>
<td>공연</td>
<td>9</td>
  </tr>
  <tr>
<td>38</td>
<td>순천시</td>
<td>새우리봉사단</td>
<td>주거개선</td>
<td>재능기부(집수리, 방충망)</td>
<td>27</td>
  </tr>
  <tr>
<td>39</td>
<td>순천시</td>
<td>행복순천 시민운동추진위원회</td>
<td>기타</td>
<td>교통캠페인</td>
<td>60/22</td>
  </tr>
  <tr>
<td>40</td>
<td>순천시</td>
<td>순천재능기부센터 순천애인</td>
<td>주거개선</td>
<td>재능기부(이미용, 집수리, 도배)</td>
<td>12</td>
  </tr>
  <tr>
<td>41</td>
<td>순천시</td>
<td>순천제일대학교 화동이봉사대</td>
<td>주거개선</td>
<td>재능기부(화재감지기 설치 등)</td>
<td>140</td>
  </tr>
  <tr>
<td>42</td>
<td>순천시</td>
<td>극단 풍화</td>
<td>문화공연</td>
<td>요양시설 인형극 공연, 연극공연, 동화구연 등</td>
<td>15/15</td>
  </tr>
  <tr>
<td>43</td>
<td>순천시</td>
<td>소리나누미</td>
<td>문화공연</td>
<td>재능기부(색소폰, 하모니카, 오카리나,무용, 난타 등)</td>
<td>12/11</td>
  </tr>
  <tr>
<td>44</td>
<td>순천시</td>
<td>나눔우리</td>
<td>기타</td>
<td>　</td>
<td>19</td>
  </tr>
  <tr>
<td>45</td>
<td>순천시</td>
<td>(사)한국원예치료복지협회 순천지부</td>
<td>기타</td>
<td>원예치료</td>
<td>15</td>
  </tr>
  <tr>
<td>46</td>
<td>순천시</td>
<td>순천시 행복학습센터협의회</td>
<td>기타</td>
<td>　</td>
<td>15/12</td>
  </tr>
  <tr>
<td>47</td>
<td>순천시</td>
<td>(사)한국안전보건문화협회</td>
<td>건강지원</td>
<td>　</td>
<td>144</td>
  </tr>
  <tr>
<td>48</td>
<td>순천시</td>
<td>Voice 색소폰 동호회</td>
<td>문화공연</td>
<td>색소폰 공연</td>
<td>12/9</td>
  </tr>
  <tr>
<td>49</td>
<td>순천시</td>
<td>창의 메이커스</td>
<td>기타</td>
<td>　</td>
<td>17</td>
  </tr>
  <tr>
<td>50</td>
<td>순천시</td>
<td>(사)한국국악협회순천시지부</td>
<td>문화공연</td>
<td>재능기부(국악)</td>
<td>46</td>
  </tr>
  <tr>
<td>51</td>
<td>순천시</td>
<td>신대 중흥1차 부녀회</td>
<td>기타</td>
<td>재능기부(독거노인 모자, 목도리뜨기), 농촌일손돕기, 자연보호 캠페인</td>
<td>17/12</td>
  </tr>
  <tr>
<td>52</td>
<td>순천시</td>
<td>아해뜰봉사대</td>
<td>기타</td>
<td>재능기부(관내 유치원, 초등학생,어르신 대상 예체능 중심의 교육봉사활동 및 환경게시판 제작과 사진촬영 등)</td>
<td>71/50</td>
  </tr>
  <tr>
<td>53</td>
<td>순천시</td>
<td>햇살도배봉사단</td>
<td>주거개선</td>
<td>재능기부(도배)</td>
<td>17</td>
  </tr>
  <tr>
<td>54</td>
<td>순천시</td>
<td>나눔21</td>
<td>주거개선</td>
<td>일년에 두번 집수리(도배 기술자 초빙)</td>
<td>12</td>
  </tr>
  <tr>
<td>55</td>
<td>순천시</td>
<td>신바람 문화봉사단</td>
<td>건강지원</td>
<td>웃음치료</td>
<td>15</td>
  </tr>
  <tr>
<td>56</td>
<td>순천시</td>
<td>대한적십자 목련봉사회</td>
<td>음식나눔</td>
<td>주방, 재능기부(제과제빵)</td>
<td>9</td>
  </tr>
  <tr>
<td>57</td>
<td>순천시</td>
<td>순천소리여행</td>
<td>문화공연</td>
<td>공연(오카리나)</td>
<td>12</td>
  </tr>
  <tr>
<td>58</td>
<td>순천시</td>
<td>순천시니어 봉사단</td>
<td>문화공연</td>
<td>인형극</td>
<td>22</td>
  </tr>
  <tr>
<td>59</td>
<td>순천시</td>
<td>사랑의무지개봉사단</td>
<td>주거개선</td>
<td>재능기부(맥가이어-집수리)</td>
<td>33</td>
  </tr>
  <tr>
<td>60</td>
<td>순천시</td>
<td>다도예절가회</td>
<td>문화공연</td>
<td>다도</td>
<td>14</td>
  </tr>
  <tr>
<td>61</td>
<td>순천시</td>
<td>고운선 예술단</td>
<td>문화공연</td>
<td>공연(무용, 민요, 가요)</td>
<td>10</td>
  </tr>
  <tr>
<td>62</td>
<td>순천시</td>
<td>초아 봉사단</td>
<td>문화공연</td>
<td>한국무용, 색소폰 연주, 노래 봉사 등</td>
<td>11</td>
  </tr>
  <tr>
<td>63</td>
<td>순천시</td>
<td>순천색소폰나라</td>
<td>문화공연</td>
<td>공연(색소폰, 오카리나 등)</td>
<td>12</td>
  </tr>
  <tr>
<td>64</td>
<td>순천시</td>
<td>파랑새 봉사단</td>
<td>건강지원</td>
<td>멘토링, 치매예방교육</td>
<td>12</td>
  </tr>
  <tr>
<td>65</td>
<td>순천시</td>
<td>순천전력기술인우정협의회</td>
<td>주거개선</td>
<td>전기 관련, 집수리전문(주말,평일x), 등산로 환경정화</td>
<td>12</td>
  </tr>
  <tr>
<td>66</td>
<td>순천시</td>
<td>빛나봉사단</td>
<td>주거개선</td>
<td>재능기부(페인팅)</td>
<td>14</td>
  </tr>
  <tr>
<td>67</td>
<td>순천시</td>
<td>희망원정공감대</td>
<td>기타</td>
<td>학생+학부모, 교육봉사,재능기부(요리, 제작활동), 교통환경캠페인, 통역, 상담 및 멘토링</td>
<td>32/31</td>
  </tr>
  <tr>
<td>68</td>
<td>순천시</td>
<td>동부직업전문학교</td>
<td>주거개선</td>
<td>재능기부(기술, 기능)</td>
<td>34/25</td>
  </tr>
  <tr>
<td>69</td>
<td>순천시</td>
<td>정원 색소폰</td>
<td>문화공연</td>
<td>공연(색소폰)</td>
<td>10</td>
  </tr>
  <tr>
<td>70</td>
<td>순천시</td>
<td>누리치매예방교육센터</td>
<td>건강지원</td>
<td>치매예방교육</td>
<td>13</td>
  </tr>
  <tr>
<td>71</td>
<td>순천시</td>
<td>하모애락</td>
<td>문화공연</td>
<td>공연(하모니카)</td>
<td>17</td>
  </tr>
  <tr>
<td>72</td>
<td>순천시</td>
<td>너,나,우리 봉사단</td>
<td>문화공연</td>
<td>공연, 치매교육 등</td>
<td>32/19</td>
  </tr>
  <tr>
<td>73</td>
<td>순천시</td>
<td>순천드론동호회봉사단</td>
<td>기타</td>
<td>-</td>
<td>19</td>
  </tr>
  <tr>
<td>74</td>
<td>순천시</td>
<td>하하호호 웃음봉사단</td>
<td>건강지원</td>
<td>웃음치료</td>
<td>13</td>
  </tr>
  <tr>
<td>75</td>
<td>순천시</td>
<td>대한미용사회 순천시지부</td>
<td>뷰티</td>
<td>재능기부(이미용봉사-군부대, 의경부대)</td>
<td>23</td>
  </tr>
  <tr>
<td>76</td>
<td>순천시</td>
<td>승평문화예술연구회</td>
<td>문화공연</td>
<td>공연</td>
<td>15</td>
  </tr>
  <tr>
<td>77</td>
<td>순천시</td>
<td>순천여성문화봉사단</td>
<td>음식나눔</td>
<td>재능기부(제과제빵 등)</td>
<td>10</td>
  </tr>
  <tr>
<td>78</td>
<td>순천시</td>
<td>나눔회</td>
<td>건강지원</td>
<td>소외계층 웃음치료</td>
<td>19</td>
  </tr>
  <tr>
<td>79</td>
<td>순천시</td>
<td>따따시봉사단</td>
<td>음식나눔</td>
<td>재능기부(제과제빵)</td>
<td>15/15</td>
  </tr>
  <tr>
<td>80</td>
<td>순천시</td>
<td>전남동부지역기능장협의회</td>
<td>주거개선</td>
<td>재능기부(대문수리, 페인트, 방충망,용접, 전기 등)</td>
<td>45/25</td>
  </tr>
  <tr>
<td>81</td>
<td>순천시</td>
<td>꾸미봉사단</td>
<td>기타</td>
<td>재능기부(폐현수막 재활용 공예)</td>
<td>15</td>
  </tr>
  <tr>
<td>82</td>
<td>순천시</td>
<td>나눔사랑</td>
<td>뷰티</td>
<td>재능기부(이미용)-요양병원 및 요양원위주</td>
<td>20/15</td>
  </tr>
  <tr>
<td>83</td>
<td>순천시</td>
<td>전남 순천 거미동</td>
<td>기타</td>
<td>재능기부(벽화)</td>
<td>11</td>
  </tr>
  <tr>
<td>84</td>
<td>순천시</td>
<td>커피마루봉사단</td>
<td>음식나눔</td>
<td>핸드드립커피 재능기부</td>
<td>12/12</td>
  </tr>
  <tr>
<td>85</td>
<td>순천시</td>
<td>순천시문화예술시민재능기부협회</td>
<td>기타</td>
<td>　</td>
<td>18</td>
  </tr>
  <tr>
<td>86</td>
<td>순천시</td>
<td>순천'이웃사랑'나눔예술단</td>
<td>문화공연</td>
<td>공연</td>
<td>9</td>
  </tr>
  <tr>
<td>87</td>
<td>순천시</td>
<td>스마일 스토리</td>
<td>문화공연</td>
<td>웃음, 레크레이션</td>
<td>14</td>
  </tr>
  <tr>
<td>88</td>
<td>순천시</td>
<td>한마음청년봉사단</td>
<td>기타</td>
<td>위안부 관련 역사 및 평화운동</td>
<td>37</td>
  </tr>
  <tr>
<td>89</td>
<td>순천시</td>
<td>소리사랑</td>
<td>문화공연</td>
<td>공연봉사</td>
<td>13</td>
  </tr>
  <tr>
<td>90</td>
<td>순천시</td>
<td>재미난협동조합</td>
<td>문화공연</td>
<td>　</td>
<td>11</td>
  </tr>
  <tr>
<td>91</td>
<td>순천시</td>
<td>순천시 YMCA 합창단</td>
<td>문화공연</td>
<td>공연, 광양 요양원 2곳 주기적으로봉사</td>
<td>16</td>
  </tr>
  <tr>
<td>92</td>
<td>순천시</td>
<td>청공해</td>
<td>기타</td>
<td>급식봉사, 거리 정화, 연탄봉사 등</td>
<td>59</td>
  </tr>
  <tr>
<td>93</td>
<td>순천시</td>
<td>순둥이</td>
<td>기타</td>
<td>교육</td>
<td>13</td>
  </tr>
  <tr>
<td>94</td>
<td>순천시</td>
<td>다사랑</td>
<td>주거개선</td>
<td>집수리</td>
<td>14</td>
  </tr>
  <tr>
<td>95</td>
<td>순천시</td>
<td>함께나누미</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td>13</td>
  </tr>
  <tr>
<td>96</td>
<td>순천시</td>
<td>제일의료봉사</td>
<td>건강지원</td>
<td>의료봉사</td>
<td>17</td>
  </tr>
  <tr>
<td>97</td>
<td>순천시</td>
<td>벗</td>
<td>주거개선</td>
<td>집수리, 쌀기부</td>
<td>12</td>
  </tr>
  <tr>
<td>98</td>
<td>순천시</td>
<td>기쁨의 공동체</td>
<td>기타</td>
<td>벽화 봉사</td>
<td>11</td>
  </tr>
  <tr>
<td>99</td>
<td>순천시</td>
<td>행복교육시민모임 순천지회</td>
<td>기타</td>
<td>다문화 교육</td>
<td>24</td>
  </tr>
  <tr>
<td>100</td>
<td>순천시</td>
<td>레몬</td>
<td>문화공연</td>
<td>재능기부(게릴라 콘서트 - 장사 안되는가게에서 음악 봉사)</td>
<td>11</td>
  </tr>
  <tr>
<td>101</td>
<td>순천시</td>
<td>차차차 힐링 봉사단</td>
<td>문화공연</td>
<td>재능기부(양로원, 경로당,위문공연-노래, 율동, 장구, 난타 등)</td>
<td>18</td>
  </tr>
  <tr>
<td>102</td>
<td>순천시</td>
<td>우리가락,우리춤</td>
<td>문화공연</td>
<td>재능기부(한국무용, 가락, 장구)</td>
<td>14</td>
  </tr>
  <tr>
<td>103</td>
<td>순천시</td>
<td>119 섬나회</td>
<td>주거개선</td>
<td>방충망, 요양병원 공연, 소방안전교육및 소화기, 화재 감지기 보급, 연탄배달 등</td>
<td>78/59</td>
  </tr>
  <tr>
<td>104</td>
<td>순천시</td>
<td>순천사랑나눔 봉사단</td>
<td>기타</td>
<td>노인복지회관 청소 및 배식보조, 말벗,농촌일손돕기, 손마사지 및 네일, 쿠키만들기 및 나눔, 벽화봉사, 요양원 공연 등</td>
<td>15</td>
  </tr>
  <tr>
<td>105</td>
<td>순천시</td>
<td>캘누리 봉사단</td>
<td>기타</td>
<td>재능기부(캘리그라피)</td>
<td>12/12</td>
  </tr>
  <tr>
<td>106</td>
<td>순천시</td>
<td>기억지킴이</td>
<td>건강지원</td>
<td>치매예방, 레크레이션</td>
<td>10</td>
  </tr>
  <tr>
<td>107</td>
<td>순천시</td>
<td>생.우.동(생협우쿠렐레동아리)</td>
<td>문화공연</td>
<td>우쿠렐레 재능기부</td>
<td>10</td>
  </tr>
  <tr>
<td>108</td>
<td>순천시</td>
<td>오렌지</td>
<td>문화공연</td>
<td>노래 공연</td>
<td>18</td>
  </tr>
  <tr>
<td>109</td>
<td>순천시</td>
<td>참소리 문화 봉사회</td>
<td>문화공연</td>
<td>재능기부(악기 연주, 공연 봉사)</td>
<td>15</td>
  </tr>
  <tr>
<td>110</td>
<td>순천시</td>
<td>사랑나눔 문화예술봉사단</td>
<td>문화공연</td>
<td>요양병원, 복지관, 마을 회관 등 월2~3회 공연봉사</td>
<td>10</td>
  </tr>
  <tr>
<td>111</td>
<td>순천시</td>
<td>굿 하모니</td>
<td>문화공연</td>
<td>하모니카연주</td>
<td>20</td>
  </tr>
  <tr>
<td>112</td>
<td>순천시</td>
<td>두레전기봉사회</td>
<td>주거개선</td>
<td>취약계층 전기봉사</td>
<td>18/18</td>
  </tr>
  <tr>
<td>113</td>
<td>순천시</td>
<td>순천 필하모닉 오케스트라</td>
<td>문화공연</td>
<td>공연봉사 분기별 1회</td>
<td>15</td>
  </tr>
  <tr>
<td>114</td>
<td>순천시</td>
<td>드림색소폰</td>
<td>문화공연</td>
<td>색소폰동호회 공연봉사</td>
<td>15/8</td>
  </tr>
  <tr>
<td>115</td>
<td>순천시</td>
<td>아리랑풍류</td>
<td>문화공연</td>
<td>국악공연, 재능기부 등</td>
<td>8</td>
  </tr>
  <tr>
<td>116</td>
<td>순천시</td>
<td>신대 해동꾸러기들</td>
<td>문화공연</td>
<td>재능기부(전통무예 공연, 지역문화행사공연지원), 길거리 청소 봉사 등</td>
<td>26</td>
  </tr>
  <tr>
<td>117</td>
<td>순천시</td>
<td>순천 나무 사랑꾼들</td>
<td>기타</td>
<td>순천시 수목관리 및 수목관리 교육(관련과 협조 얻은 후 수목관리 봉사 진행 예정)</td>
<td>20/16</td>
  </tr>
  <tr>
<td>118</td>
<td>순천시</td>
<td>아리랑 행복봉사단</td>
<td>문화공연</td>
<td>재능기부(웃음치료, 노래), 치매 예방교육</td>
<td>13</td>
  </tr>
  <tr>
<td>119</td>
<td>순천시</td>
<td>순천팔마음악회</td>
<td>문화공연</td>
<td>재능기부(공연봉사)</td>
<td>16</td>
  </tr>
  <tr>
<td>120</td>
<td>순천시</td>
<td>우먼락</td>
<td>문화공연</td>
<td>재능기부(퓨전난타 공연)</td>
<td>12</td>
  </tr>
  <tr>
<td>121</td>
<td>순천시</td>
<td>순천만 프랜즈 하모니</td>
<td>문화공연</td>
<td>재능기부(공연봉사 - 노래, 여러악기, 댄스, 난타, 마술 등)</td>
<td>11</td>
  </tr>
  <tr>
<td>122</td>
<td>순천시</td>
<td>행복봉사회 순천지회</td>
<td>문화공연</td>
<td>재능기부(공연, 판소리, 웃음치료,마술 등)</td>
<td>17/12</td>
  </tr>
  <tr>
<td>123</td>
<td>순천시</td>
<td>예술을 사랑하는 모임(예사모)</td>
<td>기타</td>
<td>전시회 가서 작품 해설(본인 작품은실적 인정 안된다고 안내), 어르신 미술 놀이</td>
<td>10</td>
  </tr>
  <tr>
<td>124</td>
<td>순천시</td>
<td>순천반찬나눔봉사대</td>
<td>음식나눔</td>
<td>반찬, 집수리(도배, 장판, 타일,문수리 등) 봉사 - 조부모 가정 및 기타 대상</td>
<td>10</td>
  </tr>
  <tr>
<td>125</td>
<td>순천시</td>
<td>따사봉(따뜻한 사람들의 봉사모임)</td>
<td>기타</td>
<td>독거노인 및 취약계층 장수사진촬영(방문 촬영)</td>
<td>12</td>
  </tr>
  <tr>
<td>126</td>
<td>순천시</td>
<td>전남도배하는청년들</td>
<td>주거개선</td>
<td>집수리(도배)</td>
<td>10</td>
  </tr>
  <tr>
<td>127</td>
<td>순천시</td>
<td>청암대학교 연합봉사단</td>
<td>뷰티</td>
<td>기관 방문 이미용, 물리치료 등</td>
<td>14</td>
  </tr>
  <tr>
<td>128</td>
<td>순천시</td>
<td>다반사자원봉사단</td>
<td>주거개선</td>
<td>집수리(도배)</td>
<td>10</td>
  </tr>
  <tr>
<td>129</td>
<td>순천시</td>
<td>왕이 별빛 재능봉사단</td>
<td>기타</td>
<td>재능기부</td>
<td>12</td>
  </tr>
  <tr>
<td>130</td>
<td>순천시</td>
<td>반려복지협회</td>
<td>기타</td>
<td>동물보호 및 동물관련 캠페인</td>
<td>12/11</td>
  </tr>
  <tr>
<td>131</td>
<td>순천시</td>
<td>순천 YSP(세계평화청년학생연합)</td>
<td>기타</td>
<td>UN의 '지속가능한발전목표'를 달성하는평화사업을 진행,청년학생을 글로벌 시민으로 교육함.</td>
<td>15/15</td>
  </tr>
  <tr>
<td>132</td>
<td>순천시</td>
<td>곤지곤지놀이동아리</td>
<td>기타</td>
<td>전통 및 전래놀이, 생태놀이</td>
<td>14/13</td>
  </tr>
  <tr>
<td>133</td>
<td>순천시</td>
<td>예술봉사단 다온</td>
<td>문화공연</td>
<td>재능기부 봉사(국악)</td>
<td>21/17</td>
  </tr>
  <tr>
<td>134</td>
<td>순천시</td>
<td>힐링문화예술단</td>
<td>문화공연</td>
<td>재능기부, 지역문화행사 및 문화예술시설봉사(통기타,한국무용,라인,난타,플룻 등)</td>
<td>15/13</td>
  </tr>
  <tr>
<td>135</td>
<td>순천시</td>
<td>순천 팔마 문화예술단</td>
<td>문화공연</td>
<td>재능기부, 문화행사 및공연봉사(노래,무용,악기,색소폰,난타,아쟁 등)</td>
<td>28/22</td>
  </tr>
  <tr>
<td>136</td>
<td>순천시</td>
<td>척척봉사단</td>
<td>주거개선</td>
<td>정리수납(재능기부전문봉사단)</td>
<td>17/17</td>
  </tr>
  <tr>
<td>137</td>
<td>순천시</td>
<td>따뜻한 봉사단</td>
<td>기타</td>
<td>업사이클활동(양말목공예,아이스팩활용),환경정화</td>
<td>18/18</td>
  </tr>
  <tr>
<td>138</td>
<td>순천시</td>
<td>순천로컬푸드 식문화강사 동아리</td>
<td>건강지원</td>
<td>건강먹거리를 활용한 바른 식생활 교육</td>
<td>14/10</td>
  </tr>
  <tr>
<td>139</td>
<td>순천시</td>
<td>씨앤씨</td>
<td>기타</td>
<td>재능기부(미술,벽화그리기)</td>
<td>11/10</td>
  </tr>
  <tr>
<td>140</td>
<td>순천시</td>
<td>화랑회봉사연맹</td>
<td>주거개선</td>
<td>집수리 봉사</td>
<td>26/17</td>
  </tr>
  <tr>
<td>141</td>
<td>순천시</td>
<td>우리봉사단</td>
<td>문화공연</td>
<td>재능기부 공연봉사활동</td>
<td>13/11</td>
  </tr>
  <tr>
<td>142</td>
<td>순천시</td>
<td>남도가애락</td>
<td>문화공연</td>
<td>재능기부 공연봉사활동</td>
<td>12</td>
  </tr>
  <tr>
<td>143</td>
<td>순천시</td>
<td>순천청소년오케스트라</td>
<td>문화공연</td>
<td>재능기부 공연봉사활동</td>
<td>32</td>
  </tr>
  <tr>
<td>144</td>
<td>순천시</td>
<td>전남ECO시민오카세트라</td>
<td>문화공연</td>
<td>재능기부 공연봉사활동</td>
<td>10</td>
  </tr>
  <tr>
<td>145</td>
<td>순천시</td>
<td>꽃으로물들다</td>
<td>기타</td>
<td>재능기부 봉사활동, 양말목공예 및환경정화</td>
<td>12</td>
  </tr>
  <tr>
<td>146</td>
<td>순천시</td>
<td>무지개봉사단</td>
<td>문화공연</td>
<td>재능기부 이미용/지역문화행사지원</td>
<td>17</td>
  </tr>
  <tr>
<td>147</td>
<td>순천시</td>
<td>3.4음색소폰</td>
<td>문화공연</td>
<td>재능기부 공연활동</td>
<td>14</td>
  </tr>
  <tr>
<td>148</td>
<td>순천시</td>
<td>넝쿨봉사단</td>
<td>문화공연</td>
<td>재능기부 공연활동</td>
<td>14</td>
  </tr>
  <tr>
<td>149</td>
<td>순천시</td>
<td>해피드림봉사단</td>
<td>문화공연</td>
<td>재능기부 공연활동</td>
<td>41</td>
  </tr>
  <tr>
<td>150</td>
<td>순천시</td>
<td>뜰샘원예복지센터</td>
<td>기타</td>
<td>재능기부 원예치료</td>
<td>15</td>
  </tr>
  <tr>
<td>151</td>
<td>순천시</td>
<td>사랑의띠복지협회</td>
<td>기타</td>
<td>재능기부 체험활동</td>
<td>50</td>
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
