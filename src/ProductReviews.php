<?php session_start() ?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/5c69705d4a.js" crossorigin="anonymous"></script>
    <title>Product Reviews</title>
</head>

<body>
    <!-- Styling Nav Bar -->
    <nav id="navbar" class="navtop">
        <a href="index.php">
            <img src="images/CDF Fitness.png" alt="nav logo" id="navlogo"> <!-- Image on Nav Bar -->
        </a>
        <ul class="menulist"> <!-- Links on Nav Bar -->
            <li><a href="Exercises.php">EXERCISES</a></li>
            <li><a class="active" href="ProductReviews.php">PRODUCT REVIEWS</a></li>
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
            PRODUCT REVIEWS
        </h1>
        <hr>

        <ul class="breadcrumb"> <!-- Breadcrumb -->
            <li><a href="index.html">Home</a></li>
            <li><a href="ProductReviews.html">Product Reviews</a></li>
        </ul>

        <div class="productreviewrow"> <!-- A row for product review boxes (3 in a row) -->

            <div class="productreviewbox"> <!-- Product Review Box -->
                <h2>DISORDER</h2>
                <p><i>by Faction Labs</i></p>
                <img src="images/DISORDER.webp" alt="Photo of the preworkout product" class="productreviewphoto">
                <p>I recently had the opportunity to try out Disorder White Snow Pre Workout, and I must say, it's an
                    intense energy booster that delivers a solid kick to your workout routine. As a fitness enthusiast,
                    I'm always on the lookout for pre-workout supplements that can provide the necessary energy and
                    focus to maximize my gym sessions...</p>
                <div class="modaldiv"> <!-- Link to open Modal -->
                    <p class="modallink" onclick="openmodal('disorder')">> Read More</p>
                </div>
            </div>

            <div class=" productreviewbox"> <!-- Product Review Box -->
                <h2>IMPACT WHEY ISOLATE</h2>
                <p><i>by MyProtein</i></p>
                <img src="images/protein2.png" alt="Photo of the protein product" class="productreviewphoto">
                <p>As an avid fitness enthusiast, I have tried numerous protein powders, and MyProtein's Impact Whey
                    Protein has consistently stood out as a reliable and effective option. This review aims to shed
                    light on the quality and versatility of this popular product.</p>
                <div class="modaldiv"> <!-- Link to open Modal -->
                    <p class="modallink" onclick="openmodal('protein')">> Read More</p>
                </div>
            </div>

            <div class="productreviewbox"> <!-- Product Review Box -->
                <h2>BEEF STROGANOFF</h2>
                <p><i>by My Muscle Chef</i></p>
                <img src="images/beefstroganoff2.jpeg" alt="Photo of the meal" class="productreviewphoto">
                <p>As a busy individual with a focus on maintaining a healthy and balanced diet, I
                    recently had the pleasure of trying My Muscle Chef's Beef Stroganoff, and I must say it exceeded my
                    expectations. This review aims to highlight the deliciousness and convenience of this particular
                    meal.</p>
                <div class="modaldiv"> <!-- Link to open Modal -->
                    <p class="modallink" onclick="openmodal('meal')">> Read More</p>
                </div>
            </div>

        </div>

        <div class="modalbox" id="disorder"> <!-- Modal Popup when "Read More" is Clicked -->

            <div class="modalcontent"> <!-- Content of Review -->
                <div>
                    <h1>DISORDER</h1>
                    <span class="modalclose" onclick="closemodal('disorder')">&times;</span>
                </div>
                <p><i>by Faction Labs</i></p>
                <img src="images/DISORDER.webp" alt="Photo of the preworkout product" class="modalphoto">
                <p class="modalreview">I recently had the opportunity to try out Disorder White Snow Pre Workout,
                    and I
                    must say, it's an
                    intense energy booster that delivers a solid kick to your workout routine. As a fitness
                    enthusiast,
                    I'm
                    always on the lookout for pre-workout supplements that can provide the necessary energy and
                    focus to
                    maximize my gym sessions. Disorder White Snow does not disappoint in that aspect. <br><br>

                    The first thing that caught my attention was the eye-catching packaging. The sleek design and
                    white
                    color scheme gave it a modern and clean look. It definitely stood out among other pre-workout
                    options on
                    the shelf.
                    Now, let's talk about the effects. Disorder White Snow Pre Workout contains a powerful blend of
                    ingredients that aims to enhance energy, focus, and endurance. And it does deliver on its
                    promises.
                    Within minutes of consuming it, I experienced a noticeable surge in energy levels. I felt more
                    alert
                    and
                    ready to tackle my workout with intensity.<br><br>

                    The formula contains a potent combination of stimulants, including caffeine, which contributes
                    to
                    the
                    energizing effect. It's worth noting that if you're sensitive to caffeine or prefer a milder
                    boost,
                    you
                    might want to adjust your dosage accordingly.
                    What sets Disorder White Snow apart from some other pre-workouts I've tried is its ability to
                    sustain
                    the energy throughout my entire workout session. There was no sudden crash or jitters, which can
                    be
                    common with certain products. I was able to maintain focus and power through my exercises with a
                    sustained level of intensity.

                    The performance-enhancing ingredients in Disorder White Snow also helped improve my endurance
                    and
                    overall stamina. I found myself pushing through extra sets and repetitions without feeling
                    overly
                    fatigued.<br><br>

                    In conclusion, Disorder White Snow Pre Workout is a solid choice for individuals seeking an
                    intense
                    energy boost and enhanced focus during their workouts. It delivers on its promises and provides
                    a
                    sustained level of energy without the crash. With its sleek packaging and effective formula,
                    Disorder
                    White Snow is a valuable addition to any fitness enthusiast's supplement stack.</p>
            </div>
        </div>

        <div class="modalbox" id="protein"> <!-- Modal Popup when "Read More" is Clicked -->

            <div class="modalcontent"> <!-- Content of Review -->
                <div>
                    <h1>IMPACT WHEY ISOLATE</h1>
                    <span class="modalclose" onclick="closemodal('protein')">&times;</span>
                </div>
                <p><i>by MyProtein</i></p>
                <img src="images/protein2.png" alt="Photo of the protein product" class="modalphoto">
                <p class="modalreview">I recently had the opportunity to try out Disorder White Snow Pre Workout,
                    and I
                    must say, it's an
                    intense energy booster that delivers a solid kick to your workout routine. As a fitness
                    enthusiast,
                    I'm
                    always on the lookout for pre-workout supplements that can provide the necessary energy and
                    focus to
                    maximize my gym sessions. Disorder White Snow does not disappoint in that aspect. <br><br>

                    The first thing that caught my attention was the eye-catching packaging. The sleek design and
                    white
                    color scheme gave it a modern and clean look. It definitely stood out among other pre-workout
                    options on
                    the shelf.
                    Now, let's talk about the effects. Disorder White Snow Pre Workout contains a powerful blend of
                    ingredients that aims to enhance energy, focus, and endurance. And it does deliver on its
                    promises.
                    Within minutes of consuming it, I experienced a noticeable surge in energy levels. I felt more
                    alert
                    and
                    ready to tackle my workout with intensity.<br><br>

                    The formula contains a potent combination of stimulants, including caffeine, which contributes
                    to
                    the
                    energizing effect. It's worth noting that if you're sensitive to caffeine or prefer a milder
                    boost,
                    you
                    might want to adjust your dosage accordingly.
                    What sets Disorder White Snow apart from some other pre-workouts I've tried is its ability to
                    sustain
                    the energy throughout my entire workout session. There was no sudden crash or jitters, which can
                    be
                    common with certain products. I was able to maintain focus and power through my exercises with a
                    sustained level of intensity.

                    The performance-enhancing ingredients in Disorder White Snow also helped improve my endurance
                    and
                    overall stamina. I found myself pushing through extra sets and repetitions without feeling
                    overly
                    fatigued.<br><br>

                    In conclusion, Disorder White Snow Pre Workout is a solid choice for individuals seeking an
                    intense
                    energy boost and enhanced focus during their workouts. It delivers on its promises and provides
                    a
                    sustained level of energy without the crash. With its sleek packaging and effective formula,
                    Disorder
                    White Snow is a valuable addition to any fitness enthusiast's supplement stack.</p>
            </div>
        </div>

        <div class="modalbox" id="meal"> <!-- Modal Popup when "Read More" is Clicked -->

            <div class="modalcontent"> <!-- Content of Review -->
                <div>
                    <h1>BEEF STROGANOFF</h1>
                    <span class="modalclose" onclick="closemodal('meal')">&times;</span>
                </div>
                <p><i>by My Muscle Chef</i></p>
                <img src="images/beefstroganoff2.jpeg" alt="Photo of the meal" class="modalphoto">
                <p class="modalreview">As a busy individual with a focus on maintaining a healthy and balanced diet, I
                    recently had the pleasure of trying My Muscle Chef's Beef Stroganoff, and I must say it exceeded my
                    expectations. This review aims to highlight the deliciousness and convenience of this particular
                    meal.
                    <br><br>
                    One of the standout features of My Muscle Chef's Beef Stroganoff is its rich and flavorful taste.
                    The tender beef pieces are complemented by a savory and creamy sauce, creating a delectable
                    combination. The flavors are well-balanced, and the dish has a satisfying depth that leaves you
                    craving more. It's evident that the chefs behind this meal have put thought and effort into creating
                    a mouthwatering experience.
                    <br><br>
                    Another notable aspect of My Muscle Chef's Beef Stroganoff is its convenience. The meal comes
                    pre-packaged, making it an ideal option for those with a busy lifestyle or limited time for meal
                    preparation. The individual portions are ready to heat and serve, allowing you to enjoy a wholesome
                    and satisfying meal within minutes. This convenience factor is a significant advantage, especially
                    for individuals who prioritize nutritious and convenient options.
                    <br><br>
                    The quality of ingredients used in My Muscle Chef's Beef Stroganoff is commendable. The beef is
                    tender and flavorful, showcasing its high quality. The dish also contains a generous portion of
                    vegetables, such as mushrooms and onions, which add a pleasant texture and additional flavor to the
                    overall experience. Knowing that the meal is crafted with wholesome ingredients provides peace of
                    mind regarding its nutritional value.
                    <br><br>
                    Speaking of nutrition, My Muscle Chef's Beef Stroganoff strikes a good balance between taste and
                    healthiness. It provides a good source of protein, essential for muscle recovery and satiety, while
                    keeping the fat and calorie content in check. This makes it an excellent option for those seeking a
                    balanced meal that aligns with their fitness or weight management goals.
                    <br><br>
                    One minor drawback worth mentioning is the portion size, which may feel slightly small for
                    individuals with a larger appetite. However, it's important to note that My Muscle Chef offers a
                    range of meal options, allowing you to choose from various portion sizes to suit your individual
                    needs.
                    <br><br>
                    In conclusion, My Muscle Chef's Beef Stroganoff is a delectable and convenient choice for those
                    looking to enjoy a flavorful and satisfying meal without compromising their health and nutrition
                    goals. With its impressive taste, high-quality ingredients, and ease of preparation, it stands as a
                    standout option in the realm of pre-packaged meals. Whether you're a fitness enthusiast or simply a
                    busy individual seeking a delicious and hassle-free dining experience, My Muscle Chef's Beef
                    Stroganoff is a delightful choice.
                </p>
            </div>
        </div>

        <div class="productreviewrow"> <!-- A row for product review boxes (3 in a row) -->

            <div class="productreviewbox"> <!-- Product Review Box -->
                <h2>ULTRABOOST</h2>
                <p><i>by Adidas</i></p>
                <div class="productphoto">
                    <img src="images/UB.jpg" alt="Photo of the ultraboost" class="productreviewphoto">
                </div>
                <div class="comingSoon"> <!-- Coming Soon Overlay -->
                    <h1>PRODUCT REVIEW COMING SOON</h1>
                </div>
            </div>

            <div class="productreviewbox"> <!-- Product Review Box -->
                <h2>VITAMIN D</h2>
                <p><i>by California Gold Nutrition</i></p>
                <div class="productphoto">
                    <img src="images/vitD.jpeg" alt="Photo of the Vitamin D" class="productreviewphoto">
                </div>
                <div class="comingSoon"> <!-- Coming Soon Overlay -->
                    <h1>PRODUCT REVIEW COMING SOON</h1>
                </div>
            </div>

            <div class="productreviewbox"> <!-- Product Review Box -->
                <h2>BCAA</h2>
                <p><i>by Nutricost Performance</i></p>
                <div class="productphoto">
                    <img src="images/BCAA.jpg" alt="Photo of the BCAA" class="productreviewphoto">
                </div>
                <div class="comingSoon"> <!-- Coming Soon Overlay -->
                    <h1>PRODUCT REVIEW COMING SOON</h1>
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