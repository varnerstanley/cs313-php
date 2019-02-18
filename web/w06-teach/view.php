<?php
require_once '_db.php';

$stmt = $db->prepare('SELECT id, book, chapter, verse, content FROM scriptures WHERE id=:id LIMIT 1;');
$stmt->execute(array(':id' => $_REQUEST['id']));
$scripture = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

$statement2 = $db->prepare('SELECT name
FROM topics
LEFT OUTER JOIN scriptures_topics st
ON st.topic_id = topics.id
WHERE scripture_id = :scripture_id');
$statement2->execute(array(':scripture_id' => $_REQUEST['id']));
$topics = [];
foreach ($statement2->fetchAll(PDO::FETCH_ASSOC) as $topic) {
  $topics[] = htmlspecialchars($topic['name']);
}

echo '<h1>' . $scripture['book'] . ' ' . $scripture['chapter'] . ':' . $scripture['verse'] . '</h1>';
echo '<p>' . $scripture['content'] . '</p>';
echo '<p>Topics: ' . implode(', ', $topics) . '</p>';
