<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Up & Running with PHP</h1>

          <div class="code-content">

            <?php
                 echo 2 + 2;
                 echo "<br/>";
                 echo 2 / 1;
                 echo "<br/>";
                 echo 3 * 4;
                 echo "<br/>";
                 echo 10 - 5;
                 echo "<br/>";

                 echo (10 * 2) + 5;
                 echo "<br/>";

                 //increment in the same variable;

                 $total = 20;

                 $total += 20;

                 $total += 10;

                 $total -= 20;

                 $total *= 2;

                 $total /= 2;

                 echo "Total is: " .$total . "<br/>";

                /*
                 for($i = 0; $i <= 100; $i++) {
                    if($i % 2 == 0) {
                        echo "The number: " . $i . " is even <br/>";
                    } else {
                      echo "The number: " . $i . " is odd <br/>";
                    }
                 }
                 */

                 $number = 2;
                 echo $number;
                 echo "<br/>";
                 echo ++$number;

                 // Fizzbuzz
                 for($i = 0; $i <= 100; $i++) {
                   if(($i % 5 == 0) && ($i % 3 == 0) ) {
                     echo $i . " FIZZBUZZ <br/>";
                   } else if ($i % 5 == 0) {
                     echo $i . " Buzz <br/>";
                   } else if ($i % 3 == 0) {
                     echo $i . " Fizz <br/>";
                   } else {
                    echo $i . "<br/>";
                   }
                 }

             ?>
          </div>
    </div>

  </body>
</html>
