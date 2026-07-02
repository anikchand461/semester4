<?php

echo "<h1>PHP Conditional Statements</h1>";
echo "<hr>";

/* ===========================
   1. if
=========================== */

echo "<h2>1. if</h2>";

$marks = 75;

if ($marks >= 40) {
    echo "Pass";
}

echo "<hr>";

/* ===========================
   2. if...else
=========================== */

echo "<h2>2. if...else</h2>";

$age = 16;

if ($age >= 18) {
    echo "Eligible to Vote";
}
else {
    echo "Not Eligible to Vote";
}

echo "<hr>";

/* ===========================
   3. if...elseif...else
=========================== */

echo "<h2>3. if...elseif...else</h2>";

$score = 82;

if ($score >= 90) {
    echo "Grade A";
}
elseif ($score >= 80) {
    echo "Grade B";
}
elseif ($score >= 70) {
    echo "Grade C";
}
elseif ($score >= 40) {
    echo "Grade D";
}
else {
    echo "Fail";
}

echo "<hr>";

/* ===========================
   4. Nested if
=========================== */

echo "<h2>4. Nested if</h2>";

$age = 22;
$hasLicense = true;

if ($age >= 18) {

    if ($hasLicense) {
        echo "You can drive.";
    }
    else {
        echo "Get a Driving License.";
    }

}
else {
    echo "You are underage.";
}

?>