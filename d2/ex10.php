<?php
$result = array(365);

$sub_struct_month = ($result[0] / 30) ;
$sub_struct_month = floor($sub_struct_month); 
$sub_struct_days = ($result[0] % 30); 
$sub_struct = $sub_struct_month."month ".$sub_struct_days."days";

echo $sub_struct;
?>