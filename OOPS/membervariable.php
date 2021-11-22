<!DOCTYPE html>
<html>
<head>
   <title>Member Variable Example in PHP</title>
</head>
<body>
<?php
   class Myclass 
   {
      
      public static $member_variable = "I am in member variable ...!!";
   }
  
   $object_Myclass = new Myclass;
   
   echo $object_Myclass::$member_variable;
?>
</body>
</html>