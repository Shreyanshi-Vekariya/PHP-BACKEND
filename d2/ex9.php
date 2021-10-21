<?php
$seconds = 3000;

$secs = $seconds % 60;
$hrs = $seconds / 60;
$mins = $hrs % 60;

$hrs = $hrs / 60;

echo("HH:MM:SS  :: " . (int)$hrs . ":" . (int)$mins . ":" . (int)$secs);

?>
