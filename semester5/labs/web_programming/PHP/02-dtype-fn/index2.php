<!DOCTYPE html>
<html>

<head>
    <title>Echo and Print</title>
</head>

<body>

<?php

echo "<h1>Echo / Print in PHP</h1>";
echo "<hr>";

// Variables
$name = "Anik";
$age = 22;

echo "<h2>1. Printing Variables</h2>";

echo $name;
echo "<br>";
echo $age;

echo "<hr>";

// Method 1
echo "<h2>2. Printing Text + Variables (Method 1)</h2>";

echo "Name : $name";
echo "<br>";
echo "Age : $age";

echo "<hr>";

// Method 2
echo "<h2>3. Printing Text + Variables (Concatenation)</h2>";

echo "Name : " . $name;
echo "<br>";
echo "Age : " . $age;

echo "<hr>";

// Multiple Variables
echo "<h2>4. Multiple Variables</h2>";

echo "Name : " . $name . "<br>";
echo "Age : " . $age . "<br>";

echo "<hr>";

// Double Quotes
echo "<h2>5. Double Quotes</h2>";

echo "Hello $name";

echo "<hr>";

// Single Quotes
echo "<h2>6. Single Quotes</h2>";

echo 'Hello $name';

echo "<hr>";

// print
echo "<h2>7. print Statement</h2>";

print "Hello ";
print $name;

echo "<hr>";

// echo multiple values
echo "<h2>8. echo Multiple Arguments</h2>";

echo "Name : ", $name, "<br>";
echo "Age : ", $age;

?>

</body>

</html>