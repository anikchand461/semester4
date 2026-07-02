<!DOCTYPE html>
<html>

<body>

<?php

echo "<h2>PHP Type Casting</h2>";
echo "<hr>";

$a = "100";
echo "String to Integer<br>";
var_dump((int)$a);

/* 
var_dump() prints three things:

Data Type
Value
Additional Information (like string length or array size)
*/

echo "<hr>";

$b = 99;
echo "Integer to String<br>";
var_dump((string)$b);

echo "<hr>";

$c = 8.91;
echo "Float to Integer<br>";
var_dump((int)$c);

echo "<hr>";

$d = 22;
echo "Integer to Float<br>";
var_dump((float)$d);

echo "<hr>";

$e = "499.99";
echo "String to Float<br>";
var_dump((float)$e);

echo "<hr>";

$f = 1;
echo "Integer to Boolean<br>";
var_dump((bool)$f);

echo "<hr>";

$g = true;
echo "Boolean to Integer<br>";
var_dump((int)$g);

?>

</body>

</html>