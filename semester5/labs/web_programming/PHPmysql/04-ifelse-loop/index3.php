<?php

echo "<h1>PHP Loops</h1>";
echo "<hr>";

/* ===========================
   1. while Loop
=========================== */

echo "<h2>1. while Loop</h2>";

$i = 1;

while ($i <= 5) {
    echo $i . " ";
    $i++;
}

echo "<hr>";

/* ===========================
   2. do...while Loop
=========================== */

echo "<h2>2. do...while Loop</h2>";

$j = 1;

do {
    echo $j . " ";
    $j++;
}
while ($j <= 5);

echo "<hr>";

/* ===========================
   3. for Loop
=========================== */

echo "<h2>3. for Loop</h2>";

for ($k = 1; $k <= 5; $k++) {
    echo $k . " ";
}

echo "<hr>";

/* ===========================
   4. foreach Loop
=========================== */

echo "<h2>4. foreach Loop</h2>";

$subjects = ["DBMS", "OS", "AI", "PHP"];

foreach ($subjects as $subject) {
    echo $subject . "<br>";
}

?>