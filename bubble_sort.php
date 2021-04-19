<?php

$array_ori = [300,0,2000,5,3,-2,1,-1000,-80000, 100000, -223];

$array = $array_ori;


function checkArray($arr)
{
	$bigValue = 0;
	for($i=0; $i < (count($arr) - 1); $i++) {
		$bigValue = $arr[$i];
		if ($bigValue > $arr[$i+1]) return false;
		if ($arr[$i] < $arr[$i+1]) $bigValue = $arr[$i+1];

	}
	return true;
}

do {
	for($i=0; $i < (count($array) - 1); $i++) {
		$temp = 0;
		if ($array[$i] > $array[$i+1]) {
			//jika index ini lebih besar dari next index maka pindah posisinya
			$temp = $array[($i+1)];
			$array[$i+1] = $array[$i];
			$array[$i] = $temp;
		} 
	}
}while (!checkArray($array));



print("array asli ".implode(',', $array_ori)." \n");
print("array hasil sorting bubble sort ".implode(',', $array)." \n");
