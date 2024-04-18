<!-- Description: Header for all pages -->
<!-- header info  -->
<?php
// targeting the database page to connect to the database and start the session
include 'includes/dbh.inc.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font awesome link for the icons -->
    <script src="https://kit.fontawesome.com/6f5b9ecf35.js" crossorigin="anonymous"></script>
    <!-- Css for all the pages - will be trimmed down -->
    <link rel="stylesheet" href="static/css/roots.css">
    <link rel="stylesheet" href="static/css/header.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/parents-style.css">
    <link rel="stylesheet" href="static/css/games.css">
    <link rel="stylesheet" href="static/css/gamesList.css">
    <link rel="stylesheet" href="static/css/forms.css">
    <link rel="stylesheet" href="static/css/gameswindow.css">
    <link rel="stylesheet" href="static/css/user-account.css">    
    <!-- Favicon  -->
    <link rel="shortcut icon" href="static/images/bee-icon.png" type="image/png">
    <!-- Dynamically Changing title -->
    <title><?php echo $title; ?> </title>
</head>

<body>
    <!-- Navigation header simple logo on the left menu on the right with hamburger menu when on smaller screens   -->
    <header>
        <!-- logo  -->
        <div class="logo">
            <a href="index.php">
                <img src="static/images/logo.png" alt="Spelling Bee Logo">
                <p class="homeBtn">home</p>
            </a>
        </div>
        <!-- Hamburger menu for smaller screens  -->
        <nav>
            <!-- Navigation for smaller screens was originally going to be on the side  -->
            <div id="nav" class="sidenav">          
                    <!-- Image originally was a working link but took it out  -->
                    <img src="static/images/logo.png" alt="Spelling Bee Logo">      
                <!-- Links  -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="parentsPage.php">Parents</a>
                <a href="games.php">Games</a>
                <a href="books.php">Books</a>
                <!-- Check to see if user is logged in or not - if they arent logged in button will be the sign in button -->
                <?php if (!isset($_SESSION['username'])) { ?>
                    <a class="accounts-Btn" href="signIn.php">Sign In</a>
                <?php } else { ?>
                    <!-- If they are logged in the accounts button will be available  -->
                    <a class="accounts-Btn" href="accounts.php">Accounts</a>
                <?php } ?>


            </div>
            <!-- Hamburger menu  Icon -->
            <span class="bgrMenu" onclick="openNav()">&#9776;</span>
        </nav>
    </header>
    <!-- Full Navigation for larger screens -->
    <div class="fullNav">
        <!-- Logo  -->
        <div class="logo">
            <!-- Image for the logo works as a back to home button -->
            <a href="index.php">
                <img src="static/images/logo.png" alt="Spelling Bee Logo">
                <p class="homeBtn">home</p>
            </a>
         </div>
        <!-- Full length navigation -->
        <nav class="full-Nav">
            <!-- Links  -->
            <a href="parentsPage.php">Parents</a>
            <a href="games.php">Games</a>
            <a href="books.php">Books</a>
            <!-- Check to see if user is logged in or not - if they arent logged in button will be the sign in button -->
            <?php if (!isset($_SESSION['username'])) { ?>
                <a class="accounts-full-Btn" href="signIn.php">Sign In</a>
            <?php } else { ?> 
                <!-- If they are logged in the accounts button will be available  -->
                <a class="accounts-full-Btn" href="accounts.php">Accounts</a>
            <?php } ?>
        </nav>
    </div>







    <!-- End of Navigation header simple logo on the left menu on the right with hamburger menu when on smaller screens   -->