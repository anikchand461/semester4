<?php

function greet() {
    echo "hello world";
};

greet();

echo "<hr>";

function student($name, $age) {
    echo "Name : $name <br>";
    echo "Age : $age";
}

student("Anik", 22);

echo "<hr>";

function add($a, $b) {
    return $a + $b;
}

$result = add(10, 20);

echo "Sum : $result";

echo "<hr>";


function country($name = "India") {
    echo $name;
}

country();

echo "<br>";

country("Japan");

echo "<hr>";

$x = 100;      // Global Variable

function demo() {

    $y = 50;   // Local Variable

    echo "Local : $y <br>";
}

demo();

echo "Global : $x";

?>