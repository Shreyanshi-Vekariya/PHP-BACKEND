<?php

function EvenOddSum($arr, $n)
{
	$even = 0;
	$odd = 0;
	for ($i = 0; $i < $n; $i++)
	{
		if ($i % 2 == 0)
			$even += $arr[$i];
		else
			$odd += $arr[$i];
	}

	echo("Odd number sum " . $even."<br>");
	echo("Even number sum " . $odd);
}

$arr = array( 2,1,3,5,3,6,7,12 );
$n = sizeof($arr);

echo"Array Element : <br> ";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " "."<br>");   
    }    

EvenOddSum($arr, $n);


?>
