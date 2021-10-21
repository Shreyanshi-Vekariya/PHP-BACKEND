<?php
    $number = $_POST["num"];
    $count = 0;
    for($i=1; $i<=$number; $i++)
    {
        if($number % $i == 0)
        $count++;
    }
    if($count == 2)
    {
        echo "$number is a prime number";
    }
    else
    {
        echo "$number is not a prime number";
    }
?>