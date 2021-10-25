<?php  

$a = array(     
             array(2,4,6),  
             array(1,3,5),  
             array(0,1,2)  
           );  
   
$rows = count($a);  
$cols = count($a[0]);  

   
for($i = 0; $i < $cols; $i++){  
    $sumCol = 0;  
    for($j = 0; $j < $rows; $j++){  
      $sumCol = $sumCol + $a[$j][$i];  
    }  
    print("Sum of " . ($i+1) . " column: " . $sumCol);  
    print("<br>");  
}  
?>  