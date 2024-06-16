<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $secret_code = $_POST['secret_code'];

    if(!empty($username) && !empty($password) && !empty($secret_code) && !is_numeric($username)) {
        $query =  "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password) {
                // Check if the provided secret code matches
                if($user_data['secret_code'] === $secret_code) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['username'] = $user_data['username']; // Store the username in the session
                    header("Location: index.php");
                    die;
                } else {
                    echo "<script>alert('Incorrect secret code!');</script>"; // Display a pop-up message for incorrect secret code
                }
            } else {
                echo "<script>alert('Incorrect password!');</script>"; // Display a pop-up message for incorrect password
            }
        } else {
            echo "<script>alert('User not found!');</script>"; // Display a pop-up message for user not found
        }
    } else {
        echo "<script>alert('Please enter valid information!');</script>"; // Display a pop-up message for invalid information
    }
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="msapplication-TileColor" content="#2b2e33">
    <meta name="theme-color" content="#ffffff">
    <title>Log in to GameVault</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.php">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#646464">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-min5.css">
    <link rel="stylesheet" href="assets/css/style-min3.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'">

    <!-- Custom Styles -->
    <style>
        .bd-placeholder-img { font-size: 1.125rem; text-anchor: middle; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none }
        @media (min-width: 768px) { .bd-placeholder-img-lg { font-size: 3.5rem } }
        .bg-image { background: url("assets/images/ftg/freetogame-image.jpg"); background-position: center }
        .login { margin-top: 20px }
        .login .card { border-radius: 10px; }
        .login .card-body { padding: 40px; }
    </style>
</head>
<body>
    
    <!-- Main Content -->
    <div class="main-cont">
        <div class="container p-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login card o-hidden border-0 shadow-lg">
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Log in to GameVault</h1>
                            </div>
                            <form class="user" method="post" action="login.php">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user deep-dark" placeholder="Username or Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control form-control-user deep-dark" placeholder="Password" required>
                                    <span class="input-group-addon">
                                        <i class="fas fa-eye" id="togglePassword" onclick="togglePasswordVisibility('password')"></i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="secret_code" id="secretCode" class="form-control form-control-user deep-dark" placeholder="Secret Code" required>
                                    <span class="input-group-addon">
                                        <i class="fas fa-eye" id="toggleSecretCode" onclick="togglePasswordVisibility('secretCode')"></i>
                                    </span>
                                </div>
                                <input type="submit" name="submitButton" class="btn btn-primary btn-user btn-block" value="Login">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small a2" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <span class="small">Not a member yet? </span><a class="small a2" href="register.php"> Create Account <i class="fas fa-chevron-right small"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small deep-dark pt-3">
        <!-- Footer content here -->
    </footer>

    <!-- Script for toggling password visibility -->
    <script>
        function togglePasswordVisibility(fieldId) {
            var field = document.getElementById(fieldId);
            var icon = document.getElementById("toggle" + fieldId.charAt(0).toUpperCase() + fieldId.slice(1));
            
            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                field.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>