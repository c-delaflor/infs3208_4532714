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
    <!-- Styling Nav Bar -->
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

        <div class="login-container">
            <h1>Create Account</h1>


            <form action="create-account.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Create</button>
                <div class="alternate-option">
                    OR
                    <a href="login.php" class="create-account-link">Login</a>
                </div>
            </form>
            
            <?php 
            if (isset($_SESSION['error'])) {
                echo '<div id="error_msg">'. $_SESSION['error'] .'</div>';
                unset($_SESSION['error']);
            }
            ?>
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
                <a href="https://twitter.com/delaflor29"><i class="fa-brands fa-twitter fa-2xl"
                        style="color: #ffffff;"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>