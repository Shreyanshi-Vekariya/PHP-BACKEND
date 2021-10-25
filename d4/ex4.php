<?php
    $array = array(25,34,76,34,82,99); 
    $max=$max2=0;

    echo"Array Element : <br> ";  
    for ($i = 0; $i < count($array); $i++) {   
        print($array[$i] . " "."<br>");   
    }    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max2 = $max;
            $max = $array[$i];
        } else if (($array[$i] > $max2) && ($array[$i] != $max)) {
            $max2 = $array[$i];
        }
    }
    echo "Highest Value is : " . $max . "<br/>"; 
    echo "Second highest value is : " . $max2 . "<br/>"; 
?>