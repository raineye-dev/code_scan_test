<?
include_once("./../../../common.php");

$index = $index - 1;

$cat2 = explode('|',$cat2);
for($i = 0; $i < count($cat2); $i++){
	$cat2[$i] = explode(',',$cat2[$i]);
}?>
<select name="wr_2" id="wr_2" required>
	<option value="2차분류">2차분류 선택하세요.</option>
	<?for($j = 0; $j < count($cat2[$index]); $j++){?>
	<option value="<?=$cat2[$index][$j]?>"><?=$cat2[$index][$j]?></option>
	<?}?>
</select>