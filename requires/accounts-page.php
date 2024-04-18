<!-- Accounts page - I am still working on adding the features to this and will continue past the submission date -->
<?php
// starting the session to check if the user is logged in or not

require "includes/dbh.inc.php";
// If the user is not logged in then they will be redirected to the sign in page for example if they try to access the accounts page by typing the URL
if (!isset($_SESSION['username'])) {
    header("Location: signIn.php?error=notloggedin");
}
?>
<!-- Start of the accounts section.  -->
<section id="accounts">
    <!-- The content will show in a container- this will make massive use of bootstrap -->
    <div class="container light-style flex-grow container-p-y">
        <h2 class="accounts-title">
            Your Account
        </h2>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <!-- tabs  will display in a sidepanel style -->
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-light">
                        <a href="#account-general" class="list-group-item list-group-item-action active" data-toggle=list>General Account</a>
                        <a href="#games-played" class="list-group-item list-group-item-action " data-toggle=list>Games Played</a>
                        <a href="#points" class="list-group-item list-group-item-action " data-toggle=list>Points</a>
                        <a href="#change-pwd" class="list-group-item list-group-item-action " data-toggle=list>Change Password</a>
                        <a href="#delete-account" class="list-group-item list-group-item-action " data-toggle=list>Delete Account</a>
                        <a href="#logout" class="list-group-item list-group-item-action " data-toggle=list>Logout</a>
                    </div>
                </div>
                <!-- The content will display in the main panel when links are clicked in the side panel the main panel will change to suit what it is -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- Account panel  -->
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="static/images/aliens.png" alt="Dino" class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <!-- Giving the users the opportunity to change their sign up details and store them to the DB -->
                            <div class="card-body pb-2">
                                <form action="userUpdate.inc.php" method="post">
                                      <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" name="username">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="fullName">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" name="email">
                                </div>
                                <br>
                                <button name="submit" class="btn btn-danger">Change Password </button>
                                </form>
                            </div>
                        </div>
                        <!-- Games Played Panel -->
                        <div class="tab-pane fade  " id="games-played">
                            <div class="card-body pb-2">
                                <!-- Eventually this will link to the games and store whenever the user plays a game  -->
                                <h2 class="accounts-header">Games Played</h2>
                                <p>This section is still being built. Soon you'll be able to see what games you have played and your favourite games.</p>
                            </div>
                        </div>
                        <!-- Points panel will add more to this eventually  -->
                        <div class="tab-pane fade" id="points">
                            <div class="card-body pb-2">
                                <!-- Eventually this will link to the games and store the points saved  -->
                                <h2 class="accounts-header">Your Points</h2>
                                <p>This section is still being built. Soon you'll be able to see what points you have earned from games and how to redeem them for rewards.</p>
                            </div>
                        </div>
                        <!-- Change the password  -->
                        <div class="tab-pane fade" id="change-pwd">
                            <div class="card-body pb-2">
                                <!-- The user will have the ability to change their password if they wish- eventually this will be added to the sign up page and confirm via email -->
                                <form action="updatePwd.inc.php" method="post">
                                   <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password"  name="pwd"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password"  name="newPwd"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" name="newPpwd" class="form-control">
                                </div>
                                <br>
                                <button name="submit" class="btn btn-danger">Change Password </button> 
                                </form>                                
                            </div>
                        </div>
                        <!-- Delete account  -->
                        <div class="tab-pane fade" id="delete-account">
                            <div class="card-body pb-2">
                                <!-- The user will be giving the opportunity to deleter their account should they want to  -->
                                <form action="includes/delete.inc.php" method="post">
                                  
                                <h2 class="accounts-header">Delete Account</h2>
                                <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                                
                                    <button name="submit" class="btn btn-danger">Delete Account</button>
                                </form>
                            </div>
                        </div>
                        <!-- Log out the user  -->
                        <div class="tab-pane fade" id="logout">
                            <div class="card-body pb-2">
                                <h2 class="accounts-header">Logout</h2>
                                <p>Are you sure you want to logout?</p>
                                <div class="btn-holder">
                                    <a href="includes/logout.inc.php" class="btn btn-danger">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Calling the Jquery to complete the transitions between the panels.  -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>