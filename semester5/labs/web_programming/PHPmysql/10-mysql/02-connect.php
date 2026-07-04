<?php

$server = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($server, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);   // die mainly prints the messege and exit the program 
}

echo "Connected successfully";

?>