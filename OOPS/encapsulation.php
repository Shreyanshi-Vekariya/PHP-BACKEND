<!DOCTYPE html>
<html>
<head>
   <title>Encapsulation Example in PHP</title>
</head>
<body>
<?php
   class A
   {
      public $firstname;
      public $lastname;
      function __construct($fname, $lname)
      {
         $this->firstname = $fname;
         $this->lastname = $lname;
      }
      public function MyFunction()
      {
         echo " ".$this->firstname.$this->lastname;
      }
   }
   $obj = new A("Shreyanshi ", "Vekariya");
   echo $obj->MyFunction();
?>
</body>
</html>