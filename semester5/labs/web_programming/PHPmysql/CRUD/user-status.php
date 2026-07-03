<?php

session_start();

require "config.php";

if (!isset($_SESSION["user_id"])) {
    exit();
}

if (!isset($_GET["user_id"])) {
    exit();
}

$user_id = (int) $_GET["user_id"];

$sql = "SELECT last_seen
        FROM users
        WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user || $user["last_seen"] === null) {
    echo "offline";
    exit();
}

$isOnline =
    strtotime($user["last_seen"]) >= time() - 10;

echo $isOnline ? "online" : "offline";

?>