<?php


$number=$_POST['rev_num'];

$result=0;

while($number > 1){
$remain=$number % 10;
$result=($result * 10) + $remain;
$number=($number/10);
}
echo "Reverse Number of given number is : ".$result;

?>