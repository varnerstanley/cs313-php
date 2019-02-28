<?php
require_once 'connectdb.php';

try
{
$query = 'INSERT INTO names(vegetable_name) VALUES(:vegetable_name)';
$statement = $db->prepare($query);

$statement->bindValue(':vegetable_name', $vegetable_name);

$statement->execute();
$vegId = $db->lastInsertId("veg_id_seq");


// foreach ($topicIds as $topicId)
// 	{
// 		echo "vegId: $vegId";
// 		// Again, first prepare the statement
// 		$statement = $db->prepare('INSERT INTO names(vegId) VALUES(:vegId)');
// 		// Then, bind the values
// 		$statement->bindValue(':vegId', $vwgId);
// 		$statement->execute();
// 	}
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: showTopics.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

header('Location: index.php');
die();
