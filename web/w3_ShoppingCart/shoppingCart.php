<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Shopping Cart</title>
  </head>
  <body>

    <header>
      <nav>
        <ul>
          <li><a href="viewCart.php">View Cart</a></li>
        </ul>
      </nav>
    </header>
    <?php
      if (!function_exists('addProtein')) {
        function addProtein($pro) {
          array_push($_SESSION["proteins"], $pro);

        }
      }

      $plant = "Plant Protein";
      $whey = "Whey Protein";
      $goats = "Goats Whey";

      // Set session variables
      if (empty($_SESSION["proteins"])) {
        $_SESSION["proteins"] = array();
      }

      if (isset($_GET['plant'])) {
        addProtein($plant);
      } else if (isset($_GET['whey'])) {
        addProtein($whey);
      } else {
        addProtein($goats);
      }

      //array_push($_SESSION["proteins"], "hello");
      //print_r ($_SESSION["proteins"]);
    ?>

    <div class="container">
      <div class="whey subcont">
        <div class="column">
        <img class="product" src="protein.png" alt="protein">
        <a href="shoppingCart.php?plant=true"><button class="btn" type="submit">Plant</button></a>

        </div>
      </div>
      <div class="plantP subcont">
        <div class="column">
        <img class="product" src="protein.png" alt="protein">
        <a href="shoppingCart.php?whey=true"><button class="btn" type="submit">Whey</button></a>

        </div>
      </div>
      <div class="gWhey subcont">
        <div class="column">
        <img class="product" src="protein.png" alt="protein">
        <a href="shoppingCart.php?goats_whey=true"><button class="btn" type="submit">Goats Whey</button></a>

        </div>
      </div>
    </div>

  </body>
</html>
