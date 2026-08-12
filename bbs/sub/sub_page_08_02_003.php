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
    <td>삼성전자 고흥직매장</td>
    <td>고흥군 고흥읍 터미널길    17-5</td>
    <td>061-832-9202</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>고흥우먼로드</td>
    <td>고흥군 고흥읍 서문리 219-44</td>
    <td>010-4380-9200</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>3</td>
    <td>LG종합전자</td>
    <td>고흥군 고흥읍 시장길 38</td>
    <td>061-832-0513</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>4</td>
    <td>리츠뮤직 진 음악학원</td>
    <td>고흥읍 흥양길 7</td>
    <td>061-834-0117</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>5</td>
    <td>슬기미용실</td>
    <td>고흥읍 시장길 28-7</td>
    <td>010-8625-3116</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>6</td>
    <td>김다혜헤어샵</td>
    <td>고흥읍 학교길 66</td>
    <td>010-9012-8230</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>7</td>
    <td>여심미용실</td>
    <td>고흥읍 학교길 68</td>
    <td>010-7550-3177</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>8</td>
    <td>이브헤어샵</td>
    <td>고흥읍 고흥로 1738</td>
    <td>010-5332-4974</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>9</td>
    <td>준호미용실</td>
    <td>고흥군 고흥읍 남계리 578</td>
    <td>061-833-4917</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>10</td>
    <td>박호양 가위 손</td>
    <td>고흥군 고흥읍 여산당촌길 9</td>
    <td>010-4635-1521</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>11</td>
    <td>세종미용실</td>
    <td>고흥군 고흥읍 봉황길 48-1</td>
    <td>010-4563-2137</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>12</td>
    <td>삼양미용실</td>
    <td>고흥군 고흥읍 여산당촌길 4-2</td>
    <td>010-3605-3393</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>13</td>
    <td>주공세탁 빨래방</td>
    <td>고흥군 고흥읍 봉동주공길 32</td>
    <td>061-834-1234</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>14</td>
    <td>올포유</td>
    <td>고흥군 고흥읍 봉황길 45</td>
    <td>061-833-8989</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>15</td>
    <td>스킨스토리</td>
    <td>고흥군 고흥읍 홍교길 13 2층</td>
    <td>061-835-8005</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>16</td>
    <td>빠리헤어아트</td>
    <td>도양읍 명동길 5-7</td>
    <td>843-3393</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>17</td>
    <td>미림화원</td>
    <td>고흥군 고흥읍 봉동주공길 47</td>
    <td>010-7174-6605</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>18</td>
    <td>대한 체육사</td>
    <td>고흥군 학교길 80</td>
    <td>061-834-6611</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>19</td>
    <td>에덴식품</td>
    <td>고흥군 두원면 연강예회길 311</td>
    <td>834-1003</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>20</td>
    <td>이근수제빵소</td>
    <td>고흥읍 봉동주공길 44</td>
    <td>010-4081-1533</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>21</td>
    <td>한그루민박</td>
    <td>동일면 덕흥음쪽길 272-7</td>
    <td>010-9989-2077</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>22</td>
    <td>고유한관광농원</td>
    <td>두원면 연강예회길 299-8</td>
    <td>061-835-1700</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>23</td>
    <td>늘푸른식당</td>
    <td>고흥군 고흥읍 고흥로 1688</td>
    <td>010-4607-0348</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>24</td>
    <td>커피지나</td>
    <td>고흥군 고흥읍 고흥로 1655</td>
    <td>010-6405-1200</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>25</td>
    <td>김가네맛집</td>
    <td>고흥읍 흥양길 18</td>
    <td>010-7247-1789</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>26</td>
    <td>요거프레소커피샵(고흥점)</td>
    <td>고흥읍 여산당촌길 7 1층</td>
    <td>061-835-6381</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>27</td>
    <td>서독안경원</td>
    <td>고흥군 고흥읍 여산당촌길 13-1</td>
    <td>061-835-3621</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>28</td>
    <td>송안경원</td>
    <td>고흥군 고흥읍 터미널길 25</td>
    <td>061-833-6669</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>29</td>
    <td>밝은 안경</td>
    <td>고흥군 고흥로 1768</td>
    <td>061-835-2114</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>30</td>
    <td>리스안경</td>
    <td>고흥군 고흥읍 당촌길 11</td>
    <td>010-9394-0643</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>31</td>
    <td>안경세상</td>
    <td>고흥읍 여산당촌길 12-1</td>
    <td>061-833-0405</td>
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
