<?php

function CountTheElements($arr, $n, $k)
{
	$counter = 0;

	for ($i = 0; $i < $n; $i++)
	{
		if ($arr[$i] % $k == 0)
			$counter++;
	}

	return $counter;
}

$arr = array( 4,10,12,15,17,55,25 );
$n = count($arr);
$k = 5;

echo"Array Element : <br> ";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " "."<br>");   
    }    

echo "Total Number divided by 5 = ".CountTheElements($arr, $n, $k);

?>
