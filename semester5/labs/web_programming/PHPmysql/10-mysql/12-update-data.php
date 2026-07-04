<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE students
        SET age = 23
        WHERE id = 1";

if ($conn->query($sql) == true) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . $conn->error;
}

$conn->close();

?>