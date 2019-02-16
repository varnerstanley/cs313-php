<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>About</title>
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
      <section class="intro">
        <div class="headpic">
          <img class="headshot" src="headshot.jpg" alt="headshot photo">
        </div>
        <div class="subContainer">
          <div class="bio">
            <p>My name is Stanley. I'm from Utah. I love to hangout with my family, go boating and workout. Right now I am in love with anything and everything that has to do with full stack engineering. I love building things. I love taking an idea from scratch and the process of development for it to become a reality.</p>
          </div>
          <div class="assign-btn">
            <h3 class="assign"><a href="assignments.php">Assignments</a></h3>
          </div>
      </div>
      </section>
      <section>

      </section>

    </main>

    <footer>
        Date <?php echo date('j F, Y', getlastmod()); ?>
    </footer>
    <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
