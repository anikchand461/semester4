<!DOCTYPE html>
<html>

<body>

<?php

$a = 10;
$b = 20;

echo "<h2>Logical Operators</h2>";
echo "<hr>";

echo "AND (&&)<br>";
var_dump($a > 5 && $b < 30);

echo "<br><br>";

echo "OR (||)<br>";
var_dump($a > 15 || $b < 30);

echo "<br><br>";

echo "NOT (!)<br>";
var_dump(!($a > 5));

echo "<br><br>";

echo "XOR<br>";
var_dump($a > 5 xor $b > 30);

?>

</body>

</html>