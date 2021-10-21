<?php

$number=$_POST['num'];

$result=1;

for($i=1;$i<=$number;$i++){
$result*=$i;
}

echo "Factorial Of Given Number is : ".$result;
?>