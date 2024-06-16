<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gamevaultdb";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    die("Failed to connect: " . mysqli_connect_error());
}

$response = ['success' => false];

if (isset($_POST['thoughts']) && isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $thoughts = $_POST['thoughts'];
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $page_id = 1; // Change this to dynamically get the current page ID

    $sql = "INSERT INTO thoughts (page_id, user_id, thoughts) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("iis", $page_id, $user_id, $thoughts);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        $response['success'] = true;
    }
    $stmt->close();
}

$con->close();

echo json_encode($response);
?>
