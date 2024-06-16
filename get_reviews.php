<?php
$host = 'localhost';
$dbname = 'gamevaultdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $game_id = $_GET['game_id']; // Get game_id from the query parameter

    $stmt = $pdo->prepare("SELECT username, review, timestamp FROM reviews WHERE game_id = ? ORDER BY timestamp DESC");
    $stmt->execute([$game_id]);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($reviews);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
