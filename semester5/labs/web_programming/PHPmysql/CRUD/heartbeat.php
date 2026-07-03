<?php

session_start();

require "config.php";

if (!isset($_SESSION["user_id"])) {
    exit();
}

$user_id = $_SESSION["user_id"];
$sql = "UPDATE users
        SET last_seen = NOW()
        WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

?>

