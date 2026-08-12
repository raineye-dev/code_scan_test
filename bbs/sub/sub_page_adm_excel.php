<?php
include_once('./_common.php');

if (!$is_member) {  
	echo "<script>
				alert('잘못된 접근입니다.');
				window.close();
			</script>";
	exit;
}


if(!$is_admin){
    alert('잘못된 접근입니다.');
}


$fileName = "인증현황_excel_".date("Y-m-d H:i:s");

header("Content-type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=".$fileName.".xls");
header("Content-Description: PHP Generated Data");    

?>

<head>
<meta content="application/vnd.ms-excel; charset=UTF-8" name="Content-type" />  
<style type="text/css">
	td { mso-number-format:\@; }
	br{mso-data-placement:same-cell;}
    table {
        width: 200px;
        border-collapse: collapse;
        text-align: center;
        font-family: 'Trebuchet MS';
    }
    td, th {
        font-size: 10pt;
        border: 1px solid #98bf21;
        height: 30px;
    }
    th {
        background-color:#A7C942;
        color:#ffffff;
        font-family: Georgia;
    }
    tr.alt td {
        color:#000000;
        background-color:#EAF2D3;
    }
</style>
</head>



	<table class="skin_basic_list" >
	<!-- colgroup s -->
<!-- 	<colgroup>
		<col style="width: 20%;" />
		<col style="width: 40%;" />
		<col style="width: 40%;" />
	</colgroup> -->
	<!-- colgroup e -->

	<!-- thead s -->
	<thead>
			<tr>
			  <th width="5%">번호</th>
			  <th width="5%">분류</th>
			 <!--  <th width="5%">교육구분</th> -->
			  <th width="8%">이름</th>
			  <th width="8%">생년월일</th>
			  <th width="10%">소속센터</th>
			  <th width="10%">소속구분</th>
			  <th width="10%">소속</th>
			  <th width="12%">연락처</th>
			  <th width="12%">1365 아이디</th>
			  <th width="18%">메일</th>
			  <th width="10%">등록일</th>
			</tr>
	</thead>
	<!-- thead s -->

	<!-- tbody s -->
	<tbody>
	<?php
	$where = "WHERE grade>=70";
	$where_add = ($sfl) ? " AND center='{$sfl}'" : "";
	$where_add .= ($stdt) ? " AND date_format(reg_date, '%Y-%m-%d') >= date_format('{$stdt}', '%Y-%m-%d') " : "";
	$where_add .= ($eddt) ? " AND date_format(reg_date, '%Y-%m-%d') <= date_format('{$eddt}', '%Y-%m-%d') " : "";
	$where_add .= ($idword) ? " AND (name like '%{$idword}%' or nanum_id like  '%{$idword}%' )" : "";


	$sql = " select * from video_education_info {$where} {$where_add} order by idx desc ";
	$result = sql_query($sql);


	while($row = sql_fetch_array($result)){

		$reg_year = substr($row['reg_date'], 0, 4);
		$reg_month = substr($row['reg_date'], 4, 2);
		$reg_day = substr($row['reg_date'], 6, 2);

		$reg_date = $reg_year."-".$reg_month."-".$reg_day;

		$gubun = ($row['etc1']=="T") ? "청소년" : "성인";
	//	$reg_date = $row['reg_date'];

?>

			<tr>
				<td><?=$row['idx']?></td>
				<td><?=$gubun?></td>
				<!-- <td>
							<?
							
							if($row['kind_tp'] == '1')  echo "청소년 #1";
							if($row['kind_tp']  == '2')  echo "청소년 #2";
							if($row['kind_tp']  == '3')  echo "성인 #1";
							if($row['kind_tp']  == '4')  echo "성인 #2";
				
							?> -->

				</td>
				<td><?=$row['name']?></td>
				<td><?=$row['birthday']?></td>
				<td>전라남도 <?=$row['center']?></td>
				<td><?=$row['team_tp']?></td>
				<td><?=$row['team']?></td>
				<td><?=$row['phone']?></td>
				<td><?=strip_tags( $row['nanum_id'] )?></td>
				<td><?=$row['e_mail']?></td>
				<td><?=$reg_date?></td>
			</tr>

<?}?>

	</tbody>
	</table>
<br/>



