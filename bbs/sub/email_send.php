 <?php
include_once('./_common.php');

if(!isset($_GET['idx'])){
	echo "<script>
				alert('잘못된 접근입니다.');
				history.go(-1);
			</script>";
	exit;
}

add_stylesheet('<link rel="stylesheet" href="/theme/J_basic/css/sub.css">', 0);

include_once('../../lib/Sendmail.php');

$sql = " select idx, name, birthday, reg_date, center, e_mail, etc1 from video_education_info where idx='". $_GET['idx'] ."' limit 1";
$result = sql_query($sql);
$row = sql_fetch_array($result);
$birthday = str_replace("-", "", $row['birthday']);

$reg_year = substr($row['reg_date'], 0, 4);
$reg_month = substr($row['reg_date'], 4, 2);
$reg_day = substr($row['reg_date'], 6, 2);

$gkind = ($row['etc1'] == 'T') ? " 청소년" : "";
$reg_date = $reg_year.". ".$reg_month.". ".$reg_day;

$to = $row['e_mail'];
//$to="goldenage2000@hanmail.net";
$from=iconv("utf-8","euc-kr","전라남도자원봉사센터");
$subject=iconv("utf-8","euc-kr","2021 온라인 자원봉사교육 수료증");

$sendmail = new Sendmail();

$body="<div id=\"html-content-holder\" style=\"width:728px; height:977px; position:relative; background: url('http://sinkilho.cafe24.com/kr/bbs/sub/img/completion.jpg')no-repeat center;\">
	<div style=\"padding-top:124px; padding-left:246px; font-size: 14px; letter-spacing:-0.05em;\">". $row['idx'] ."</div>
	<div style=\"padding-left:414px; padding-top:173px;font-size: 15px;\">
		<ul style=\"margin:0px; padding:0px;\">
			<li style=\"line-height: 22px; font-size:14px; letter-spacing:-0.05em; list-style:none\">". $row['name'] ."</li>
			<li style=\"line-height: 22px; font-size:14px; letter-spacing:-0.05em; list-style:none\">". substr($birthday, 0, 4) . "." . substr($birthday, 4, 2) . "." . substr($birthday, 6, 2) . ".</li>
			<li style=\"line-height: 22px; font-size:14px; letter-spacing:-0.05em; list-style:none\">전라남도 ". $row['center'] ."</li>
			<li style=\"line-height: 22px; font-size:14px; letter-spacing:-0.05em; list-style:none\">". $reg_year . $gkind. " 온라인 자원봉사교육</li>
			<li style=\"line-height: 22px; font-size:14px; letter-spacing:-0.05em; list-style:none\"> "."". $reg_date . ". (1시간)</li>
		</ul>
	</div>
	<div style=\"padding-left:283px; padding-top:240px; font-size: 23px; font-weight: 500;  letter-spacing:-0.07em;\"><span>". $reg_year ."</span>년 <span>". $reg_month ."</span>월 <span>". $reg_day ."</span>일</div>
</div>";


$sendmail->send_mail($to, $from, $subject, $body);

?>

<script>
	alert('이메일이 발송 되었습니다.');
	self.close();
</script>