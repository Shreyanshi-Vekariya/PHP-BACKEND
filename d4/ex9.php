<?php

function BinarySearch(Array $arr, $x)
{
	
	if (count($arr) === 0) return false;
	$low = 0;
	$high = count($arr) - 1;
	
	while ($low <= $high) {
		
		
		$mid = floor(($low + $high) / 2);

		
		if($arr[$mid] == $x) {
			return true;
		}

		if ($x < $arr[$mid]) {
			
			$high = $mid -1;
		}
		else {
			
			$low = $mid + 1;
		}
	}
	
	
	return false;
}


$arr = array(1,3,4,5,6,9,12,15,23,25,30);

echo"Array Element : <br> ";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " "."<br>");   
    }    
$value = 15;
if(BinarySearch($arr, $value) == true) {
	echo $value." is present in the Array";
}
else {
	echo $value." is not present in Array";
}
?>
