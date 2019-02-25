<?php
require_once 'connectdb.php';
   if( $_POST["vegetable_name"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['vegetable_name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Vegetable name you added ". $_POST['vegetable_name']. "<br />";
      exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<?php include("page/head.php"); ?>


  <div class="dropdown">
    <form action="vbuilder.php" method="POST">
       Add Vegetable: <input type = "text" name = "vegetable_name" />
       <input type = "submit" />
    </form>
  </div>

<?php
$statement = $db->prepare('INSERT INTO names(vegetable_name) VALUES('$_POST[vegetable_name]')');
$statement->execute([
  ':vegetable_name' => $_POST['vegetable_name']]);
$vegetable_id = $db->lastInsertId();
?>


<?php include("page/footer.php"); ?>
</body>
</html>
