<?php

session_start();

require "config.php";

if (!isset($_SESSION["user_id"])) {
    exit();
}

if (!isset($_GET["receiver_id"])) {
    exit();
}

$current_user_id = (int) $_SESSION["user_id"];
$receiver_id = (int) $_GET["receiver_id"];

$sql = "SELECT *
        FROM messages
        WHERE
            (sender_id = ? AND receiver_id = ?)
            OR
            (sender_id = ? AND receiver_id = ?)
        ORDER BY created_at ASC";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "iiii",
    $current_user_id,
    $receiver_id,
    $receiver_id,
    $current_user_id
);

$stmt->execute();

$messages = $stmt->get_result();

while ($message = $messages->fetch_assoc()) {

    $isMine = $message["sender_id"] == $current_user_id;

    $class = $isMine ? "mine" : "theirs";

    echo '<div class="message-row ' . $class . '">';
    echo '<div class="message-bubble">';
    echo htmlspecialchars($message["message"]);
    echo '</div>';
    echo '</div>';
}