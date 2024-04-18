<?php
// Here check whether the user got to this page by clicking the proper login button.
if (isset($_POST['submit'])) {

  // Include the connection script so it can be used later.
  
  require 'dbh.inc.php';

  // Grab all the data which passed from the signup form so it can be used later.
  $username = $_POST['username'];
  $password = $_POST['pwd'];

  // Then perform a bit of error handling to make sure catch any errors made by the user. Here you can add ANY error checks you might think of! I'm just checking for a few common errors in this tutorial so feel free to add more. If do run into an error need to stop the rest of the script from running, and take the user back to the login form with an error message.

  // Check for any empty inputs. (PS: This is where most people get errors because of typos! Check that your code is identical to mine. Including missing parenthesis!)
  if (empty($username) || empty($password)) {
    header("Location: ../signIn.php?error=emptyinput".$mailuid);
    exit();
  }
  else {

    // If got to this point, it means the user didn't make an error! :)

    // Next need to get the password from the user in the database that has the same username as what the user typed in, and then need to de-hash it and check if it matches the password the user typed into the login form.

    // Connect to the database using prepared statements which work by sending SQL to the database first, and then later fill in the placeholders by sending the users data.
    $sql = "SELECT * FROM users WHERE username=? OR email=?;";
    // Initialize a new statement using the connection from the dbh.inc.php file.
    $stmt = mysqli_stmt_init($conn);
    // Then prepare the SQL statement AND check if there are any errors with it.
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error send the user back to the signup page.
      header("Location: ../signIn?error=sqlerror");
      exit();
    }
    else {

      // If there is no error then continue the script!

      // Next need to bind the type of parameters expect to pass into the statement, and bind the data from the user.
      mysqli_stmt_bind_param($stmt, "ss", $username, $username);
      // Then execute the prepared statement and send it to the database!
      mysqli_stmt_execute($stmt);
      // And get the result from the statement.
      $result = mysqli_stmt_get_result($stmt);
      // Then store the result into a variable.
      if ($row = mysqli_fetch_assoc($result)) {
        // Then match the password from the database with the password the user submitted. The result is returned as a boolean.
        $pwdCheck = password_verify($password, $row['pwd']);
        // If they don't match then create an error message!
        if ($pwdCheck == false) {
          // If there is an error send the user back to the signup page.
          header("Location: ../signIn.php?error=wrongpwd");
          exit();
        }
        // Then if they DO match, then know it is the correct user that is trying to log in!
        else if ($pwdCheck == true) {

          // Next need to create session variables based on the users information from the database. If these session variables exist, then the website will know that the user is logged in.

          // Now that have the database data, need to store them in session variables which are a type of variables that can use on all pages that has a session running in it.
          // This means NEED to start a session HERE to be able to create the variables!
          session_start();
          // And NOW create the session variables.
      
            $_SESSION['userId'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['pwd'];
          
          // Now the user is registered as logged in and can now take them back to the front page! :)
          header("Location: ../accounts.php?login=success");
          exit();
        }
      }
      else {
        header("Location: ../signIn.php?login=wronguidpwd");
        exit();
      }
    }
  }
  // Then close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, send them back to the signup page.
  header("Location: ../sign-up.php");
  exit();
}
