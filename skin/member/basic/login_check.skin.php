<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

$csrf_token = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
$session_csrf_token = get_session('ss_login_csrf_token');

if (!$csrf_token || !$session_csrf_token || !hash_equals($session_csrf_token, $csrf_token)) {
    alert('잘못된 접근입니다.');
}

set_session('ss_login_csrf_token', '');