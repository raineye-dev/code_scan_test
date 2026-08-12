<?php
include_once('./_common.php');
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');
$group['gr_subject'] ="주요사업"  ;
$g5['title'] = "주요사업 | 나눔 이동 세탁차";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);
?>


<div id="body_layout">
  <div class="body_wrap layout"> 
    
    <?php include G5_THEME_PATH."/sub_left_03.php"; ?>

    <div id="contens" class="contents_wrap">
        <div id="location" class="title_wrap">
            <h2 class="page__title">전남 청년봉사단 운영</h2>
            <div class="utile_wrap"> 
                <ul class="location_wrap">
                    <li class="n1 navi_home"><a href="">HOME</a></li>
                    <li class="n2"><a href="">주요사업</a></li>
                    <li class="n3"><a href="" class="navi_ov">전남 청년봉사단 운영</a></li>
                </ul>
            </div>
        </div>
        
        <div class="sub_page_bg"></div>

        <div class="sub_topbox type3">
            <div class="inner_box">
                <!--<span class="ir circle circle-lg ir-icon10 ir-icon__lg icon1"></span>-->
                <div class="txtwrap"> 
                    <strong class="h-box">전남 청년봉사단 운영</strong>
                    <p>청년이 실생활에 유용한 기술을 배우고, 이를 봉사로 환원하여 지역사회 문제해결에 참여함으로써 전남 인구소멸 대응 및 청년의 지역정착도모를 통해 자기성장과 공동체 기여가 연결되는 신규 프로젝트 사업으로 배움→ 나눔실천→ 성취감→ 재참여의 선순환 시스템 형성</p>
                </div>
            </div>
        </div>

        <img src="/bbs/sub/img/sub_page_03_08 (3).png" style="display: block; margin: 0 auto;">

        <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진배경 및 필요성</p></div>
        <div class="txt_box sub_list_wrap">
            <ul class="dot_list">
                <li>청년봉사단 구성을 통해 전라남도의 자원봉사 인프라를 다변화하고 지속 가능한 자원봉사 생태계 기반 마련이 필요함</li>
                <li>현재 자원봉사참여는 중·장년층에 편중되어 있으며, 청년층의 조직적 참여기반이 부족한 실정임</li>
            </ul>
        </div>

        <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">목적</p></div>
        <div class="txt_box sub_list_wrap">
            <ul class="dot_list">
                <li>청년 주도의 지역사회 문제해결 및 공익활동 확대</li>
                <li>봉사단 활동을 통한 청년 참여문화 확산 및 리더 양성</li>
                <li>지속가능한 자원봉사 생태계 조성 및 전남 인구소멸 대응</li>
            </ul>
        </div>

        <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">사업개요</p></div>
        <div class="txt_box sub_list_wrap">
            <ul class="dot_list">
                <li>추진기간 : 2026년 연중</li>
                <li>대상 : 300명(시군센터, 유관기관, 대학교, 단체 등) *5년간 1,000명<br/>
                    - 교육수강반(배우고 싶었던 기술 무료 습득), 재능기부반(잠자고 있는 재능 깨우기)</li>
                <li>주요내용 : 발대식, 워크숍, 실생활 기반 기술역량강화 교육, 지역미션형 봉사활동, 사회문제해결 프로젝트, 성과공유회 등</li>
            </ul>
        </div>

        <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">추진계획 (단계별 추진절차)</p></div>
        <div class="txt_box sub_list_wrap">
            <div class="table-responsive" style="margin-top:10px;">
                <table class="table table-bordered text-center" style="vertical-align:middle; word-break:keep-all; min-width:800px;">
                    <thead>
                        <tr style="background-color:#00349a; color:#fff;">
                            <th style="padding:15px 5px;">청년봉사단<br>모집 및 설명회</th>
                            <th style="padding:15px 5px;">청년봉사단<br>간담회,워크숍</th>
                            <th style="padding:15px 5px;">청년봉사단<br>발대식</th>
                            <th style="padding:15px 5px;">청년봉사단<br>맞춤형 활동</th>
                            <th style="padding:15px 5px;">청년봉사단<br>성과공유회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding:20px 10px; line-height:1.6;">시군자원봉사센터<br>기업, 기관, 대학교<br>↓<br>도자원봉사센터</td>
                            <td style="padding:20px 10px; line-height:1.6;">분야별 전문교육<br>정기회의<br>간담회<br>워크숍</td>
                            <td style="padding:20px 10px; line-height:1.6;">발대식<br>인증서수여<br>오리엔테이션<br>팀별 리더구성</td>
                            <td style="padding:20px 10px; line-height:1.6;">지역사회<br>문제 해결형<br>봉사활동</td>
                            <td style="padding:20px 10px; line-height:1.6;">활동보고 및<br>우수봉사자<br>표창<br>실적인증</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr style="background-color:#e6eff9; font-weight:bold;">
                            <td style="padding:15px 10px;">1단계 (1~7월)</td>
                            <td style="padding:15px 10px;">2단계 (8~11월)</td>
                            <td style="padding:15px 10px;">3단계 (9월)</td>
                            <td style="padding:15px 10px;">4단계 (9~11월)</td>
                            <td style="padding:15px 10px;">5단계 (11~12월)</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
                    <img src="/bbs/sub/img/sub_page_03_08 (1).png" style="display: block; margin: 0 auto;">
        </div>


        
        <div class="subpoint"><span class="dot"><em></em></span><p class="tt1">기대효과</p></div>
        <div class="txt_box sub_list_wrap">
            <ul class="dot_list">
                <li>배움→ 나눔실천→ 성취감 재참여로 이어지는 선순환 시스템 형성</li>
                <li>청년봉사단 구성 통한 중장년층에 편중된 자원봉사 인프라 다변화</li>
                <li>기술을 활용해 사회적 가치를 실현하려는 청년참여 플랫폼 구조 마련</li>
                <li>디지털, SNS 콘텐츠를 통한 도민의 생활편의 상승 및 사회·경제적 파급효과 및 지속가능 봉사 생태계 조성</li>
            </ul>
            <img src="/bbs/sub/img/sub_page_03_08 (2).png" style="display: block; margin: 0 auto;">
        </div>

    </div></div></div><?php
include_once('./_tail.php');
?>