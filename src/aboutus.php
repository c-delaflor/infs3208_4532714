<?php session_start() ?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/5c69705d4a.js" crossorigin="anonymous"></script>
    <title>About Us</title>
</head>

<body>
    <!-- Styling Nav Bar -->
    <nav id="navbar" class="navtop">
        <a href="index.php">
            <img src="images/CDF Fitness.png" alt="nav logo" id="navlogo"> <!-- Image on Nav Bar -->
        </a>
        <ul class="menulist"> <!-- Links on Nav Bar -->
            <li><a href="Exercises.php">EXERCISES</a></li>
            <li><a href="ProductReviews.html">PRODUCT REVIEWS</a></li>
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

    <main> <!-- Main Section of Page -->
        <h1 class="PageTitles"> <!-- Page Title -->
            ABOUT US
        </h1>
        <hr>
        <ul class="breadcrumb"> <!-- Breadcrumb -->
            <li><a href="aboutus.html">About us</a></li>
        </ul>

        <article class="articleflex"> <!-- Our Mission Section -->
            <div class="textcontainer"> <!-- Text Container for Blurb -->
                <h1 class="headings">
                    OUR MISSION
                </h1>
                <p class="blurbparagraphs">
                    Our mission here at CDF Fitness is to provide accessible and insightful information to individuals
                    about health and fitness regardless of experience or schedule. We believe that a healthy and active
                    lifestyle should be attainable for anyone through our expert guidance, resources and support.
                </p>
            </div>
            <img src="images/ourmission.jpg" alt="Photo of a barbell" class="sidephoto">
        </article>


        <article class="articleflex" id="reverse"> <!-- About me Section -->
            <div class="textcontainer" id="textreverse"> <!-- Text Container for Blurb -->
                <h1 class="headings">
                    ABOUT ME
                </h1>
                <p class="blurbparagraphs">
                    My name is Christian De La Flor and I am passionate about health and fitness. I created CDF Fitness
                    as a way for other like-minded individuals to begin their journey into fitness with a plethora of
                    resources and assistance that I wish I had when I began. Thank you for choosing CDF Fitness as your
                    go-to resource for all things health and fitness. I look forward to helping you on your journey to a
                    healthier, happier life!
                </p>
            </div>
            <img src="images/myself.jpeg" alt="Photo of Myself" class="sidephoto">
        </article>

    </main>
    <br>

    <!-- Styling Footer -->
    <footer>
        <div class="footerflex">
            <a href="aboutus.html" id="footerlink">About Us</a>
            <img src="images/CDF Fitness.png" alt="Footer Logo" class="footerphoto">
            <div class="footersocials"> <!-- Social Media Icons -->
                <a href="https://www.instagram.com/christian.delaflor/"><i class="fa-brands fa-instagram fa-2xl"
                        style="color: #ffffff;"></i></a>
                <a href="https://www.facebook.com/christian.delaflor.9/"><i class="fa-brands fa-facebook fa-2xl"
                        style="color: #ffffff;"></i></a>
                <a href="https://twitter.com/delaflor29"><i class="fa-brands fa-twitter fa-2xl"
                        style="color: #ffffff;"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>