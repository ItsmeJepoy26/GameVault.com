<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (!isset($_SESSION['reset_username'])) {
        header("Location: forgot_password.php");
        die;
    }

    if (!empty($new_password) && !empty($confirm_password) && $new_password === $confirm_password) {
        $username = $_SESSION['reset_username'];
        $query = "UPDATE users SET password = '$new_password' WHERE username = '$username'";
        mysqli_query($con, $query);

        // Unset the session variable
        unset($_SESSION['reset_username']);

        header("Location: login.php");
        die;
    } else {
        echo "Passwords do not match!";
    }
}
?>
