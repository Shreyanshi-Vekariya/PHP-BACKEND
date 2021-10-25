<?php  

$a = array(     
             array(2,4,6),  
             array(1,3,5),  
             array(0,1,2)  
           );  
   
$rows = count($a);  
$cols = count($a[0]);  

//Calculates sum of each row of given matrix  
for($i = 0; $i < $rows; $i++){  
    $sumRow = 0;  
    for($j = 0; $j < $cols; $j++){  
      $sumRow = $sumRow + $a[$i][$j];  
    }  
    print("Sum of " . ($i+1) ." row: " . $sumRow);  
    print("<br>");  

}  
?>  