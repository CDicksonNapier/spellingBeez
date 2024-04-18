<!-- Parents page  -->
<section id="parentsHome">
    <!-- Bootstrap Container - for scaling  -->
    <div class="container-fluid">
        <!-- Main banner for the parents page  -->
        <div class="pHome-banner">
            <!-- Image for the banner - handled in CSS  -->
            <div class="img-block"></div>
            <!-- Text for the banner  -->
            <div class="banner-text">
                <h1>Fun & educational for your kid, peace of mind knowing they are learning.</h1>
                <!-- <p class="small-text">With lots of games and books that will challenge and stimulate your little ones and rewards them. </p> -->
                <!-- Link to the accounts page  -->
                <a href="accounts.php" class="startLearning">Start Learning Now</a>
            </div>
        </div>
        <!-- Some text to break the page up  -->
        <h2 class="screen-time-header">Screen time that is actually good for your child</h2>
        <h3 class="screen-time-paragraph">Carefully curated, high level of detail and completely fun and engaging games & books that will keep your child entertained and learning. </h3>
    </div>
</section>
<!-- Second Section Accordian menu for talking points -->
<section id="parentsTalkingPoints">
    <!-- bootstrap container for scaling -->
    <div class="container-fluid">
        <!-- Tab menu only shows on larger screens 1024 and up -->
        <div class="wrapper">
            <!-- Radio buttons - will show like tabs  -->
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <div class="tabs">
                <label class="tab" id="one-tab" for="one">Detailed</label>
                <label class="tab" id="two-tab" for="two">Curated</label>
                <label class="tab" id="three-tab" for="three">Engaging</label>
            </div>
            <!-- The main panels -->
            <div class="panels">
                <!-- Panel one - detailed -->
                <div class="panel" id="one-panel">
                    <div class="panel-block">
                        <!-- Text block for the panel  -->
                        <div class="panel-textBlock">
                            <div class="panel-title">Detailed</div>
                            <p>Kids will only see books and games selected and aimed for their age and reading level.</p>
                            <!-- Buttons to see books and games - books page doesnt work just yet-->
                            <div class="buttons-holder">
                                <button id="seeBooks" onclick="window.location.href ='books.php';">See Books</button>
                                <button id="seeGames" onclick="window.location.href ='gameList.php';">See Games</button>
                            </div>
                        </div>
                        <!-- Image block for the panel  handled in css -->
                        <div class="panel-imgBlock1"></div>
                    </div>
                </div>
                <div class="panel" id="two-panel">
                    <div class="panel-block">
                        <!-- Text -->
                        <div class="panel-textBlock">
                            <div class="panel-title">Curated</div>
                            <p>Kids will only see books and games selected and aimed for their age and reading level.</p>
                            <!-- Buttons to see books and games - books page doesnt work just yet-->
                            <div class="buttons-holder">
                                <button id="seeBooks" onclick="window.location.href ='books.php';">See Books</button>
                                <button id="seeGames" onclick="window.location.href ='gameList.php';">See Games</button>
                            </div>
                        </div>
                        <!-- Image block for the panel  handled in css -->
                        <div class="panel-imgBlock2"></div>
                    </div>
                </div>

                <div class="panel" id="three-panel">
                    <div class="panel-block">
                        <!-- Text -->
                        <div class="panel-textBlock">
                            <div class="panel-title">Engaging</div>
                            <p>Fun and engaging books and games that will entertain parents and children alike.</p>
                            <!-- Buttons to see books and games - books page doesnt work just yet-->
                            <div class="buttons-holder">
                                <button id="seeBooks" onclick="window.location.href ='books.php';">See Books</button>
                                <button id="seeGames" onclick="window.location.href ='gameList.php';">See Games</button>
                            </div>
                        </div>
                        <!-- Image block for the panel  handled in css -->
                        <div class="panel-imgBlock3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards only for smaller Screen 768 and lower -->
        <div class="accordian-cards">
            <!-- Seperate card -->
            <div class="accordian-card">
                <!-- Image block for the card handled in CSS -->
                <div class="accordian-img-block1"></div>
                <!-- Text block for the card -->
                <div class="accordian-textBlock">
                    <h4>Detailed</h4>
                    <p>Kids will only see books and games selected and aimed for their age and reading level. </p>
                    <!-- Buttons to see books and games - books page doesnt work just yet-->
                    <div class="buttons-holder">
                        <button id="seeBooks" onclick="window.location.href ='books.php';">See Books</button>
                        <button id="seeGames" onclick="window.location.href ='gameList.php';">See Games</button>
                    </div>
                </div>
            </div>
            <div class="accordian-card">
                <!-- Image for the card -->
                <div class="accordian-img-block2"></div>
                <!-- Text for the card -->
                <div class="accordian-textBlock">
                    <h4>Curated</h4>
                    <p>Kids will only see books and games selected and aimed for their age and reading level.
                    </p>
                    <!-- Buttons to see books and games - books page doesnt work just yet-->
                    <div class="buttons-holder">
                        <button id="seeBooks" onclick="window.location.href ='books.php';">See Books</button>
                        <button id="seeGames" onclick="window.location.href ='gameList.php';">See Games</button>
                    </div>
                </div>
            </div>
            <div class="accordian-card">
                <!-- Image for the card -->
                <div class="accordian-img-block3"></div>
                <!-- Text for the card -->
                <div class="accordian-textBlock">
                    <h4>Engaging</h4>
                    <p>Fun and engaging books and games that will entertain parents and children alike.</p>
                    <!-- Buttons to see books and games - books page doesnt work just yet-->
                    <div class="buttons-holder">
                        <button id="seeBooks" onclick="window.location.href ='books.php';">See Books</button>
                        <button id="seeGames" onclick="window.location.href ='gameList.php';">See Games</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 3 "Control" -->
<section id="parentsControl">
    <!-- Full Width block out side of the bootstrap container  -->
    <div class="plainBlock">
        <!-- Text block for the control section  -->
        <div class="text">
            <h3>Your in control!</h3>
            <p> With the parents dashboard, track your child’s progress and keep up to date with their rewards.</p>
        </div>
    </div>
   
    <!-- bootstrap container for scaling -->
    <div class="container-fluid">
        <!-- Cards for the control section  -->
        <div class="parents-control-list">
            <!-- Card 1 -->
            <div class="control-card">
                <!-- Image block for the card  -->
                <div class="control-card-img">
                    <!-- Image handled in CSS  -->
                    <div class="imgBlock1"></div>
                </div>
                <!-- Text block for the card  -->
                <div class="text-block">
                    <h4>Manage Profiles</h4>
                    <p>Make profiles for your child, choose an avatar from our stock graphics or upload your own. You can keep track of progress here.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="control-card">
                <!-- Image block for the card  -->
                <div class="control-card-img">
                    <!-- Image handled in CSS  -->
                    <div class="imgBlock2"></div>
                </div>
                <!-- Text block for the card  -->
                <div class="text-block">
                    <h4>Track Progress</h4>
                    <p>In your accounts page you can keep track of what games they have played and how they are doing.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="control-card">
                <!-- Image block for the card  -->
                <div class="control-card-img">
                    <!-- Image handled in CSS  -->
                    <div class="imgBlock3"></div>
                </div>
                <!-- Text block for the card  -->
                <div class="text-block">
                    <h4>View Rewards</h4>
                    <p>You can also view points and exchange them for fun rewards such as stickers, books and much more.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="control-card">
                <!-- Image block for the card  -->
                <div class="control-card-img">
                    <!-- Image handled in CSS  -->
                    <div class="imgBlock4"></div>
                </div>
                <!-- Text block for the card  -->
                <div class="text-block">
                    <h4>Read & Play Anywhere</h4>
                    <p>We’ve made this site and app so that the games and books can be played and read any where on any device. </p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="control-card">
                <!-- Image block for the card  -->
                <div class="control-card-img">
                    <!-- Image handled in CSS  -->
                    <div class="imgBlock5"></div>
                </div>
                <!-- Text block for the card  -->
                <div class="text-block">
                    <h4>Help & Choose Games</h4>
                    <p>Your in control! While we make suggestions of what games your little one can play, you can also pick and chose games. </p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="control-card">
                <!-- Image block for the card  -->
                <div class="control-card-img">
                    <!-- Image handled in CSS  -->
                    <div class="imgBlock6"></div>
                </div>
                <!-- Text block for the card  -->
                <div class="text-block">
                    <h4>Join in on the fun!</h4>
                    <p>We find that cooperation is key and actively encourage parents to play along side their children. Kids learn better when parents help.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave SVG for the bottom of the section. Only appears on smaller screens.  -->
  
</section>
<!-- Section 4 "Rewards" -->
<section id="rewards">
    <!-- Bootstrap container for scaling  -->
    <div class="container-fluid">
        <!-- Block for the rewards section  -->
        <div class="rewarding-Block">
            <!-- Text block for the rewards section  -->
            <div class="text-block">
                <h2>We make learning words fun and rewarding!</h2>
            </div>
        </div>
        <!-- Tabs for larger screen sizes 1024px and higher  -->
        <div class="wrapperTwo">
            <input class="radio" id="four" name="group" type="radio" checked>
            <input class="radio" id="five" name="group" type="radio">
            <input class="radio" id="six" name="group" type="radio">
            <div class="tabs">
                <label class="tab" id="four-tab" for="four">Games</label>
                <label class="tab" id="five-tab" for="five">Books</label>
                <label class="tab" id="six-tab" for="six">Rewards</label>
            </div>
            <div class="panelsTwo">
                <!-- Panel for the second tabs -->
                <div class="panel-two" id="four-panel">
                    <div class="panel-block-two">
                        <!-- Text block for the panel  -->
                        <div class="panel-two-textBlock">
                            <div class="panel-title">Games</div>
                            <p>Carefully curated games ranging from a basic level and progressively gets harder as your little one progresses.</p>
                        </div>
                        <!-- Image block for the panel  handled in css -->
                        <div class="panel-imgBlock4"></div>
                    </div>
                </div>
                <div class="panel-two" id="five-panel">
                    <div class="panel-block-two">
                        <!-- Text block for the panel  -->
                        <div class="panel-two-textBlock">
                            <div class="panel-title">Books</div>
                            <p>With a wide choice books to choose that will help your child fall in love with reading. </p>
                        </div>
                        <!-- Image block for the panel  handled in css -->
                        <div class="panel-imgBlock5"></div>
                    </div>
                </div>
                <div class="panel-two" id="six-panel">
                    <div class="panel-block-two">
                        <!-- Text block for the panel  -->
                        <div class="panel-two-textBlock">
                            <div class="panel-title">Badges </div>
                            <p>Fun Badges and rewards for playing through levels or reading chapters of books that can be collected and viewed at any time.</p>
                        </div>
                        <!-- Image block for the panel  handled in css -->
                        <div class="panel-imgBlock6"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards for smaller Screens 768px and lower -->
        <div class="accordian-cards-two">
            <!-- Single Card 1  -->
            <div class="accordian-two-card">
                <!-- Image block for the card  -->
                <div class="accordian-two-img-block1"></div>
                <!-- Text block for the card  -->
                <div class="accordian-two-textBlock">
                    <h3>Games</h3>
                    <p>Carefully curated games ranging from a basic level and progressively gets harder as your little one progresses. </p>
                </div>
            </div>
            <!-- Single Card 2  -->
            <div class="accordian-two-card">
                <!-- Image block for the card  -->
                <div class="accordian-two-img-block2"></div>
                <!-- Text block for the card  -->
                <div class="accordian-two-textBlock">
                    <h3>Reading</h3>
                    <p>With books to choose that will help your child fall in love with reading. </p>
                </div>
            </div>
            <!-- Single Card 3  -->
            <div class="accordian-two-card">
                <!-- Image block for the card  -->
                <div class="accordian-two-img-block3"></div>
                <!-- Text block for the card  -->
                <div class="accordian-two-textBlock">
                    <h3>Badges</h3>
                    <p>Fun Badges and rewards for playing through levels or reading chapters of books that can be collected and viewed at any time.</p>
                </div>
            </div>
        </div>
</section>
<!-- End of the Parents Page -->