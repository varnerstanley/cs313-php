<?php
require_once '_db.php';
$statement = $db->query('SELECT id, name FROM topics;');
$statement->execute();
$topics = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Enter a new scripture</h1>
<form method="post" action="createscripture.php">
    <p>Please enter a book</p>
    <input type="text" name="book">
    <p>Please enter a chapter</p>
    <input type="text" name="chapter">
    <p>Please enter a verse</p>
    <input type="text" name="verse">
    <p>Enter the scripture content below</p>
    <textarea name="content"></textarea>
    <p>Please pick the topics</p>
    <?php foreach ($topics as $topic): ?>
      <label>
      <input type="checkbox" name="topics[]" value="<?= htmlspecialchars($topic['id']) ?>">
      <?= htmlspecialchars($topic['name']) ?>
      </label>
    <?php endforeach; ?>
    <div>
      <input type="submit">
    </div>
</form>
