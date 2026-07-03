<?php

// The POST method is almost the same as GET. The only major difference is where the data is sent.
// POST is an HTTP method used to send data from the browser to the server.

/* 
Example URL:
http://localhost/post.php

Notice that the URL does not contain: ?name=Anik&age=22

Instead, the browser sends the data internally.

PHP receives it using:
$_POST["name"]
$_POST["age"]
*/

$name = "";
$age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];

}

/* 
The browser sends an HTTP POST Request.

The URL remains:

http://localhost/post.php

The data is placed inside the Request Body.

Request Body

name = Anik

age = 22
*/

/* 
PHP automatically stores the values in: $_POST

So, $_POST["name"] contains Anik  and $_POST["age"] contains 22
*/

// User → Fill Form → Click Submit → Browser sends POST Request (Request Body: name=Anik&age=22) → PHP receives request → Data stored in $_POST → echo displays the values

?>

<!DOCTYPE html>

<html>

<body>

<h1>POST Method</h1>

<form method="POST">

    Name :
    <input type="text" name="name">

    <br><br>

    Age :
    <input type="number" name="age">

    <br><br>

    <input type="submit" value="Submit">

</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Name : $name";
    echo "<br>";

    echo "Age : $age";

}

?>

</body>

<!-- 
| Feature              | GET                            | POST                                             |
| -------------------- | ------------------------------ | ------------------------------------------------ |
| Purpose              | Retrieve (Read) data           | Submit (Create/Update) data                      |
| Data Location        | URL (Query Parameters)         | HTTP Request Body                                |
| PHP Superglobal      | `$_GET`                        | `$_POST`                                         |
| Visible in URL       | ✅ Yes                          | ❌ No                                             |
| Bookmarkable         | ✅ Yes                          | ❌ No                                             |
| Shareable via URL    | ✅ Yes                          | ❌ No                                             |
| Browser History      | Saved                          | Not saved in URL                                 |
| Data Size            | Limited                        | Much larger                                      |
| File Upload          | ❌ Not Supported                | ✅ Supported                                      |
| Security             | Less secure for sensitive data | Better (still use HTTPS)                         |
| Can Send Binary Data | ❌ No                           | ✅ Yes                                            |
| Common Uses          | Search, Filters, Pagination    | Login, Registration, Contact Forms, File Uploads |
-->

</html>