<?php

$name = "Anik";
$cgpa = 8.9;

echo "<h2>Ternary Operator</h2>";
echo "<hr>";

echo "Name : $name";
echo "<br>";

echo "CGPA : $cgpa";
echo "<br><br>";

echo ($cgpa >= 8) ? "Excellent Student" : "Average Student";


echo "<h2>Null Coalescing Operator</h2>";
echo "<hr>";

$name = "Anik";
$email = null;

echo "Name : " . ($name ?? "Guest");
echo "<br>";

echo "Email : " . ($email ?? "Not Available");

?>