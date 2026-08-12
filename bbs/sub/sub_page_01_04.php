<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="센터소개"  ;
$g5['title'] = "센터소개 | 조직도";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>
<div id="body_layout">
  <div class="body_wrap layout"> 
    

   <?include G5_THEME_PATH."/sub_left_01.php"?>


    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <h2 class="page__title">조직도</h2>
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="">HOME</a></li>
            <li class="n2"><a href="">센터소개</a></li>
            <li class="n3"><a href="" class="navi_ov">조직도</a></li>
         </ul>
        </div><!---///utile_wrap---->
		
      </div><!---///title_wrap--->
	 <div class="sub_page_bg"></div>

<!----//서브페이지 내용---->
<div class="sub_wrap_page">
<div class="org_wrap" style="text-align:center;">
<img src="/bbs/sub/img/subpage_04_01.jpg" style="width:80%">
 </div>
 <!--  <ul class="organization">
    <li class="g1">
      <p class="director"><span class="cp">이사장</span></p>
    </li>
    <li class="g2">
      <ul class="rnp">
        <li><span class="lp">감사</span></li>
      </ul>
      <ul class="culture">
        <li><span class="rt">총회</span></li>
        <li><span class="rb">이사회</span></li>
      </ul>
    </li>
    <li class="g3"><span class="">센터장</span></li>
  <li class="g3_01 top"><span class="">사무처장</span> </li>
  	<li class="g2_02">
  	  <ul class="rnp">
  		<li><span class="lp">협력관</span></li>
  	  </ul>
  	  
  	</li>
    <li class="g3_01"> </li>
    <li class="g4">
      <ul class="rnp">
        <li>
          <dl>
            <dt><span>운영지원팀</span></dt>
          </dl>
        </li> 
  		<li class=""><span class="">활동지원팀</span> </li>
        <li class="">
          <dl>
            <dt><span>대외협력팀(전국소년체전팀)</span></dt>
          </dl>
        </li>
      </ul>
    </li>
  </ul>
  </div> 이미지-->
  <div class="table_box">
  <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">센터장</p></div>
  <div class="sub_table_wrap">
  <table class="table_t10">
  	<thead>
  		<tr>
  			<th width="15%">성명</th>
  			<th width="15%">직책</th>
  			<th>주요업무</th>
  			<th width="25%">문의처</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
		
  			<td>김○</td>
  			<td>센터장</td>
  			<td class="t_left">
  				<ul>
  					<li>전라남도자원봉사센터 운영전반에 관한 사항(총괄)</li>
<li>전남통합자원봉사지원단 단장</li>
  				</ul>
  			</td>
  			<td>061-240-2300</td>
  		</tr>
  	</tbody>
  </table>
  </div><!---sub_table_wrap--->
</div>


<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사무국장</p></div>
<div class="sub_table_wrap">
<table class="table_t10">
	<thead>
		<tr>
			<th width="15%">성명</th>
			<th width="15%">직책</th>
			<th>주요업무</th>
			<th width="25%">문의처</th>
		</tr>
	</thead>
	<tbody>
	
		<tr>
			<td  colspan="4" >공석</td> 
			<!-- <td>김 경 화</td>
			<td>사무국장<br/>(직무대행)</td>
			<td class="t_left">
				<ul>
					<li>전라남도자원봉사센터 실무 총괄</li>
			<li>전국통합자원봉사지원단 협력 네트워크</li>
			<li>법인운영(정)</li>
			<li>남도사랑봉사단 운영 총괄</li>
			<li>청년봉사단 운영 총괄</li>
			<li>유관기관 MOU 체결 및 네트워크</li>
				</ul>
			</td>
			<td>061-240-2301</td>  -->
		</tr>


	</tbody>



  </table>
</div>
</div>






<!----//서브페이지 내용---->
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">운영지원팀</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t10">
	<thead>
		<tr>
			<th width="15%">성명</th>
			<th width="15%">직책</th>
			<th>주요업무</th>
			<th width="25%">문의처</th>
		</tr>
	</thead>
	<tbody>
	<tr>
			<td>박○</td>
			<td>팀장</td>
			<td class="t_left">
				<ul>
<li>센터 운영관리 및 법인업무 총괄</li>
<li>전남 시군센터 법인화 추진</li>
<li>인사 관리 및 채용</li>
<li>직원 근무 평가 및 복무·근태관리</li>
<li>직원 고충 상담 및 처리</li>
<li>자원봉사센터 평가에 관한 사항</li>
<li>전남자원봉사자 대회</li>
				</ul>
			</td>
			<td>061-240-2310</td>
		</tr>
		
		<tr>
			<td>김○</td>
			<td>대리</td>
			<td class="t_left">
				<ul>
<li>센터 공익법인지정 관련 추진 </li>
<li>예산·결산</li>
<li>회계업무</li>
<li>자원봉사센터 계약관리</li>
<li>포상관리</li>
<li>감사업무</li>
<li>자원봉사종합보험 관리</li>
<li>자원봉사센터 사무국 서무업무</li>
				</ul>
			</td>
			<td>061-240-2311</td>
		</tr> 
		
		
			<tr>
                <td>김○</td>
                <td>주임</td>
                <td class="t_left">
                    <ul>
<li>자원봉사 명예의 전당 운영</li>
<li>온마음 나눔 카드 운영</li>
<li>자원봉사 마일리지 제도운영</li>
<li>개인정보 보호 관리 및 운영</li>
<li>아카이브 및 SNS 운영관리</li>
<li>자원봉사 정보시스템(1365 포털) 운영</li>
<li>자원봉사 활동처 관리사업</li>
<li>총무 및 운영지원 업무</li>
<li>팀 서무업무</li>
						
                    </ul>
                </td>
                <td>061-240-2312</td>
            </tr>

		        <tr>
			                <td>최○</td>
			                <td>팀원</td>
			                <td class="t_left">
			                    <ul>
			                        <li>나눔이동세탁차 운영 및 관리</li>
<li>자원봉사센터 홈페이지 관리</li>
<li>센터 업무용 차량 및 시설물·비품 관리 등</li>
<li>기타 센터 업무 지원</li>
			                    </ul>
			                </td>
			                <td>061-240-2313</td>
			            </tr> 
				

	</tbody>
  </table>
</div><!---sub_table_wrap--->
</div>
<!----//서브페이지 내용---->


<!----//서브페이지 내용---->
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">활동지원팀</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t10">
	<thead>
		<tr>
			<th width="15%">성명</th>
			<th width="15%">직책</th>
			<th>주요업무</th>
			<th width="25%">문의처</th>
		</tr>
	</thead>
	<tbody>
            <tr>
                <td>김○</td>
                <td>선임팀장</td>
                <td class="t_left">
                    <ul>
<li>이사회, 총회, 인사위원회 운영</li>
<li>정관 및 규정 제정</li>
<li>활동지원팀 업무 총괄 </li>
<li>자원봉사 사업기획 및 신규(시책)사업 개발</li>
<li>청년봉사단 운영(신규) 총괄 </li>
<li>재난자원봉사 협력 네트워크 구축</li>
                    </ul>
                </td>
                <td>061-240-2320</td>
            </tr>

			<tr>
                <td>주○</td>
                <td>주임</td>
                <td class="t_left">
                    <ul>
<li>남도사랑봉사단 운영 총괄</li>
<li>전남대학생 연합봉사단 운영</li>
<li>전남 섬 볼런투어 운영</li>
<li>지역활력 스케일업 프로젝트 공모사업 추진</li>
<li>대한민국 새단장 운영</li>
                    </ul>
                </td>
                <td>061-240-2321</td>
            </tr>
			<tr>
                <td>이○</td>
                <td>주임</td>
                <td class="t_left">
                    <ul>
<li>블루재능봉사단 운영</li>
<li>사랑실은 가족봉사단 운영</li>
<li>자원봉사 홍보 활성화</li>
<li>희망여름 착착착 나눔캠페인 기획사업 추진</li>
                    </ul>
                </td>
                <td>061-240-2322</td>
            </tr>
			
			<tr>
                <td>고○</td>
                <td>재난코디</td>
                <td class="t_left">
                    <ul>
<li>재난현장 자원봉사자 모집ㆍ교육ㆍ배치ㆍ안전확보 조치</li>
<li>재난현장 통합자원봉사지원단 운영</li>
<li>재난 상시 일감 개발·운영</li>
<li>재난 분야 자원봉사 활동실적 관리 및 보고 등</li>
<li>은퇴재능 남도친구들 운영</li>
<li>팀 서무업무</li>
                    </ul>
                </td>
                <td>061-240-2323</td>
            </tr>
				
			

          
        </tbody>
  </table>
</div><!---sub_table_wrap--->
</div>
<!----//서브페이지 내용---->


<!----//서브페이지 내용---->
<div class="table_box">
<div class="subpoint"><span class="dot"><em></em></span><p class="tt1">대외협력팀</p></div><!----////타이틀---->
<div class="sub_table_wrap">
<table class="table_t10">
	<thead>
		<tr>
			<th width="15%">성명</th>
			<th width="15%">직책</th>
			<th>주요업무</th>
			<th width="25%">문의처</th>
		</tr>
	</thead>
	<tbody>
            <tr>
                <td>문○</td>
                <td>팀장</td>
                <td class="t_left">
                    <ul>
<li>대외협력팀 운영 총괄</li>
<li>전국자원봉사센터대회(신규)</li>
<li>유관 기관 네트워크 총괄(광역·중앙·협회 등)</li>
<li>시군자원봉사센터장 워크숍</li>

                    </ul>
                </td>
                <td>061-240-2330</td>
            </tr>

           
			<tr>
                <td>진○</td>
                <td>주임</td>
                <td class="t_left">
                    <ul>
<li>전라남도 자원봉사 박람회</li>
<li>기업 사회공헌 활성화</li>
<li>기업 후원금 관리 및 승인</li>
<li>바로 온 봉사 모바일 앱 운영</li>
<li>국제교류 협력사업</li>
<li>시군자원봉사센터 관리자 역량 강화 워크숍</li>
                    </ul>
                </td>
                <td>061-240-2331</td>
            </tr>
			
			
			<tr>
                <td>천○</td>
                <td>주임</td>
                <td class="t_left">
                    <ul>
<li>영호남 자원봉사 교류협력사업</li>
<li>도 센터 직원 역량 강화(직원교육 등)</li>
<li>우수자원봉사자 연수</li>
<li>호남권 광역센터 역량 강화 워크숍</li>
<li>자원봉사 교육</li>
<li>자원봉사자 상담 및 관리</li>
<li>세상을 바꾸는 시간 V 전남대회</li>
<li>팀 서무업무</li>
                    </ul>
                </td>
                <td>061-240-2332</td>
            </tr>
			
				             
            

          
        </tbody>
  </table>
</div><!---sub_table_wrap--->
</div>
<!----//서브페이지 내용---->


</div>
	


	</div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->





<?php
include_once('./_tail.php');
?>
