<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Home Page</title>
    <?php require 'connectdb.php';?>
  </head>
  <body>
    <header>
      <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="vbuilder.php">Veggie Builder</a>
        <a href="about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>

    <main>

      <?php
        echo "<h2 class='vTitle'> Vegetable List: </h2>";
        echo '<div class="vContainer">';
        // foreach ($db->query('SELECT vegetable_name, description FROM names') as $row)
        // {
        //   echo '<p class="vName"><b>' . 'Veggie Name: ' . '</b>' . $row['vegetable_name'];
        //   echo '<span class="desc"><b>Description:</b> ' . $row['description'] . '</span></p>';
        // }
        echo '<select name="vegetables">'; // Open your drop down box

        // Loop through the query results, outputing the options one by one
        foreach ($db->query('SELECT vegetable_name, description FROM names') as $row) {
           echo '<option value="'.$row['vegetable_name'].'">'.$row['vegetable_name'].'</option>';
        }

        echo '</select>';// Close your drop down box
        echo '</div>';

       ?>

    </main>

    <footer>
        Date <?php echo date('j F, Y', getlastmod()); ?>
    </footer>
    <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
