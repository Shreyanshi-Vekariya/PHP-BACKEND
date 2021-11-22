<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Class</title>
</head>
<body>
    
</body>
</html>
<?php
   interface A1 {
      public function log(string $msg);
   }

   class Application {
      private $logger;

      public function getLogger(): A1 {
         return $this->logger;
      }

      public function setLogger(A1 $logger) {
         $this->logger = $logger;
      }  
   }

   $app = new Application;
   $app->setLogger(new class implements A1 {
      public function log(string $msg) {
         print($msg);
      }
   });

   $app->getLogger()->log("This is Example of Anonymous");
?>