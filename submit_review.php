<?php
session_start();
include 'connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if user is logged in
    if (isset($_SESSION['user_id'])) {
        // Retrieve review data from POST request
        $review = $_POST['review'];
        $username = $_SESSION['username'];

        // Prepare and execute INSERT query
        $stmt = $con->prepare("INSERT INTO reviews (user_id, review) VALUES (?, ?)");
        $stmt->bind_param("is", $_SESSION['user_id'], $review);

        if ($stmt->execute()) {
            // Review successfully inserted
            echo "Review submitted successfully.";
        } else {
            // Error occurred during review insertion
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // User is not logged in
        echo "Error: User not logged in.";
    }
} else {
    // No POST request received
    echo "Error: No POST request received.";
}
?>
