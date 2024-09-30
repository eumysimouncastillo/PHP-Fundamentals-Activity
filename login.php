<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (isset($_SESSION['username'])) {
        $_SESSION['login_error'] = $_SESSION['username'] . " is already logged in. Wait for the user to logout first.";
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['hashed_password'] = $hashed_password;
    }
}

header("Location: index.php");
exit;
?>
