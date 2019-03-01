<?php
require_once 'connectdb.php';
  //  if( $_POST["vegetable_name"] ) {
  //     if (preg_match("/[^A-Za-z'-]/",$_POST['vegetable_name'] )) {
  //        die ("invalid name and name should be alpha");
  //     }
  //     echo "Vegetable name you added ". $_POST['vegetable_name']. "<br />";
  //     exit();
  //  }


?>
<!DOCTYPE html>
<html lang="en">
<?php include("page/head.php"); ?>

<div class="dropdown">
     <?php
        // Open your drop down box
       // Loop through the query results, outputing the options one by one
       foreach ($db->query('SELECT vegetable_name, veg_id FROM names') as $row) {
         echo '<div class="dropdown">';
         echo '<form action="updateVeggie.php" method="POST">';
         echo '<div class="textUp">';
         echo 'Name: ' . $row['vegetable_name'] . " " . "id: " . $row['veg_id'];
         echo '</div>';
         echo '<input type="hidden" name="veg_id" value="'.$row['veg_id'].'">';
         echo '<input type="text" name="vegetable_name">';
         echo '<input type="submit">';
         echo '</form>';
         echo '</div>';
       }
     ?>
</div>


<?php include("page/footer.php"); ?>
</body>
</html>
<script>

</script>
