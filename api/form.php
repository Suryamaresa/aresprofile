<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json(['message' => 'Invalid HTTP Method'], 405);
    exit();
}

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$name = $data['name'];
$email = $data['email'];
$subject = $data['subject'];
$message = $data['message'];

try {
    $sql = "INSERT INTO message (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);

    $stmt->execute();

    json(['message' => 'Success']);
} catch (PDOException $e) {
    json(['message' => $e->getMessage()], 500);
}
