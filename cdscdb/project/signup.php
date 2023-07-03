<?php
include_once 'header.php';
?>
<section class="signup">

    <div class="signup-container">
        <div class="signupform" id="id-1-signup">
            <img src="/cdscdb/project/includes/backgroundpicture/signup-pic.jpg" alt="">
        </div>
        <div class="signupform" id="id-2-signup">
            <div class="signup-text">
                <h4>Sign up Form</h4>
            </div>
            <form action="includes/signup-inc.php" class="formforsignup" method="post">
                <label for="name">Enter name:</label>
                <input type="text" name="name" placeholder="">
                <br>
                <label for="email">Enter email:</label>
                <input type="text" name="email" placeholder="">
                <br>
                <label for="uid">Enter username:</label>
                <input type="text" name="uid" placeholder="">
                <br>
                <label for="pwd">Enter password:</label>
                <input type="password" name="pwd" placeholder="">
                <br>
                <label for="pwdrepeat">Repeat password:</label>
                <input type="password" name="pwdrepeat" placeholder="">
                <br>
                <button type="submit" name="submit" class="btnsignupsubmit">Sign up</button>
                <div class="result">
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyinput') {
                            echo '<p>Fill in the fields!</p>';
                        } else if ($_GET['error'] == 'invaliduid') {
                            echo '<p>Choose a proper username!</p>';
                        } else if ($_GET['error'] == 'invalidemail') {
                            echo '<p>Choose a proper email!</p>';
                        } else if ($_GET['error'] == 'passworddontmatch') {
                            echo "<p>Passwords doesn't match</p>";
                        } else if ($_GET['error'] == 'usernametaken') {
                            echo '<p>Username already taken!</p>';
                        } else if ($_GET['error'] == 'none') {
                            echo '<p>You have signup up!</p>';
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

</section>

<?php
include_once 'footer.php';
?>