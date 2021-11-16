<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>

<?php
session_start();
include 'connection.php';

$id=$_GET['p_id'];

$sql="delete from product where p_id=$id";

$query=mysqli_query($con,$sql) or die("Error in Query");


if($query){
echo "data deleted";
header('Location:dashboard.php');
}else{
echo "Error in delete";
}

?>