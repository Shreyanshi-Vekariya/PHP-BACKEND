<?php
 $Number=$_POST['num1'];

 $res=0;
 $new_val=$Number;

 while($new_val){
    $rem=$new_val%10;
    $res=($res * 10) + $rem;
    $new_val=$new_val/10;
 }

 $new_val=$Number;

 if ($new_val==$Number){
    echo "Number is palindrome";
 }else{
     echo "Number is not palindrome";
 }
?>