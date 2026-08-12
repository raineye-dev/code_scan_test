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
  
   <?include G5_THEME_PATH."/sub_left_03.php";?>

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
  <thead class="mobile_no">
    <tr>
      <th scope="col" style="width:7%;" class="mobile_no">번호</th>
      <th scope="col" style="width:10%;">지역</th>
      <th scope="col" style="width:25%;">단체명</th>
      <th scope="col" style="width:10%;">활동분야</th>
      <th scope="col" style="">활동내용</th>
	  <th scope="col" style="width:10%;" class="mobile_no">회원수</th>
    </tr>
  </thead>
  
  <tbody>
	<tr>
<td class="mobile_no">1</td>
<td>목포시</td>
<td>건강복지발전소</td>
<td>건강지원</td>
<td>물리치료등</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">2</td>
<td>목포시</td>
<td>늘벗장애인후원회</td>
<td>문화공연</td>
<td>가수공연,댄스(밸리)등</td>
<td class="mobile_no">100</td>
</tr>
<tr>
<td class="mobile_no">3</td>
<td>목포시</td>
<td>두꺼비봉사단</td>
<td>주거개선</td>
<td>집수리자원봉사활동</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">4</td>
<td>목포시</td>
<td>목포여성자원봉사협의회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td class="mobile_no">115</td>
</tr>
<tr>
<td class="mobile_no">5</td>
<td>목포시</td>
<td>반딧불벽화봉사단</td>
<td>주거개선</td>
<td>벽화봉사</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">6</td>
<td>목포시</td>
<td>사랑나눔봉사회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td class="mobile_no">48</td>
</tr>
<tr>
<td class="mobile_no">7</td>
<td>목포시</td>
<td>소리터</td>
<td>문화공연</td>
<td>풍물놀이,민요,한량무,진도북놀이</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">8</td>
<td>목포시</td>
<td>(사)목포사랑봉사회</td>
<td>기타</td>
<td>정리수납,대청소자원봉사활동</td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">9</td>
<td>목포시</td>
<td>목만사봉사단</td>
<td>건강지원</td>
<td>치과,한방,양방의료지원</td>
<td class="mobile_no">70</td>
</tr>
<tr>
<td class="mobile_no">10</td>
<td>목포시</td>
<td>한국열관리시공협회전라남도회</td>
<td>주거개선</td>
<td>보일러시공,점검수리</td>
<td class="mobile_no">300</td>
</tr>
<tr>
<td class="mobile_no">11</td>
<td>목포시</td>
<td>(원산동봉사회)대한적십자사봉사회목포지구협의회</td>
<td>음식나눔</td>
<td>독거세대/위기가정반찬나눔</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">12</td>
<td>목포시</td>
<td>마술여행주식회사</td>
<td>문화공연</td>
<td>마술공연</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">13</td>
<td>목포시</td>
<td>우리민요사랑</td>
<td>문화공연</td>
<td>민요,판소리,한춤,가수공연</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">14</td>
<td>목포시</td>
<td>목포시체조협회</td>
<td>문화공연</td>
<td>건강체조</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">15</td>
<td>목포시</td>
<td>대한적십자개미미용봉사회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">16</td>
<td>목포시</td>
<td>다원봉사후원회</td>
<td>주거개선</td>
<td>방충망교체,범죄예방환경조성</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">17</td>
<td>여수시</td>
<td>(사)해양환경인명구조단여수구조대</td>
<td>기타</td>
<td>수중정화활동및해안가청결활동등</td>
<td class="mobile_no">85</td>
</tr>
<tr>
<td class="mobile_no">18</td>
<td>여수시</td>
<td>낭만여수장구사랑</td>
<td>문화공연</td>
<td>복지시설장구공연</td>
<td class="mobile_no">29</td>
</tr>
<tr>
<td class="mobile_no">19</td>
<td>여수시</td>
<td>놀이마당들풀</td>
<td>문화공연</td>
<td>저소득층대상국악공연 </td>
<td class="mobile_no">160</td>
</tr>
<tr>
<td class="mobile_no">20</td>
<td>여수시</td>
<td>요리조리행복나눔</td>
<td>음식나눔</td>
<td>소외계층음식지원등</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">21</td>
<td>여수시</td>
<td>(사)한반도개발연합호남회</td>
<td>뷰티</td>
<td>이·미용및네일아트</td>
<td class="mobile_no">27</td>
</tr>
<tr>
<td class="mobile_no">22</td>
<td>여수시</td>
<td>지구사랑봉사단</td>
<td>기타</td>
<td>환경개선</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">23</td>
<td>여수시</td>
<td>사랑그루터기</td>
<td>주거개선</td>
<td>소외계층집수리등</td>
<td class="mobile_no">77</td>
</tr>
<tr>
<td class="mobile_no">24</td>
<td>여수시</td>
<td>차이나친붕</td>
<td>기타</td>
<td>중국어통역등</td>
<td class="mobile_no">69</td>
</tr>
<tr>
<td class="mobile_no">25</td>
<td>여수시</td>
<td>현애울림</td>
<td>문화공연</td>
<td>소외계층국악공연</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">26</td>
<td>여수시</td>
<td>힐링뮤직단</td>
<td>문화공연</td>
<td>저소득대상음악공원</td>
<td class="mobile_no">41</td>
</tr>
<tr>
<td class="mobile_no">27</td>
<td>여수시</td>
<td>엑스포예술단</td>
<td>문화공연</td>
<td>복지시설전통공연등</td>
<td class="mobile_no">76</td>
</tr>
<tr>
<td class="mobile_no">28</td>
<td>여수시</td>
<td>여수벽화쟁이</td>
<td>기타</td>
<td>벽화그리기 </td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">29</td>
<td>여수시</td>
<td>섬섬문화창작소</td>
<td>음식나눔</td>
<td>음식(빵)나눔</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">30</td>
<td>여수시</td>
<td>여수풍물</td>
<td>문화공연</td>
<td>풍물공연등</td>
<td class="mobile_no">71</td>
</tr>
<tr>
<td class="mobile_no">31</td>
<td>여수시</td>
<td>몽이네예나눔</td>
<td>기타</td>
<td>벽화그리기,페이스페인팅,만화</td>
<td class="mobile_no">92</td>
</tr>
<tr>
<td class="mobile_no">32</td>
<td>여수시</td>
<td>ACE마술동호회</td>
<td>문화공연</td>
<td>마술공연</td>
<td class="mobile_no">42</td>
</tr>
<tr>
<td class="mobile_no">33</td>
<td>여수시</td>
<td>물범다이빙클럽</td>
<td>기타</td>
<td>수중정화활동및해안가청결활동등</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">34</td>
<td>여수시</td>
<td>(사)한국해양구조협회전남동부지부</td>
<td>기타</td>
<td>해양정화활동등</td>
<td class="mobile_no">41</td>
</tr>
<tr>
<td class="mobile_no">35</td>
<td>여수시</td>
<td>아람회</td>
<td>음식나눔</td>
<td>소외계층음식나누기</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">36</td>
<td>여수시</td>
<td>여수미술관</td>
<td>기타</td>
<td>벽화그리기</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">37</td>
<td>여수시</td>
<td>다함께</td>
<td>음식나눔</td>
<td>소외계층김치나누기</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">38</td>
<td>여수시</td>
<td>(사)한국여성소비자엽합회여수지회</td>
<td>음식나눔</td>
<td>소외계층음식나눔</td>
<td class="mobile_no">58</td>
</tr>
<tr>
<td class="mobile_no">39</td>
<td>여수시</td>
<td>함께하는 </td>
<td>주거개선</td>
<td>소외계층집수리등</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">40</td>
<td>여수시</td>
<td>진보사랑봉사단</td>
<td>주거개선</td>
<td>소외계층집수리등</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">41</td>
<td>여수시</td>
<td>미평동주민자치회</td>
<td>음식나눔</td>
<td>소외계층음식나눔 </td>
<td class="mobile_no">78</td>
</tr>
<tr>
<td class="mobile_no">42</td>
<td>여수시</td>
<td>달보드레봉사단</td>
<td>음식나눔</td>
<td>소외계층음식나눔</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">43</td>
<td>여수시</td>
<td>건강활동지원단 </td>
<td>기타</td>
<td>물리치료활동지원 </td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">44</td>
<td>여수시</td>
<td>쪽빛하루</td>
<td>기타</td>
<td>천연염색등 </td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">45</td>
<td>여수시</td>
<td>아름드리봉사단</td>
<td>주거개선</td>
<td>소외계층전기수리등 </td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">46</td>
<td>여수시</td>
<td>감성미용봉사단</td>
<td>뷰티</td>
<td>이·미용및네일아트</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">47</td>
<td>여수시</td>
<td>섬섬노리</td>
<td>기타</td>
<td>공예품만들기</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">48</td>
<td>여수시</td>
<td>더건강해짐</td>
<td>기타</td>
<td>생활건강운동</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">49</td>
<td>순천시</td>
<td>순천시직능자원봉사단</td>
<td>주거개선</td>
<td>재능기부봉사활동,산업안전,용접,농기구수리등</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">50</td>
<td>순천시</td>
<td>국학기공</td>
<td>문화공연</td>
<td>기체조</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">51</td>
<td>순천시</td>
<td>별량농악풍물회</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">52</td>
<td>순천시</td>
<td>순천제일대학교안전봉사대</td>
<td>주거개선</td>
<td>재능기부(전기,가스점검등)</td>
<td class="mobile_no">71</td>
</tr>
<tr>
<td class="mobile_no">53</td>
<td>순천시</td>
<td>순천미술치료사모임(순미모)</td>
<td>문화공연</td>
<td>미술치료</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">54</td>
<td>순천시</td>
<td>순천시120팔마콜봉사단</td>
<td>음식나눔</td>
<td>농촌일손돕기,교통캠페인,반찬나눔,방충망교체,이미용등</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">55</td>
<td>순천시</td>
<td>순천시제과제빵봉사단</td>
<td>음식나눔</td>
<td>매주1회나눔봉사,분기별순천여성문화회관합동봉사,재능기부(제과제빵)</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">56</td>
<td>순천시</td>
<td>예명차</td>
<td>음식나눔</td>
<td>다도봉사</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">57</td>
<td>순천시</td>
<td>팔마음악봉사단</td>
<td>문화공연</td>
<td>매월셋째주금,토어르신생신잔치및공연봉사(색소폰등)-상사비촌9988,은빛마을,가곡동예광마을등</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">58</td>
<td>순천시</td>
<td>제일대SA봉사대</td>
<td>건강지원</td>
<td>재능기부(스포츠마사지)</td>
<td class="mobile_no">55</td>
</tr>
<tr>
<td class="mobile_no">59</td>
<td>순천시</td>
<td>송죽회</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">60</td>
<td>순천시</td>
<td>순천다인회</td>
<td>음식나눔</td>
<td>야생차체험관홍보및관광객차봉사,경로당무료식사등</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">61</td>
<td>순천시</td>
<td>통기타다듬이소리</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">62</td>
<td>순천시</td>
<td>넝쿨사랑봉사회</td>
<td>문화공연</td>
<td>웃음치료,스포츠마사지</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">63</td>
<td>순천시</td>
<td>남도문화유산연구회</td>
<td>문화공연</td>
<td>문화해설봉사(관내초등학생역사교육)</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">64</td>
<td>순천시</td>
<td>대한적십자웃음봉사회</td>
<td>음식나눔</td>
<td>각종시정활동지원,제빵봉사등 </td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">65</td>
<td>순천시</td>
<td>한마음노래봉사단</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">66</td>
<td>순천시</td>
<td>예림회</td>
<td>주거개선</td>
<td>재능기부(도배,건축디자인)</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">67</td>
<td>순천시</td>
<td>이웃사랑실천회&lt;예향예술단&gt;</td>
<td>문화공연</td>
<td>공연(국악팀,가요팀)</td>
<td class="mobile_no">71</td>
</tr>
<tr>
<td class="mobile_no">68</td>
<td>순천시</td>
<td>우리들복지센터</td>
<td>건강지원</td>
<td>의료봉사</td>
<td class="mobile_no">19</td>
</tr>
<tr>
<td class="mobile_no">69</td>
<td>순천시</td>
<td>대한민국특수임무유공자회전남지부순천지회</td>
<td>기타</td>
<td>-</td>
<td class="mobile_no">73</td>
</tr>
<tr>
<td class="mobile_no">70</td>
<td>순천시</td>
<td>나르샤무용단</td>
<td>문화공연</td>
<td>공연(무용)</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">71</td>
<td>순천시</td>
<td>웃음사랑봉사단</td>
<td>문화공연</td>
<td>웃음치료,마술,공연,한국무용,민요,대금,색소폰등</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">72</td>
<td>순천시</td>
<td>다이나믹댄스팀</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">73</td>
<td>순천시</td>
<td>순천시발사랑봉사회</td>
<td>건강지원</td>
<td>발마사지및장애인스포츠재활마사지</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">74</td>
<td>순천시</td>
<td>이야기사랑</td>
<td>기타</td>
<td>학습지도,웃음,체조,동화구연</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">75</td>
<td>순천시</td>
<td>국제문화예술단</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">76</td>
<td>순천시</td>
<td>에코뷰티사랑봉사단</td>
<td>뷰티</td>
<td>재능기부(이미용)</td>
<td class="mobile_no">34</td>
</tr>
<tr>
<td class="mobile_no">77</td>
<td>순천시</td>
<td>순천팔마색소폰</td>
<td>문화공연</td>
<td>공연(색소폰)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">78</td>
<td>순천시</td>
<td>행복굽는사람들</td>
<td>음식나눔</td>
<td>재능기부(제과제빵)</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">79</td>
<td>순천시</td>
<td>주택관리사순천봉사단</td>
<td>주거개선</td>
<td>연중6~7회연계기관으로부터재가장애인및취약계층가정을추천받아도배,장판교체,싱크대교체등주택개보수및주변환경정비</td>
<td class="mobile_no">37</td>
</tr>
<tr>
<td class="mobile_no">80</td>
<td>순천시</td>
<td>순천만습지자연생태해설사</td>
<td>문화공연</td>
<td>순천만해설등</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">81</td>
<td>순천시</td>
<td>무지개예술봉사단</td>
<td>문화공연</td>
<td>재능기부(공연)</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">82</td>
<td>순천시</td>
<td>(사)한국가수협회전남지회</td>
<td>문화공연</td>
<td>재능기부(공연)</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">83</td>
<td>순천시</td>
<td>선비문화예다회</td>
<td>음식나눔</td>
<td>다도</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">84</td>
<td>순천시</td>
<td>다봉사회</td>
<td>기타</td>
<td>흰여울세탁봉사이불운반등</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">85</td>
<td>순천시</td>
<td>(사)한국다문화연예인연합회순천지부</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">86</td>
<td>순천시</td>
<td>새우리봉사단</td>
<td>주거개선</td>
<td>재능기부(집수리,방충망)</td>
<td class="mobile_no">27</td>
</tr>
<tr>
<td class="mobile_no">87</td>
<td>순천시</td>
<td>행복순천시민운동추진위원회</td>
<td>기타</td>
<td>교통캠페인</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">88</td>
<td>순천시</td>
<td>순천재능기부센터순천애인</td>
<td>주거개선</td>
<td>재능기부(이미용,집수리,도배)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">89</td>
<td>순천시</td>
<td>순천제일대학교화동이봉사대</td>
<td>주거개선</td>
<td>재능기부(화재감지기설치등)</td>
<td class="mobile_no">140</td>
</tr>
<tr>
<td class="mobile_no">90</td>
<td>순천시</td>
<td>극단풍화</td>
<td>문화공연</td>
<td>요양시설인형극공연,연극공연,동화구연등</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">91</td>
<td>순천시</td>
<td>소리나누미</td>
<td>문화공연</td>
<td>재능기부(색소폰,하모니카,오카리나,무용,난타등)</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">92</td>
<td>순천시</td>
<td>나눔우리</td>
<td>기타</td>
<td>-</td>
<td class="mobile_no">19</td>
</tr>
<tr>
<td class="mobile_no">93</td>
<td>순천시</td>
<td>(사)한국원예치료복지협회순천지부</td>
<td>기타</td>
<td>원예치료</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">94</td>
<td>순천시</td>
<td>순천시행복학습센터협의회</td>
<td>기타</td>
<td>-</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">95</td>
<td>순천시</td>
<td>(사)한국안전보건문화협회</td>
<td>건강지원</td>
<td>-</td>
<td class="mobile_no">144</td>
</tr>
<tr>
<td class="mobile_no">96</td>
<td>순천시</td>
<td>Voice색소폰동호회</td>
<td>문화공연</td>
<td>색소폰공연</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">97</td>
<td>순천시</td>
<td>창의메이커스</td>
<td>기타</td>
<td>　</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">98</td>
<td>순천시</td>
<td>(사)한국국악협회순천시지부</td>
<td>문화공연</td>
<td>재능기부(국악)</td>
<td class="mobile_no">46</td>
</tr>
<tr>
<td class="mobile_no">99</td>
<td>순천시</td>
<td>신대중흥1차부녀회</td>
<td>기타</td>
<td>재능기부(독거노인모자,목도리뜨기),농촌일손돕기,자연보호캠페인</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">100</td>
<td>순천시</td>
<td>아해뜰봉사대</td>
<td>기타</td>
<td>재능기부(관내유치원,초등학생,어르신대상예체능중심의교육봉사활동및환경게시판제작과사진촬영등)</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">101</td>
<td>순천시</td>
<td>햇살도배봉사단</td>
<td>주거개선</td>
<td>재능기부(도배)</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">102</td>
<td>순천시</td>
<td>나눔21</td>
<td>주거개선</td>
<td>일년에두번집수리(도배기술자초빙)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">103</td>
<td>순천시</td>
<td>신바람문화봉사단</td>
<td>건강지원</td>
<td>웃음치료</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">104</td>
<td>순천시</td>
<td>대한적십자목련봉사회</td>
<td>음식나눔</td>
<td>주방,재능기부(제과제빵)</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">105</td>
<td>순천시</td>
<td>순천소리여행</td>
<td>문화공연</td>
<td>공연(오카리나)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">106</td>
<td>순천시</td>
<td>순천시니어봉사단</td>
<td>문화공연</td>
<td>인형극</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">107</td>
<td>순천시</td>
<td>사랑의무지개봉사단</td>
<td>주거개선</td>
<td>재능기부(맥가이어-집수리)</td>
<td class="mobile_no">33</td>
</tr>
<tr>
<td class="mobile_no">108</td>
<td>순천시</td>
<td>다도예절가회</td>
<td>문화공연</td>
<td>다도</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">109</td>
<td>순천시</td>
<td>고운선예술단</td>
<td>문화공연</td>
<td>공연(무용,민요,가요)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">110</td>
<td>순천시</td>
<td>초아봉사단</td>
<td>문화공연</td>
<td>한국무용,색소폰연주,노래봉사등</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">111</td>
<td>순천시</td>
<td>순천색소폰나라</td>
<td>문화공연</td>
<td>공연(색소폰,오카리나등)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">112</td>
<td>순천시</td>
<td>파랑새봉사단</td>
<td>건강지원</td>
<td>멘토링,치매예방교육</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">113</td>
<td>순천시</td>
<td>순천전력기술인우정협의회</td>
<td>주거개선</td>
<td>전기관련,집수리전문(주말,평일x),등산로환경정화</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">114</td>
<td>순천시</td>
<td>빛나봉사단</td>
<td>주거개선</td>
<td>재능기부(페인팅)</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">115</td>
<td>순천시</td>
<td>희망원정공감대</td>
<td>기타</td>
<td>학생+학부모,교육봉사,재능기부(요리,제작활동),교통환경캠페인,통역,상담및멘토링</td>
<td class="mobile_no">31</td>
</tr>
<tr>
<td class="mobile_no">116</td>
<td>순천시</td>
<td>동부직업전문학교</td>
<td>주거개선</td>
<td>재능기부(기술,기능)</td>
<td class="mobile_no">25</td>
</tr>
<tr>
<td class="mobile_no">117</td>
<td>순천시</td>
<td>정원색소폰</td>
<td>문화공연</td>
<td>공연(색소폰)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">118</td>
<td>순천시</td>
<td>누리치매예방교육센터</td>
<td>건강지원</td>
<td>치매예방교육</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">119</td>
<td>순천시</td>
<td>하모애락</td>
<td>문화공연</td>
<td>공연(하모니카)</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">120</td>
<td>순천시</td>
<td>너,나,우리봉사단</td>
<td>문화공연</td>
<td>공연,치매교육등</td>
<td class="mobile_no">19</td>
</tr>
<tr>
<td class="mobile_no">121</td>
<td>순천시</td>
<td>순천드론동호회봉사단</td>
<td>기타</td>
<td>-</td>
<td class="mobile_no">19</td>
</tr>
<tr>
<td class="mobile_no">122</td>
<td>순천시</td>
<td>하하호호웃음봉사단</td>
<td>건강지원</td>
<td>웃음치료</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">123</td>
<td>순천시</td>
<td>대한미용사회순천시지부</td>
<td>뷰티</td>
<td>재능기부(이미용봉사-군부대,의경부대)</td>
<td class="mobile_no">23</td>
</tr>
<tr>
<td class="mobile_no">124</td>
<td>순천시</td>
<td>승평문화예술연구회</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">125</td>
<td>순천시</td>
<td>순천여성문화봉사단</td>
<td>음식나눔</td>
<td>재능기부(제과제빵등)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">126</td>
<td>순천시</td>
<td>나눔회</td>
<td>건강지원</td>
<td>소외계층웃음치료</td>
<td class="mobile_no">19</td>
</tr>
<tr>
<td class="mobile_no">127</td>
<td>순천시</td>
<td>따따시봉사단</td>
<td>음식나눔</td>
<td>재능기부(제과제빵)</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">128</td>
<td>순천시</td>
<td>전남동부지역기능장협의회</td>
<td>주거개선</td>
<td>재능기부(대문수리,페인트,방충망,용접,전기등)</td>
<td class="mobile_no">25</td>
</tr>
<tr>
<td class="mobile_no">129</td>
<td>순천시</td>
<td>꾸미봉사단</td>
<td>기타</td>
<td>재능기부(폐현수막재활용공예)</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">130</td>
<td>순천시</td>
<td>나눔사랑</td>
<td>뷰티</td>
<td>재능기부(이미용)-요양병원및요양원위주</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">131</td>
<td>순천시</td>
<td>전남순천거미동</td>
<td>기타</td>
<td>재능기부(벽화)</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">132</td>
<td>순천시</td>
<td>커피마루봉사단</td>
<td>음식나눔</td>
<td>핸드드립커피재능기부</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">133</td>
<td>순천시</td>
<td>순천시문화예술시민재능기부협회</td>
<td>기타</td>
<td>　</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">134</td>
<td>순천시</td>
<td>순천'이웃사랑'나눔예술단</td>
<td>문화공연</td>
<td>공연</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">135</td>
<td>순천시</td>
<td>스마일스토리</td>
<td>문화공연</td>
<td>웃음,레크레이션</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">136</td>
<td>순천시</td>
<td>한마음청년봉사단</td>
<td>기타</td>
<td>위안부관련역사및평화운동</td>
<td class="mobile_no">37</td>
</tr>
<tr>
<td class="mobile_no">137</td>
<td>순천시</td>
<td>소리사랑</td>
<td>문화공연</td>
<td>공연봉사</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">138</td>
<td>순천시</td>
<td>재미난협동조합</td>
<td>문화공연</td>
<td>　</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">139</td>
<td>순천시</td>
<td>순천시YMCA합창단</td>
<td>문화공연</td>
<td>공연,광양요양원2곳주기적으로봉사</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">140</td>
<td>순천시</td>
<td>청공해</td>
<td>기타</td>
<td>급식봉사,거리정화,연탄봉사등</td>
<td class="mobile_no">59</td>
</tr>
<tr>
<td class="mobile_no">141</td>
<td>순천시</td>
<td>순둥이</td>
<td>기타</td>
<td>교육</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">142</td>
<td>순천시</td>
<td>다사랑</td>
<td>주거개선</td>
<td>집수리</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">143</td>
<td>순천시</td>
<td>함께나누미</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">144</td>
<td>순천시</td>
<td>제일의료봉사</td>
<td>건강지원</td>
<td>의료봉사</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">145</td>
<td>순천시</td>
<td>벗</td>
<td>주거개선</td>
<td>집수리,쌀기부</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">146</td>
<td>순천시</td>
<td>기쁨의공동체</td>
<td>기타</td>
<td>벽화봉사</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">147</td>
<td>순천시</td>
<td>행복교육시민모임순천지회</td>
<td>기타</td>
<td>다문화교육</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">148</td>
<td>순천시</td>
<td>레몬</td>
<td>문화공연</td>
<td>재능기부(게릴라콘서트-장사안되는가게에서음악봉사)</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">149</td>
<td>순천시</td>
<td>차차차힐링봉사단</td>
<td>문화공연</td>
<td>재능기부(양로원,경로당,위문공연-노래,율동,장구,난타등)</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">150</td>
<td>순천시</td>
<td>우리가락,우리춤</td>
<td>문화공연</td>
<td>재능기부(한국무용,가락,장구)</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">151</td>
<td>순천시</td>
<td>119섬나회</td>
<td>주거개선</td>
<td>방충망,요양병원공연,소방안전교육및소화기,화재감지기보급,연탄배달등</td>
<td class="mobile_no">59</td>
</tr>
<tr>
<td class="mobile_no">152</td>
<td>순천시</td>
<td>순천사랑나눔봉사단</td>
<td>기타</td>
<td>노인복지회관청소및배식보조,말벗,농촌일손돕기,손마사지및네일,쿠키만들기및나눔,벽화봉사,요양원공연등</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">153</td>
<td>순천시</td>
<td>캘누리봉사단</td>
<td>기타</td>
<td>재능기부(캘리그라피)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">154</td>
<td>순천시</td>
<td>기억지킴이</td>
<td>건강지원</td>
<td>치매예방,레크레이션</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">155</td>
<td>순천시</td>
<td>생.우.동(생협우쿠렐레동아리)</td>
<td>문화공연</td>
<td>우쿠렐레재능기부</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">156</td>
<td>순천시</td>
<td>오렌지</td>
<td>문화공연</td>
<td>노래공연</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">157</td>
<td>순천시</td>
<td>참소리문화봉사회</td>
<td>문화공연</td>
<td>재능기부(악기연주,공연봉사)</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">158</td>
<td>순천시</td>
<td>사랑나눔문화예술봉사단</td>
<td>문화공연</td>
<td>요양병원,복지관,마을회관등월2~3회공연봉사</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">159</td>
<td>순천시</td>
<td>굿하모니</td>
<td>문화공연</td>
<td>하모니카연주</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">160</td>
<td>순천시</td>
<td>두레전기봉사회</td>
<td>주거개선</td>
<td>취약계층전기봉사</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">161</td>
<td>순천시</td>
<td>순천필하모닉오케스트라</td>
<td>문화공연</td>
<td>공연봉사분기별1회</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">162</td>
<td>순천시</td>
<td>드림색소폰</td>
<td>문화공연</td>
<td>색소폰동호회공연봉사</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">163</td>
<td>순천시</td>
<td>아리랑풍류</td>
<td>문화공연</td>
<td>국악공연,재능기부등</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">164</td>
<td>순천시</td>
<td>신대해동꾸러기들</td>
<td>문화공연</td>
<td>재능기부(전통무예공연,지역문화행사공연지원),길거리청소봉사등</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">165</td>
<td>순천시</td>
<td>순천나무사랑꾼들</td>
<td>기타</td>
<td>순천시수목관리및수목관리교육(관련과협조얻은후수목관리봉사진행예정)</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">166</td>
<td>순천시</td>
<td>아리랑행복봉사단</td>
<td>문화공연</td>
<td>재능기부(웃음치료,노래),치매예방교육</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">167</td>
<td>순천시</td>
<td>순천팔마음악회</td>
<td>문화공연</td>
<td>재능기부(공연봉사)</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">168</td>
<td>순천시</td>
<td>우먼락</td>
<td>문화공연</td>
<td>재능기부(퓨전난타공연)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">169</td>
<td>순천시</td>
<td>순천만프랜즈하모니</td>
<td>문화공연</td>
<td>재능기부(공연봉사-노래,여러악기,댄스,난타,마술등)</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">170</td>
<td>순천시</td>
<td>행복봉사회순천지회</td>
<td>문화공연</td>
<td>재능기부(공연,판소리,웃음치료,마술등)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">171</td>
<td>순천시</td>
<td>예술을사랑하는모임(예사모)</td>
<td>기타</td>
<td>전시회가서작품해설(본인작품은실적인정안된다고안내),어르신미술놀이</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">172</td>
<td>순천시</td>
<td>순천반찬나눔봉사대</td>
<td>음식나눔</td>
<td>반찬,집수리(도배,장판,타일,문수리등)봉사-조부모가정및기타대상</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">173</td>
<td>순천시</td>
<td>따사봉(따뜻한사람들의봉사모임)</td>
<td>기타</td>
<td>독거노인및취약계층장수사진촬영(방문촬영)</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">174</td>
<td>순천시</td>
<td>전남도배하는청년들</td>
<td>주거개선</td>
<td>집수리(도배)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">175</td>
<td>순천시</td>
<td>청암대학교연합봉사단</td>
<td>뷰티</td>
<td>기관방문이미용,물리치료등</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">176</td>
<td>순천시</td>
<td>다반사자원봉사단</td>
<td>주거개선</td>
<td>집수리(도배)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">177</td>
<td>순천시</td>
<td>왕이별빛재능봉사단</td>
<td>기타</td>
<td>재능기부</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">178</td>
<td>순천시</td>
<td>반려복지협회</td>
<td>기타</td>
<td>동물보호및동물관련캠페인</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">179</td>
<td>순천시</td>
<td>순천YSP(세계평화청년학생연합)</td>
<td>기타</td>
<td>UN의'지속가능한발전목표'를달성하는평화사업을진행,청년학생을글로벌시민으로교육함.</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">180</td>
<td>순천시</td>
<td>곤지곤지놀이동아리</td>
<td>기타</td>
<td>전통및전래놀이,생태놀이</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">181</td>
<td>순천시</td>
<td>예술봉사단다온</td>
<td>문화공연</td>
<td>재능기부봉사(국악)</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">182</td>
<td>순천시</td>
<td>힐링문화예술단</td>
<td>문화공연</td>
<td>재능기부,지역문화행사및문화예술시설봉사(통기타,한국무용,라인,난타,플룻등)</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">183</td>
<td>순천시</td>
<td>순천팔마문화예술단</td>
<td>문화공연</td>
<td>재능기부,문화행사및공연봉사(노래,무용,악기,색소폰,난타,아쟁등)</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">184</td>
<td>순천시</td>
<td>척척봉사단</td>
<td>주거개선</td>
<td>정리수납(재능기부전문봉사단)</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">185</td>
<td>순천시</td>
<td>따뜻한봉사단</td>
<td>기타</td>
<td>업사이클활동(양말목공예,아이스팩활용),환경정화</td>
<td class="mobile_no">18</td>
</tr>
<tr>
<td class="mobile_no">186</td>
<td>순천시</td>
<td>순천로컬푸드식문화강사동아리</td>
<td>건강지원</td>
<td>건강먹거리를활용한바른식생활교육</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">187</td>
<td>순천시</td>
<td>씨앤씨</td>
<td>기타</td>
<td>재능기부(미술,벽화그리기)</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">188</td>
<td>순천시</td>
<td>화랑회봉사연맹</td>
<td>주거개선</td>
<td>집수리봉사</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">189</td>
<td>순천시</td>
<td>우리봉사단</td>
<td>문화공연</td>
<td>재능기부공연봉사활동</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">190</td>
<td>순천시</td>
<td>남도가애락</td>
<td>문화공연</td>
<td>재능기부공연봉사활동</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">191</td>
<td>순천시</td>
<td>순천청소년오케스트라</td>
<td>문화공연</td>
<td>재능기부공연봉사활동</td>
<td class="mobile_no">32</td>
</tr>
<tr>
<td class="mobile_no">192</td>
<td>순천시</td>
<td>전남ECO시민오카세트라</td>
<td>문화공연</td>
<td>재능기부공연봉사활동</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">193</td>
<td>순천시</td>
<td>꽃으로물들다</td>
<td>기타</td>
<td>재능기부봉사활동,양말목공예및환경정화</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">194</td>
<td>순천시</td>
<td>무지개봉사단</td>
<td>문화공연</td>
<td>재능기부이미용/지역문화행사지원</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">195</td>
<td>순천시</td>
<td>3.4음색소폰</td>
<td>문화공연</td>
<td>재능기부공연활동</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">196</td>
<td>순천시</td>
<td>넝쿨봉사단</td>
<td>문화공연</td>
<td>재능기부공연활동</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">197</td>
<td>순천시</td>
<td>해피드림봉사단</td>
<td>문화공연</td>
<td>재능기부공연활동</td>
<td class="mobile_no">41</td>
</tr>
<tr>
<td class="mobile_no">198</td>
<td>순천시</td>
<td>뜰샘원예복지센터</td>
<td>기타</td>
<td>재능기부원예치료</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">199</td>
<td>순천시</td>
<td>사랑의띠복지협회</td>
<td>기타</td>
<td>재능기부체험활동</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">200</td>
<td>나주시</td>
<td>아름</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">7</td>
</tr>
<tr>
<td class="mobile_no">201</td>
<td>나주시</td>
<td>무지개풍선봉사회</td>
<td>기타</td>
<td>풍선아트,시설꾸미기,환경정화등</td>
<td class="mobile_no">5</td>
</tr>
<tr>
<td class="mobile_no">202</td>
<td>나주시</td>
<td>도배봉사회</td>
<td>주거개선</td>
<td>도배지원</td>
<td class="mobile_no">6</td>
</tr>
<tr>
<td class="mobile_no">203</td>
<td>나주시</td>
<td>빵나눔봉사회</td>
<td>음식나눔</td>
<td>제과제빵</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">204</td>
<td>나주시</td>
<td>선난봉사회</td>
<td>기타</td>
<td>수의제작</td>
<td class="mobile_no">6</td>
</tr>
<tr>
<td class="mobile_no">205</td>
<td>나주시</td>
<td>나주더줌우쿨렐레봉사단</td>
<td>문화공연</td>
<td>우쿨렐레공연</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">206</td>
<td>나주시</td>
<td>도울복지협회</td>
<td>음식나눔</td>
<td>독거노인음식나눔등</td>
<td class="mobile_no">51</td>
</tr>
<tr>
<td class="mobile_no">207</td>
<td>광양시</td>
<td>(사)스마트소셜연구회</td>
<td>기타</td>
<td>스마트폰지도</td>
<td class="mobile_no"> 11</td>
</tr>
<tr>
<td class="mobile_no">208</td>
<td>광양시</td>
<td>레인보우유튜브봉사단</td>
<td>기타</td>
<td>유튜브제작</td>
<td class="mobile_no"> 24</td>
</tr>
<tr>
<td class="mobile_no">209</td>
<td>광양시</td>
<td>광양시청마술동호회</td>
<td>문화공연</td>
<td>마술공연</td>
<td class="mobile_no"> 8</td>
</tr>
<tr>
<td class="mobile_no">210</td>
<td>광양시</td>
<td>대한가수협회광양시지부</td>
<td>문화공연</td>
<td>노래공연</td>
<td class="mobile_no"> 59</td>
</tr>
<tr>
<td class="mobile_no">211</td>
<td>광양시</td>
<td>마로윈드오케스트라</td>
<td>문화공연</td>
<td>오케스트라공연</td>
<td class="mobile_no"> 10</td>
</tr>
<tr>
<td class="mobile_no">212</td>
<td>광양시</td>
<td>뮤지션봉사단</td>
<td>문화공연</td>
<td>통기타공연</td>
<td class="mobile_no"> 32</td>
</tr>
<tr>
<td class="mobile_no">213</td>
<td>광양시</td>
<td>보금자리</td>
<td>문화공연</td>
<td>동극공연</td>
<td class="mobile_no"> 62</td>
</tr>
<tr>
<td class="mobile_no">214</td>
<td>광양시</td>
<td>청흥둥가야금</td>
<td>문화공연</td>
<td>가야금공연</td>
<td class="mobile_no"> 15</td>
</tr>
<tr>
<td class="mobile_no">215</td>
<td>광양시</td>
<td>후레쉬댄스동호회</td>
<td>문화공연</td>
<td>챈스공연</td>
<td class="mobile_no"> 24</td>
</tr>
<tr>
<td class="mobile_no">216</td>
<td>광양시</td>
<td>디딤새무용단</td>
<td>문화공연</td>
<td>전통무용</td>
<td class="mobile_no"> 14</td>
</tr>
<tr>
<td class="mobile_no">217</td>
<td>광양시</td>
<td>천사의소리음악봉사단</td>
<td>문화공연</td>
<td>노래공연</td>
<td class="mobile_no"> 23</td>
</tr>
<tr>
<td class="mobile_no">218</td>
<td>광양시</td>
<td>광양만패밀리웃음봉사단</td>
<td>문화공연</td>
<td>웃음치료</td>
<td class="mobile_no"> 23</td>
</tr>
<tr>
<td class="mobile_no">219</td>
<td>광양시</td>
<td>션샤인색소폰봉사단</td>
<td>문화공연</td>
<td>색소폰공연</td>
<td class="mobile_no"> 10</td>
</tr>
<tr>
<td class="mobile_no">220</td>
<td>광양시</td>
<td>통키타는내친구</td>
<td>문화공연</td>
<td>톨기타공연</td>
<td class="mobile_no"> 39</td>
</tr>
<tr>
<td class="mobile_no">221</td>
<td>광양시</td>
<td>광양포에버윈드오케스트라</td>
<td>문화공연</td>
<td>오케스트라공연</td>
<td class="mobile_no"> 42</td>
</tr>
<tr>
<td class="mobile_no">222</td>
<td>광양시</td>
<td>금빛소리그린봉사단</td>
<td>문화공연</td>
<td>노래공연</td>
<td class="mobile_no"> 15</td>
</tr>
<tr>
<td class="mobile_no">223</td>
<td>광양시</td>
<td>중마농악단</td>
<td>문화공연</td>
<td>농악공연</td>
<td class="mobile_no"> 43</td>
</tr>
<tr>
<td class="mobile_no">224</td>
<td>광양시</td>
<td>대한민국병채로통채로공연단</td>
<td>문화공연</td>
<td>웃음치료,마술공연</td>
<td class="mobile_no"> 11</td>
</tr>
<tr>
<td class="mobile_no">225</td>
<td>광양시</td>
<td>락위더스(樂withUs)</td>
<td>문화공연</td>
<td>공연활동</td>
<td class="mobile_no"> 9</td>
</tr>
<tr>
<td class="mobile_no">226</td>
<td>광양시</td>
<td>광양시아우름무대마술봉사단</td>
<td>문화공연</td>
<td>마술공연</td>
<td class="mobile_no"> 10</td>
</tr>
<tr>
<td class="mobile_no">227</td>
<td>광양시</td>
<td>대한민국백백치공연단</td>
<td>문화공연</td>
<td>웃음치료,마술공연</td>
<td class="mobile_no"> 11</td>
</tr>
<tr>
<td class="mobile_no">228</td>
<td>광양시</td>
<td>마로풍물패얼쑤</td>
<td>문화공연</td>
<td>풍물공연</td>
<td class="mobile_no"> 19</td>
</tr>
<tr>
<td class="mobile_no">229</td>
<td>광양시</td>
<td>광양시마술협회</td>
<td>문화공연</td>
<td>마술공연</td>
<td class="mobile_no"> 13</td>
</tr>
<tr>
<td class="mobile_no">230</td>
<td>광양시</td>
<td>광영농악단</td>
<td>문화공연</td>
<td>풍물공연</td>
<td class="mobile_no"> 36</td>
</tr>
<tr>
<td class="mobile_no">231</td>
<td>광양시</td>
<td>어울림장구봉사단</td>
<td>문화공연</td>
<td>장구공연</td>
<td class="mobile_no"> 9</td>
</tr>
<tr>
<td class="mobile_no">232</td>
<td>광양시</td>
<td>우리는여고동창생 </td>
<td>문화공연</td>
<td>웃음치료</td>
<td class="mobile_no"> 10</td>
</tr>
<tr>
<td class="mobile_no">233</td>
<td>광양시</td>
<td>가야색소폰동호회</td>
<td>문화공연</td>
<td>색소폰공연</td>
<td class="mobile_no"> 34</td>
</tr>
<tr>
<td class="mobile_no">234</td>
<td>광양시</td>
<td>전래놀이문화봉사단</td>
<td>문화공연</td>
<td>전래놀이공연활동</td>
<td class="mobile_no"> 17</td>
</tr>
<tr>
<td class="mobile_no">235</td>
<td>광양시</td>
<td>색동나무</td>
<td>문화공연</td>
<td>공연활동(다문화)</td>
<td class="mobile_no"> 12</td>
</tr>
<tr>
<t class="mobile_no"d>236</td>
<td>광양시</td>
<td>동그라미봉사단</td>
<td>기타</td>
<td>공예활동</td>
<td class="mobile_no"> 31</td>
</tr>
<tr>
<td class="mobile_no">237</td>
<td>광양시</td>
<td>채움소통아카데미</td>
<td>문화공연</td>
<td>웃음치료공연</td>
<td class="mobile_no"> 16</td>
</tr>
<tr>
<td class="mobile_no">238</td>
<td>광양시</td>
<td>행복한꿈나무축구교실 </td>
<td>문화공연</td>
<td>어린이축구지도</td>
<td class="mobile_no"> 42</td>
</tr>
<tr>
<td class="mobile_no">239</td>
<td>광양시</td>
<td>광양평생교육개발원</td>
<td>기타</td>
<td>다양한재능기부</td>
<td class="mobile_no"> 18</td>
</tr>
<tr>
<td class="mobile_no">240</td>
<td>광양시</td>
<td>광양만사람들</td>
<td>기타</td>
<td>장수사진찍어주기</td>
<td class="mobile_no"> 33</td>
</tr>
<tr>
<td class="mobile_no">241</td>
<td>광양시</td>
<td>한땀봉사단</td>
<td>기타</td>
<td>수의만들기,소품만들기</td>
<td class="mobile_no"> 32</td>
</tr>
<tr>
<td class="mobile_no">242</td>
<td>광양시</td>
<td>건모(건전한엄마들의모임)</td>
<td>기타</td>
<td>양말목,손뜨개,캘리</td>
<td class="mobile_no"> 7</td>
</tr>
<tr>
<td class="mobile_no">243</td>
<td>광양시</td>
<td>꽃뜨루</td>
<td>기타</td>
<td>화분가꾸기및소품만들기</td>
<td class="mobile_no"> 15</td>
</tr>
<tr>
<td class="mobile_no">244</td>
<td>광양시</td>
<td>광양시도배전문봉사단</td>
<td>주거개선</td>
<td>도배,장판</td>
<td class="mobile_no"> 21</td>
</tr>
<tr>
<td class="mobile_no">245</td>
<td>광양시</td>
<td>둘로스</td>
<td>주거개선</td>
<td>도배,전기,발마사지</td>
<td class="mobile_no"> 36</td>
</tr>
<tr>
<td class="mobile_no">246</td>
<td>광양시</td>
<td>사)반달문화원광양지회</td>
<td>주거개선</td>
<td>벽화및소품만들기</td>
<td class="mobile_no"> 65</td>
</tr>
<tr>
<td class="mobile_no">247</td>
<td>광양시</td>
<td>붓의느낌</td>
<td>주거개선</td>
<td>소품만들기</td>
<td class="mobile_no"> 8</td>
</tr>
<tr>
<td class="mobile_no">248</td>
<td>광양시</td>
<td>또바기</td>
<td>주거개선</td>
<td>정리수납</td>
<td class="mobile_no"> 18</td>
</tr>
<tr>
<td class="mobile_no">249</td>
<td>광양시</td>
<td>종이무지개봉사단</td>
<td>기타</td>
<td>오카리나공연</td>
<td class="mobile_no" >16</td>
</tr>
<tr>
<td class="mobile_no">250</td>
<td>광양시</td>
<td>LoveBuilder</td>
<td>주거개선</td>
<td>집수리</td>
<td class="mobile_no"> 13</td>
</tr>
<tr>
<td class="mobile_no">251</td>
<td>광양시</td>
<td>백운탁구동호회</td>
<td>기타</td>
<td>탁구지도</td>
<td class="mobile_no"> 95</td>
</tr>
<tr>
<td class="mobile_no">252</td>
<td>광양시</td>
<td>경락마사지동호회</td>
<td>뷰티</td>
<td>마사지</td>
<td class="mobile_no"> 10</td>
</tr>
<tr>
<td class="mobile_no">253</td>
<td>광양시</td>
<td>손마사지봉사단</td>
<td>뷰티</td>
<td>마사지</td>
<td class="mobile_no"> 24</td>
</tr>
<tr>
<td class="mobile_no">254</td>
<td>광양시</td>
<td>대광이미용봉사</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no"> 178</td>
</tr>
<tr>
<td class="mobile_no">255</td>
<td>광양시</td>
<td>사랑하이이미용봉사단</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no"> 151</td>
</tr>
<tr>
<td class="mobile_no">256</td>
<td>광양시</td>
<td>대한미용사회광양시지부마중물봉사회</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no"> 16</td>
</tr>
<tr>
<td class="mobile_no">257</td>
<td>광양시</td>
<td>광양뷰티연구소</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no"> 33</td>
</tr>
<tr>
<td class="mobile_no">258</td>
<td>광양시</td>
<td>사랑굽는사람들</td>
<td>음식나눔</td>
<td>제빵</td>
<td class="mobile_no"> 76</td>
</tr>
<tr>
<td class="mobile_no">259</td>
<td>광양시</td>
<td>토방愛봉사대</td>
<td>음식나눔</td>
<td>한과</td>
<td class="mobile_no"> 14</td>
</tr>
<tr>
<td class="mobile_no">260</td>
<td>광양시</td>
<td>커피나무</td>
<td>음식나눔</td>
<td>커피</td>
<td class="mobile_no"> 19</td>
</tr>
<tr>
<td class="mobile_no">261</td>
<td>광양시</td>
<td>행복한빵세상</td>
<td>음식나눔</td>
<td>빵</td>
<td class="mobile_no"> 13</td>
</tr>
<tr>
<td class="mobile_no">262</td>
<td>광양시</td>
<td>남정체험교육농장빵나눔연대</td>
<td>음식나눔</td>
<td>빵나눔</td>
<td class="mobile_no"> 10</td>
</tr>
<tr>
<td class="mobile_no">263</td>
<td>광양시</td>
<td>광양시일어통역봉사단</td>
<td>기타</td>
<td>일어통역</td>
<td class="mobile_no"> 21</td>
</tr>
<tr>
<td class="mobile_no">264</td>
<td>광양시</td>
<td>광양시통역봉사단</td>
<td>기타</td>
<td>통역봉사</td>
<td class="mobile_no"> 79</td>
</tr>
<tr>
<td class="mobile_no">265</td>
<td>광양시</td>
<td>광양한중친목회</td>
<td>기타</td>
<td>중국어통역</td>
<td class="mobile_no"> 33</td>
</tr>
<tr>
<td class="mobile_no">266</td>
<td>광양시</td>
<td>사랑실은교통봉사대</td>
<td>음식나눔</td>
<td>짜장면봉사</td>
<td class="mobile_no">86</td>
</tr>
<tr>
<td class="mobile_no">267</td>
<td>광양시</td>
<td>동광양중학교빵보드레</td>
<td>음식나눔</td>
<td>제빵봉사</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">268</td>
<td>광양시</td>
<td>옥곡면바르게살기협의회</td>
<td>뷰티</td>
<td>염색봉사</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">269</td>
<td>광양시</td>
<td>감사웃음나눔봉사단</td>
<td>문화공연</td>
<td>웃음치료</td>
<td class="mobile_no"> 12</td>
</tr>
<tr>
<td class="mobile_no">270</td>
<td>광양시</td>
<td>프리덤통기타재능봉사단</td>
<td>문화공연</td>
<td>통기타공연</td>
<td class="mobile_no"> 26</td>
</tr>
<tr>
<td class="mobile_no">271</td>
<td>광양시</td>
<td>응급처치교육재능봉사단</td>
<td>기타</td>
<td>응급처치</td>
<td class="mobile_no"> 62</td>
</tr>
<tr>
<td class="mobile_no">272</td>
<td>광양시</td>
<td>코딩교육재능봉사단</td>
<td>기타</td>
<td>유튜브제작</td>
<td class="mobile_no"> 34</td>
</tr>
<tr>
<td class="mobile_no">273</td>
<td>광양시</td>
<td>포스코마음이음봉사단 </td>
<td>주거개선</td>
<td>소품만들기</td>
<td class="mobile_no"> 71</td>
</tr>
<tr>
<td class="mobile_no">274</td>
<td>광양시</td>
<td>광양제철소도배전문봉사단</td>
<td>주거개선</td>
<td>도배,장판</td>
<td class="mobile_no"> 30</td>
</tr>
<tr>
<td class="mobile_no">275</td>
<td>광양시</td>
<td>POSCO희망나무목공예봉사단</td>
<td>주거개선</td>
<td>목공예품제작</td>
<td class="mobile_no"> 71</td>
</tr>
<tr>
<td class="mobile_no">276</td>
<td>광양시</td>
<td>포스코발마사지봉사단</td>
<td>뷰티</td>
<td>발마사지</td>
<td class="mobile_no"> 104</td>
</tr>
<tr>
<td class="mobile_no">277</td>
<td>광양시</td>
<td>에버그린벽화재능봉사단 </td>
<td>주거개선</td>
<td>벽화</td>
<td class="mobile_no"> 46</td>
</tr>
<tr>
<td class="mobile_no">278</td>
<td>광양시</td>
<td>깍아헤어재능봉사단</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no"> 39</td>
</tr>
<tr>
<td class="mobile_no">279</td>
<td>광양시</td>
<td>포스코농기계수리재능봉사단</td>
<td>주거개선</td>
<td>농기계수리</td>
<td class="mobile_no"> 89</td>
</tr>
<tr>
<td class="mobile_no">280</td>
<td>광양시</td>
<td>반딧불봉사단</td>
<td>주거개선</td>
<td>전기수리</td>
<td class="mobile_no"> 106</td>
</tr>
<tr>
<td class="mobile_no">281</td>
<td>광양시</td>
<td>포스코컴퓨터봉사단</td>
<td>기타</td>
<td>　</td>
<td class="mobile_no"> 131</td>
</tr>
<tr>
<td class="mobile_no">282</td>
<td>광양시</td>
<td>프렌즈봉사단</td>
<td>기타</td>
<td>다문화지원</td>
<td class="mobile_no"> 502</td>
</tr>
<tr>
<td class="mobile_no">283</td>
<td>광양시</td>
<td>하늬바람풍선아트봉사단</td>
<td>기타</td>
<td>풍선아트</td>
<td class="mobile_no"> 36</td>
</tr>
<tr>
<td class="mobile_no">284</td>
<td>광양시</td>
<td>포스코클린오션봉사단</td>
<td>기타</td>
<td>해양환경쓰레기수거</td>
<td class="mobile_no"> 83</td>
</tr>
<tr>
<td class="mobile_no">285</td>
<td>광양시</td>
<td>도서지역깨끗한해양지킴이봉사단</td>
<td>기타</td>
<td>해양환경쓰레기수거</td>
<td class="mobile_no"> 76</td>
</tr>
<tr>
<td class="mobile_no">286</td>
<td>담양군</td>
<td>녹색환경감시단</td>
<td>주거개선</td>
<td>노후대문도색</td>
<td class="mobile_no">25</td>
</tr>
<tr>
<td class="mobile_no">287</td>
<td>담양군</td>
<td>의용소방대연합회</td>
<td>기타</td>
<td>재난,재해대비</td>
<td class="mobile_no">511</td>
</tr>
<tr>
<td class="mobile_no">288</td>
<td>담양군</td>
<td>담양미용봉사회</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">289</td>
<td>담양군</td>
<td>동서남북봉사단</td>
<td>기타</td>
<td>폐기물수거</td>
<td class="mobile_no">36</td>
</tr>
<tr>
<td class="mobile_no">290</td>
<td>담양군</td>
<td>이공이공봉사회</td>
<td>주거개선</td>
<td>칼갈이,집수리</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">291</td>
<td>담양군</td>
<td>효사랑봉사단</td>
<td>음식나눔</td>
<td>중국음식나눔</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">292</td>
<td>담양군</td>
<td>자율방범연합회</td>
<td>기타</td>
<td>교통,방범등질서유지</td>
<td class="mobile_no">486</td>
</tr>
<tr>
<td class="mobile_no">293</td>
<td>담양군</td>
<td>적십자봉사회</td>
<td>기타</td>
<td>재난,재해대비</td>
<td class="mobile_no">166</td>
</tr>
<tr>
<td class="mobile_no">294</td>
<td>담양군</td>
<td>가족봉사단</td>
<td>주거개선</td>
<td>집수리</td>
<td class="mobile_no">173</td>
</tr>
<tr>
<td class="mobile_no">295</td>
<td>담양군</td>
<td>남도사랑담양군봉사단</td>
<td>주거개선</td>
<td>집수리</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">296</td>
<td>담양군</td>
<td>울랄라시니어밴드</td>
<td>문화공연</td>
<td>노래,악기,전통춤등공연활동</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">297</td>
<td>곡성군</td>
<td>곡성읍청년회</td>
<td>주거개선</td>
<td>주거환경개선및미용봉사</td>
<td class="mobile_no">48</td>
</tr>
<tr>
<td class="mobile_no">298</td>
<td>곡성군</td>
<td>생활개선곡성군연합회</td>
<td>음식나눔</td>
<td>밑반찬만들기및배달</td>
<td class="mobile_no">240</td>
</tr>
<tr>
<td class="mobile_no">299</td>
<td>곡성군</td>
<td>다림돌봉사단</td>
<td>기타</td>
<td>독거,장애인가구생활불편해결 </td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">300</td>
<td>곡성군</td>
<td>곡성군새마을회</td>
<td>주거개선</td>
<td>저소득층주거개선및환경정리</td>
<td class="mobile_no">68</td>
</tr>
<tr>
<td class="mobile_no">301</td>
<td>곡성군</td>
<td>곡성군귀농귀촌협의회</td>
<td>주거개선</td>
<td>저소득층전기수리및형광등교체</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">302</td>
<td>구례군</td>
<td>구례군귀농귀촌협의회</td>
<td>주거개선</td>
<td>취약개층등집수리등</td>
<td class="mobile_no">165</td>
</tr>
<tr>
<td class="mobile_no">303</td>
<td>구례군</td>
<td>구례라이온스클럽</td>
<td>주거개선</td>
<td>취약계충주거개선등</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">304</td>
<td>구례군</td>
<td>구례군미용업협회</td>
<td>뷰티</td>
<td>군부대및독거노인미용봉사</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">305</td>
<td>구례군</td>
<td>구례군초심회</td>
<td>음식나눔</td>
<td>음식나눔,자연보호캠페인,독거노인가스안전밸브설치등</td>
<td class="mobile_no">59</td>
</tr>
<tr>
<td class="mobile_no">306</td>
<td>구례군</td>
<td>남도사랑봉사단</td>
<td>음식나눔</td>
<td>저소득층보약도시락나눔</td>
<td class="mobile_no">31</td>
</tr>
<tr>
<td class="mobile_no">307</td>
<td>구례군</td>
<td>(사)구례군새마을회</td>
<td>음식나눔</td>
<td>음식나눔,주거개선등</td>
<td class="mobile_no">238</td>
</tr>
<tr>
<td class="mobile_no">308</td>
<td>구례군</td>
<td>문화대장간협동조합</td>
<td>문화공연</td>
<td>음식나눔,주거개선등</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">309</td>
<td>구례군</td>
<td>대한적십자사순천지사구례봉사회</td>
<td>음식나눔</td>
<td>음식나눔,구호활동,취약계층지원등</td>
<td class="mobile_no">27</td>
</tr>
<tr>
<td class="mobile_no">310</td>
<td>구례군</td>
<td>구례군산애삶애</td>
<td>주거개선</td>
<td>취약계층주거환경정화및자연환경보호등</td>
<td class="mobile_no">19</td>
</tr>
<tr>
<td class="mobile_no">311</td>
<td>구례군</td>
<td>구례군간병사협회</td>
<td>주거개선</td>
<td>취약계층주거개선등</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">312</td>
<td>고흥군</td>
<td>고흥군백합봉사회</td>
<td>주거개선</td>
<td>방충망교체</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">313</td>
<td>고흥군</td>
<td>행복나눔봉사단</td>
<td>주거개선</td>
<td>도배,장판교체</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">314</td>
<td>고흥군</td>
<td>고흥우체국늘푸른봉사단</td>
<td>주거개선</td>
<td>도배,장판교체</td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">315</td>
<td>고흥군</td>
<td>팜앤빌더</td>
<td>주거개선</td>
<td>방충망,전구교체등</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">316</td>
<td>고흥군</td>
<td>나누리봉사단</td>
<td>주거개선</td>
<td>도배,장판교체및전기,수도,보일러수리</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">317</td>
<td>고흥군</td>
<td>고흥경찰서모범운전자회</td>
<td>주거개선</td>
<td>전등교체및전기수리,방충망교체등</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">318</td>
<td>고흥군</td>
<td>행복웃음봉사단</td>
<td>문화공연</td>
<td>공연봉사</td>
<td class="mobile_no">21</td>
</tr>
<tr>
<td class="mobile_no">319</td>
<td>고흥군</td>
<td>고흥우주예술단</td>
<td>문화공연</td>
<td>공연봉사</td>
<td class="mobile_no">38</td>
</tr>
<tr>
<td class="mobile_no">320</td>
<td>고흥군</td>
<td>(사)지향전통예술보존회</td>
<td>문화공연</td>
<td>공연봉사</td>
<td class="mobile_no">29</td>
</tr>
<tr>
<td class="mobile_no">321</td>
<td>고흥군</td>
<td>스마일힐링봉사단</td>
<td>문화공연</td>
<td>공연봉사</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">322</td>
<td>고흥군</td>
<td>고흥군새마을부녀회</td>
<td>음식나눔</td>
<td>음식나눔봉사</td>
<td class="mobile_no">515</td>
</tr>
<tr>
<td class="mobile_no">323</td>
<td>고흥군</td>
<td>대한적십자사고흥군봉사회</td>
<td>음식나눔</td>
<td>제과제빵나눔봉사</td>
<td class="mobile_no">23</td>
</tr>
<tr>
<td class="mobile_no">324</td>
<td>고흥군</td>
<td>대한미용사회고흥군지부</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">49</td>
</tr>
<tr>
<td class="mobile_no">325</td>
<td>고흥군</td>
<td>한국걸스카우트고흥군지회</td>
<td>뷰티</td>
<td>얼굴마사지</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">326</td>
<td>고흥군</td>
<td>고흥여성농업인센터예쁜손모아</td>
<td>기타</td>
<td>재봉틀활용바느질봉사</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">327</td>
<td>고흥군</td>
<td>한국해양구조협회고흥구조대</td>
<td>기타</td>
<td>구조및수중정화활동</td>
<td class="mobile_no">33</td>
</tr>
<tr>
<td class="mobile_no">328</td>
<td>고흥군</td>
<td>(사)대한잠수협회고흥군지부</td>
<td>기타</td>
<td>구조및수중정화활동</td>
<td class="mobile_no">33</td>
</tr>
<tr>
<td class="mobile_no">329</td>
<td>고흥군</td>
<td>해양환경인명구조단고흥구조대</td>
<td>기타</td>
<td>구조및수중정화활동</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">330</td>
<td>고흥군</td>
<td>다함께만드는행복</td>
<td>기타</td>
<td>통역,학습지도</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">331</td>
<td>보성군</td>
<td>(사)보성군새마을회</td>
<td>주거개선</td>
<td>집수리</td>
<td class="mobile_no">647</td>
</tr>
<tr>
<td class="mobile_no">332</td>
<td>보성군</td>
<td>고운손도우미회</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<t class="mobile_no"d>333</td>
<td>보성군</td>
<td>보성명전예명원차인회</td>
<td>음식나눔</td>
<td>차봉사</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">334</td>
<td>보성군</td>
<td>보성군여성자원봉사협의회</td>
<td>음식나눔</td>
<td>밑반찬만들기및배달</td>
<td class="mobile_no">417</td>
</tr>
<tr>
<td class="mobile_no">335</td>
<td>보성군</td>
<td>채동선문화사업단</td>
<td>문화공연</td>
<td>문화공연</td>
<td class="mobile_no">58</td>
</tr>
<tr>
<td class="mobile_no">336</td>
<td>보성군</td>
<td>초록빛봉사대</td>
<td>주거개선</td>
<td>주거환경개선활동</td>
<td class="mobile_no">27</td>
</tr>
<tr>
<td class="mobile_no">337</td>
<td>보성군</td>
<td>보성군희망의손봉사단</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">338</td>
<td>보성군</td>
<td>(사)소비자교육중앙회보성군지회</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">56</td>
</tr>
<tr>
<td class="mobile_no">339</td>
<td>보성군</td>
<td>보성성당빈첸시오회</td>
<td>주거개선</td>
<td>주거환경개선활동</td>
<td class="mobile_no">17</td>
</tr>
<tr>
<td class="mobile_no">340</td>
<td>보성군</td>
<td>보성을가꾸는사람들</td>
<td>기타</td>
<td>나무전정작업</td>
<td class="mobile_no">31</td>
</tr>
<tr>
<td class="mobile_no">341</td>
<td>화순군</td>
<td>행복바라지나눔봉사단</td>
<td>문화공연</td>
<td>공연활동(다문화공연및음식)등</td>
<td class="mobile_no">150</td>
</tr>
<tr>
<td class="mobile_no">342</td>
<td>화순군</td>
<td>아름다운동행</td>
<td>문화공연</td>
<td>공연활동</td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">343</td>
<td>화순군</td>
<td>화순온누리노래봉사단</td>
<td>문화공연</td>
<td>공연활동</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">344</td>
<td>화순군</td>
<td>남도사랑봉사단화순군지회</td>
<td>주거개선</td>
<td>도배장판</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">345</td>
<td>화순군</td>
<td>신아행복나눔봉사단</td>
<td>주거개선</td>
<td>도배장판집수리</td>
<td class="mobile_no">23</td>
</tr>
<tr>
<td class="mobile_no">346</td>
<td>화순군</td>
<td>대한미용사회동부지회화순미용봉사회</td>
<td>뷰티</td>
<td>미용봉사</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">347</td>
<td>화순군</td>
<td>한국프로사진협회전남지회화순지부</td>
<td>기타</td>
<td>사진봉사</td>
<td class="mobile_no">4</td>
</tr>
<tr>
<td class="mobile_no">348</td>
<td>장흥군</td>
<td>대한적십자사장흥지구협의회</td>
<td>음식나눔</td>
<td>독거노인생일상차려드리기</td>
<td class="mobile_no">89</td>
</tr>
<tr>
<td class="mobile_no">349</td>
<td>장흥군</td>
<td>서포터즈봉사단</td>
<td>주거개선</td>
<td>저소득층집수리</td>
<td class="mobile_no">28</td>
</tr>
<tr>
<td class="mobile_no">350</td>
<td>장흥군</td>
<td>장흥군여성자원봉사회</td>
<td>음식나눔</td>
<td>독거노인및저소득층밑반찬전달,가사봉사</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">351</td>
<td>장흥군</td>
<td>정남진사랑나눔봉사대</td>
<td>기타</td>
<td>이미용서비스,밑반찬배달,집수리등20개분야</td>
<td class="mobile_no">100</td>
</tr>
<tr>
<td class="mobile_no">352</td>
<td>장흥군</td>
<td>장흥군새마을회 </td>
<td>기타</td>
<td>집수리사업,이미용서비스,김장담그기등</td>
<td class="mobile_no">667</td>
</tr>
<tr>
<td class="mobile_no">353</td>
<td>장흥군</td>
<td>여성친화도시모니터단</td>
<td>음식나눔</td>
<td>독거노인및저소득층밑반찬전달,가사봉사</td>
<td class="mobile_no">23</td>
</tr>
<tr>
<td class="mobile_no">354</td>
<td>강진군</td>
<td>강진탐진로타리클럽</td>
<td>주거개선</td>
<td>365긴급출동봉사단운영</td>
<td class="mobile_no">113</td>
</tr>
<tr>
<td class="mobile_no">355</td>
<td>강진군</td>
<td>강진군여성의용소방대</td>
<td>기타</td>
<td>단독경보형감지기설치</td>
<td class="mobile_no">26</td>
</tr>
<tr>
<td class="mobile_no">356</td>
<td>강진군</td>
<td>강진군새마을회</td>
<td>음식나눔</td>
<td>음식나눔,주거개선</td>
<td class="mobile_no">641</td>
</tr>
<tr>
<td class="mobile_no">357</td>
<td>강진군</td>
<td>강진청자로타리클럽</td>
<td>주거개선</td>
<td>노후화된집보수및도배보수</td>
<td class="mobile_no">67</td>
</tr>
<tr>
<td class="mobile_no">358</td>
<td>강진군</td>
<td>강진군가족센터</td>
<td>뷰티</td>
<td>네일아트봉사자양성및봉사활동</td>
<td class="mobile_no">2,847</td>
</tr>
<tr>
<td class="mobile_no">359</td>
<td>강진군</td>
<td>삼육봉사회</td>
<td>음식나눔</td>
<td>천사들의나눔방,저소득가정빵지원</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">360</td>
<td>강진군</td>
<td>대한어머니회강진지회</td>
<td>기타</td>
<td>노인시설에코크래프트공예</td>
<td class="mobile_no">15</td>
</tr>
<tr>
<td class="mobile_no">361</td>
<td>강진군</td>
<td>도암새마을부녀회</td>
<td>음식나눔</td>
<td>밑반찬및말벗해드리기</td>
<td class="mobile_no">36</td>
</tr>
<tr>
<td class="mobile_no">362</td>
<td>강진군</td>
<td>발사모</td>
<td>뷰티</td>
<td>발마사지봉사</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">363</td>
<td>강진군</td>
<td>해피바이러스</td>
<td>뷰티</td>
<td>염색봉사</td>
<td class="mobile_no">8</td>
</tr>
<tr>
<td class="mobile_no">364</td>
<td>강진군</td>
<td>군동면청년회</td>
<td>주거개선</td>
<td>전기,수도,가스집수리</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">365</td>
<td>강진군</td>
<td>강진모란로타리클럽</td>
<td>주거개선</td>
<td>소규모집수리</td>
<td class="mobile_no">67</td>
</tr>
<tr>
<td class="mobile_no">366</td>
<td>해남군</td>
<td>한국전기안전공사전남남부지사</td>
<td>주거개선</td>
<td>전기점검및보수</td>
<td class="mobile_no">27</td>
</tr>
<tr>
<td class="mobile_no">367</td>
<td>해남군</td>
<td>해남군미용협회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">368</td>
<td>해남군</td>
<td>대한적십자사우슬봉사회</td>
<td>주거개선</td>
<td>집수리봉사</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">369</td>
<td>해남군</td>
<td>한국열관리협회해남지회</td>
<td>주거개선</td>
<td>보일러점검및수리</td>
<td class="mobile_no">7</td>
</tr>
<tr>
<td class="mobile_no">370</td>
<td>해남군</td>
<td>행복나눔강사협회</td>
<td>문화공연</td>
<td>실버체조및웃음치료등</td>
<td class="mobile_no">28</td>
</tr>
<tr>
<td class="mobile_no">371</td>
<td>해남군</td>
<td>자유총연맹여성회</td>
<td>기타</td>
<td>환경개선</td>
<td class="mobile_no">36</td>
</tr>
<tr>
<td class="mobile_no">372</td>
<td>해남군</td>
<td>실로암봉사회</td>
<td>음식나눔</td>
<td>취약계층김장김치나눔</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">373</td>
<td>해남군</td>
<td>여성자원봉사회</td>
<td>음식나눔</td>
<td>식사・반찬지원</td>
<td class="mobile_no">33</td>
</tr>
<tr>
<td class="mobile_no">374</td>
<td>해남군</td>
<td>소비자교육중앙회해남지회</td>
<td>음식나눔</td>
<td>취약계층음식나눔</td>
<td class="mobile_no">68</td>
</tr>
<tr>
<td class="mobile_no">375</td>
<td>해남군</td>
<td>두륜자원봉사회</td>
<td>음식나눔</td>
<td>식사・반찬지원</td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">376</td>
<td>해남군</td>
<td>대한적십자봉사회해남지구협의회</td>
<td>음식나눔</td>
<td>소외계층음식지원등</td>
<td class="mobile_no">403</td>
</tr>
<tr>
<td class="mobile_no">377</td>
<td>해남군</td>
<td>해남군방범연합회</td>
<td>기타</td>
<td>교통정리</td>
<td class="mobile_no">453</td>
</tr>
<tr>
<td class="mobile_no">378</td>
<td>해남군</td>
<td>해남군의용소방대</td>
<td>기타</td>
<td>무료급식봉사,재난재해응급</td>
<td class="mobile_no">1491</td>
</tr>
<tr>
<td class="mobile_no">379</td>
<td>해남군</td>
<td>한듬봉사회</td>
<td>음식나눔</td>
<td>취약계층음식나눔</td>
<td class="mobile_no">57</td>
</tr>
<tr>
<td class="mobile_no">380</td>
<td>해남군</td>
<td>공룡로타리클럽</td>
<td>주거개선</td>
<td>도배,장판,전기수리등</td>
<td class="mobile_no">25</td>
</tr>
<tr>
<td class="mobile_no" >381</td>
<td>해남군</td>
<td>국제로터리목련클럽</td>
<td>주거개선</td>
<td>도배,장판,전기수리등</td>
<td class="mobile_no" >48</td>
</tr>
<tr>
<td class="mobile_no">382</td>
<td>해남군</td>
<td>해남군새마을회</td>
<td>음식나눔</td>
<td>식사・반찬지원</td>
<td class="mobile_no">697</td>
</tr>
<tr>
<td class="mobile_no">383</td>
<td>영암군</td>
<td>꿈을짓는집수리봉사단</td>
<td>주거개선</td>
<td>집수리봉사</td>
<td class="mobile_no">24</td>
</tr>
<tr>
<td class="mobile_no">384</td>
<td>영암군</td>
<td>언니쓰클럽</td>
<td>문화공연</td>
<td>퓨젼에어로빅</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">385</td>
<td>영암군</td>
<td>영암군여성자원봉사협의회</td>
<td>음식나눔</td>
<td>반찬지원</td>
<td class="mobile_no">110</td>
</tr>
<tr>
<td class="mobile_no">386</td>
<td>영암군</td>
<td>영암문화예술협회</td>
<td>문화공연</td>
<td>공연봉사(섹소폰)</td>
<td class="mobile_no">13</td>
</tr>
<tr>
<td class="mobile_no">387</td>
<td>영암군</td>
<td>돌쇠봉사회</td>
<td>주거개선</td>
<td>노후주택수리봉사</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">388</td>
<td>영암군</td>
<td>아름회(아름다운마음봉사회)</td>
<td>기타</td>
<td>칼갈이</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">389</td>
<td>영암군</td>
<td>고향을생각하는주부들의모임영암군연합회</td>
<td>음식나눔</td>
<td>반찬지원</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">390</td>
<td>영암군</td>
<td>영암군의용소방대여성연합회</td>
<td>음식나눔</td>
<td>반찬지원</td>
<td class="mobile_no">56</td>
</tr>
<tr>
<td class="mobile_no">391</td>
<td>영암군</td>
<td>이미용자원봉사단</td>
<td>뷰티</td>
<td>이미용</td>
<td class="mobile_no">5</td>
</tr>
<tr>
<tdv>392</td>
<td>영암군</td>
<td>가족센터봉사단</td>
<td>뷰티</td>
<td>이미용(네일아트포함)</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">393</td>
<td>영암군</td>
<td>두드림봉사단</td>
<td>주거개선</td>
<td>벽화그리기</td>
<td class="mobile_no">50</td>
</tr>
<tr>
<td class="mobile_no">394</td>
<td>영암군</td>
<td>이웃사촌</td>
<td>음식나눔</td>
<td>반찬지원</td>
<td class="mobile_no">6</td>
</tr>
<tr>
<td class="mobile_no">395</td>
<td>영암군</td>
<td>예담은봉사동아리</td>
<td>기타</td>
<td>천연염색,섬유아트문화체험활동,<br>
어린이·청소년1일바리스타체험활동</td>
<td class="mobile_no">38</td>
</tr>
<tr>
<td class="mobile_no">396</td>
<td>영암군</td>
<td>영암군생황음악회(시나브로)</td>
<td>문화공연</td>
<td>관내주요관광지,주요행사장에서버스킹페스티벌,요양시설위문공연</td>
<td class="mobile_no">35</td>
</tr>
<tr>
<td class="mobile_no">397</td>
<td>영암군</td>
<td>삼호적십자봉사회</td>
<td>음식나눔</td>
<td>반찬지원</td>
<td class="mobile_no">28</td>
</tr>
<tr>
<td class="mobile_no">398</td>
<td>영암군</td>
<td>월출산여성라이온스클럽</td>
<td>주거개선</td>
<td>주거개선,음식나눔,체험</td>
<td class="mobile_no">23</td>
</tr>
<tr>
<td class="mobile_no">399</td>
<td>무안군</td>
<td>아라한</td>
<td>뷰티</td>
<td>이미용(염색,커트,펌,네일,마사지등)</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">400</td>
<td>무안군</td>
<td>꿈드림Catcher봉사단</td>
<td>음식나눔</td>
<td>급식봉사</td>
<td class="mobile_no">29</td>
</tr>
<tr>
<td class="mobile_no">401</td>
<td>무안군</td>
<td>남도사랑무안군봉사단</td>
<td>기타</td>
<td>농촌일손돕기</td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">402</td>
<td>무안군</td>
<td>bello-B</td>
<td>뷰티</td>
<td>이미용,염색,네일아트,마사지,향수제작</td>
<td class="mobile_no">36</td>
</tr>
<tr>
<td class="mobile_no">403</td>
<td>무안군</td>
<td>케어복지전문봉사단</td>
<td>뷰티</td>
<td>피부마사지,손발마사지</td>
<td class="mobile_no">41</td>
</tr>
<tr>
<td class="mobile_no">404</td>
<td>무안군</td>
<td>하늘로봉사단</td>
<td>주거개선</td>
<td>집수리(전기,보일러등)</td>
<td class="mobile_no">80</td>
</tr>
<tr>
<td class="mobile_no">405</td>
<td>무안군</td>
<td>푸른나무</td>
<td>주거개선</td>
<td>집수리(전기,보일러등)</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">406</td>
<td>무안군</td>
<td>빛을나누리</td>
<td>기타</td>
<td>생필품만들기및나눔(비누,디퓨져,재활용가방등)</td>
<td class="mobile_no">16</td>
</tr>
<tr>
<td class="mobile_no">407</td>
<td>무안군</td>
<td>우리지역기후지킴이</td>
<td>주거개선</td>
<td>물품지원,이동세탁,주거개선</td>
<td class="mobile_no">11</td>
</tr>
<tr>
<td class="mobile_no">408</td>
<td>함평군</td>
<td>나르다예술단</td>
<td>문화공연</td>
<td>전통문화공연</td>
<td class="mobile_no">39</td>
</tr>
<tr>
<td class="mobile_no">409</td>
<td>함평군</td>
<td>담쟁이꿈</td>
<td>기타</td>
<td>냅킨아트및종이접기등</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">410</td>
<td>함평군</td>
<td>카네이션봉사회</td>
<td>문화공연</td>
<td>동극및전래놀이</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">411</td>
<td>함평군</td>
<td>함평군이미용봉사회</td>
<td>뷰티</td>
<td>이미용봉사</td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">412</td>
<td>함평군</td>
<td>그린테크주거복지사업단</td>
<td>주거개선</td>
<td>도배,장판등주거환경재선</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">413</td>
<td>영광군</td>
<td>대한적십자사영광지구협의회</td>
<td>기타</td>
<td>무료급식봉사,재난재해응급</td>
<td class="mobile_no">129</td>
</tr>
<tr>
<td class="mobile_no">414</td>
<td>영광군</td>
<td>사랑누림</td>
<td>기타</td>
<td>고령화시대의여가프로그램개발및심리상담,행사공연활동</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">415</td>
<td>영광군</td>
<td>영광군여성자원봉사대</td>
<td>기타</td>
<td>이동목욕서비스</td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">416</td>
<td>영광군</td>
<td>영광군재향군인회</td>
<td>기타</td>
<td>이동빨래서비스</td>
<td class="mobile_no">51</td>
</tr>
<tr>
<td class="mobile_no">417</td>
<td>영광군</td>
<td>천빛예술봉사단</td>
<td>문화공연</td>
<td>예술공연서비스</td>
<td class="mobile_no">34</td>
</tr>
<tr>
<td class="mobile_no">418</td>
<td>영광군</td>
<td>행복나무</td>
<td>뷰티</td>
<td>소외계층이.미용서비스</td>
<td class="mobile_no">9</td>
</tr>
<tr>
<td class="mobile_no">419</td>
<td>영광군</td>
<td>영광군가족센터</td>
<td>기타</td>
<td>한부모가정반찬지원</td>
<td class="mobile_no">56</td>
</tr>
<tr>
<td class="mobile_no">420</td>
<td>영광군</td>
<td>대한미용사회영광군지부</td>
<td>뷰티</td>
<td>이.미용서비스</td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">421</td>
<td>영광군</td>
<td>백수읍어머니봉사대</td>
<td>기타</td>
<td>소외계층반찬지원</td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">422</td>
<td>영광군</td>
<td>우도농악보존회</td>
<td>문화공연</td>
<td>예술공연서비스</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">423</td>
<td>영광군</td>
<td>불갑면재능나눔봉사단</td>
<td>기타</td>
<td>주거환경,주거개선</td>
<td class="mobile_no">37</td>
</tr>
<tr>
<td class="mobile_no">424</td>
<td>영광군</td>
<td>법성어머니봉사대</td>
<td>기타</td>
<td>소외계층반찬지원</td>
<td class="mobile_no">34</td>
</tr>
<tr>
<td class="mobile_no">425</td>
<td>영광군</td>
<td>홍농읍생활개선회</td>
<td>기타</td>
<td>소외계층주거환경및이미용서비스</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">426</td>
<td>영광군</td>
<td>수리수리마수리봉사단</td>
<td>기타</td>
<td>소외계층주거개선</td>
<td class="mobile_no">14</td>
</tr>
<tr>
<td class="mobile_no">427</td>
<td>영광군</td>
<td>홍농읍새마을부녀회</td>
<td>뷰티</td>
<td>소외계층이.미용서비스</td>
<td class="mobile_no">47</td>
</tr>
<tr>
<td class="mobile_no">428</td>
<td>영광군</td>
<td>영광군반려동물협회(댕히어로즈)</td>
<td>건강지원</td>
<td>동물매개심리치료를통한정서적지원,반려견봉사등 </td>
<td class="mobile_no">10</td>
</tr>
<tr>
<td class="mobile_no">429</td>
<td>장성군</td>
<td>대한적십자사봉사회장성지구협의회</td>
<td>음식나눔</td>
<td>떡국나눔및송편나눔</td>
<td class="mobile_no">95</td>
</tr>
<tr>
<td class="mobile_no">430</td>
<td>장성군</td>
<td>마음을움직이는사람들</td>
<td>주거개선</td>
<td>취약계층집수리</td>
<td class="mobile_no">20</td>
</tr>
<tr>
<td class="mobile_no">431</td>
<td>장성군</td>
<td>사)밀알중앙회전남지구장성지회</td>
<td>주거개선</td>
<td>취약계층집수리</td>
<td class="mobile_no">67</td>
</tr>
<tr>
<td class="mobile_no">432</td>
<td>장성군</td>
<td>사)한국여성소비자연합장성지부</td>
<td>음식나눔</td>
<td>취약계층밑반찬(고추장)나눔</td>
<td class="mobile_no">34</td>
</tr>
<tr>
<td class="mobile_no">433</td>
<td>장성군</td>
<td>장성군여성자원봉사회</td>
<td>음식나눔</td>
<td>거동불편독거노인도시락배달</td>
<td class="mobile_no">166</td>
</tr>
<tr>
<td class="mobile_no">434</td>
<td>장성군</td>
<td>장성미래발전청년위원회</td>
<td>주거개선</td>
<td>취약계층집수리봉사 </td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">435</td>
<td>장성군</td>
<td>장성군여성단체협의회</td>
<td>음식나눔</td>
<td>취약계층김장김치나눔</td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">436</td>
<td>완도군</td>
<td>남도사랑봉사단완도군지회</td>
<td>주거개선</td>
<td>취약계층대상집짓기,집수리자원봉사활동</td>
<td class="mobile_no">32</td>
</tr>
<tr>
<td class="mobile_no">437</td>
<td>완도군</td>
<td>대한적십자사완도군지회협의회</td>
<td>주거개선</td>
<td>취약계층대상집짓기,집수리자원봉사활동</td>
<td class="mobile_no">400</td>
</tr>
<tr>
<td class="mobile_no">438</td>
<td>완도군</td>
<td>완도군생활개선회완도군농가주부모임</td>
<td>음식나눔</td>
<td>식사・반찬지원</td>
<td class="mobile_no">218</td>
</tr>
<tr>
<td class="mobile_no">439</td>
<td>완도군</td>
<td>완도군농가주부모임</td>
<td>음식나눔</td>
<td>식사・반찬지원</td>
<td class="mobile_no">32</td>
</tr>
<tr>
<td class="mobile_no">440</td>
<td>완도군</td>
<td>한국부인회완도군지회</td>
<td>음식나눔</td>
<td>식사・반찬지원</td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">441</td>
<td>완도군</td>
<td>국제와이즈멘</td>
<td>건강지원</td>
<td>한방,내과,방충망</td>
<td class="mobile_no">40</td>
</tr>
<tr>
<td class="mobile_no">442</td>
<td>완도군</td>
<td>완도빙그레앙상블</td>
<td>문화공연</td>
<td>하모니카공연</td>
<td class="mobile_no">30</td>
</tr>
<tr>
<td class="mobile_no">443</td>
<td>진도군</td>
<td>국제와이즈맨천년학클럽</td>
<td>뷰티</td>
<td>미용</td>
<td class="mobile_no">22</td>
</tr>
<tr>
<td class="mobile_no">444</td>
<td>진도군</td>
<td>대한적십자진도지구협의회</td>
<td>음식나눔</td>
<td>취약계층음식나눔,재난·재해</td>
<td class="mobile_no">217</td>
</tr>
<tr>
<td class="mobile_no">445</td>
<td>진도군</td>
<td>진도군여성단체협의회</td>
<td>음식나눔</td>
<td>취약계층음식나눔</td>
<td class="mobile_no">826</td>
</tr>
<tr>
<td class="mobile_no">446</td>
<td>진도군</td>
<td>국제와이즈맨진도옥주클럽</td>
<td>주거개선</td>
<td>집수리</td>
<td class="mobile_no">77</td>
</tr>
<tr>
<td class="mobile_no">447</td>
<td>진도군</td>
<td>진도군새마을회</td>
<td>주거개선</td>
<td>도배,장판,전기수리등</td>
<td class="mobile_no">510</td>
</tr>
<tr>
<td class="mobile_no">448</td>
<td>진도군</td>
<td>칠우회</td>
<td>주거개선</td>
<td>도배,장판,전기수리등</td>
<td class="mobile_no">12</td>
</tr>
<tr>
<td class="mobile_no">449</td>
<td>진도군</td>
<td>진도백조로타리클럽</td>
<td>주거개선</td>
<td>집청소,심리지원</td>
<td class="mobile_no">34</td>
</tr>
<tr>
<td class="mobile_no">450</td>
<td>신안군</td>
<td>신안군여성자원봉사자회</td>
<td>뷰티</td>
<td>염색봉사</td>
<td class="mobile_no">359</td>
</tr>
<tr>
<td class="mobile_no">451</td>
<td>신안군</td>
<td>신안군여성단체협의회</td>
<td>음식나눔</td>
<td>취약계층음식나눔</td>
<td class="mobile_no">850</td>
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
