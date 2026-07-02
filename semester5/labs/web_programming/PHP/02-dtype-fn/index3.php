<!DOCTYPE html>
<html>

<body>

<?php

$name = "Anik Chand";

echo "<h2>String Functions</h2>";
echo "<hr>";

echo "Original : $name";
echo "<br><br>";

echo "Length : " . strlen($name);
echo "<br>";

echo "Upper : " . strtoupper($name);
echo "<br>";

echo "Lower : " . strtolower($name);
echo "<br>";

echo "First Letter Capital : " . ucfirst("anik");
echo "<br>";

echo "Every Word Capital : " . ucwords("anik chand");
echo "<br>";

echo "Replace : " . str_replace("Anik", "Rahul", $name);
echo "<br>";

echo "Substring : " . substr($name, 0, 4);
echo "<br>";

echo "Position of C : " . strpos($name, "C");
echo "<br>";

echo "Trim : " . trim("   PHP   ");

?>

</body>

</html>