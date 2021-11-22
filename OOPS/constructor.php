<!DOCTYPE html>
<html>
<head>
   <title>Constructor Example in PHP</title>
</head>
<body>
<?php
   
   class MyBaseClass
   {
      function __construct()
      {
         echo "I am in MyBaseClass constructor<br/>";
      }
   }
   class AnotherClass extends MyBaseClass
   {
      function __construct()
      {
         
         parent::__construct();
         
         echo "I am in AnotherClass constructor<br/>";
      }
   }
   class AnotherThirdClass extends MyBaseClass
   {   
      
   }
   
   $objct = new MyBaseClass();
   
   $objct = new AnotherClass();
   
   $objct = new AnotherThirdClass();
?>
</body>
</html>