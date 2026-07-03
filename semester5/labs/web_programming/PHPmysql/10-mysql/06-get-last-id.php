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
        VALUES ('Rahul', 'rahul@gmail.com', 21)";

if ($conn->query($sql) == true) {
    echo "Data inserted successfully";
    echo "<br>";
    echo "Last inserted ID: " . $conn->insert_id;
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();

?>