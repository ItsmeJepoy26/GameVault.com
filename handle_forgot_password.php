<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $secret_code = $_POST['secret_code'];

    if (!empty($username) && !empty($secret_code)) {
        // Verify username and secret code
        $query = "SELECT * FROM users WHERE username = '$username' AND secret_code = '$secret_code' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Secret code matches, allow password reset
            $_SESSION['reset_username'] = $username;
            header("Location: reset_password.php");
            die;
        } else {
            echo "Invalid username or secret code!";
        }
    } else {
        echo "Please enter valid information!";
    }
}
?>
