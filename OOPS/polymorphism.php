<!DOCTYPE html>
<html>
<head>
   <title>Polymorphism Example in PHP</title>
</head>
<body>
<?php
   // this is example code of polymorphism in PHP - CodesCracker
   interface ABC
   {
      public function abc();
   }
   class LikePHP implements ABC
   {
      private $topic;
      public function __construct($topic)
      {
         $this->topic = $topic;
      }
      public function abc()
      {
         echo " ".$this->topic." <br/>";
      }
   }
   class LikeJava implements ABC
   {
      private $topic;
      public function __construct($topic)
      {
         $this->topic = $topic;
      }
      public function abc()
      {
         echo " ".$this->topic." <br/>";
      }
   }
   class LikeC implements ABC
   {
      private $topic;
      public function __construct($topic)
      {
         $this->topic = $topic;
      }
      public function abc()
      {
         echo " ".$this->topic." <br/>";
      }
   }
   class LikeHTML implements ABC
   {
      private $topic;
      public function __construct($topic)
      {
         $this->topic = $topic;
      }
      public function abc()
      {
         echo " ".$this->topic." <br/>";
      }
   }
   $objPHP = new LikePHP("PHP");
   $objJava = new LikeJava("Java");
   $objC = new LikeC("C");
   $objHTML = new LikeHTML("HTML");
   echo $objPHP->abc();
   echo $objJava->abc();
   echo $objC->abc();
   echo $objHTML->abc();
?>
</body>
</html>