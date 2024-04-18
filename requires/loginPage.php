<!-- Login Page - this is more the form all the sign in back end is handled through login.inc.php -->
<section class="login">
    <div class="main">
        <!-- Form start -->
        <div class="login-content">
            <!-- The form with the action to the login.inc.php -->
            <form class="login-form" action="includes/login.inc.php" method="POST">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="pwd" id="password" class="form-control">
                </div>
                <p class="registered">Not a member? <a href="sign-up.php">Sign Up</a></p>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
            <!-- Error messages  These are handled in the login.inc.php file and then returned here/-->
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "wronglogin") {
                    echo "<p class='error'>Fill in all fields!</p>";
                } else if ($_GET['error'] == "wronguidpassword") {
                    echo "<p class='error'>Your password is wrong!</p>";
                }
            }
            if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success-signup") {
                    echo "<p class='signup-success'>Signup successful!</p>";
                }
            }
            ?>
            <!-- Block to give reasons why the user should sign up/login  -->
            <div class="reasonsBlock">
                <h2>Why Sign In?</h2>
                <ul>
                    <li>Manage your kids accounts.</li>
                    <li>Track Progress.</li>
                    <li>Find new games to play.</li>
                    <li>Swap and earn rewards.</li>
                    <li>Connect with other parents.(Coming soon!)</li>
                </ul>
            </div>
        </div>
    </div>
</section>