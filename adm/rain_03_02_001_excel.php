<?php
include_once('./_common.php');

// 관리자 권한 체크
auth_check_menu($auth, $sub_menu, 'w');

$volunteer_table = G5_TABLE_PREFIX . 'rain_talent_volunteer';

// 엑셀(CSV) 업로드 처리
if (isset($_FILES['csv_file']['tmp_name']) && $_FILES['csv_file']['tmp_name']) {
    $handle = fopen($_FILES['csv_file']['tmp_name'], "r");
    $count = 0;
    $error_cnt = 0;
    
    // 첫 줄(헤더) 건너뛰기 여부 체크 (필요 시)
    // fgetcsv($handle); 

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // 인코딩 변환
        foreach($data as $key => $val) {
            $encode = mb_detect_encoding($val, array("UTF-8", "CP949", "EUC-KR"));
            if($encode != "UTF-8") $data[$key] = iconv($encode, "UTF-8", $val);
        }

        if (empty($data[2])) continue; 

        $vi_area    = preg_replace('/(시|군)$/u', '', trim($data[1])); 
        $vi_name    = sql_real_escape_string(trim($data[2]));
        $vi_subject = sql_real_escape_string(trim($data[3]));
        $vi_content = sql_real_escape_string(trim($data[4]));
        $vi_count   = (int)preg_replace('/[^0-9]/', '', $data[5]); 

        $sql = " INSERT INTO `{$volunteer_table}` 
                    SET vi_area = '{$vi_area}',
                        vi_name = '{$vi_name}',
                        vi_subject = '{$vi_subject}',
                        vi_content = '{$vi_content}',
                        vi_count = '{$vi_count}',
                        vi_datetime = '".G5_TIME_YMDHIS."' ";
        
        $result = sql_query($sql, false);
        if($result) $count++;
        else $error_cnt++;
    }
    fclose($handle);

    echo "<script>alert('총 {$count}건의 데이터가 성공적으로 추가되었습니다." . ($error_cnt > 0 ? "\\n(실패: {$error_cnt}건)" : "") . "'); window.opener.location.reload(); window.close();</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>재능기부단체 엑셀 업로드 안내</title>
    <link rel="stylesheet" href="<?php echo G5_ADMIN_URL; ?>/css/admin.css">
    <style>
        body { padding: 25px; background: #f9fafb; font-family: 'Malgun Gothic', dotum, sans-serif; color: #333; }
        .container { max-width: 550px; margin: 0 auto; background: #fff; padding: 30px; border: 1px solid #d1d5db; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); }
        
        h3 { margin-top: 0; color: #111827; font-size: 1.25rem; border-left: 5px solid #27ae60; padding-left: 10px; margin-bottom: 20px; }
        
        .upload_box { background: #f3f4f6; border: 2px dashed #9ca3af; padding: 25px; text-align: center; border-radius: 8px; margin-bottom: 25px; }
        .upload_box input[type="file"] { margin-bottom: 15px; }
        
        .btn_submit { background: #27ae60; color: #fff; padding: 12px 25px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; font-size: 15px; transition: background 0.2s; width: 100%; }
        .btn_submit:hover { background: #219150; }

        .sample_wrap { margin-top: 30px; }
        .sample_title { font-weight: bold; margin-bottom: 8px; font-size: 14px; color: #059669; display: flex; align-items: center; }
        .sample_table { width: 100%; border-collapse: collapse; font-size: 12px; margin-bottom: 15px; border: 1px solid #e5e7eb; }
        .sample_table th { background: #f9fafb; padding: 8px; border: 1px solid #e5e7eb; color: #6b7280; }
        .sample_table td { padding: 8px; border: 1px solid #e5e7eb; text-align: center; }
        
        .guide_list { padding: 0; margin: 0; list-style: none; }
        .guide_list li { font-size: 13px; color: #4b5563; line-height: 1.6; margin-bottom: 8px; padding-left: 15px; position: relative; }
        .guide_list li::before { content: "•"; position: absolute; left: 0; color: #27ae60; font-weight: bold; }
        .important { color: #dc2626; font-weight: bold; text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h3>단체 현황 CSV 데이터 업로드</h3>

    <div class="upload_box">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <p style="font-size: 14px; color: #6b7280; margin-bottom: 15px;">작성하신 CSV 파일을 선택해주세요.</p>
            <input type="file" name="csv_file" accept=".csv" required>
            <button type="submit" class="btn_submit">DB 데이터 일괄 추가하기</button>
        </form>
    </div>

    <div class="sample_wrap">
        <div class="sample_title">✅ CSV 파일 구성 샘플 (순서를 지켜주세요)</div>
        
        <table class="sample_table">
            <thead>
                <tr>
                    <th>A (번호)</th>
                    <th>B (지역)</th>
                    <th>C (단체명)</th>
                    <th>D (분야)</th>
                    <th>E (내용)</th>
                    <th>F (회원수)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>목포시</td>
                    <td>건강복지발전소</td>
                    <td>건강지원</td>
                    <td>물리치료 등</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>여수시</td>
                    <td>행복봉사단</td>
                    <td>문화공연</td>
                    <td>민요, 공연 등</td>
                    <td>15</td>
                </tr>
            </tbody>
        </table>

        <ul class="guide_list">
            <li>파일은 반드시 <span class="important">CSV(쉼표로 분리)</span> 형식으로 저장해야 합니다.</li>
            <li><strong>A열(번호)</strong>은 업로드 시 무시되며, DB 번호는 자동으로 다음 순번이 부여됩니다.</li>
            <li><strong>B열(지역)</strong>의 '목포시', '신안군' 등은 자동으로 '목포', '신안'으로 정리됩니다.</li>
            <li><strong>F열(회원수)</strong>에 '명'이나 문자가 섞여 있어도 숫자만 추출하여 저장합니다.</li>
            <li><span class="important">첫 줄에 제목(헤더)이 있다면 삭제하고 데이터만 남겨주세요.</span></li>
            <li>한글이 깨질 경우 엑셀에서 'CSV UTF-8(쉼표로 분리)'로 저장 후 다시 시도해주세요.</li>
        </ul>
    </div>
</div>

</body>
</html>