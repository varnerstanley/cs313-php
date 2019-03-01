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
  <form action="updateVeggie.php" method="POST">
     Select Vegetable to Update:
     <?php
       echo '<select name="vegetables">'; // Open your drop down box
       // Loop through the query results, outputing the options one by one
       foreach ($db->query('SELECT vegetable_name, veg_id FROM names') as $row) {
          echo '<option value="'.$row['veg_id'].'" selected>'.$row['vegetable_name'].'</option>';
       }
       echo '</select>';// Close your drop down box
     ?>
     New Name: <input type="text" name="vegetable_name">

     <input type="submit">
  </form>
</div>


<?php include("page/footer.php"); ?>
</body>
</html>
