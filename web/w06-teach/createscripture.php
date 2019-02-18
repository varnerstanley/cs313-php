<?php
require_once '_db.php';

$statement = $db->prepare('INSERT INTO scriptures(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)');
$statement->execute([
  ':book' => $_POST['book'],
  ':chapter' => $_POST['chapter'],
  ':verse' => $_POST['verse'],
  ':content' => $_POST['content'],
]);
$scripture_id = $db->lastInsertId();

foreach ($_POST['topics'] as $topic_id) {
  $statement = $db->prepare('INSERT INTO scriptures_topics(scripture_id, topic_id) VALUES(:scripture_id, :topic_id)');
  $statement->execute([
    ':scripture_id' => $scripture_id,
    ':topic_id' => $topic_id
  ]);
}

header('Location: view.php?id=' . $scripture_id);
die();
