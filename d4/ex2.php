<?php  
    $arr = array(1,2,3,4,5,6,7);   
    echo"Original Array  : ";  
    for ($i = 0; $i < count($arr); $i++) {   
        print($arr[$i] . " ");   
    }    
    echo"<br>Array in reverse order  :  ";  
    for ($i = count($arr)-1; $i >= 0; $i--) {   
        print($arr[$i] . " "); ;   
    }      
?>  