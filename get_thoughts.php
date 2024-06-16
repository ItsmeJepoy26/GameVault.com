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

$page_id = 1; // Change this to dynamically get the current page ID

$sql = "SELECT t.thoughts, u.username FROM thoughts t JOIN users u ON t.user_id = u.id WHERE t.page_id = ? ORDER BY t.date DESC";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $page_id);
$stmt->execute();
$result = $stmt->get_result();

$thoughts = [];
while ($row = $result->fetch_assoc()) {
    $thoughts[] = ['username' => $row['username'], 'thoughts' => $row['thoughts']];
}

$stmt->close();
$con->close();

echo json_encode($thoughts);
?>
