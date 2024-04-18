<?php
// Check if the submit button is clicked
    session_start();
if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';

   
    $sql = "DELETE FROM users WHERE username = $username";
    $result = mysqli_query($conn, $sql);
    if($result){
        session_unset();
        session_destroy();
        header("Location: ../signIn.php?error=accountdeleted");
        exit();
    } else {
        header("Location: ../accounts.php?error=sqlerror");
        exit();
    }

}
?>