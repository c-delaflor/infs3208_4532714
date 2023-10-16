<?php session_start() ?>
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
      <li><a class = 'active' href="Exercises.php">EXERCISES</a></li>
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

    <main> <!-- Main Section of Page -->
        <h1 class="PageTitles"> <!-- Page Title -->
            EXERCISES
        </h1>
        <hr>

        <ul class="breadcrumb"> <!-- Breadcrumb -->
            <li><a href="index.html">Home</a></li>
            <li><a href="Exercises.html">Exercises</a></li>
        </ul>

        <!-- Exercise Blurb -->
        <p id="exerciseBlurb">The exercises that we have provided are designed to provide users with an exhaustive list
            that target all
            major muscle groups. Whether you are just starting your fitness journey or are attempting to take your
            training to the next level, our list has something for everyone. Our list of exercises include ones that can
            done in the comfort of your own home to exercises that can be completed in a gym. Click on the <span
                class="bold">“Beginner”</span> or
            <span class="bold">“Advanced”</span> tabs below to browse the exercises.
        </p>

        <!-- Tab Links -->
        <div class="tab" id="exercisetab">
            <button class="tablink" onclick="changetab(event,'Beginner')">BEGINNER</button>
            <button class="tablink" onclick="changetab(event,'Advanced')">ADVANCED</button>
        </div>

        <div id="Beginner" class="tabcontent"> <!-- Beginner Tab -->

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>PUSH-UPS</h1>
                    <p><i>Chest, Triceps, Shoulders</i></p>
                    <ol>
                        <li>Place your hands shoulder-width apart and keep your arms straight</li>
                        <li>Lower yourself down towards the ground by bending your elbows all while keeping your body in
                            a straight line</li>
                        <li>Keep your elbows close to your body and your core engaged as you lower yourself towards the
                            ground</li>
                        <li>Once your chest is just above the ground, push yourself back up until you are back in the
                            starting position</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/KEFQyLkDYtI">
                    </iframe>
                </div>


            </div>
            <form action="submit_rating_comment.php" method="post">
                <input type="hidden" name="video_id" value="push_ups">
                <label for="rating">Rate this video:</label>
                <select name="rating" id="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="comment">Comment:</label>
                <textarea name="comment" id="comment" required></textarea>
                <button type="submit">Submit</button>
            </form>
            <hr class="exerciseSeperation">


            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>PRISONER SQUAT</h1>
                    <p><i>Legs (quadriceps, hamstrings, glutes)</i></p>
                    <ol>
                        <li>Stand with your feet shoulder-width apart and place your hands behind your head with
                            your elbows pointing outwards</li>
                        <li>Descend towards the ground by bending your knees and pushing your hips out</li>
                        <li>Keep your back straight and core engaged while you descend</li>
                        <li>Once your thighs are parallel with the floor, push yourself up by bracing your core and
                            driving your feet into the floor</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/0PboqagHAjs">
                    </iframe>
                </div>
            </div>
            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>LAT PULLDOWN</h1>
                    <p><i>Back, Biceps</i></p>
                    <ol>
                        <li>If possible, adjust the knee pad and seat so that your knees are comfortably positioned
                            underneath the pad and your feet are flat on the floor</li>
                        <li>Grip the bar with a wide grip, palms facing forward and sit down on the bench</li>
                        <li>Keep your chest up, shoulders back and your core engaged</li>
                        <li>Pull the handle towards your body until your elbows are in line with your torso then slowly
                            return back to the starting position</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/iKrKgWR9wbY">
                    </iframe>
                </div>
            </div>
            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>SEATED DUMBBELL PRESS</h1>
                    <p><i>Shoulders, triceps</i></p>
                    <ol>
                        <li>Set the bench to be 90 degrees and sit with your back flat on the seat</li>
                        <li>Hold a pair of dumbbells at shoulder height with your palms facing forward</li>
                        <li>Keep your elbows slightly flexed and press the dumbbells upwards until your arms are fully
                            extended</li>
                        <li>Slowly lower the dumbbells back to the starting position</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/FRxZ6wr5bpA">
                    </iframe>
                </div>
            </div>
            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>BODYWEIGHT LUNGES</h1>
                    <p><i>Legs (quadriceps, hamstrings, glutes)</i></p>
                    <ol>
                        <li>Stand with your feet shoulder-width apart</li>
                        <li>Step forward with one leg and allow both knees to bend simultaneously </li>
                        <li>Descend until your back knee slightly touches the floor</li>
                        <li>Push through your front foot and extend the knee as you stand up fully</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/4hqtPrp-E8A">
                    </iframe>
                </div>
            </div>

        </div>

        <div id="Advanced" class="tabcontent"> <!-- Advanced Tab -->

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>BENCH PRESS</h1>
                    <p><i>Chest, Triceps, Shoulders</i></p>
                    <ol>
                        <li>Ensure your feet are planted firmly on the ground</li>
                        <li>Have a slight arch in your back </li>
                        <li>Keep your shoulders retracted and down</li>
                        <li>Keep your elbows tucked into your side and try not to flare them too much</li>
                        <li>Lower the barbell to your mid-chest</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/tuwHzzPdaGc">
                    </iframe>
                </div>
            </div>

            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>BARBELL SQUAT</h1>
                    <p><i>Legs (quadriceps, hamstrings, glutes)</i></p>
                    <ol>
                        <li>Place the bar on your upper back</li>
                        <li>Engage your core</li>
                        <li>Keep your feet shoulder width apart</li>
                        <li>When you lower your body, make sure your knees dont go past your toes</li>
                        <li>Keep your back straight</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/R2dMsNhN3DE">
                    </iframe>
                </div>
            </div>

            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>PULL UPS</h1>
                    <p><i>Back, Biceps</i></p>
                    <ol>
                        <li>Stand beneath the pull-up bar and grab the bar with an overhand grip, hands shoulder-width
                            apart</li>
                        <li>Hang from the bar with fully extended arms and engage your core</li>
                        <li>Pull yourself up towards the bar by driving your elbows down and back, keeping your chest up
                            and engaging your shoulder blades.</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/poyr8KenUfc">
                    </iframe>
                </div>
            </div>

            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>MILITARY PRESS</h1>
                    <p><i>Shoulders, triceps</i></p>
                    <ol>
                        <li>Stand with your feet shoulder-width apart</li>
                        <li>Grasp the barbell with a grip that is slightly wider than shoulder-width apart</li>
                        <li>While engaging your core and keeping your back straight, lift the barbell up to your
                            shoulder level and rest it on your collarbone</li>
                        <li>Press the barbell straight up above your head, while keeping your core engaged and your
                            elbows in line with your wrists</li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/j7ULT6dznNc">
                    </iframe>
                </div>
            </div>

            <hr class="exerciseSeperation">

            <div class="exercise"> <!-- Exercise Container -->
                <div class="exerciseinfo">
                    <h1>BULGARIAN SPLIT SQUAT</h1>
                    <p><i>Legs (quadriceps, hamstrings, glutes)</i></p>
                    <ol>
                        <li>Place your back foot on a stable surface like a bench or a box to maintain balance</li>
                        <li>Pick up your choice of dumbbell or kettle bell</li>
                        <li>Keep your front knee stacked over your ankle and your back knee close to the ground</li>
                        <li>Descend by flexing the front knee and continue until the back knee touches the ground
                            directly beneath the hip.</li>
                        <li>Drive through the front foot and extend the knee as you return to the starting position.
                        </li>
                    </ol>
                </div>
                <div class="exerciseVideo"> <!-- Video Container -->
                    <iframe class="responsiveVideo" src="https://www.youtube.com/embed/uqI3GVwfToU">
                    </iframe>
                </div>
            </div>

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