<?php
include_once 'header.php';
?>
<section class="login">
    <div class="login-container">

        <div class="text-1" id="id-1-login">
            <img src="/cdscdb/project/includes/backgroundpicture/login-pic.jpg" alt="log-in picture">
        </div>
        <div class="loginform" id="id-2-login">
            <div class="login-text">
                <h4>Login Form</h4>
            </div>
            <form action="/cdscdb/project/includes/login-inc.php" class="formforlogin" method="post">
                <label for="uid">Enter username:</label>
                <input type="text" name="uid" placeholder="">
                <br>
                <label for="pwd">Enter password:</label>
                <input type="password" name="pwd" placeholder="">
                <br>
                <button type="submit" name="submit" class="btnloginsubmit">Enter</button>
                <div class="login-result">
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyinput') {
                            echo '<p>Fill in the fields!</p>';
                        } else if ($_GET['error'] == 'wronglogin') {
                            echo '<p>Incorrect login information</p>';
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