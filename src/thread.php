<?php session_start(); ?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/5c69705d4a.js" crossorigin="anonymous"></script>
    <title>Exercises</title>
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

     <!-- put Thread INFO HERE!!!! -->

     <?php
        $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
          // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get thread ID from URL
        $thread_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        // Fetch thread from database
        $stmt = $conn->prepare('SELECT threads.*, users.username FROM threads JOIN users ON threads.user_id = users.user_id WHERE threads.id = ?');
        $stmt->bind_param('i', $thread_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $thread = $result->fetch_assoc();

        // Check if thread exists
        if(!$thread) {
            echo "Thread not found!";
        } else {
            // Display thread
            echo "<div class='thread'>";
            if (isset($_SESSION['user_id']) && $thread['user_id'] == $_SESSION['user_id']) {
                echo "<form class='deleteForm' method='POST' action='delete-thread.php' onsubmit='return confirm(\"Are you sure you want to delete this thread?\");'>";
                echo "<input type='hidden' name='id' value='" . $thread['id'] . "'>";
                echo "<input class='deleteButton' type='submit' value='Delete Thread'>";
                echo "</form>";
            }
            echo "<h1 class='PageTitles'>" . htmlspecialchars($thread['title']) . "</h1>";


            
            echo "<div class='categoryWrapper'><h2 class='categoryHeader'>" . $thread['category'] . "</h2></div>";
            echo "<p class ='username'><i>posted by " . $thread['username'] . "</i></p>"; 
            echo "<hr>";
            echo "<p id='exerciseBlurb'>" . nl2br(htmlspecialchars($thread['content'])) . "</p>";
            echo "</div>";
        }
    ?>

    <div class="commentSection">
        <h1>Comments</h1>

        <!-- Actual Comments Here -->
        <?php


        $query = "SELECT comments.content, comments.created_at, users.username FROM comments INNER JOIN users ON comments.user_id = users.user_id WHERE comments.commentable_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $thread_id); // replace with actual commentable ID variable
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            echo "<div class='commentBox'>";
            echo "<span>" . $row['created_at'] . "</span>";
            echo "<h2> @" . $row['username'] . "</h2>";
            echo "<p>" . $row['content'] . "</p>";
            echo "</div>";
        }

        // Close connections
        $stmt->close();
        $conn->close();
        ?>

        <!-- Comment Form Here -->

        <form action="submit-comment.php" method="POST">
            <textarea name="commentContent" required></textarea>
            <input type="hidden" name="commentableId" value="<?php echo $thread['id']; ?>"> 
            <input type="submit" value="Submit Comment">
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