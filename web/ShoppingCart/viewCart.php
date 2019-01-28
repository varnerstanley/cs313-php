<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>View Cart</title>
  </head>
  <body>
    <?php
        echo "<div class='cartList'>";
        $index = 0;
        
        foreach ($_SESSION["proteins"] as $protein) {
            echo '<div class="subList" id="'. $index .'"> ';
            echo print_r($protein);
            echo '<a href="viewCart.php?delete=true&id='. $index .'"><button class="btn" type="submit">Delete</button></a>';
            echo '</div>';
            $index++;
        }
        echo "</div>"
        
    ?>
      <div class="subList3">
        <a href="shoppingCart.php" class="btn">Continue Shopping</a>
        <a href="checkout.php" class="btn">Checkout</a>
      </div>
      
    
    <?php
    
    if (isset($_GET['delete'])) {
        unset($_SESSION["proteins"][$_GET['id']]);
      }
      ?>
    
  </body>
</html>
