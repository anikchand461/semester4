<?php

$server = "localhost";
$username = "root";
$password = "@nik461sqlCH@ND";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);   // die mainly prints the messege and exit the program 
}

$sql = "INSERT INTO students (name, email, age)
        VALUES ('Anik Chand', 'anik@gmail.com', 22)";

// execute sql commad 
if ($conn->query($sql) == true) {
    echo "data inserted successfully";
} else {
    echo "error creating table" . $conn->error;
} 

$conn->close();

?>