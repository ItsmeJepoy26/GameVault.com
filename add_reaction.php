<?php
session_start();

$host = 'localhost';
$dbname = 'gamevaultdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode(file_get_contents("php://input"), true);
    $reactionType = $data['reactionType'];
    $game_id = $data['game_id'];

    if (in_array($reactionType, ['like', 'neutral', 'dislike'])) {
        $column = $reactionType . '_count';
        $stmt = $pdo->prepare("UPDATE reactions SET $column = $column + 1 WHERE game_id = ?");
        $stmt->execute([$game_id]);

        // Fetch updated counts
        $stmt = $pdo->prepare("SELECT like_count, neutral_count, dislike_count FROM reactions WHERE game_id = ?");
        $stmt->execute([$game_id]);
        $counts = $stmt->fetch(PDO::FETCH_ASSOC);

        echo json_encode(['success' => true, 'counts' => $counts]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid reaction type']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
