<?php session_start(); ?>
<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
  <script src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/5c69705d4a.js" crossorigin="anonymous"></script>
  <title>CDF Fitness</title>
</head>

<body>
  <nav id="navbar" class="navtop">
    <a href="index.php">
      <img src="images/CDF Fitness.png" alt="nav logo" id="navlogo"> <!-- Image on Nav Bar -->
    </a>
    <ul class="menulist"> <!-- Links on Nav Bar -->
      <li><a href="Exercises.php">EXERCISES</a></li>
      <li><a href="ProductReviews.php">PRODUCT REVIEWS</a></li>
      <li><a href="Forum.php">FORUM</a></li>
      <?php
        if (isset($_SESSION['user_id'])) {
            echo '<li id="logged-in">Welcome, ' . htmlspecialchars($_SESSION['username']) . '</li>';
            echo '<li class="button-item"><a href="logout.php" class="btn">Logout</a></li>';  
        } else {
            echo '<li class="button-item"><a href="login.php" class="btn btn-blue">Login</a></li>';     
            echo '<li class="button-item"><a href="create.php" class="btn btn-green">Sign Up</a></li>'; 
        }
    ?>
    </ul>

    <a href="#" class="icon" onclick="navtoggle()"> <!-- Dynamic Response Nav Bar -->
      <i class="fa fa-bars"></i>
    </a>
  </nav>

  <main> <!-- Main Section of HTML Code -->
    <img src="images/Homepage.png" alt="home logo" class="homelogo"> <!-- Logo -->

    <article class="articleflex"> <!-- Quick Workouts Section -->
      <div class="textcontainer"> <!-- Text Container for Blurb -->
        <h1 class="headings">
          <a href="Exercises.php" class="BlurbTitles">
            QUICK WORKOUTS
          </a>
        </h1>
        <p class="blurbparagraphs">
          Here at CDF Fitness, you will be treated to quick and informative exercises that will assist you no matter
          your
          ability
          and where you are in your journey. Enjoy some of the most popular exercises done in the industry today. Train
          from
          the
          comfort of your own house or anywhere you like.
        </p>
      </div>
      <img src="images/workoutphoto.jpg" alt="workout photo" class="sidephoto">
    </article>

    <article class="articleflex" id="reverse"> <!-- Fitness Advice Section -->
      <div class="textcontainer" id="textreverse"> <!-- Text Container for Blurb -->
        <h1 class="headings">
          <a href="Forum.php" class="BlurbTitles">
            FITNESS ADVICE
          </a>
        </h1>
        <p class="blurbparagraphs">
          Looking for answers to common questions about health, fitness and wellness? Well, you are in luck, we have
          a forum for every user to interact with and engage in a vibrant community. From diet to exercise to
          personal wellness, we have got you covered! Dont see a question you want answered listed? Feel free to post on the forum and create a discussion!
        </p>
      </div>
      <img src="images/helpphoto.jpg" alt="help photo" class="sidephoto">
    </article>

    <article class="articleflex"> <!-- Tried & Tested Section -->
      <div class="textcontainer"> <!-- Text Container for Blurb -->
        <h1 class="headings">
          <a href="ProductReviews.php" class="BlurbTitles">
            TRIED & TESTED

          </a>
        </h1>
        <p class="blurbparagraphs">
          Discover the latest and greatest fitness products to help you on your journey! Maximise your potential with
          the
          latest fitness gear and supplements, all tested and reviewed by our team. From frozen meals to fitness
          supplements, we have got you covered!
        </p>
      </div>
      <img src="images/productphoto.jpg" alt="product photo" class="sidephoto">
    </article>


    <div class="popup" id="popup" <?php if(!isset($_SESSION['message'])) echo 'class="hidden"'; ?>>
      <img src="images/tick.png" alt="Green Tick">
      <p>Your Account has been Created.</p>
      <button type="button" onclick="closePopup()">OK</button>
    </div>


  </main>
  <br>

  <!-- Styling Footer -->
  <footer>
    <div class="footerflex">
      <a href="aboutus.php" id="footerlink">About Us</a>
      <img src="images/CDF Fitness.png" alt="Footer Logo" class="footerphoto">
      <div class="footersocials"> <!-- Social Media Icons -->
        <a href="https://www.instagram.com/christian.delaflor/"><i class="fa-brands fa-instagram fa-2xl"
            style="color: #ffffff;"></i></a>
        <a href="https://www.facebook.com/christian.delaflor.9/"><i class="fa-brands fa-facebook fa-2xl"
            style="color: #ffffff;"></i></a>
        <a href="https://twitter.com/delaflor29"><i class="fa-brands fa-twitter fa-2xl" style="color: #ffffff;"></i></a>
      </div>
    </div>
  </footer>

</body>

</html>