<?php

$basic_sal = 20000;
$HRA = $basic_sal * 0.5;
$DA = $basic_sal * 0.2;
$PF = $basic_sal * 0.3;
$Medical = $basic_sal * 0.1;

$total_sal = ($basic_sal + $HRA + $DA) - ($PF + $Medical);

echo "Total salary is : ".$total_sal;

?>