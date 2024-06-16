<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-us">
    <title>Reset Password - GameVault</title>

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
        .deep-dark {
            background-color: #2b2e33; /* Same background color as the login page */
            color: #ffffff; /* Text color for contrast */
        }
        .btn-primary {
            background-color: #4e73df; /* Same primary color as the login button */
            border-color: #4e73df; /* Same border color as the login button */
            color: #ffffff; /* Text color for contrast */
            width: 100%; /* Set button width to 100% */
        }
        .btn-primary:hover {
            background-color: #224abe; /* Darker shade when hovered */
            border-color: #224abe; /* Darker shade for border when hovered */
            color: #ffffff; /* Text color for contrast */
        }
        .text-center {
            text-align: center; /* Align text to center */
        }
        .form-control-user {
            border-radius: 10px; /* Match the border radius used in the login page */
            margin-bottom: 20px; /* Add bottom margin to input fields */
            padding: 10px; /* Add padding to input fields */
        }
        .btn-user {
            margin-top: 20px; /* Adjust top margin */
        }
        .card-body {
            padding: 40px; /* Match the padding used in the login page */
        }
        .icon {
            position: absolute;
            right: 10px;
            top: calc(50% - 0.5em);
            cursor: pointer;
        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="deep-dark">
    <div class="main-cont">
        <div class="container p-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login card o-hidden border-0 shadow-lg">
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Reset Your Password</h1>
                            </div>
                            <form class="user" method="post" action="handle_reset_password.php">
                                <div class="form-group position-relative">
                                    <input type="password" name="new_password" id="new_password" class="form-control form-control-user deep-dark" placeholder="New Password" required>
                                    <span class="icon" onclick="togglePasswordVisibility('new_password')"><i id="toggleNew_password" class="fas fa-eye"></i></span>
                                </div>
                                <div class="form-group position-relative">
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-user deep-dark" placeholder="Confirm Password" required>
                                    <span class="icon" onclick="togglePasswordVisibility('confirm_password')"><i id="toggleConfirm_password" class="fas fa-eye"></i></span>
                                </div>
                                <input type="submit" name="submitButton" class="btn btn-primary btn-user btn-block" value="Reset Password">
                            </form>
                            <hr>
                            <div class="text-center mt-2">
                                <div class="text-muted small">Remembered your password?</div>
                                <a class="small" href="login.php">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
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
