<?php
include_once('./_common.php');

if(!isset($_POST['gkind'])){
	echo "<script>
				alert('잘못된 접근입니다.'); 
				history.go(-1);
			</script>";
	exit;
}

if(!isset($_POST['edumov'])){
	echo "<script>
				alert('잘못된 접근입니다.'); 
				history.go(-1);
			</script>";
	exit;
}


$phone_str = str_replace("-","",trim($_POST['NfromText5']));

/*
$sql = "SELECT count(idx) AS cnt FROM video_education_info WHERE name='" . trim($_POST['NfromText3']) . "' AND REPLACE(phone, '-', '')='" . $phone_str . "' AND nanum_id='". trim($_POST['NfromText6']) . "' AND grade>=70";
$result = sql_query($sql);
$row = sql_fetch_array($result);

if($row['cnt'] > 0){
	echo "<script>
				alert('온라인 영상교육을 이미 수료 하였습니다.'); 
				history.go(-1);
			</script>";
}
*/

/*
$sql = " insert into video_education_info 
			set name = '". $_POST['NfromText3'] ."',
				birthday = '". $_POST['NfromText4'] ."',
				phone = '". $_POST['NfromText5'] ."',
				nanum_id = '". $_POST['NfromText6'] ."',
				e_mail = '". $_POST['NfromText7'] ."',
				center = '". $_POST['NfromText8'] ."',
				reg_date = '". date('YmdHis') ."',
				grade = '0',
				ip = '". $_SERVER['REMOTE_ADDR'] ."',
				team = '". $_POST['NfromText9'] ."',
				etc1 = '". $_POST['gkind'] ."' ";

*/

$sql = " insert into video_education_info 
			set name = '". strip_tags($_POST['NfromText3']) ."',
				birthday = '". strip_tags($member['mb_1']) ."',
				phone = '". strip_tags($_POST['NfromText5']) ."',
				nanum_id = '". strip_tags($_POST['NfromText6']) ."',
				e_mail = '". strip_tags($member['mb_email'] )."',
				center = '". strip_tags($_POST['NfromText8'] )."',
				reg_date = '". date('YmdHis') ."',
				grade = '0',
				ip = '". $_SERVER['REMOTE_ADDR'] ."',
				team = '". strip_tags($_POST['NfromText9'] )."',
				reg_dt = now() ,
				user_idx = '".$member['mb_no'] ."',
				user_id = '". $member['mb_id'] ."',
				kind_tp = '". strip_tags($edumov )."',
				team_tp = '". strip_tags($team_tp )."',
				team_idx = '". strip_tags($team_idx )."',
				etc1 = '". strip_tags($_POST['gkind']) ."' ";

$result = sql_query($sql);
$last_uid = sql_insert_id();

if($result){
	
	if($_POST['gkind']=="T"){  // 청소년
		

		if($_POST['edumov'] == '1'){
			$go_url = "./sub_page_04_02_002_01.php";
		}else if($_POST['edumov'] == '2'){
			$go_url = "./sub_page_04_02_002_02.php";
		}

	}else{  // 성인
		if($_POST['edumov'] == '3'){
			$go_url = "./sub_page_04_03_003.php";
		}else if($_POST['edumov'] == '4'){
			$go_url = "./sub_page_04_03_003_04.php";
		}
	}
	
	echo "<script>location.href='". $go_url ."?idx=". $last_uid ."'</script>";

}else{

	echo "<script>
				alert('데이터 오류로 이전 페이지로 돌아갑니다.'); 
				history.go(-1);
			</script>";
}
?>