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

$user_id = $_SESSION['user_id']; // Assuming user_id is stored in session
$reactionType = $_POST['reactionType'];
$game_id = $_POST['game_id'];

// Fetch current user's reaction
$sql = "SELECT reaction_type FROM user_reactions WHERE user_id = ? AND game_id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ii", $user_id, $game_id);
$stmt->execute();
$stmt->bind_result($currentReaction);
$stmt->fetch();
$stmt->close();

$con->begin_transaction();

try {
    // If user had a previous reaction, decrement its count
    if ($currentReaction) {
        $sql = "UPDATE reactions SET count = count - 1 WHERE game_id = ? AND reaction_type = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("is", $game_id, $currentReaction);
        $stmt->execute();
        $stmt->close();
    }

    // If the new reaction is the same as the current reaction, remove the user's reaction
    if ($currentReaction === $reactionType) {
        $sql = "DELETE FROM user_reactions WHERE user_id = ? AND game_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ii", $user_id, $game_id);
        $stmt->execute();
        $stmt->close();
    } else {
        // Otherwise, update to the new reaction
        $sql = "INSERT INTO user_reactions (user_id, game_id, reaction_type) VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE reaction_type = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("iiss", $user_id, $game_id, $reactionType, $reactionType);
        $stmt->execute();
        $stmt->close();

        // Increment the new reaction's count
        $sql = "INSERT INTO reactions (game_id, reaction_type, count) VALUES (?, ?, 1)
                ON DUPLICATE KEY UPDATE count = count + 1";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("is", $game_id, $reactionType);
        $stmt->execute();
        $stmt->close();
    }

    $con->commit();
} catch (Exception $e) {
    $con->rollback();
    throw $e;
}

$con->close();
?>
