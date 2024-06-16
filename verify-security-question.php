<?php
// Ensure the path to the connection.php file is correct
require 'connection.php';

// Add your logic for verifying security questions here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username is set and not empty
    if (isset($_POST["username"]) && !empty($_POST["username"])) {
        $username = $_POST["username"];
        // Query to check if the username exists in the database
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        // If username exists, proceed with the next steps
        if ($result->num_rows > 0) {
            // Proceed to the next step, like sending a security question or token
            echo "Username found. Proceed to the next step.";
        } else {
            echo "Username not found. Please enter a valid username.";
        }
        $stmt->close();
        $con->close();
    } else {
        echo "Username is required.";
    }
}
?>
