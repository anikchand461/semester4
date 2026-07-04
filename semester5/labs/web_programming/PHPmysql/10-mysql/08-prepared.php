<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (name, email, age)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);  // prepare the statement of the sql command

$name = "Anik";
$email = "anik461@gmail.com";
$age = 22;

$stmt->bind_param("ssi", $name, $email, $age);   // bind the actual values to the sql statement 
// s → $name  (string)
// s → $email (string)
// i → $age   (integer)

$stmt->execute();  // execute statement 

echo "Data inserted successfully";

$stmt->close();  // close statement 
$conn->close();   // close conn

?>