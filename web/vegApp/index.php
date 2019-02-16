<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Home Page</title>
  </head>
  <body>
    <header>
      <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="assignments.php">Veggie Builder</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>

    <main>
      <?php

      // Create or access a Session
       session_start();

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

      foreach ($db->query('SELECT now()') as $row)
      {
       print "<p>$row[0]</p>\n\n";
      }

      echo "<h2> Vegetable List: </h2>";
      foreach ($db->query('SELECT vegetable_name, description FROM names') as $row)
      {
        echo '<div class="vContainer"';
        echo '<b>Veggie Name:</b> ' . '<p class="vName">' . $row['vegetable_name'] . '</p>';
        echo '<br/> <b>Description:</b> ' . $row['description'];
        echo '<br/>';
        echo '</div>';
      }

      ?>

    </main>

    <footer>
        Date thanks to PHP <?php echo date('j F, Y', getlastmod()); ?>
    </footer>
    <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
