<!DOCTYPE html>
<html>

<body>

<?php

echo "<h2>Increment / Decrement Operators</h2>";
echo "<hr>";

$a = 10;

echo "Initial Value : $a";
echo "<br><br>";

echo "Pre Increment (++a) : " . ++$a;
echo "<br>";

echo "Current Value : $a";
echo "<br><br>";

$a = 10;

echo "Post Increment (a++) : " . $a++;
echo "<br>";

echo "Current Value : $a";
echo "<br><br>";

$a = 10;

echo "Pre Decrement (--a) : " . --$a;
echo "<br>";

echo "Current Value : $a";
echo "<br><br>";

$a = 10;

echo "Post Decrement (a--) : " . $a--;
echo "<br>";

echo "Current Value : $a";

?>

</body>

</html>