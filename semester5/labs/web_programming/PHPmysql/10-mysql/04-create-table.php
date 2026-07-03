<?php

$server = "localhost";
$username = "root";
$password = "@nik461sqlCH@ND";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);   // die mainly prints the messege and exit the program 
}

$sql = "CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL
)";

// execute sql commad 
if ($conn->query($sql) == true) {
    echo "table create successfully";
} else {
    echo "error creating table" . $conn->error;
} 

$conn->close();

?>