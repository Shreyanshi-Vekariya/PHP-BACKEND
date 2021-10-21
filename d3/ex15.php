<!-- WAP to read a number and sum of its digits(using while loop) -->

<?php 

$num = $_POST["num"];

    $result=0;
    $rem=0;
    $i=0;
    
    while($i <= strlen($num)){
        $rem=$num%10;
        $result+=$rem;
        $num=$num/10;
        $i++;
    }
    echo "Sum Of all digit is : ".$result;



?>
