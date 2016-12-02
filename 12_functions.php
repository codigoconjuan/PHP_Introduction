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
                $fruits = array('apple', 'orange', 'melon', 'banana', 'pear');
                
                echo count($fruits);
                echo "<br/>";
                
                $my_name = "Juan Pablo De la torre Valdez";
                $my_name2 = str_replace(' ', '', $my_name);
                
                echo strlen($my_name2);
                echo "<br/>";
                
                echo strtoupper($my_name);
                echo "<br/>";
                
                echo strtolower($my_name);
                
                 $password = "dadadadadadafgadiaijaidjads";
                 
                 echo "<br/>";
                 
                 if(strlen($password) < 6) {
                       echo "password is weak";
                 } else {
                       echo "password is strong";
                 }
             ?>
          </div>
    </div>
    
  </body>
</html>