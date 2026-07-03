<?php

$server = "localhost";
$username = "root";
$password = "@nik461sqlCH@ND";

$conn = new mysqli($server, $username, $password);

if ($conn->connect_error) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "create database student_db";

if ($conn->query($sql) == true) {
    // conn -> mysql connection 
    // query() -> send and execute sql command 
    // $sql -> sql command 
    echo "database created successfully";
} else {
    echo "error connecting database" . $conn->error;
}

$conn->close();

?>