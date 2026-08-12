<?php
include_once('./_common.php');

$co_id = isset($_GET['co_id']) ? preg_replace('/[^a-z0-9_]/i', '', $_GET['co_id']) : 0;
$co_seo_title = isset($_GET['co_seo_title']) ? clean_xss_tags($_GET['co_seo_title'], 1, 1) : '';

// dbconfig파일에 $g5['content_table'] 배열변수가 있는지 체크
if( !isset($g5['content_table']) ){
    die('<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.');
}

// 내용
if($co_seo_title){
    $co = get_content_by_field($g5['content_table'], 'content', 'co_seo_title', generate_seo_title($co_seo_title));
    $co_id = isset($co['co_id']) ? $co['co_id'] : 0;
} else {
    $co = get_content_db($co_id);
}

if( ! (isset($co['co_seo_title']) && $co['co_seo_title']) && isset($co['co_id']) && $co['co_id'] ){
    seo_title_update($g5['content_table'], $co['co_id'], 'content');
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}

if (! (isset($co['co_id']) && $co['co_id']))
    alert('등록된 내용이 없습니다.');

$g5['title'] = $co['co_subject'];

// ★ 서브페이지 전용 CSS 추가
add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

if ($co['co_include_head'] && is_include_path_check($co['co_include_head']))
    @include_once($co['co_include_head']);
else
    include_once('./_head.php');

// KVE-2019-0828 취약점 내용
$co['co_tag_filter_use'] = 1;
$str = conv_content($co['co_content'], $co['co_html'], $co['co_tag_filter_use']);

// $src 를 $dst 로 변환 (생략된 정규식 코드는 원본과 동일하게 유지)
$src = $dst = array();
$src[] = "/{{쇼핑몰명}}|{{홈페이지제목}}/";
$dst[] = $config['cf_title'];
// ... (중략: 기존 치환 코드 그대로 유지) ...
$str = preg_replace($src, $dst, $str);

// 스킨경로
if(trim($co['co_skin']) == '')
    $co['co_skin'] = 'basic';

$content_skin_path = get_skin_path('content', $co['co_skin']);
$content_skin_url  = get_skin_url('content', $co['co_skin']);
$skin_file = $content_skin_path.'/content.skin.php';

if ($is_admin)
    echo '<div class="ctt_admin"><a href="'.G5_ADMIN_URL.'/contentform.php?w=u&amp;co_id='.$co_id.'" class="btn_admin btn">내용 수정</a></div>';
?>

<!-- ★ 여기서부터 레이아웃 디자인 추가 -->
<div id="svisual_layout_new">
    <div class="svisual_wrap">
        <div class="sub__background"></div>
        <div class="subvisual-layout">
          <div class="layout_sub svisual_03"> 
            <h2><span>주요사업</span></h2>
            <p class="subvisual-layout__text">자원봉사의 빛으로 함께 밝히는 전남</p>
          </div>
        </div>
    </div>
</div><!----////svisual_layout----->
<div id="body_layout">
  <div class="body_wrap layout"> 
    
    <!-- 좌측 메뉴 인클루드 -->
    <?php include G5_THEME_PATH."/sub_left_03.php"; ?>

    <div id="contens" class="contents_wrap">
      <div id="location" class="title_wrap">
        <!-- DB에서 가져온 제목 출력 -->
        <h2 class="page__title"><?php echo $g5['title']; ?></h2> 
        
        <!-- 유틸 시작 -->
        <div class="utile_wrap"> 
          <ul class="location_wrap">
            <li class="n1 navi_home"><a href="/">HOME</a></li>
            <li class="n2"><a href="">주요사업</a></li>
            <!-- DB에서 가져온 제목으로 네비게이션 동적 출력 -->
            <li class="n3"><a href="" class="navi_ov"><?php echo $g5['title']; ?></a></li>
         </ul>
        </div><!---///utile_wrap---->
      </div><!---///title_wrap--->
      
      <div class="sub_page_bg"></div>

<!-- 이 위치에 스킨 내용(DB 본문)이 삽입됩니다 -->
<?php
if(is_file($skin_file)) {
    $himg = G5_DATA_PATH.'/content/'.$co_id.'_h';
    if (file_exists($himg)) // 상단 이미지
        echo '<div id="ctt_himg" class="ctt_img"><img src="'.G5_DATA_URL.'/content/'.$co_id.'_h" alt=""></div>';

    include($skin_file);

    $timg = G5_DATA_PATH.'/content/'.$co_id.'_t';
    if (file_exists($timg)) // 하단 이미지
        echo '<div id="ctt_timg" class="ctt_img"><img src="'.G5_DATA_URL.'/content/'.$co_id.'_t" alt=""></div>';
} else {
    echo '<p>'.str_replace(G5_PATH.'/', '', $skin_file).'이 존재하지 않습니다.</p>';
}
?>

    </div><!---///contents_wrap-->
  </div><!-- ///body_wrap layout end --> 
</div><!---///body_layout--->
<!-- ★ 여기까지 레이아웃 닫기 완료 -->

<?php
if ($co['co_include_tail'] && is_include_path_check($co['co_include_tail']))
    @include_once($co['co_include_tail']);
else
    include_once('./_tail.php');
?>