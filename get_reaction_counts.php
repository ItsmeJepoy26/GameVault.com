<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gamevaultdb";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$game_id = $_GET['game_id'];
$user_id = $_SESSION['user_id']; // Assuming user_id is stored in session

// Fetch overall reaction counts
$sql = "SELECT reaction_type, count FROM reactions WHERE game_id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $game_id);
$stmt->execute();
$result = $stmt->get_result();

$counts = [];
while ($row = $result->fetch_assoc()) {
    $counts[$row['reaction_type']] = $row['count'];
}
$stmt->close();

// Fetch current user's reaction
$sql = "SELECT reaction_type FROM user_reactions WHERE user_id = ? AND game_id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ii", $user_id, $game_id);
$stmt->execute();
$stmt->bind_result($user_reaction);
$stmt->fetch();
$stmt->close();

$con->close();

$counts['userReaction'] = $user_reaction;

echo json_encode($counts);
?>
