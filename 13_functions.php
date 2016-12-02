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
                function say_hello() {
                    echo "Say Hello! <br/>";
                }

                say_hello();

                function sum() {
                  echo 2 + 2 . '<br/>';
                }
                sum();
                sum();

                

             ?>
          </div>
    </div>

  </body>
</html>
