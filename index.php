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
          echo $this->insOne;
        }
      }

      $d = new Demo;

      echo "<h1>My first PHP script!</h1>";

      $d->outputIns();

      for ($x = 0; $x <= 10; $x++) {
        echo "<h3>The number is: $x <h1>";
      }

    ?>

  </body>
</html>
