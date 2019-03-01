<?php

$vegetable_name = $_POST['vegetable_name'];
$veg_id = $_POST['veg_id'];

require_once 'connectdb.php';



try
{
// $db = vegConnect();
$query = 'UPDATE names SET vegetable_name = :vegetable_name WHERE veg_id = :veg_id';
$statement = $db->prepare($query);

$statement->bindValue(':vegetable_name', $vegetable_name);
$statement->bindValue(':veg_id', $veg_id);

$statement->execute();
// $vegId = $db->lastInsertId("veg_id_seq");



}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: index.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>
