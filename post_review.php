<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$host = 'localhost';
$dbname = 'gamevaultdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode(file_get_contents("php://input"), true);
    $review = $data['review'];
    $game_id = $data['game_id']; // Get game_id from the POST data

    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];

    $stmt = $pdo->prepare("INSERT INTO reviews (user_id, username, review, game_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user_id, $username, $review, $game_id]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
