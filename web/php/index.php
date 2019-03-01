<!DOCTYPE html>
<html lang="en">
<?php include("page/head.php"); ?>


<div class="dropdown">
  <h1 class="vList">Vegetable List:</h1>
  <?php
  // phpinfo();
    require_once 'connectdb.php';

    $db = vegConnect();
    echo '<select name="vegetables">'; // Open your drop down box

    // Loop through the query results, outputing the options one by one
    foreach ($db->query('SELECT vegetable_name, description FROM names') as $row) {
       echo '<option value="'.$row['vegetable_name'].'">'.$row['vegetable_name'].'</option>';
    }

    echo '</select>';// Close your drop down box
    echo '</div>';

   ?>
</div>


<?php include("page/footer.php"); ?>
</body>
</html>
