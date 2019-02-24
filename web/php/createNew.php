<?php
require_once 'connectdb.php';

$statement = $db->prepare('INSERT INTO names(vegetable_name) VALUES(:vegetable_name)');
$statement->execute([
  ':vegetable_name' => $_POST['vegetable_name']]);
$vegetable_id = $db->lastInsertId();

// foreach ($_POST['topics'] as $topic_id) {
//   $statement = $db->prepare('INSERT INTO scriptures_topics(scripture_id, topic_id) VALUES(:scripture_id, :topic_id)');
//   $statement->execute([
//     ':scripture_id' => $scripture_id,
//     ':topic_id' => $topic_id
//   ]);
// }

header('Location: index.php?id=' . $vegetable_id);
die();
