<!DOCTYPE html>
<html>
<head>
   <title>Member Function Example in PHP</title>
</head>
<body>
<?php
   class Myclass 
   {
      
      function member_function()
      {
         echo "this is the member function of myclass..!!";
      }
   }
   
   $obj = new Myclass;
   
   $obj::member_function();
?>
</body>
</html>