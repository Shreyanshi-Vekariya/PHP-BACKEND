<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null coalescing operator </title>
</head>
<body>
    
</body>
</html>

<?php
   
   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");

   
   $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);
?>