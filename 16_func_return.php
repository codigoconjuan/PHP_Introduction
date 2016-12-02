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
                  function shopping_cart_amount($amount) {
                        $amount = $amount * 1.10;
                        return $amount;
                  }
                  
                  $shopping_cart =  shopping_cart_amount("1000");
                  
                  function bank_balance($shopping_cart) {
                        $bank_balance = 500;
                        
                        if($shopping_cart > $bank_balance) {
                          echo "You don't have enough money to pay";
                        } else {
                          echo "The Payment was submitted";
                        }
                  }
                  
                  bank_balance($shopping_cart);
             ?>
          </div>
    </div>
    
  </body>
</html>