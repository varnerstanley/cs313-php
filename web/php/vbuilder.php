<?php
require_once 'connectdb.php';
    // $statement = $db->prepare('INSERT INTO names(vegetable_name) VALUES(:vegetable_name)');
    // $statement->execute([
    //   ':vegetable_name' => $_POST['vegetable_name']]);
    // $vegetable_id = $db->lastInsertId();

    $sql = 'INSERT INTO names(vegetable_name) VALUES(:vegetable_name)';
    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':vegetable_name', $vegetable_name, PDO::PARAM_STR);
     $stmt->execute();
    // Close the database interaction
    $stmt->closeCursor();


   if( $_POST["vegetable_name"] ) {
      // if (preg_match("/[^A-Za-z'-]/",$_POST['vegetable_name'] )) {
      //    die ("invalid name and name should be alpha");
      // }
      echo "Vegetable name you added ". $_POST['vegetable_name']. "<br />";
      exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<?php include("page/head.php"); ?>


  <div class="dropdown">
    <form action="<?php $_PHP_SELF ?>" method = "POST">
       Add Vegetable: <input type = "text" name = "vegetable_name" />
       <input type = "submit" />
    </form>
  </div>




<?php include("page/footer.php"); ?>
</body>
</html>
