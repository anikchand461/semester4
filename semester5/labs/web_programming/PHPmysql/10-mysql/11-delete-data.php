<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM students WHERE id = 2";

if ($conn->query($sql) == true) {
    echo "Data deleted successfully";
} else {
    echo "Error deleting data: " . $conn->error;
}

$conn->close();

?>