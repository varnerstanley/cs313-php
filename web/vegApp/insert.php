<h2>Enter in a New Vegetable</h2>
<ul>
<form name="insert" action="insert.php" method="POST" >

<li>Vegetable Name:</li><li><input type="text" name="vegetable_name" /></li>
<li>Description:</li><li><input type="text" name="description" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>
</html>
<?php


// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@localhost:5432/cs313db";
}

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');


try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

$query = "INSERT INTO names VALUES ('$_POST[vegetable_name]',
'$_POST[description]')";
$result = pg_query($query);
?>
