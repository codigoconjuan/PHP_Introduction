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
                  $fruits = array('apple', 'orange', 'melon', 'banana');
                  
                  array_push($fruits, 'pear');
                  
                  echo $fruits[4];
                  
                  unset($fruits[1]);
                  
                  echo "<pre>";
                  var_dump($fruits);
                  echo "</pre>";
                  
                  echo $fruits[1];
              ?>
              
            
          </div>
    </div>
    
  </body>
</html>