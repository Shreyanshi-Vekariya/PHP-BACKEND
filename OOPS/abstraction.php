<!DOCTYPE html>
<html>
<head>
   <title>Data Abstraction Example in PHP</title>
</head>
<body>
<?php
   abstract class My_Abstract_Class
   {
      abstract public function languages($a);
   }
   class MyClass extends My_Abstract_Class
   {
      public function languages($a)
      {
         return "----- {$a} -----";
      }
   }
   $obj = new MyClass;
   echo $obj->languages("PHP")."<br/>";
   echo $obj->languages("HTML")."<br/>";
   echo $obj->languages("CSS")."<br/>";
   echo $obj->languages("Java")."<br/>";
   echo $obj->languages("C")."<br/>";
   echo $obj->languages("C++")."<br/>";
   echo $obj->languages("JavaScript")."<br/>";
?>
</body>
</html>