<?php

// GET is an HTTP method used to send data from the browser to the server.

/* 
The data is sent through the URL.

Example:

http://localhost/get.php?name=Anik&age=22

Here,

name = Anik

age = 22
*/

$name = "";
$age = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit"])) {

    $name = $_GET["name"];
    $age = $_GET["age"];

}

/* 
PHP automatically stores it inside $_GET

So,
$_GET["name"] contains Anik and $_GET["age"] contains 22

*/

// User → Fill Form → Click Submit → Browser creates URL (get.php?name=Anik&age=22) → PHP receives request → Data stored in $_GET → echo displays the values

?>

<!DOCTYPE html>

<html>

<body>

<h1>GET Method</h1>

<form method="GET">

    Name :
    <input type="text" name="name">

    <br><br>

    Age :
    <input type="number" name="age">

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<hr>

<?php

// display the data

if (isset($_GET["submit"])) {

    echo "Name : $name";
    echo "<br>";

    echo "Age : $age";

}

?>

</body>

</html>

