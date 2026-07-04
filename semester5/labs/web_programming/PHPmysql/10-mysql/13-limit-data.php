<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, age
        FROM students
        LIMIT 3";

$result = $conn->query($sql);

if ($result->num_rows > 0) {   // check any row exist or not 

    while ($row = $result->fetch_assoc()) {   // fetch_assoc() takes one row from $result and converts it into an associative array.

        echo "ID : " . $row["id"];
        echo "<br>";

        echo "Name : " . $row["name"];
        echo "<br>";

        echo "Email : " . $row["email"];
        echo "<br>";

        echo "Age : " . $row["age"];

        echo "<hr>";
    }

} else {

    echo "No students found";

}

$conn->close();

?>