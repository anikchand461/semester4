<!DOCTYPE html>
<html>

<body>

<?php

$a = 20;
$b = "20";
$c = 15;

echo "<h2>Comparison Operators</h2>";
echo "<hr>";

echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br><br>";

echo "a == b : ";
var_dump($a == $b);
echo "<br>";

echo "a === b : ";
var_dump($a === $b);
echo "<br>";

echo "a != c : ";
var_dump($a != $c);
echo "<br>";

echo "a !== b : ";
var_dump($a !== $b);
echo "<br>";

echo "a > c : ";
var_dump($a > $c);
echo "<br>";

echo "a < c : ";
var_dump($a < $c);
echo "<br>";

echo "a >= 20 : ";
var_dump($a >= 20);
echo "<br>";

echo "c <= 20 : ";
var_dump($c <= 20);

?>

</body>

</html>