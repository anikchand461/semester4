<!DOCTYPE html>
<html>

<body>

<?php

$name = "Anik Chand";   // string 
$age = 22;   // integer
$college = "HIT";
$ats_score = 8.9;   // float (double)
$isStudent = true;   // boolean
$subjects = ["DBMS", "OS", "AI"];
$address = null;

echo "<h2>Student Details</h2>";

echo "<p>Name : $name</p>";
echo "<p>Age : $age</p>";
echo "<p>College : $college</p>";
echo $ats_score;
echo "<br>";
echo $isStudent;
/* 
true  → 1
false → ""
*/
echo "<br>";
echo "$subjects[0] $subjects[1] $subjects[2]";
echo "<br>";
echo $address;

echo "<br>";

var_dump($subjects);
// print_r($subjects);

?>

</body>

</html>