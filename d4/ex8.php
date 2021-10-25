<?php

function linearSearch($arr,$search){
    $arr_size=sizeof($arr);

    for($i=0;$i<$arr_size;$i++){
        if(  $arr[$i] == $search ){
            return $i ;
        }
    }
    return -1;
}

$arr=array(1,3,5,12,15,20,22,25);
$search_elem=5;

echo"Array Element : <br> ";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " "."<br>");   
    }    

$find_result=linearSearch($arr,$search_elem);
if($find_result == -1)
    echo "Element  ".$search_elem." is not found in array";
else
    echo "Element ".$search_elem." is found in array " ;

?>