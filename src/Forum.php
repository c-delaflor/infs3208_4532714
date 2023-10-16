<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/5c69705d4a.js" crossorigin="anonymous"></script>
    <title>Forum</title>
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
      <li><a class = 'active' href="Forum.php">FORUM</a></li>
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
            FORUM
        </h1>
        <hr>

        <ul class="breadcrumb"> <!-- Breadcrumb -->
            <li><a href="index.php">Home</a></li>
            <li><a href="Forum.html">Forum</a></li>
        </ul>

        <!-- Tab Links -->
        <div class="tab">
            <button class="tablink" onclick="changetab(event,'All')"><span class="bold">ALL</span></button>
            <button class="tablink" onclick="changetab(event,'Fitness')">FITNESS</button>
            <button class="tablink" onclick="changetab(event,'Diet')">DIET</button>
            <button class="tablink" onclick="changetab(event,'Wellness')">WELLNESS</button>
        </div>

        <div id="All" class ="tabcontent">
        <?php
            // Connect to the database
            $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch all threads and their authors from database
            $result = $conn->query('SELECT threads.*, users.username FROM threads JOIN users ON threads.user_id = users.user_id ORDER BY threads.id DESC');


            // Check if there are threads
            if ($result->num_rows > 0) {
                // Loop through and display each thread
                while($thread = $result->fetch_assoc()) {
                    echo "<div class='forum-container'>";
                    echo "<div class='thread'>";
                    echo "<h1><a href='thread.php?id=" . $thread['id'] . "'>" . $thread['title'] . "</a></h1>";
                    echo "<p><i> by " . $thread['username'] . "</i></p>";
                    echo "<div class='category'>" . $thread['category'] . "</div>";
                    echo "<p>" . nl2br(htmlspecialchars(substr($thread['content'], 0, 100))) . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No threads found!";
            }

            // Close connection
            $conn->close();
            ?>
        </div>

        <div id="Fitness" class ="tabcontent">
        <?php
            // Connect to the database
            $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch all threads from database
            $result = $conn->query('SELECT threads.*, users.username FROM threads JOIN users ON threads.user_id = users.user_id WHERE threads.category = "Fitness" ORDER BY threads.id DESC');


            // Check if there are threads
            if ($result->num_rows > 0) {
                // Loop through and display each thread
                while($thread = $result->fetch_assoc()) {
                    echo "<div class='forum-container'>";
                    echo "<div class='thread'>";
                    echo "<h1><a href='thread.php?id=" . $thread['id'] . "'>" . $thread['title'] . "</a></h1>";
                    echo "<p><i> by " . $thread['username'] . "</i></p>";
                    echo "<div class='category'>" . $thread['category'] . "</div>";
                    echo "<p>" . nl2br(htmlspecialchars(substr($thread['content'], 0, 100))) . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No threads found!";
            }

            // Close connection
            $conn->close();
            ?>
        </div>


        <div id="Diet" class ="tabcontent">
        <?php
            // Connect to the database
            $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch all threads from database
            $result = $conn->query('SELECT threads.*, users.username FROM threads JOIN users ON threads.user_id = users.user_id WHERE threads.category = "Diet" ORDER BY threads.id DESC');

            // Check if there are threads
            if ($result->num_rows > 0) {
                // Loop through and display each thread
                while($thread = $result->fetch_assoc()) {
                    echo "<div class='forum-container'>";
                    echo "<div class='thread'>";
                    echo "<h1><a href='thread.php?id=" . $thread['id'] . "'>" . $thread['title'] . "</a></h1>";
                    echo "<p><i> by " . $thread['username'] . "</i></p>";
                    echo "<div class='category'>" . $thread['category'] . "</div>";
                    echo "<p>" . nl2br(htmlspecialchars(substr($thread['content'], 0, 100))) . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No threads found!";
            }

            // Close connection
            $conn->close();
            ?>
        </div>

        <div id="Wellness" class ="tabcontent">
        <?php
            // Connect to the database
            $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch all threads from database
            $result = $conn->query('SELECT threads.*, users.username FROM threads JOIN users ON threads.user_id = users.user_id WHERE threads.category = "Wellness" ORDER BY threads.id DESC');

            // Check if there are threads
            if ($result->num_rows > 0) {
                // Loop through and display each thread
                while($thread = $result->fetch_assoc()) {
                    echo "<div class='forum-container'>";
                    echo "<div class='thread'>";
                    echo "<h1><a href='thread.php?id=" . $thread['id'] . "'>" . $thread['title'] . "</a></h1>";
                    echo "<p><i> by " . $thread['username'] . "</i></p>";
                    echo "<div class='category'>" . $thread['category'] . "</div>";
                    echo "<p>" . nl2br(htmlspecialchars(substr($thread['content'], 0, 100))) . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No threads found!";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
        
        <div class="questionForm">
            <h1>Create Post</h1>
            <form method="POST" action="create-post.php" id="FAQform">
                <label for="title" class="form-label">Title</label> <span class="spacing"></span>
                <input id="title" type="text" name="title" required /> <br><br>

                <div class="categorycontainer">
                    <label for="category" class="form-label">Category</label>
                    <div class="radiogroup"> <!-- Creating Checklist boxes -->
                        <input type="radio" id="html" name="category" value="Fitness" required>
                        <label for="html">Fitness</label>
                        <input type="radio" id="diet" name="category" value="Diet" required>
                        <label for="diet">Diet</label>
                        <input type="radio" id="wellness" name="category" value="Wellness" required>
                        <label for="wellness">Wellness</label>
                    </div>
                </div>
                <br><br>

                <label for="content" class="form-label">Text</label>
                <textarea id="question" name="content" required></textarea><br>

                <div id="formbuttons">
                    <input type="submit" value="Submit">
                    <input type="button" onclick="clearForm()" value="Clear">
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