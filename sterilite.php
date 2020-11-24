<?php
error_reporting(~E_ALL);
$arrChar = array(a,a,a,b,b,b,a,a,a,a,a,a,a,a,a,a,a,d,s,s,a,a,d,d,a,d);
$a = count($arrChar);
$cnt = 0;
for($i=0;$i<$a;$i++)
{
	$cur_cnt = 1;
	for ($j=$i+1; $j < $a; $j++) { 
		if($arrChar[$i]!=$arrChar[$j])
		{
			break;
		}else {
		$cur_cnt++; }
	}

	if($cur_cnt > $cnt)
	{
		$cnt = $cur_cnt;
		$res = $arrChar[$i];
	}
}
echo $res,$cnt;
?>