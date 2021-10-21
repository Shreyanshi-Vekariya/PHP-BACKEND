  <?php
$p = 95;
$c = 85;
$m = 74;
$e = 64;
$h = 53;
$total = NULL;
$average = NULL;
$percentage = NULL;

// p, c, m, e, and h are the five subjects
// p = physics
// c = chemistry
// m = math
// e = english
// h = history

$total = $p + $c + $m + $e + $h;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;


echo "The Total marks   = " . $total . "/500\n<br>";
echo "The Average marks = " . $average . "\n<br>";
echo "The Percentage    = " . $percentage . "%";

?>