<!DOCTYPE html>
<html>
<head>
   <title>Inheritance Example in PHP</title>
</head>
<body>
<?php
   class Myclass
   {
      public function display($arg)
      {
         echo "Output :<b>".$arg."</b><hr/>";
      }
      public function display1()
      {
         echo "this is display 1<hr/>";
      }
   }
   class Anotherclass extends Myclass
   {
      public function display($arg)
      {
         echo "Another Output: <b>".$arg."</b><hr/>";
      }
   }
   $obj1 = new Myclass();
   $obj2 = new Anotherclass;
   $obj1->display('obj1 function');
   $obj1->display1();
   $obj2->display("obj 2 function");
   $obj2->display1();
?>
</body>
</html>