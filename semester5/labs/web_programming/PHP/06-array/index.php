<?php

echo "<h1>PHP Arrays</h1>";
echo "<hr>";

/* ===========================
   1. Indexed Array
=========================== */

echo "<h2>1. Indexed Array</h2>";

$subjects = ["DBMS", "OS", "AI", "PHP"];

echo $subjects[0];
echo "<br>";
echo $subjects[1];
echo "<br>";
echo $subjects[2];
echo "<br>";
echo $subjects[3];

echo "<hr>";

/* ===========================
   2. Associative Array
=========================== */

echo "<h2>2. Associative Array</h2>";

$student = [
    "name" => "Anik",
    "age" => 22,
    "college" => "HIT"
];

echo $student["name"];
echo "<br>";

echo $student["age"];
echo "<br>";

echo $student["college"];

echo "<hr>";

/* ===========================
   3. Multidimensional Array
=========================== */

echo "<h2>3. Multidimensional Array - nested array</h2>";

$students = [
    ["Anik", 22],
    ["Rahul", 21],
    ["Priya", 23]
];

echo $students[0][0];
echo "<br>";

echo $students[1][0];
echo "<br>";

echo $students[2][0];

echo "<hr>";

/* ===========================
   4. Looping Arrays
=========================== */

echo "<h2>4. Looping Arrays</h2>";

foreach ($subjects as $subject) {
    echo $subject;
    echo "<br>";
}

echo "<hr>";

/* ===========================
   5. Array Functions
=========================== */

echo "<h2>5. Array Functions</h2>";

$numbers = [50, 20, 80, 10];

echo "Count : " . count($numbers);
echo "<br><br>";

sort($numbers);

echo "After sort()<br>";

foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br><br>";

array_push($numbers, 100);

echo "After array_push()<br>";

foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br><br>";

array_pop($numbers);

echo "After array_pop()<br>";

foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<hr>";

$arr = [5, "anik", 5, 2, true];
foreach ($arr as $ele) {
    echo $ele . " ";
}

echo "<hr>";

echo var_dump($arr);

?>