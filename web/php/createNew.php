<?php
require_once 'connectdb.php';

$statement = $db->prepare('INSERT INTO names(vegetable_name) VALUES(vegetable_name)');
$statement->execute([
  ':vegetable_name' => $_POST['vegetable_name']]);
$vegetable_id = $db->lastInsertId();



// header('Location: index.php');
// die();
