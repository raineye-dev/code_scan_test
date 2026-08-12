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
      <th scope="col" style="width:23%;">업체명</th>
      <th scope="col" style="">주소</th>
      <th scope="col" style="width:15%;">전화번호</th>
      <th scope="col" style="width:14%;">할인률</th>
    </tr>
  </thead>
  <tbody>
		 <tr>
    <td>1</td>
    <td>절굿대떡옥</td>
    <td>전남 나주시 청동길 14,    목사고을시장 매일동 A36호</td>
    <td>010-5141-0103</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>알레르망 나주혁신점</td>
    <td>전남 나주시 배멧1길 50, 101호</td>
    <td>061-332-2772</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>목사내아</td>
    <td>전남 나주시 금성관길    13-10(금계동)</td>
    <td>061-332-6565</td>
    <td>30%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>빛가람 치유의 숲</td>
    <td>전남 나주시 산포면 산제리 542-6</td>
    <td>　</td>
    <td>입장료면제</td>
  </tr>
  <tr>
    <td>5</td>
    <td>한옥견본주택</td>
    <td>전남 나주시 금성관길  </td>
    <td>　</td>
    <td>30%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>종로서적더클래스나주지점</td>
    <td>전남 나주시 우정로 72, 더클래스빌딩    B동 1층</td>
    <td>061-335-0955</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>크리아트문구점</td>
    <td>전남 나주시 남평읍 남평2로 37</td>
    <td>061-331-6135</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>오피스디포혁신점</td>
    <td>전남 나주시 빛가람로 730</td>
    <td>061-337-6006</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>코오롱스포츠 나주 빛가람점</td>
    <td>전남 나주시 상야1길 7, 예가람타워    146호</td>
    <td>061-333-1331</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>제일미용실</td>
    <td>전남 나주시 나주로 159</td>
    <td>061-332-0023</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>아디다스 나주점</td>
    <td>전남 나주시 나주로 168-1(중앙동)</td>
    <td>061-333-3378</td>
    <td>5%(10만원이상 구매시)</td>
  </tr>
  <tr>
    <td>12</td>
    <td>하이스파</td>
    <td>나주시 나주로 65(송월동) 3층</td>
    <td>061-336-0000</td>
    <td>5%</td>
  </tr>
  <tr>
  <tr>
    <td>13</td>
    <td>제이헤어</td>
    <td>전남 나주시 문화로 216,<br/> 도원주차타워 221호</td>
    <td></td>
    <td>10%</td>
  </tr>
  <tr>

    <td>14</td>
    <td>초록마을 빛가람 중흥점</td>
    <td>전남 나주시 우정로 101,<br/> 중흥2차@ 상가 108호(빛가람동)</td>
    <td>010-3614-7464</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>한마음돌봄사회서비스협동조합</td>
    <td>전남 나주시 영강길 14-4, 2층</td>
    <td>061-334-5567</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>라파휴 혁신점</td>
    <td>전남 나주시 빛가람로 747,    빛가람메디컬빌딩 305호</td>
    <td>061-335-3327</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>세사리빙 나주혁신점</td>
    <td>나주시 그린로 331,    104호(빛가람동, 명작원빌딩)</td>
    <td>061-332-7638</td>
    <td>5%(5만원이상 구매시)</td>
  </tr>
  <tr>
    <td>18</td>
    <td>삼성홍어</td>
    <td>전남 나주시 영산포로 193(영산동)</td>
    <td>061-331-9435</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>청솔목장영농조합법인</td>
    <td>전남 나주시 왕곡면 터진목길 13-13</td>
    <td>061-337-8585</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>해피 1,000</td>
    <td>전남 나주시 예향로 3803, 상가동    102</td>
    <td>061-332-5151</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>21</td>
    <td>쇼모텔</td>
    <td>전남 나주시 내동길 3(송월동)</td>
    <td>061-333-7447</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>22</td>
    <td>진가람</td>
    <td>전남 나주시 중앙로 64</td>
    <td>061-334-1321</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>23</td>
    <td>절굿대스토리</td>
    <td>전남 나주시 청동길 14,    목사고을시장 </td>
    <td>010-6603-0848</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>24</td>
    <td>마중물추어탕 나주역전점</td>
    <td>전남 나주시 송월2길 2(송월동)</td>
    <td>061-336-5556</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>25</td>
    <td>커피파워</td>
    <td>전남 나주시 빛가람로 685, 1층</td>
    <td>010-3135-0614</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>26</td>
    <td>더브리즈(the breeze)</td>
    <td>전남 나주시 선창길 11(영산동) 1층</td>
    <td>061-337-2452</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>27</td>
    <td>브리즈</td>
    <td>전남 나주시 선창길 11(영산동) 2층</td>
    <td>061-337-2451</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>28</td>
    <td>미강</td>
    <td>전남 나주시 남평읍 수원금당길    24-25</td>
    <td>061-332-8452</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>29</td>
    <td>눈보안경마을</td>
    <td>전남 나주시 나주로 159</td>
    <td>061-334-0009</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>30</td>
    <td>한솔의료기</td>
    <td>전남 나주시 성북2길 23</td>
    <td>061-333-1553</td>
    <td>5%(5만원이상 구매시)</td>
  </tr>
  <tr>
    <td>31</td>
    <td>다비치안경 나주점</td>
    <td>전남 나주시 나주로 174-1(중앙동)</td>
    <td>061-335-0097</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>32</td>
    <td>명동아이랜드</td>
    <td>전남 나주시 상야2길 16,    116호(빛가람동, 토담휴로스 1차)</td>
    <td>061-331-5607</td>
    <td>30%</td>
  </tr>
  <tr>
    <td>33</td>
    <td>글라스스토리 빛가람점</td>
    <td>전남 나주시 그린로 337,    103호(빛가람동, 창대빌딩)</td>
    <td>061-335-1910</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>34</td>
    <td>남평신통의원</td>
    <td>전남 나주시 남평읍 남평1로 22</td>
    <td>061-334-7576</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>35</td>
    <td>1001안경콘택트</td>
    <td>전남 나주시 문화로 244,    106호(빛가람동)</td>
    <td>061-334-1009</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>36</td>
    <td>참명LED전기조명</td>
    <td>전남 나주시 우정로 106,    도담스타타워 A동 109호(빛가람동)</td>
    <td>061-930-6433</td>
    <td>5%</td>
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
