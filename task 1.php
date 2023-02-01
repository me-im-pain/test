<?php
$arr = [2, 1, 11, 333, 3232, 244, 67777, 9452];
$a = 9;
$tmp = 0;
$len = count($arr);
for ($i = 0; $i < $len; $i++)
{
	if (strpos($arr[$i], "2") !== false)
		{
			$len++;
			for ($j = $len - 1; $j > $i; $j--)
			{
				$arr[$j] = $arr[$j - 1];
			}
			$i++;
			$arr[$i] = $a;
		}
}

var_dump
($arr);
?>