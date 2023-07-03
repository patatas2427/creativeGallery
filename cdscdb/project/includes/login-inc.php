<?php

if (isset($_POST['submit'])) {

    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];

    require_once 'dbh-inc.php';
    require_once 'function-inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header('Location: /cdscdb/project/login.php?error=emptyinput');
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header('Location: /cdscdb/project/home.php');
    exit();
}
