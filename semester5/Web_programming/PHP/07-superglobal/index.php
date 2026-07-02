<?php

echo "<h1>PHP Superglobals</h1>";
echo "<hr>";

/* ===========================
   1. $GLOBALS
=========================== */

echo "<h2>1. \$GLOBALS</h2>";

$x = 10;
$y = 20;

function add() {
    echo $GLOBALS["x"] + $GLOBALS["y"];
}

add();

echo "<hr>";

/* ===========================
   2. $_SERVER
=========================== */

echo "<h2>2. \$_SERVER</h2>";

echo "PHP_SELF : " . $_SERVER["PHP_SELF"];
echo "<br>";

echo "SERVER_NAME : " . $_SERVER["SERVER_NAME"];
echo "<br>";

echo "REQUEST_METHOD : " . $_SERVER["REQUEST_METHOD"];
echo "<br>";

echo "HTTP_HOST : " . $_SERVER["HTTP_HOST"];

echo "<hr>";

/* ===========================
   3. $_GET
=========================== */

echo "<h2>3. \$_GET</h2>";

if (isset($_GET["name"])) {
    echo "Name : " . $_GET["name"];
} else {
    echo "No GET Data";
}

echo "<hr>";

/* ===========================
   4. $_POST
=========================== */

echo "<h2>4. \$_POST</h2>";

if (isset($_POST["name"])) {
    echo "Name : " . $_POST["name"];
} else {
    echo "No POST Data";
}

echo "<hr>";

/* ===========================
   5. $_REQUEST
=========================== */

echo "<h2>5. \$_REQUEST</h2>";

if (isset($_REQUEST["city"])) {
    echo "City : " . $_REQUEST["city"];
} else {
    echo "No REQUEST Data";
}

echo "<hr>";

/* ===========================
   6. $_FILES
=========================== */

echo "<h2>6. \$_FILES</h2>";

echo "Used for File Uploads";

echo "<hr>";

/* ===========================
   7. $_COOKIE
=========================== */

echo "<h2>7. \$_COOKIE</h2>";

setcookie("username", "anik");

if (isset($_COOKIE["username"])) {
    echo $_COOKIE["username"];
} else {
    echo "No Cookie Found";
}

echo "<hr>";

/* ===========================
   8. $_SESSION
=========================== */

echo "<h2>8. \$_SESSION</h2>";

session_start();

$_SESSION["user"] = "Anik";

echo $_SESSION["user"];

?>