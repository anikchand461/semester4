<?php

$server = "localhost";
$username = "root";
$password = "@nik461sqlCH@ND";
$database = "chat";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed", $conn->connect_error);
}

?>