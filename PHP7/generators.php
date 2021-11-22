<?php
   $generator = (function(){
      yield "five";
      yield "six";
      yield "seven";
      return "eight";
   })
   ();
   foreach ($generator as $val){
      echo $val, PHP_EOL;
   }
   echo $generator ->getReturn(), PHP_EOL;
?>