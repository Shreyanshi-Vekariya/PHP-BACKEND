<?php  
  
$arr = array(2,1,3,4,5,6);   
$sum = 0;  
   
//Loop through the array to calculate sum of elements  
for ($i = 0; $i < count($arr); $i++) {   
   $sum = $sum + $arr[$i];  
}    
print("Sum of all the elements of an array: " . $sum);  
?>  