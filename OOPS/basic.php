<!DOCTYPE html>
<html>
<head>
   <title>Object Oriented Programming in PHP</title>
</head>

<body>
<?php
   
   class oop_class
   {
      public $oop_member_var = "oop_member_var member variable";
      public $oop_function_name = "oop_member_function";
   }
   function oop_member_fun()
   {
      echo "Inside oop_member_fun()";
   }
   $oop_class = new oop_class;
   
   
   $element = "oop_member_var";
   echo $oop_class->$element;
?>
</body>
</html>