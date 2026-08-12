<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$img_width = 500;
$img_height = 250;
$img_quality = 100;

if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

$data_path = $g4[path]."/data/file/$bo_table";
$thumb_path = $data_path.'/thumb_ch01';
$ym = date("ym", $g4[server_time]);

@mkdir($thumb_path, 0707);
@chmod($thumb_path, 0707);

//코멘트와 리플글은 제외
$sql = " select * from $tmp_write_table
where wr_comment = '' and wr_reply = ''
order by wr_id DESC LIMIT 0, 1 ";
$result = sql_query($sql);
$last_con = sql_fetch_array($result); 

?> 

<SCRIPT type=text/javascript> 
<!-- 
old_debate_K='1'; 
function ComeonK(objid_K){ 
document.getElementById("debate_K"+old_debate_K).style.display="none"; 
document.getElementById("debate_K"+old_debate_K+"#1").style.display=""; 
document.getElementById("debate_K"+objid_K+"#1").style.display="none"; 
document.getElementById("debate_K"+objid_K).style.display=""; 
document.getElementById("debate_content_K"+old_debate_K).style.display="none"; 
document.getElementById("debate_content_K"+objid_K).style.display=""; 
old_debate_K=objid_K; 
} 
var objid_K = 1; 
var interval_best; 

function best_changeK() 
{ 
 if( objid_K == 10 ) // 오버랩되는 갯수
  objid_K = 1; 
 else 
  objid_K++; 

 ComeonK(objid_K); 
} 
function setInterval_best() 
{ 
 interval_best = setInterval("best_changeK()",5000);//속도조절 
} 
function clearInterval_best() 
{ 
 clearInterval(interval_best); 
} 
setInterval_best(); 
//--> 
</SCRIPT>
<style type="text/css">
ul, li { list-style:none; margin:0; padding:0;}
#ifocus { width:500px; height:250px; margin:0px; border:0px }
#ifocus_img { display:inline; position:relative; float:left; width:500px; height:250px; border:0px; overflow:hidden; }
#ifocus_imglist { position:absolute; }
#ifocus_imglist li { width:500px; height:250px; overflow:hidden; }
#ifocus_imglist img { width:500px; height:250px;}
#ifocus_ico { display:inline; float:center; width:1px;}
#ifocus_ico li { width:10px; height:57px; cursor:pointer; opacity:0.5; -moz-opacity:0.5; filter:alpha(opacity=50); }
#ifocus_ico img { width:500px; height:250px; }
#ifocus_ico .current { background: url('<?=$latest_skin_path?>/image/ifocus_ico_bg.gif') no-repeat; opacity:1; -moz-opacity:1; filter:alpha(opacity=100); }
#ifocus_subjbar { position:absolute; left:0; bottom:0; width:500px; height:30px; background:#000; opacity:0.5; -moz-opacity:0.5; filter:alpha(opacity=50); }
#ifocus_subject { position:absolute; left:8px; bottom:5px; color:#FFFFFF; font-weight:bold;}
#ifocus_subject .normal { display:none; }
</style>

<!-- // 게시판명과 전체보기 생략 
<table width="100%" cellpadding="0" cellspacing="0" border="0" >
<tr><td><img src="<?=$latest_skin_path?>/img/icon_table.gif" width="20" height="18" border="0" align="absmiddle"><strong><?=$board[bo_subject]?></strong></td>
<td align="right"><a href='<?=$g4[bbs_path]?>/board.php?bo_table=<?=$bo_table?>'><img src="<?=$latest_skin_path?>/img/icon_more.gif" width="40" height="12" border="0" align="absmiddle"></a>
</td></tr>
<tr><td colspan="2" height="1" bgcolor="#eeeeee"></td></tr>
<tr><td colspan="2" height="5"></td></tr>
</table>
-->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><td>

<? for ($i=0; $i<count($list); $i++) { 
$j = $i + 1;  
if ($j == "1") { 
echo "<DIV>"; 
echo "<DIV id=debate_content_K$j onmouseover=clearInterval_best() onmouseout=setInterval_best()>"; }
else { echo "<DIV id=debate_content_K$j onmouseover=clearInterval_best() onmouseout=setInterval_best() style='DISPLAY: none;'>\n"; }
?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr><td>
<?
//썸네일 생성
$thumfile = "";
    $thumb = $thumb_path.'/'.$list[$i][wr_id];
    // 썸네일 이미지가 존재하지 않는다면
    if (!file_exists($thumb)) {
        $file = $list[$i][file][0][path] .'/'. $list[$i][file][0][file];
        // 업로드된 파일이 이미지라면
        if (preg_match("/\.(jp[e]?g|gif|png)$/i", $file) && file_exists($file)) {
            $size = getimagesize($file);
            if ($size[2] == 1)
                $src = imagecreatefromgif($file);
            else if ($size[2] == 2)
                $src = imagecreatefromjpeg($file);
            else if ($size[2] == 3) 
                $src = imagecreatefrompng($file); 
            else
                break;

            $rate = $img_width / $size[0];
            $height = (int)($size[1] * $rate);

            // 계산된 썸네일 이미지의 높이가 설정된 이미지의 높이보다 작다면
            if ($height < $img_height)
                // 계산된 이미지 높이로 복사본 이미지 생성
                $dst = imagecreatetruecolor($img_width, $height);
            else
                // 설정된 이미지 높이로 복사본 이미지 생성
                $dst = imagecreatetruecolor($img_width, $img_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $img_width, $height, $size[0], $size[1]);
            imagejpeg($dst, $thumb_path.'/'.$list[$i][wr_id], $img_quality);
            chmod($thumb_path.'/'.$list[$i][wr_id], 0606);
        } else { //게디터에서 삽입한 이미지 뽑자ㅠㅠ
			$edit_img = $list[$i]['wr_content'];
			if (eregi("data/cheditor4/{$ym}/[^<>]*\.(gif|jpg|png|bmp)", $edit_img, $tmp)) { // data/geditor------
				$file = './' . $tmp[0]; // 파일명
				$size = getimagesize($file);
				if ($size[2] == 1)
					$src = imagecreatefromgif($file);
				else if ($size[2] == 2)
					$src = imagecreatefromjpeg($file);
				else if ($size[2] == 3) 
					$src = imagecreatefrompng($file); 
				else
					break;

				$rate = $img_width / $size[0];
				$height = (int)($size[1] * $rate);

				// 계산된 썸네일 이미지의 높이가 설정된 이미지의 높이보다 작다면
				if ($height < $img_height)
					// 계산된 이미지 높이로 복사본 이미지 생성
					$dst = imagecreatetruecolor($img_width, $height);
				else
					// 설정된 이미지 높이로 복사본 이미지 생성
					$dst = imagecreatetruecolor($img_width, $img_height);
				imagecopyresampled($dst, $src, 0, 0, 0, 0, $img_width, $height, $size[0], $size[1]);
				imagejpeg($dst, $thumb_path.'/'.$list[$i][wr_id], $img_quality);
				chmod($thumb_path.'/'.$list[$i][wr_id], 0606);
			}
	    }
	}

    if (file_exists($thumb))
        $thumfile = "<img src='$thumb' width='{$img_width}' height='{$img_height}' border='0' style='border:0px #ccc solid'></a>";
		else
		//이미지가 없으면
		$thumfile="<img src='$latest_skin_path/img/noimg.gif' width='{$img_width}' height='{$img_height}' style='border:0 #E7E7E7 solid'></a>";
		//이미지가 아니네
        if(preg_match("/\.(swf|wma|asf)$/i","$file") && file_exists($file))
       { $thumfile = "<script>doc_write(flash_movie('$file', 'flash$i', '$img_width', '$img_height', 'transparent'));</script>"; }
?>
<div id="ifocus">
<div id="ifocus_img">
<div id="ifocus_imglist" style="left:0; top:0;">   
<div id="ifocus_subjbar"></div>
<div id="ifocus_subject">
<?=$list[$i]['subject']?>
</div>
<div id="ifocus_ico">
<? if ($list[$i][wr_link1]) { 
echo "<a href='{$list[$i][wr_link1]}' target='_blank'>{$thumfile}</a>";
} else { 
echo "<a href='{$list[$i][href]}'>{$thumfile}</a>";
}
?>
</div></div></div></div>
</td>
</tr>
</table>
<? 
//echo "<a href='{$list[$i][href]}'>{$list[$i][subject]}</a>"; // 제목생략
echo "</DIV>"; 
} 
?>

<div id="button1">
<div id="button2" style="width:500px; text-align:right;">
<? for ($i=0; $i<count($list); $i++) { 
$k = $i + 1; 
?>
<a href="<?=$list[$i][href]?>" onmouseover="javascript:ComeonK('<?=$k?>')"><img src="<?=$latest_skin_path?>/img/<?=$k?>_on.gif" width="12" height="12" border="0" id="debate_K<?=$k?>" onmouseover="clearInterval_best()" onmouseout="setInterval_best()" <? if($k == "1") { echo ""; } else { echo "style='DISPLAY: none;' "; } ?>><img src="<?=$latest_skin_path?>/img/<?=$k?>.gif" width="12" height="12" border="0"  id="debate_K<?=$k?>#1"  <? if($k == "1") { echo "style='DISPLAY: none;'"; } else { echo ""; } ?>></a>
<?}?><a href='<?=$g4[bbs_path]?>/board.php?bo_table=<?=$bo_table?>'><img src="<?=$latest_skin_path?>/img/icon_admin.gif" width="12" height="12" border="0" alt="목록으로"></a></div>
</div>
</td>
</tr></table>  