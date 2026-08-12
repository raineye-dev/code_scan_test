<?php
include_once('./_common.php');

if (!$is_member) {  
	echo "<script>
				alert('잘못된 접근입니다.1');
				history.go(-1);
			</script>";
	exit;
}

if (!$_POST['idx']) {  
	echo "<script>
				alert('잘못된 접근입니다.2');
				history.go(-1);
			</script>";
	exit;
}

if (!$_POST['NfromText3']) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}
if (!$_POST['birthday']) {  
	echo "<script>
				alert('잘못된 접근입니다.2');
				history.go(-1);
			</script>";
	exit;
}
if (!$_POST['phone']) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}

if (!$_POST['e_mail']) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}
if (!$_POST['nanum_id']) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}


if (!$_POST['e_mail']) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}


if (!$_POST['nanum_id']) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}


if (!$_POST['center']) {  
	echo "<script>
				alert('잘못된 접근입니다.3');
				history.go(-1);
			</script>";
	exit;
}



if (!$_POST['kind_tp']) {  
	echo "<script>
				alert('잘못된 접근입니다.4');
				history.go(-1);
			</script>";
	exit;
}

if (!$_POST['etc1']) {  
	echo "<script>
				alert('잘못된 접근입니다.5');
				history.go(-1);
			</script>";
	exit;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/sub/sub.php');
    return;
}
if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');



$sql = " update video_education_info 
			set name = '". strip_tags($_POST['NfromText3'] )."',
				birthday = '". strip_tags($_POST['birthday'] )."',
				phone = '". strip_tags($_POST['phone']) ."',
				nanum_id = '". strip_tags($_POST['nanum_id']) ."',
				e_mail = '". strip_tags($_POST['e_mail']) ."',
				center = '". strip_tags($_POST['center'] )."',
				team_tp = '". strip_tags($_POST['team_tp'] ) ."',
				team = '". strip_tags($_POST['team'] )."',
				kind_tp = '". strip_tags($_POST['kind_tp'] )."',
				etc1 = '". strip_tags($_POST['etc1'])."' 
			where idx = '".strip_tags($_POST['idx'])."'	
				";

//				team_idx = '". $team_idx ."',

$result = sql_query($sql);

if($result){
	
	echo "<script>location.href='/bbs/sub/sub_page_adm_edit.php?idx=". $_POST['idx']."'</script>";

}else{

	echo "<script>
				alert('데이터 오류로 이전 페이지로 돌아갑니다.'); 
				history.go(-1);
			</script>";
}
?>