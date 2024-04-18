<!-- Sign up form all code is handled in signup.inc.php -->
<section class="signup">
  <div class="main">
    <div class="signup-content">
      <?php
      // create an error message if the user made an error trying to sign up.
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
          echo '<p class="error">Fill in all fields!</p>';
        } else if ($_GET["error"] == "invalidusernameemail") {
          echo '<p class="error">Invalid username and e-mail!</p>';
        } else if ($_GET["error"] == "invalidusername") {
          echo '<p class="error">Invalid username!</p>';
        } else if ($_GET["error"] == "invalidemail") {
          echo '<p class="error">Invalid e-mail!</p>';
        } else if ($_GET["error"] == "passwordcheck") {
          echo '<p class="error">Your passwords do not match!</p>';
        } else if ($_GET["error"] == "usertaken") {
          echo '<p class="error">Username is already taken!</p>';
        } else if ($_GET["error"] == "passwordlength") {
          echo '<p class="error">Password must be atleast 8 characters!</p>';
        } else if ($_GET["error"] == "passwordstrength") {
          echo '<p class="error">Password must contain at least one uppercase letter and one number!</p>';
        }
      }
      // create a success message if the new user was created.

      ?>
      <!-- The start of the form links to the signup.inc.php -->
      <form class="signup-form" action="includes/signup.inc.php" method="POST">
        <h2>Create an Account</h2>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="pwd" id="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control">
        </div>
        <p class="registered">Already a member? <a href="signIn.php">Login</a></p>
        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
      </form>
      <!-- Reasons to signup block -->
      <div class="reasonsBlock">
        <h2 >Why should you register?</h2>
        <ul>
          <li>Manage your kids screen time.</li>
          <li>Track Progress.</li>
          <li>Constantly updating games and books.</li>
          <li>Track Rewards.</li>
        </ul>
      </div>
    </div>
  </div>
</section>