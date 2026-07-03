<?php

/* 
Form Validation

Validation means checking whether the user's input is correct
before processing or storing it.
*/

$name = "";
$email = "";
$age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $age = trim($_POST["age"]);

}

?>

<!DOCTYPE html>

<html>

<body>

<h1>Form Validation</h1>

<form method="POST">

    Name :
    <input type="text" name="name">

    <br><br>

    Email :
    <input type="text" name="email">

    <br><br>

    Age :
    <input type="number" name="age">

    <br><br>

    <input type="submit" value="Submit">

</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name Validation
    if (empty($name)) {
        echo "❌ Name is required.";
    }

    // Email Validation
    elseif (empty($email)) {
        echo "❌ Email is required.";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid Email.";
    }

    // Age Validation
    elseif (empty($age)) {
        echo "❌ Age is required.";
    }

    elseif (!is_numeric($age)) {
        echo "❌ Age must be a number.";
    }

    elseif ($age < 18) {
        echo "❌ Age must be 18 or above.";
    }

    // Success
    else {

        echo "<h2>Registration Successful</h2>";

        echo "Name : $name";
        echo "<br>";

        echo "Email : $email";
        echo "<br>";

        echo "Age : $age";

    }

}

?>

</body>

</html>