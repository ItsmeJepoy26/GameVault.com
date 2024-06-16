<?php
// Database configuration
$servername = "localhost"; // Replace with your server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$database = "gamevaultdb"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Note: You should hash this password before storing it

    // Hash the password (for example, using password_hash function)
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password_hash);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
