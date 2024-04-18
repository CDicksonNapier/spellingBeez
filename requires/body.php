<!-- Index Page Content -->
<!-- Broken Up into sections  -->
<!-- HOME Section- what users will first see when opening the webpage -->
<section id="home">
    <!-- Using a bootstrap container to manage mobile screen sizing  -->
    <div class="container-fluid">
        <!-- Home Page Banner  -->
        <div class="banner-home">
            <!-- The image block for the banner- the image is called in the css file -->
            <div class="banner-home-image-block">
                <div class="banner-image"></div> <!-- Image - called in css -->
            </div>
            <!-- The banner text with the link to the accounts page  -->
            <!-- The user will be referred back to the sign up/sign in page if they are not signed in or registered  -->
            <div class="home-banner-text">
                <h1>With books and games to help your little one read and write.</h1>
                <p>We have lots of books and games that will help your child not only read but pronounce the words that they see. </p>
                <!-- Link to the accounts page -->
                <a href="accounts.php" class="startLearningBtn">Start Learning Now</a>
            </div>
        </div>
        <!-- text block to break the page up a bit -->
        <h2>Ready to play some games? Here's our top picks</h2>
        <!-- a small list of games - this is done in a grid that will scale up and down with screen sizes -->
        <div class="game-Block">
            <!-- grid card -->
            <a href="nameThePlanets.php" class="card"></a>
            <a href="kitchenFun.php" class="card"></a>
            <a href="imaginationFun.php" class="card"></a>
            <a href="beachDay.php" class="card"></a>
            <a href="animalBuddies.php" class="card"></a>
            <div class="card"></div>
        </div>
        <!-- Link to the games list page -->
        <a href="gameList.php" class="start-playing-now-btn">Start Playing now</a>
    </div>
</section>
<!-- Second Section - Talking Points Section -->
<section id="talkingPoints">
    <!-- Bootstrap container  -->
    <div class="container-fluid">
        <!-- The main banner for this section  -->
        <div class="talkingPoints-banner">
            <!-- The text takes 50% of the banner -->
            <div class="talkingPoints-text">
                <h2>With different genres of games and books for all ages. </h2>
            </div>
            <!-- The image for the banner takes the other 50%  -->
            <div class="img-block"></div>
        </div>
        <!-- Text block to break up the page.  -->
        <h3>We help kids gain confidence with words and sounds. </h3>
        <!-- Cards - this shows what the website does and offers  -->
        <div class="talkingPoints-cards">
            <!-- Singular card holds an image and text  -->
            <div class="talkingPoints-card">
                <!-- The image for the card -->
                <div class="talkingPoint-image">
                    <!-- Image called in css -->
                    <div class="img-block1"></div>
                </div>
                <!-- Text -->
                <h4>Easy to digest words</h4>
                <p>Each game has easy to read and spell words that aims to challenge your little one. </p>
            </div>
            <!-- Singular card 2 holds an image and text  -->
            <div class="talkingPoints-card">
                <!-- The image for the card -->
                <div class="talkingPoint-image">
                    <!-- Image called in css -->
                    <div class="img-block2"></div>
                </div>
                <!-- Text -->
                <h4>Fun Visuals</h4>
                <p>All our games have fun hand drawn graphics from artists all around the world.
                </p>
            </div>
            <!-- Singular card 3 holds an image and text  -->
            <div class="talkingPoints-card">
                <!-- The image for the card -->
                <div class="talkingPoint-image">
                    <!-- Image called in css -->
                    <div class="img-block3"></div>
                </div>
                <!-- Text -->
                <h4>Rewards for playing</h4>
                <p>We’re constantly working on our rewards ranging from stickers to books. </p>
            </div>
        </div>
        <!-- Link to the accounts page -->
        <!-- check to see if user is logged in  -->
        <?php if (!isset($_SESSION['username'])) { ?>
            <!-- If they arent logged in the button will be the get started button -->
            <a href="accounts.php" class="getStarted">Get Started</a>
        <?php } else { ?>
            <!-- If they are logged in the button will be the accounts button -->
            <a href="accounts.php" class="getStarted">Accounts</a>
        <?php } ?>
    </div>
</section>
<!-- 3rd section Learning points -->
<section id="learningPoints">
    <!-- Bootstrap Container for scaling -->
    <div class="container-fluid">
        <!-- Main Hero image called in css -->
        <div class="hero"></div>
    </div>
</section>
<!-- Section 4 -Vocal Points display on a column small screen and row on larger screen. -->
<section id="vocalPointsOne">
    <!-- Bootstrap container for scaling -->
    <div class="container-fluid">
        <!-- Cards - this shows what the website offers  -->
        <div class="vocal-points-card-one">
            <!-- Image called in css  -->
            <div class="img1"></div>
            <!--   text -->
            <div class="text-block">
                <h2>Fun ways to learn words</h2>
                <p>With our games the words are displayed along side the pictures and by using their finger your child can learn how to write out the words they see!</p>
            </div>
        </div>
        <!-- Singular card 2 holds an image and text  -->
        <div class="vocal-points-card-two">
            <!-- Image called in css  -->
            <div class="img2"></div>
            <!--   text -->
            <div class="text-block">
                <h2>Learning tools</h2>
                <p>We’re currently working on adding a dictionary and thesaurus so you can learn what some words mean and how to use them in sentences. </p>
            </div>
        </div>
    </div>
</section>
<!-- Section 5 -Vocal Points 2 display on a column small screen and row on larger screen. -->
<section id="vocalPointsTwo">
    <!-- Bootstrap container for scaling -->
    <div class="container-fluid">
        <!-- Cards - this shows what the website offers  -->
        <div class="vocal-points-card-one">
            <!-- Image called in css  -->
            <div class="img3"></div>
            <!--   text -->
            <div class="text-block">
                <h2>Fun rewards for playing</h2>
                <p>Each game gives out rewards in the form of points, these points can be exchanged for stickers or books. More rewards will be added when available. </p>
            </div>
        </div>
        <!-- Singular card 2 holds an image and text  -->
        <div class="vocal-points-card-two">
            <!-- Image called in css  -->
            <div class="img4"></div>
            <!--   text -->
            <div class="text-block">
                <h2>Cute animated graphics</h2>
                <p>We work with artists from across the world to bring fun graphics which will make the games more interesting and engaging. </p>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section -->