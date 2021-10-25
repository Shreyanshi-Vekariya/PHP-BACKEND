<?php

$mymultiarray = array(
    array("A" => 2, "B" => 5, "C" => 9),
    array("D" => 3, "E" => 6, "F" => 10),
    array("G" => 5, "H" => 8, "I" => 12)
);

$sumMulArray = 0;
foreach ($mymultiarray as $subArray) {
    foreach ($subArray as $mulKey=>$mulValue) 
    {
        $sumMulArray += $mulValue;
    }
}

echo "The sum of numbers in multidimensional array is: ".$sumMulArray;
?>