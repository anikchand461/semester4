<!DOCTYPE html>
<html>

<body>

<?php
$a = 20;
$b = 6;

echo "<h2>Numbers in PHP</h2>";
echo "<hr>";

echo "a = $a <br>";
echo "b = $b <br><br>";

echo "Addition : " . ($a + $b);
echo "<br>";

echo "Subtraction : " . ($a - $b);
echo "<br>";

echo "Multiplication : " . $a * $b;
echo "<br>";

echo "Division : " . $a / $b;
echo "<br>";

echo "Modulus : " . $a % $b;
echo "<br>";

echo "Power : " . $a ** 2;
echo "<br><hr>";

echo "Absolute : " . abs(-25);
echo "<br>";

echo "Square Root : " . sqrt(64);
echo "<br>";

echo "Power Function : " . pow(2, 5);
echo "<br>";

echo "Round : " . round(8.6);
echo "<br>";

echo "Ceil : " . ceil(8.2);
echo "<br>";

echo "Floor : " . floor(8.9);
echo "<br>";

echo "Minimum : " . min(12, 6, 30, 2);
echo "<br>";

echo "Maximum : " . max(12, 6, 30, 2);
echo "<br>";

echo "Random Number : " . rand(1, 100);

echo "<br>";
echo "PI : " . pi();
?>

</body>

</html>
