<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2']; // Add this line to get confirm password
    $secret_code = $_POST['secret_code'];

    // Check if the username already exists
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_result = mysqli_query($con, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>var usernameExists = true;</script>";
    } else {
        if (!empty($username) && !empty($password) && !empty($password2) && !empty($secret_code) && !is_numeric($username)) {
            // Check if passwords match
            if ($password !== $password2) {
                echo "<script>alert('Passwords do not match!');</script>";
            } else {
                $user_id = random_num(10000);
                $query = "INSERT INTO users (user_id, username, password, secret_code) VALUES ('$user_id', '$username', '$password', '$secret_code')";
                mysqli_query($con, $query);

                // Redirect to login page
                header("Location: login.php");
                die;
            }
        } else {
            echo "<script>alert('Please enter some valid information!');</script>";
        }
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
    <title>Create My Account! - GameVault</title>

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
        .bg-register-image { background: url("assets/images/ftg/register.jpg"); background-position: center }
        .register { margin-top: 60px }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="main-cont">
        <div class="container p-lg-5">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="register card o-hidden border-0 shadow-lg">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create My Account!</h1>
                                </div>
                                <form class="user" method="post" action="register.php">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user deep-dark" placeholder="Username" autocomplete="off" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <input type="password" name="password" id="password" class="form-control form-control-user deep-dark" placeholder="Password" autocomplete="off" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye" id="togglePassword"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="password" name="password2" id="exampleRepeatPassword" class="form-control form-control-user deep-dark" placeholder="Confirm Password" autocomplete="off" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye" id="toggleConfirmPassword"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class                                    class="form-group">
                                        <div class="input-group">
                                            <input type="password" name="secret_code" id="secretCode" class="form-control form-control-user deep-dark" placeholder="Secret Code" autocomplete="off" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-eye" id="toggleSecretCode"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name="submitButton" class="btn btn-primary btn-user btn-block" value="Create Account">
                                </form>
                                <hr>
                                <div class="text-center mt-2">
                                    <div class="text-muted small">Already a member?</div>
                                    <a class="small a2" href="login.php">Log In <i class="fas fa-chevron-right small"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        if (typeof usernameExists !== 'undefined' && usernameExists) {
            alert("Username already exists!");
        }

        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const confirmPassword = document.getElementById('exampleRepeatPassword');

        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        const toggleSecretCode = document.getElementById('toggleSecretCode');
        const secretCode = document.getElementById('secretCode');

        toggleSecretCode.addEventListener('click', function() {
            const type = secretCode.getAttribute('type') === 'password' ? 'text' : 'password';
            secretCode.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>

