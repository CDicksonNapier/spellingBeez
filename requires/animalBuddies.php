<!-- The game screen - this is repeated through out the other game pages.  -->
<section id="gameWindow">
    <div class="container-fluid">
        <!-- The game panel- the games are created in unity using WEBGL and hosted on github pages  -->
        <div class="window">
            <div class="tagline">
                <h1 class="gameTag">Can you name all the animals?</h1>
            </div>
            <!-- The github link to the game -->
            <iframe src="https://cdicksonnapier.github.io/animalBuddies/" class="game"></iframe>
            <h3>Can you find these words?</h3>
            <!-- List of words to hint the user as to what to look for -->
            <ul class="wordsToFind">
                <li>Lion</li>
                <li>Tiger</li>
                <li>Frog</li>
                <li>Parrot</li>
                <li>Monkey</li>
                <li>Bird</li>
                <li>Toucan</li>
                <li>Giraffe</li>
            </ul>
        </div>
        <!-- If the screen is lower that 475px then the game wont load and display the following text -->
        <h2 class="incompatableText">Sorry but this game is not compatable with your device. </h2>
    </div>
</section>