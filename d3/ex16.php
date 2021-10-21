<!-- WAP to read a number and check whether its Armstrong or not.(using while loop)((Sum
of xQube)=x. like153) -->

<?php

$num = $_POST['num'];

    $total=0;
    $new_val=$num;
    while($new_val!=0 ){
        $rem=$new_val%10;
        $total=$total + ($rem*$rem*$rem);
        $new_val=$new_val/10;
    }
    if($total==$num){
        echo "The Given Number is Armstrong";
    }else{
        echo "The Given Number is not Armstrong";
    }




?> 