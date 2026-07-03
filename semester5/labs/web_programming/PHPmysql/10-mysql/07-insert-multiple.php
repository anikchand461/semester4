<?php

$server = "localhost";
$username = "root";
$password = "@nik461sqlCH@ND";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (name, email, age)
        VALUES
        ('Amit', 'amit@gmail.com', 21),
        ('Riya', 'riya@gmail.com', 20),
        ('Sourav', 'sourav@gmail.com', 23)";

if ($conn->query($sql) == true) {
    echo "Multiple data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();

?>