<?php
// Making sure the user got to this page by clicking the submit button.
if (isset($_POST['submit'])) {

//  connect to the database using the dbh.inc.php file.
  require 'dbh.inc.php';

  //  grab all the data which is passed from the signup form to use it later.
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['confirm_pwd'];

  // starting with error handlers to check for any errors in the signup form.

  // We check for any empty inputs. (PS: This is where most people get errors because of typos! Check that your code is identical to mine. Including missing parenthesis!)
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../sign-up.php?error=emptyfields");
    exit();
  }
  // We check for an invalid username AND invalid e-mail.
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../sign-up.php?error=invalidusernameemail");
    exit();
  }
  // We check for an invalid username. In this case ONLY letters and numbers.
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../sign-up.php?error=invalidusername=".$email);
    exit();
  }
  // We check for an invalid e-mail.
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../sign-up.php?error=invalidemail");
    exit();
  }
  // We check if the repeated password is NOT the same.
  else if ($password !== $passwordRepeat) {
    header("Location: ../sign-up.php?error=passwordcheck");
    exit();
    // Chris: I added this to check if the password is at least 8 characters long.
  }else if (strlen($password) < 8) {
    header("Location: ../sign-up.php?error=passwordlength");
    exit();
    // Chris: I added this to check if the password contains at least one uppercase letter and one number.
  }else if (!preg_match("/^(?=.*[A-Z])(?=.*\d).+$/", $password)){
    header("Location: ../sign-up.php?error=passwordstrength");
    exit();
  }
  else {

    // Need to check if the username is already taken. Creating a prepared statement.

    //  Creating an sql statement to check if the username already exists in the database.
    $sql = "SELECT username FROM users WHERE username=?;";
    // create a prepared statement.
    $stmt = mysqli_stmt_init($conn);
    //  prepare the SQL statement AND check if there are any errors with it.
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error, send the user back to the signup page.
      header("Location: ../sign-up.php?error=sqlerror");
      exit();
    }
    else {
      // Next, bind the type of parameters we expect to pass into the statement, and bind the data from the user.      
      mysqli_stmt_bind_param($stmt, "s", $username);
      // execute the prepared statement and send it to the database!
      mysqli_stmt_execute($stmt);
      // store the result from the statement.
      mysqli_stmt_store_result($stmt);
      //  get the number of result we received from our statement. This tells us whether the username already exists or not!
      $resultCount = mysqli_stmt_num_rows($stmt);
      // close the prepared statement!
      mysqli_stmt_close($stmt);
      //  check if the username exists.
      if ($resultCount > 0) {
        header("Location: ../sign-up.php?error=usertaken");
        exit();
      }
      else {
        // If the user got to this point, it means they didn't make an error! :)

        // Next thing to do is to prepare the SQL statement that will insert the users info into the database. 

        
        $sql = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?);";
        // initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        //prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error, send the user back to the signup page.
          header("Location: ../sign-up.php?error=sqlerror");
          exit();
        }
        else {

          // If there is no error then we continue the script!

         
          // The hashing method I am going to show here, is the LATEST version and will always will be since it updates automatically. DON'T use md5 or sha256 to hash, these are old and outdated!
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          // Next bind the type of parameters we expect to pass into the statement, and bind the data from the user.
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          // execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly send the user back to the signup page with a success message!
          header("Location: ../signIn.php?signup=success-signup");
          exit();

        }
      }
    }
  }
  // close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, send them back to the signup page.
  header("Location: ../sign-up.php");
  exit();
}
