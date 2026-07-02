<?php

echo "<h1>PHP Regular Expressions (Regex)</h1>";
echo "<hr>";

/* ===========================
   1. preg_match()
=========================== */

echo "<h2>1. preg_match()</h2>";

$text = "Welcome to PHP";

if (preg_match("/PHP/", $text)) {
    echo "PHP Found";
}
else {
    echo "PHP Not Found";
}

echo "<hr>";

/* ===========================
   2. preg_replace()
=========================== */

echo "<h2>2. preg_replace()</h2>";

$text = "I Love PHP";

$newText = preg_replace("/PHP/", "Python", $text);

echo $newText;

echo "<hr>";

/* ===========================
   3. preg_split()
=========================== */

echo "<h2>3. preg_split()</h2>";

$text = "DBMS,OS,PHP,AI";

$subjects = preg_split("/,/", $text);

foreach ($subjects as $subject) {
    echo $subject . "<br>";
}

?>