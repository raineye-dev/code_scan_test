<?php
// [핵심] 출력 버퍼링
ob_start();

// [설정] 에러 표시 끄기 (서버가 강제로 500 에러를 내뿜는 것을 방지)
error_reporting(0);
ini_set('display_errors', 0);

// ==============================================================================
// [설정] API 다중 키 설정 (크레딧 소진 시 자동으로 다음 키로 넘어감)
// ==============================================================================
$api_keys = [
//    'project_public_89b30ed8973e2bbc164a698520d2cd2e_gFBq_8550a6525bfddf50f37723ceffdb7b05', // 기존 키
//    'project_public_066a1fa08ee6c837467fbea928979a51_aP6-ia79960366da7ef26eb34651a8924b897', // 추가 키 1
//    'project_public_d1a4f3525c01f0ab355e17bdc0c4a83c_jzMAv3a85b7146a267fb5e00cb2d4001fd830', // 추가 키 2
//    'project_public_95c45923aa87b5fe47ebc5940bc04f5d_LAI8j507d2b61224c13f4333d42d446e7bb17', // 추가 키 3
    'project_public_df9f386b5195c384e9f82bedf424bef9_wJI8e06eca6065d542c0bf9f83772e6e01018', // 추가 키 4
    'project_public_e003ef3b5e3406c9bbff47823fc00277_XxWRYd6deefa3e5b8b3f59d3150d2de8db845',  // 추가 키 5
    'project_public_e00e78b7183e1ac4d5b71b3e06f4fad0_8mdE122a7c0c208fc9cd3ca6cc78673f21151'
];

$target_dir = __DIR__;
$page_rows = 1000; // 페이지당 출력할 파일 수

@set_time_limit(0);
@ini_set('memory_limit', '-1');

// ------------------------------------------------------------------------------
// [AJAX] 요청 처리기
// ------------------------------------------------------------------------------
if (isset($_POST['mode'])) {
    
    register_shutdown_function(function() {
        $error = error_get_last();
        if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR])) {
            while (ob_get_level()) { ob_end_clean(); }
            http_response_code(200); 
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode([
                'status' => 'error', 
                'msg' => '서버 치명적 오류: ' . $error['message'] . ' (Line: ' . $error['line'] . ')'
            ]);
        }
    });

    $start_time = microtime(true);
    while (ob_get_level()) { ob_end_clean(); }
    
    http_response_code(200); 
    header('Content-Type: application/json; charset=utf-8');
    
    $response = [];

    try {
        if (!function_exists('curl_init')) throw new Exception("서버에 PHP cURL 모듈이 설치되어 있지 않습니다.");
        
        // [5] 속도 개선의 핵심: 남은 크레딧 조회를 비동기로 분리
        if ($_POST['mode'] === 'get_credits') {
            $remaining_credits = "0개 (모든 키가 소진되었습니다. 새 키가 필요합니다.)";
            $base_api_url = 'https://api.ilovepdf.com/v1';

            foreach ($api_keys as $idx => $key) {
                try {
                    $auth_res = call_api($base_api_url . '/auth', 'POST', ['public_key' => $key]);
                    $token_data = @json_decode($auth_res, true);
                    
                    if (isset($token_data['token'])) {
                        $start_res = call_api($base_api_url . '/start/compressimage', 'GET', [], $token_data['token']);
                        $start_json = @json_decode($start_res, true);
                        
                        if (isset($start_json['remaining_files']) && (int)$start_json['remaining_files'] > 0) {
                            $remaining_credits = number_format($start_json['remaining_files']) . "개 (키 #" . ($idx + 1) . " 사용중, 소진 시 자동전환)";
                            break;
                        }
                    }
                } catch(Exception $e) {
                    continue;
                }
            }
            echo json_encode(['status' => 'success', 'credits' => $remaining_credits]);
            exit;
        }

        $file_sub_path = isset($_POST['file_path']) ? $_POST['file_path'] : '';
        
        if (empty($file_sub_path) || strpos($file_sub_path, '..') !== false) {
            throw new Exception("잘못된 경로 접근입니다.");
        }

        $full_path = $target_dir . '/' . $file_sub_path;
        $temp_path = $full_path . '.temp';

        if (!file_exists($full_path)) throw new Exception("파일이 존재하지 않습니다: " . $file_sub_path);

        if ($_POST['mode'] === 'preview') {
            $result = perform_optimization($full_path, true); 
            $response = array_merge(['status' => 'success'], $result);
        }
        else if ($_POST['mode'] === 'apply') {
            if (!file_exists($temp_path)) throw new Exception("임시 파일 만료");
            
            $org_size = filesize($full_path);
            
            if (!@rename($temp_path, $full_path)) {
                if (!@copy($temp_path, $full_path)) {
                    @unlink($temp_path);
                    throw new Exception("파일 덮어쓰기 권한 오류");
                }
                @unlink($temp_path);
            }
            clearstatcache();
            
            $new_size = filesize($full_path);
            $percent = ($org_size > 0) ? round(($org_size - $new_size) / $org_size * 100, 1) : 0;
            $duration = number_format(microtime(true) - $start_time, 2);

            $response = ['status' => 'success', 'msg' => '적용 완료', 'percent' => $percent, 'duration' => $duration];
        }
        else if ($_POST['mode'] === 'cancel') {
            if (file_exists($temp_path)) @unlink($temp_path);
            $response = ['status' => 'success', 'msg' => '취소됨'];
        }
        else if ($_POST['mode'] === 'direct') {
            $result = perform_optimization($full_path, true); 
            if (file_exists($temp_path)) {
                if (!@rename($temp_path, $full_path)) {
                    if (!@copy($temp_path, $full_path)) {
                        @unlink($temp_path);
                        throw new Exception("파일 덮어쓰기 권한 오류");
                    }
                    @unlink($temp_path);
                }
                clearstatcache();
                $duration = number_format(microtime(true) - $start_time, 2);
                $response = ['status' => 'success', 'msg' => '완료', 'new_size_str' => $result['new_size'], 'percent' => $result['percent'], 'duration' => $duration];
            } else {
                throw new Exception("저장 실패");
            }
        }

    } catch (Exception $e) {
        if (isset($temp_path) && file_exists($temp_path)) @unlink($temp_path);
        $response = ['status' => 'error', 'msg' => $e->getMessage()];
    } catch (Error $e) { 
        if (isset($temp_path) && file_exists($temp_path)) @unlink($temp_path);
        $response = ['status' => 'error', 'msg' => "PHP 내부 에러: " . $e->getMessage()];
    }

    echo json_encode($response);
    exit;
}

// ------------------------------------------------------------------------------
// 핵심 로직 함수 
// ------------------------------------------------------------------------------
function perform_optimization($full_path, $save_temp = true) {
    global $target_dir, $api_keys; 
    
    $ext = strtolower(pathinfo($full_path, PATHINFO_EXTENSION));
    $is_pdf = ($ext === 'pdf');
    $temp_path = $full_path . '.temp';

    $base_api_url = 'https://api.ilovepdf.com/v1';
    
    $token = null;
    $task_id = null;
    $worker = null;
    $tool_name = $is_pdf ? 'compress' : 'compressimage';

    foreach ($api_keys as $key) {
        try {
            $auth_res = call_api($base_api_url . '/auth', 'POST', ['public_key' => $key]);
            $token_data = json_decode($auth_res, true);
            if (!isset($token_data['token'])) continue;

            $start_res = call_api($base_api_url . '/start/' . $tool_name, 'GET', [], $token_data['token']);
            $start_json = json_decode($start_res, true);
            if (!isset($start_json['task'])) continue;
            
            $token = $token_data['token'];
            $task_id = $start_json['task'];
            $worker = isset($start_json['server']) ? 'https://' . $start_json['server'] . '/v1' : $base_api_url;
            break;

        } catch (Exception $e) {
            continue; 
        }
    }

    if (!$token || !$task_id) {
        throw new Exception("❌ 모든 API 키의 요금(크레딧)이 소진되었습니다.");
    }

    $mime_type = 'application/octet-stream';
    if (function_exists('finfo_open')) {
        $finfo = @finfo_open(FILEINFO_MIME_TYPE);
        if ($finfo) { $mime_type = @finfo_file($finfo, $full_path); @finfo_close($finfo); }
    }
    if ($is_pdf) $mime_type = 'application/pdf';
    elseif (in_array($ext, ['jpg', 'jpeg'])) $mime_type = 'image/jpeg';
    elseif ($ext === 'png') $mime_type = 'image/png';
    elseif ($ext === 'gif') $mime_type = 'image/gif';

    $safe_filename = 'upload_' . time() . '.' . $ext;

    if (function_exists('curl_file_create')) {
        $cfile = curl_file_create($full_path, $mime_type, $safe_filename);
    } elseif (class_exists('CURLFile')) {
        $cfile = new CURLFile($full_path, $mime_type, $safe_filename);
    } else {
        $cfile = '@' . realpath($full_path) . ';filename=' . $safe_filename . ';type=' . $mime_type;
    }

    $upload_res = call_api($worker . '/upload', 'POST', ['task' => $task_id, 'file' => $cfile], $token, true);
    $upload_data = json_decode($upload_res, true);
    
    if(!isset($upload_data['server_filename'])) {
        $api_error = isset($upload_data['error']['message']) ? $upload_data['error']['message'] : $upload_res;
        throw new Exception("업로드 실패: " . $api_error);
    }
    $server_filename = $upload_data['server_filename'];

    $process_data = ['task' => $task_id, 'tool' => $tool_name, 'files' => [['server_filename' => $server_filename, 'filename' => $safe_filename]]];
    call_api($worker . '/process', 'POST', $process_data, $token);

    $download_url = $worker . '/download/' . $task_id;
    $ch = curl_init($download_url);
    
    $fp = @fopen($temp_path, 'w+');
    if (!$fp) throw new Exception("임시 파일(.temp)을 생성할 수 없습니다.");

    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $token]);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    fclose($fp);

    if ($http_code == 200) {
        $new_size = filesize($temp_path);
        if ($new_size < 200) {
            $err_data = file_get_contents($temp_path);
            $err_json = json_decode($err_data, true);
            $msg = isset($err_json['error']['message']) ? $err_json['error']['message'] : 'Unknown Error';
            @unlink($temp_path);
            throw new Exception("API 에러: " . $msg);
        }
        
        $org_size = filesize($full_path);
        $percent = ($org_size > 0) ? round(($org_size - $new_size) / $org_size * 100, 1) : 0;

        $rel_path = str_replace($target_dir . '/', '', $temp_path);
        $rel_path = str_replace('\\', '/', $rel_path);
        $rel_path = ltrim($rel_path, '/');
        
        return ['org_size' => get_filesize_string($org_size), 'new_size' => get_filesize_string($new_size), 'percent' => $percent, 'preview_url' => './' . $rel_path . '?t=' . time()];
    } else {
        @unlink($temp_path);
        throw new Exception("다운로드 실패 (HTTP $http_code)");
    }
}

function call_api($url, $method = 'GET', $data = [], $token = null, $is_file = false) {
    $ch = curl_init($url);
    $headers = [];
    if ($token) $headers[] = 'Authorization: Bearer ' . $token;
    
    if (!$is_file) {
        $headers[] = 'Content-Type: application/json';
    } else {
        $headers[] = 'Expect:'; 
    }
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 300); 
    
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        
        if ($is_file && !class_exists('CURLFile') && defined('CURLOPT_SAFE_UPLOAD')) {
            @curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
        }
        
        if ($is_file) curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        else curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }
    
    $res = curl_exec($ch);
    $info = curl_getinfo($ch);
    $err = curl_error($ch);
    curl_close($ch);
    
    if ($err) throw new Exception("통신 오류: " . $err);
    
    if ($info['http_code'] >= 400) {
        $err_json = @json_decode($res, true);
        $api_msg = isset($err_json['message']) ? $err_json['message'] : (isset($err_json['error']['message']) ? $err_json['error']['message'] : $res);
        
        if (strpos($api_msg, 'used all your monthly credits') !== false) {
            throw new Exception("CREDIT_EXHAUSTED"); 
        }
        
        throw new Exception("API 통신 에러 (" . $info['http_code'] . "): " . $api_msg);
    }
    return $res;
}

function get_filesize_string($bytes) {
    if ($bytes >= 1048576) return number_format($bytes / 1048576, 2) . 'MB';
    elseif ($bytes >= 1024) return number_format($bytes / 1024, 2) . 'KB';
    else return $bytes . 'bytes';
}

function scan_images_recursive($dir, &$results = []) {
    $files = scandir($dir);
    $exclude_dirs = ['.', '..', 'cache', 'session', 'logs', '.git', 'adm', 'extend', 'lib', 'plugin', 'js', 'theme', 'mobile', 'skin', 'bbs', 'font', 'img', 'gnuboard5'];

    foreach ($files as $key => $value) {
        if (in_array($value, $exclude_dirs)) continue;
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            if (preg_match("/\.(jpg|jpeg|png|gif|pdf)$/i", $value) && substr($value, -5) !== '.temp' && $value !== basename(__FILE__)) {
                if (!preg_match('/^[\x20-\x7E가-힣ㄱ-ㅎㅏ-ㅣ]+$/', $value)) continue;

                global $target_dir;
                $rel_path = str_replace(realpath($target_dir) . DIRECTORY_SEPARATOR, '', $path);
                $rel_path = str_replace('\\', '/', $rel_path); 
                $rel_path = ltrim($rel_path, '/');
                $results[] = [
                    'path' => $path,
                    'rel_path' => $rel_path,
                    'name' => $value,
                    'size' => filesize($path),
                    'mtime' => filemtime($path)
                ];
            }
        } else {
            scan_images_recursive($path, $results);
        }
    }
    return $results;
}

// ------------------------------------------------------------------------------
// 메인 UI 표시
// ------------------------------------------------------------------------------

$image_list = [];
if (file_exists($target_dir)) {
    scan_images_recursive($target_dir, $image_list);
}

// [추가/수정] 검색 파라미터 (파일명 + 기간)
$search_filename = isset($_GET['filename']) ? trim($_GET['filename']) : '';
$search_start_date = isset($_GET['start_date']) ? trim($_GET['start_date']) : '';
$search_end_date = isset($_GET['end_date']) ? trim($_GET['end_date']) : '';

// 검색 필터링 적용 (파일명 + 기간)
if ($search_filename || $search_start_date || $search_end_date) {
    $image_list = array_filter($image_list, function($file) use ($search_filename, $search_start_date, $search_end_date) {
        $matched = true;
        
        // 1. 파일명 검색
        if ($search_filename && stripos($file['rel_path'], $search_filename) === false) {
            $matched = false;
        }
        
        // 2. 기간 검색
        $file_date = date('Y-m-d', $file['mtime']);
        if ($matched && $search_start_date && $file_date < $search_start_date) {
            $matched = false;
        }
        if ($matched && $search_end_date && $file_date > $search_end_date) {
            $matched = false;
        }
        
        return $matched;
    });
}

// 정렬
$sort_mode = isset($_GET['sort']) ? $_GET['sort'] : 'date'; 
usort($image_list, function($a, $b) use ($sort_mode) {
    if ($sort_mode === 'size') return $b['size'] - $a['size'];
    else return $b['mtime'] - $a['mtime']; 
});

$filter_ext = isset($_GET['ext']) ? $_GET['ext'] : 'all';
if ($filter_ext !== 'all') {
    $image_list = array_filter($image_list, function($file) use ($filter_ext) {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if($ext == 'jpeg') $ext = 'jpg';
        return $ext === $filter_ext;
    });
}

$total_count = count($image_list);
$total_page = ceil($total_count / $page_rows);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
if ($page > $total_page) $page = $total_page;

$start_idx = ($page - 1) * $page_rows;
$paged_list = array_slice($image_list, $start_idx, $page_rows);

function get_url($key, $val) {
    $params = $_GET;
    $params[$key] = $val;
    if($key != 'page') $params['page'] = 1; 
    return '?' . http_build_query($params);
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 최적화 관리 (<?php echo number_format($total_count); ?>개)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body { margin: 0; padding: 0; font-family: 'Malgun Gothic', sans-serif; background: #f9fafb; color: #333; }
        .img-tool-wrap { padding: 30px; max-width: 1400px; margin: 0 auto; min-height: 100vh; }
        .img-header { margin-bottom: 20px; }
        .img-header h1 { font-size: 24px; margin-bottom: 5px; color: #111; }
        .paging { text-align: center; margin-top: 20px; }
        .paging a { display: inline-block; padding: 5px 10px; border: 1px solid #ddd; margin: 0 2px; text-decoration: none; color: #333; background: #fff; }
        .paging a.active { background: #2563eb; color: #fff; border-color: #2563eb; }
        
        .search-bar { margin-bottom: 20px; display: flex; gap: 5px; align-items: center; flex-wrap: wrap;}
        .search-input { padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 4px; }
        .search-btn { padding: 8px 16px; background: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .reset-btn { padding: 8px 16px; background: #fff; color: #333; border: 1px solid #d1d5db; border-radius: 4px; text-decoration: none; display: inline-block; font-size: 13px; line-height: 1.5;}
        
        .tab-menu { display: flex; gap: 10px; margin-bottom: 15px; border-bottom: 1px solid #e5e7eb; padding-bottom: 15px; flex-wrap: wrap;}
        .tab-btn { padding: 8px 16px; border: 1px solid #d1d5db; background: #fff; border-radius: 20px; cursor: pointer; font-size: 14px; font-weight: bold; color: #4b5563; text-decoration: none; }
        .tab-btn:hover { background: #f3f4f6; }
        .tab-btn.active { background: #2563eb; color: #fff; border-color: #2563eb; }

        .img-table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; }
        .img-table th { background: #f3f4f6; padding: 12px; border-bottom: 1px solid #e5e7eb; font-weight: bold; color: #374151; text-align: center; }
        .img-table td { padding: 12px; border-bottom: 1px solid #e5e7eb; text-align: center; color: #4b5563; vertical-align: middle; }
        .img-table td.al { text-align: left; }
        
        .th-sort { cursor: pointer; color: #2563eb; }
        .th-sort:hover { background-color: #e5e7eb; text-decoration: underline; }
        .th-active { background-color: #fff7ed !important; color: #ea580c; border-bottom: 2px solid #ea580c; }

        .btn { border: none; padding: 6px 12px; cursor: pointer; border-radius: 4px; font-size: 13px; }
        .btn-compress { background: #fff; border: 1px solid #2563eb; color: #2563eb; }
        .btn-compress:hover { background: #2563eb; color: #fff; }
        .btn-compress:disabled { background: #e5e7eb; border-color: #d1d5db; color: #9ca3af; cursor: not-allowed; }

        .btn-bulk { background: #2563eb; color: white; padding: 8px 16px; border-radius: 4px; font-weight: bold; font-size: 14px; margin-left: auto; border:none; cursor: pointer; }
        .btn-bulk:hover { background: #1d4ed8; }
        .btn-bulk:disabled { background: #93c5fd; cursor: wait; }

        .status-badge { display: inline-block; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; }
        .st-wait { background: #f3f4f6; color: #6b7280; }
        .st-ing { background: #dbeafe; color: #1e40af; }
        .st-success { background: #d1fae5; color: #065f46; }
        .st-error { background: #fee2e2; color: #b91c1c; }
        
        .modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; }
        .modal-content { background: #fff; padding: 25px; border-radius: 12px; width: 800px; max-width: 95%; box-shadow: 0 10px 25px rgba(0,0,0,0.2); text-align: center; }
        .preview-box { display: flex; justify-content: center; gap: 20px; margin: 20px 0; background: #f8f9fa; padding: 20px; border-radius: 8px; }
        .preview-item { flex: 1; }
        .preview-item img, .preview-item iframe { width: 100%; height: 300px; border: 1px solid #ddd; object-fit: contain; background: #fff; }
        .btn-apply { background: #059669; color: #fff; padding: 10px 25px; font-size: 15px; font-weight: bold; margin-right: 10px; border-radius: 6px; }
        .btn-cancel { background: #6b7280; color: #fff; padding: 10px 25px; font-size: 15px; font-weight: bold; border-radius: 6px; }
    </style>
</head>
<body>

<div id="eta-box" style="position:fixed; top:20px; right:20px; background:#1e40af; color:#fff; padding:15px 20px; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,0.2); z-index:9999; display:none; text-align:right; font-size:14px; line-height:1.4;"></div>

<div class="img-tool-wrap">
    <div class="img-header">
        <h1>📂 파일 최적화 관리 (총 <?php echo number_format($total_count); ?>개)</h1>
        <p style="color:#2563eb; font-size:15px; font-weight:bold; margin-top:10px;">
            ℹ️ 현재 API 상태: <span id="credit_display" style="color:#dc2626;">⏳ 실시간 확인 중...</span>
        </p>
        <p style="color:#666; font-size:14px;">
            경로: <?php echo $target_dir; ?><br>
            정렬: <?php echo ($sort_mode == 'size') ? '용량 순' : '최신 날짜 순'; ?>
            <?php if($search_filename || $search_start_date || $search_end_date) echo " | <span style='color:#059669;font-weight:bold;'>검색 활성화됨</span>"; ?>
        </p>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
        <form method="get" class="search-bar" style="margin-bottom: 0;">
            <input type="hidden" name="sort" value="<?php echo $sort_mode; ?>">
            <input type="hidden" name="ext" value="<?php echo $filter_ext; ?>">
            
            <input type="date" name="start_date" class="search-input" style="width:130px;" value="<?php echo htmlspecialchars($search_start_date); ?>">
            <span>~</span>
            <input type="date" name="end_date" class="search-input" style="width:130px;" value="<?php echo htmlspecialchars($search_end_date); ?>">
            
            <input type="text" name="filename" class="search-input" style="width:200px;" value="<?php echo htmlspecialchars($search_filename); ?>" placeholder="파일명 검색">
            <button type="submit" class="search-btn">🔍 검색</button>
            <?php if($search_filename || $search_start_date || $search_end_date) { ?>
                <a href="?sort=<?php echo $sort_mode; ?>&ext=<?php echo $filter_ext; ?>" class="reset-btn">초기화</a>
            <?php } ?>
        </form>
        
        <button type="button" class="btn-bulk" onclick="runBulkOptimization()">
            ⚡ 선택 항목 일괄 최적화
        </button>
    </div>

    <div class="tab-menu">
        <a href="<?php echo get_url('ext', 'all'); ?>" class="tab-btn <?php echo ($filter_ext=='all')?'active':''; ?>">전체</a>
        <a href="<?php echo get_url('ext', 'pdf'); ?>" class="tab-btn <?php echo ($filter_ext=='pdf')?'active':''; ?>">PDF</a>
        <a href="<?php echo get_url('ext', 'jpg'); ?>" class="tab-btn <?php echo ($filter_ext=='jpg')?'active':''; ?>">JPG</a>
        <a href="<?php echo get_url('ext', 'png'); ?>" class="tab-btn <?php echo ($filter_ext=='png')?'active':''; ?>">PNG</a>
        <a href="<?php echo get_url('ext', 'gif'); ?>" class="tab-btn <?php echo ($filter_ext=='gif')?'active':''; ?>">GIF</a>
    </div>
    
    <table class="img-table">
        <thead>
            <tr>
                <th width="40"><input type="checkbox" id="chk_all" onclick="toggleAllChecks(this)"></th>
                <th width="50">No</th>
                <th>파일명 (상대경로)</th>
                <th width="120" class="th-sort <?php echo ($sort_mode == 'date') ? 'th-active' : ''; ?>" onclick="location.href='<?php echo get_url('sort', 'date'); ?>'">날짜 <?php echo ($sort_mode == 'date') ? '▼' : ''; ?></th>
                <th width="100" class="th-sort <?php echo ($sort_mode == 'size') ? 'th-active' : ''; ?>" onclick="location.href='<?php echo get_url('sort', 'size'); ?>'">용량 <?php echo ($sort_mode == 'size') ? '▼' : ''; ?></th>
                <th width="100">실행</th>
                <th width="200">상태</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (count($paged_list) > 0) {
                foreach ($paged_list as $k => $file) { 
                    $file_url = './' . $file['rel_path']; 
                    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                    if($ext == 'jpeg') $ext = 'jpg';
                    $icon = ($ext == 'pdf') ? '📄' : '🖼️';
                    $date_str = date('Y-m-d H:i', $file['mtime']);
                    $size_style = ($file['size'] > 1048576) ? 'color:#dc2626; font-weight:bold;' : 'color:#111;';
                    $global_idx = $start_idx + $k;
            ?>
            <tr class="file-row">
                <td><input type="checkbox" name="chk_file" class="file-chk" value="<?php echo $global_idx; ?>" data-path="<?php echo $file['rel_path']; ?>"></td>
                <td><?php echo $global_idx + 1; ?></td>
                <td class="al">
                    <span class="file-icon"><?php echo $icon; ?></span>
                    <a href="<?php echo $file_url; ?>" target="_blank" style="text-decoration:none; color:#374151;"><?php echo $file['rel_path']; ?></a>
                </td>
                <td style="font-size:12px; color:#555;"><?php echo $date_str; ?></td>
                <td id="size_<?php echo $global_idx; ?>" style="<?php echo $size_style; ?>"><?php echo get_filesize_string($file['size']); ?></td>
                <td>
                    <button type="button" class="btn btn-compress" onclick="startPreview(<?php echo $global_idx; ?>, '<?php echo str_replace("'", "\\'", $file['rel_path']); ?>')">미리보기</button>
                </td>
                <td id="status_<?php echo $global_idx; ?>"><span class="status-badge st-wait">대기</span></td>
            </tr>
            <?php 
                } 
            } else {
                echo '<tr><td colspan="7" style="padding:50px;">표시할 파일이 없습니다.</td></tr>';
            }
            ?>
        </tbody>
    </table>

    <div class="paging">
        <?php
        $page_scale = 10; 
        $start_page = ( (floor(($page - 1) / $page_scale)) * $page_scale ) + 1;
        $end_page = $start_page + $page_scale - 1;
        if ($end_page > $total_page) $end_page = $total_page;

        if ($start_page > 1) {
            echo '<a href="'.get_url('page', 1).'">&lt;&lt;</a>';
            echo '<a href="'.get_url('page', $start_page - 1).'">&lt;</a>';
        }

        for ($i = $start_page; $i <= $end_page; $i++) {
            $cls = ($page == $i) ? 'active' : '';
            echo '<a href="'.get_url('page', $i).'" class="'.$cls.'">'.$i.'</a>';
        }

        if ($total_page > $end_page) {
            echo '<a href="'.get_url('page', $end_page + 1).'">&gt;</a>';
            echo '<a href="'.get_url('page', $total_page).'">&gt;&gt;</a>';
        }
        ?>
    </div>
</div>

<div id="previewModal" class="modal-overlay">
    <div class="modal-content">
        <h3 style="margin:0 0 10px;">📉 최적화 미리보기</h3>
        <div class="preview-box">
            <div class="preview-item">
                <span class="preview-label">원본 (Before)</span>
                <div id="previewOrigin"></div>
                <div id="sizeOrigin" style="margin-top:10px;"></div>
            </div>
            <div class="preview-item">
                <span class="preview-label">최적화 결과 (After)</span>
                <div id="previewNew"></div>
                <div id="sizeNew" style="margin-top:10px; color:#2563eb; font-weight:bold;"></div>
            </div>
        </div>
        <div id="compareResult" style="font-size:18px; font-weight:bold; color:#059669; margin-bottom:20px;"></div>
        <div>
            <button type="button" class="btn btn-apply" onclick="applyCompression()">적용하기 (덮어쓰기)</button>
            <button type="button" class="btn btn-cancel" onclick="cancelCompression()">취소</button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $.ajax({
        url: window.location.href,
        type: 'POST',
        data: { mode: 'get_credits' },
        dataType: 'json',
        success: function(res) {
            if(res && res.status === 'success') {
                $('#credit_display').text(res.credits);
            } else {
                $('#credit_display').text('조회 실패');
            }
        },
        error: function() {
            $('#credit_display').text('통신 오류');
        }
    });
});

function handleError(xhr, index) {
    var msg = "통신 오류 발생!";
    if(xhr.status === 504) {
        msg += "\n\n[타임아웃(504)]\n용량이 커서 처리에 시간이 오래 걸려 끊어졌습니다. 백그라운드에서는 진행 중일 수 있습니다.";
    } else if(xhr.responseText) {
        var cleanText = xhr.responseText.replace(/<[^>]*>?/gm, '');
        if(cleanText.length > 500) cleanText = cleanText.substring(0, 500) + "...";
        msg += "\n\n[서버 응답]\n" + cleanText;
    } else {
        msg += "\n(HTTP " + xhr.status + ")";
    }
    alert(msg);
    if(index !== null) $('#status_' + index).html('<span class="status-badge st-error">오류</span>');
    $('.btn-compress').prop('disabled', false);
}

var lastChecked = null;
$(document).ready(function() {
    $('.img-table').on('click', '.file-chk', function(e) {
        var $visibleChecks = $('.file-chk:visible'); 
        if (!lastChecked) { lastChecked = this; return; }
        if (e.shiftKey) {
            var start = $visibleChecks.index(this);
            var end = $visibleChecks.index(lastChecked);
            if (start !== -1 && end !== -1) {
                var min = Math.min(start, end);
                var max = Math.max(start, end);
                var isChecked = $(this).prop('checked');
                $visibleChecks.slice(min, max + 1).prop('checked', isChecked);
            }
        }
        lastChecked = this;
    });
});

function toggleAllChecks(source) {
    $('.file-chk:visible').prop('checked', source.checked);
}

async function runBulkOptimization() {
    var selected = $('.file-chk:checked');
    if (selected.length === 0) {
        alert('선택된 파일이 없습니다.');
        return;
    }
    if (!confirm(selected.length + '개의 파일을 자동 최적화하시겠습니까?\n(경고: 원본 파일이 덮어쓰기 됩니다)')) return;

    $('.btn-bulk').prop('disabled', true).text('진행 중... (0/' + selected.length + ')');
    
    // [추가] 실시간 예상 종료시간 계산용 변수 초기화
    var totalItems = selected.length;
    var processedCount = 0;
    var totalElapsedTime = 0;
    var avgTimePerFile = 4000; // 초기 평균 소요시간 (API 기본 통신을 고려한 4초)
    
    // [추가] 예상시간 업데이트 함수
    function updateETA() {
        var remainingItems = totalItems - processedCount;
        if (remainingItems <= 0) {
            $('#eta-box').html('✅ 모든 작업이 완료되었습니다!').delay(3000).fadeOut();
            return;
        }
        var remainingMs = remainingItems * avgTimePerFile;
        var estimatedEndTime = new Date(Date.now() + remainingMs);
        
        var hours = estimatedEndTime.getHours().toString().padStart(2, '0');
        var minutes = estimatedEndTime.getMinutes().toString().padStart(2, '0');
        var seconds = estimatedEndTime.getSeconds().toString().padStart(2, '0');
        
        var remMin = Math.floor(remainingMs / 60000);
        var remSec = Math.floor((remainingMs % 60000) / 1000);
        var remText = remMin > 0 ? remMin + '분 ' + remSec + '초' : remSec + '초';
        
        $('#eta-box').html('⏳ 예상 종료시간: <strong>' + hours + ':' + minutes + ':' + seconds + '</strong><br><span style="font-size:12px;font-weight:normal;">(남은 시간: 대략 ' + remText + ')</span>').fadeIn();
    }
    
    // 작업 시작 시 UI 띄우기
    updateETA();
    
    for (var i = 0; i < selected.length; i++) {
        var chk = $(selected[i]);
        var index = chk.val();
        var path = chk.data('path');
        
        $('#status_' + index).html('<span class="status-badge st-ing">처리중...</span>');
        $('.btn-bulk').text('진행 중... (' + (i+1) + '/' + selected.length + ')');

        try {
            var itemStart = Date.now();
            await processDirectOptimize(index, path);
            var itemEnd = Date.now();
            
            // [추가] 파일 1개 처리 완료 시마다 소요 시간 기록 및 이동평균 계산 (점점 정확해짐)
            processedCount++;
            totalElapsedTime += (itemEnd - itemStart);
            avgTimePerFile = totalElapsedTime / processedCount;
            updateETA();
            
        } catch (err) {
            console.error(err);
            // 에러가 나도 진행상황 카운트는 올림
            processedCount++;
            updateETA();
        }
    }

    $('.btn-bulk').prop('disabled', false).text('⚡ 선택 항목 일괄 최적화');
    alert('작업이 완료되었습니다.');
}

function processDirectOptimize(index, relPath) {
    return new Promise(function(resolve, reject) {
        $.ajax({
            url: window.location.href, 
            type: 'POST',
            data: { mode: 'direct', file_path: relPath },
            dataType: 'json',
            success: function(res) {
                if (res && res.status === 'success') {
                    $('#status_' + index).html('<span class="status-badge st-success">✅ 완료 (-' + res.percent + '%, ' + res.duration + '초)</span>');
                    $('#size_' + index).text(res.new_size_str).css('color', '#2563eb').css('font-weight', 'bold');
                    $('input[value="'+index+'"]').prop('checked', false);
                } else if(res && res.status === 'error') {
                    $('#status_' + index).html('<span class="status-badge st-error" title="'+res.msg+'">⚠️ 실패</span>');
                    alert(res.msg);
                } else {
                     $('#status_' + index).html('<span class="status-badge st-error">⚠️ 알수없는 응답</span>');
                }
                resolve();
            },
            error: function(xhr, status, error) {
                handleError(xhr, index);
                resolve(); 
            }
        });
    });
}

var currentFile = { index: null, path: null };

function startPreview(index, relPath) {
    currentFile = { index: index, path: relPath };
    var statusBox = $('#status_' + index);
    statusBox.html('<span class="status-badge st-ing">⏳ 분석 중...</span>');
    $('.btn-compress').prop('disabled', true);

    var encodedPath = relPath.split('/').map(function(p){ return encodeURIComponent(p).replace(/\+/g, '%20'); }).join('/');
    var url = './' + encodedPath;
    
    var isPdf = relPath.toLowerCase().endsWith('.pdf');
    var originHtml = isPdf 
        ? '<iframe src="'+url+'#toolbar=0&navpanes=0&scrollbar=0"></iframe>' 
        : '<img src="'+url+'">';
    $('#previewOrigin').html(originHtml);
    $('#sizeOrigin').text($('#size_'+index).text());

    $.ajax({
        url: window.location.href,
        type: 'POST',
        data: { mode: 'preview', file_path: relPath },
        dataType: 'json',
        success: function(res) {
            if (res && res.status === 'success') {
                var newHtml = isPdf 
                    ? '<iframe src="'+res.preview_url+'#toolbar=0&navpanes=0&scrollbar=0"></iframe>' 
                    : '<img src="'+res.preview_url+'">';
                $('#previewNew').html(newHtml);
                $('#sizeNew').text(res.new_size);
                $('#compareResult').text('📉 ' + res.percent + '% 용량 감소!');
                $('#previewModal').css('display', 'flex');
            } else if (res && res.status === 'error') {
                alert('오류: ' + res.msg);
                statusBox.html('<span class="status-badge st-error">실패</span>');
                $('.btn-compress').prop('disabled', false);
            }
        },
        error: function(xhr, status, error) {
            handleError(xhr, index);
        }
    });
}

function applyCompression() {
    if (!currentFile.path) return;
    $.ajax({
        url: window.location.href,
        type: 'POST',
        data: { mode: 'apply', file_path: currentFile.path },
        dataType: 'json',
        success: function(res) {
            if (res && res.status === 'success') {
                $('#status_' + currentFile.index).html('<span class="status-badge st-success">✅ 완료 (-' + res.percent + '%, ' + res.duration + '초)</span>');
                $('#size_' + currentFile.index).text($('#sizeNew').text());
                closeModal();
            } else {
                alert('적용 실패: ' + (res ? res.msg : "알 수 없는 오류"));
            }
        },
        error: function(xhr, status, error) {
             handleError(xhr, currentFile.index);
        },
        complete: function() { $('.btn-compress').prop('disabled', false); }
    });
}

function cancelCompression() {
    if (!currentFile.path) { closeModal(); return; }
    $.ajax({
        url: window.location.href,
        type: 'POST',
        data: { mode: 'cancel', file_path: currentFile.path },
        success: function() {
            $('#status_' + currentFile.index).html('<span class="status-badge st-wait">취소됨</span>');
            closeModal();
        },
        complete: function() { $('.btn-compress').prop('disabled', false); }
    });
}

function closeModal() {
    $('#previewModal').hide();
    $('#previewOrigin').empty();
    $('#previewNew').empty();
    currentFile = { index: null, path: null };
}
</script>
</body>
</html>