<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <title>Home Page | Bio</title>
  </head>
  <body>
    <header>

    </header>
    <nav class="clearfix">
              <img id="logo" src="images/dumbbell.svg" alt="my fitness trainer logo">
                <h1 id="nav-title">My Fitness Trainer</h1>
                <button onclick="toggleMenu()">&#9776;</button>
                <ul class="topnav hide" id="primarynav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="aboutUs.html">About us</a></li>
                  <li><a href="ourProcess.html">Our Process</a></li>
                  <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
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
      <?php echo date('j F, Y', getlastmod()); ?>
    </footer>
  </body>
</html>
