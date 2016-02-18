<!DOCTYPE html>
<html>
  <head>
    <title>
      PHPOne
    </title>
  </head>

  <body>

    <?php
      
      class Demo {
        public $insOne = "Something";
        public $insTwo = "Something Else";

        function outputIns() {
          echo "<h2><em>$this->insOne and $this->insTwo</em></h2><hr>";
        }
      }

      $d = new Demo;

      echo "<h1>Class output and then a for loop</h1><hr>";
      
      $d->outputIns();
     
      for ($x = 0; $x <= 10; $x++) {
        echo "<h3>The number is: $x </h3><hr>";
      }

    ?>

  </body>
</html>
