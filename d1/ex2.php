<!DOCTYPE html>
<html>
<body>

<?php

$second = 5000;

$sec = $second % 60;
$hrs = $second / 60;
$mins = $hrs % 60;
$hrs = $hrs / 60;

print ("HH:MM:SS :: " . (int)$hrs . ":" . (int)$mins . ":" . (int)$sec);

?>

</body>
</html>
