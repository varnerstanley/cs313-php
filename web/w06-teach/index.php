<h1>Scripture Resources</h1>

<form method="get">
Scripture Book: <input type="text" name="book">
<input type="submit">
</form>

<?php
require_once '_db.php';

$statement = $db->query('SELECT id, book, chapter, verse, content FROM scriptures;');

if (isset($_REQUEST['book'])) {
  $conditions = ' WHERE book=:book';
}
$stmt = $db->prepare('SELECT id, book, chapter, verse, content FROM scriptures ' . ($conditions ? $conditions : ''));
if ($conditions) {
  $stmt->execute(array(':book' => $_REQUEST['book']));
} else {
  $stmt->execute();
}
$scriptures = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($scriptures as $row)
{

  $statement2 = $db->prepare('SELECT name
  FROM topics
  LEFT OUTER JOIN scriptures_topics st
  ON st.topic_id = topics.id
  WHERE scripture_id = :scripture_id');
  $statement2->execute(array(':scripture_id' => $row['id']));
  $topics = [];
  foreach ($statement2->fetchAll(PDO::FETCH_ASSOC) as $topic) {
    $topics[] = htmlspecialchars($topic['name']);
  }

  echo '<p>Topics: ' . implode(', ', $topics) . '</p>';
  echo '<p>';
  echo '<strong><a href="view.php?id=' . $row['id'] . '">' . htmlspecialchars($row['book']) . ' ' . $row['chapter'] . ':' . $row['verse'] . '</a></strong><br/>';
  echo '</p>';
}
