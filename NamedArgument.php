<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// function call in PHP 7
sayHello("Eko", "Kurniawan", "Khannedy");

// function call in PHP 8
sayHello(last: "Khannedy", first: "Eko", middle: "Kurniawan");


// Function default argument
function sayHai(string $first, string $middle = "Buah", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// function call in PHP 7
// sayHai("Eko", "Kurniawan"); // error

// function call in PHP 8
sayHai(first: "EKO", last: "Khannedy");
