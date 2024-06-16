<?php
session_start();
include("connection.php");
include("functions.php");

// Check if the user is logged in
$user_data = check_login($con);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        // Update user data
        $user_id = $user_data['user_id'];
        $query = "UPDATE users SET username='$username', password='$password' WHERE user_id='$user_id'";
        mysqli_query($con, $query);
        
        // Update session data
        $_SESSION['user_id'] = $user_data['user_id'];
        header("Location: profile.php?success=1");
        die;
    } else {
        echo "Please enter some valid information!";
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
    <title>User Profile</title>

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
    </style>
</head>
<body class="deep-dark"> <!-- Apply the deep-dark class to the body to set the background color -->
    <div class="main-cont">
        <div class="container p-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login card o-hidden border-0 shadow-lg">
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">User Profile</h1>
                            </div>
                            <form class="user" method="post" action="profile.php">
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control form-control-user deep-dark" id="username" name="username" value="<?php echo $user_data['username']; ?>" placeholder="Enter new username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password:</label>
                                    <input type="password" class="form-control form-control-user deep-dark" id="password" name="password" placeholder="Enter new password" required>
                                </div>
                                <input type="submit" name="submitButton" class="btn btn-primary btn-user btn-block" value="Update Profile">
                            </form>
                            <hr>
                            <div class="text-center mt-2">
                                <a class="small" href="index.php">Back to Home</a>
                            </div>
                            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                                <div id="successMessage" class="alert alert-success mt-3">Profile updated successfully!</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
