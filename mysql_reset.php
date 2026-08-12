<?php
// 1. DB 연결 설정
$host = 'localhost';
$user = 'jnvc1365';
$pass = 'k@43582200';
$db   = 'jnvc1365'; // 이미지 상의 데이터베이스명

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// 한글 깨짐 방지
$conn->set_charset("utf8mb4");

// 2. 전체 테이블 목록 가져오기
$tables = [];
$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_array()) {
    $tables[] = $row[0];
}

echo "데이터 치환 작업을 시작합니다...<br><br>";

foreach ($tables as $table) {
    // 3. 각 테이블의 컬럼 정보 가져오기 (문자열 타입인 컬럼만 추출)
    $columns = [];
    $col_result = $conn->query("SHOW COLUMNS FROM `$table` WHERE Type LIKE '%char%' OR Type LIKE '%text%'");
    
    while ($col_row = $col_result->fetch_assoc()) {
        $columns[] = $col_row['Field'];
    }

    foreach ($columns as $column) {
        // 4. REPLACE 함수를 사용하여 데이터 치환 실행
        // WHERE 절을 통해 해당 문자열이 포함된 행만 업데이트 (성능 최적화)
        $sql = "UPDATE `$table` 
                SET `$column` = REPLACE(`$column`, '/kr/', '/') 
                WHERE `$column` LIKE '%/kr/%'";
        
        if ($conn->query($sql)) {
            $affected = $conn->affected_rows;
            if ($affected > 0) {
                echo "[성공] 테이블: $table | 컬럼: $column | $affected 건 치환 완료<br>";
            }
        } else {
            echo "[오류] 테이블: $table | 컬럼: $column - " . $conn->error . "<br>";
        }
    }
}

echo "<br>모든 작업이 완료되었습니다.";
$conn->close();
?>