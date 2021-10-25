<?php

$arr_value=array(50,12,2,3,45,13,6,9);

echo"Before sorting  : <br> ";  
    for ($i = 0; $i < count($arr_value); $i++) {   
        print($arr_value[$i] . " "."<br>");   
    }  
    echo"after sorting : "."<br>";  
sort($arr_value);


function sortAsce($arr_value){
    $arr_size=sizeof($arr_value);

    for($i=0;$i<$arr_size;$i++){
        echo $arr_value[$i]."<br>";
    }
}

echo sortAsce($arr_value);
?>