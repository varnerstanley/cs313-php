<html>
<body>
<?php

$db = parse_url(getenv("DATABASE_URL"));
$db["path"] = ltrim($db["path"], "/");

$conn = pg_connect(getenv("DATABASE_URL"));

foreach ($db->query('SELECT vegetable_name, description FROM names') as $row)
{
  echo 'Veggie Name: ' . $row['vegetable_name'];
  echo ' Description: ' . $row['description'];
  echo '<br/>';
}

echo "<h2> Hello </h2>";

// Performing SQL query
$query = 'SELECT * FROM names';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
 ?>
</body>
</html>
