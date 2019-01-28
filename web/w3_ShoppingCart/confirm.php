<?php
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zip']= $_POST['zip'];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <title>Confirmation Page</title>
    </head>
        <body>
            <div>
             <h1 class="cartHeading"><?php echo $_SESSION['name']; ?>, thank you! </h1> 
             <p>Products:</p>
             <?php
             echo "<div class='cartList'>";
                    foreach ($_SESSION["proteins"] as $protein) {
                        echo '<div class="subList" id="'. $index .'"> ';
                        echo print_r($protein);
                        echo '</div>';
                    }
                    echo "</div>"
            
            ?>
            <p> Shipping Address: </p>
            <?php
             echo "<div>" . $_SESSION['name']. " " . $_SESSION['lname'] . "<br/>";
             echo $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['zip'];
            ?>
            </div>
        </body>
</html>
 