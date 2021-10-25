<?php

function even_odd( $arr, $arr_size)
{
	$even = 0;		
	$odd = 0;	
		
	for( $i = 0 ; $i < $arr_size ; $i++)
	{
		
		if ($arr[$i] & 1 == 1)
			$odd ++ ;	
		else			
			$even ++ ;		
	}

	echo "Number of Even Elements = " ,
		$even," <br>Number of odd " ,
			"elements = " ,$odd ;	
}

	$arr = array(10,5,2,4,3,6);
	$n = count($arr);

	echo"Array Element : <br> ";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " "."<br>");   
    }    

	even_odd($arr, $n);

?>
