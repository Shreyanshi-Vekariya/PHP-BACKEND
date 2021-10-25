
<?php 
// Returns maximum in array 
function getMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
  
// Returns maximum in array 
function getMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
  
// Driver code 
$array = array(20,10,2,5,22,50,90); 

echo"Array Element : <br> ";  
    for ($i = 0; $i < count($array); $i++) {   
        print($array[$i] . " "."<br>");   
    }    
echo"Max Array : ".(getMax($array)); 

echo"<br>Min Array : ".(getMin($array)); 
?>