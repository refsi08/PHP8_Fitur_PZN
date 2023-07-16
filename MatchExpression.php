<?php

/**
 * Expression menggunakan switch case
 */

$value = "A";
$result = "";

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
}

echo $result . PHP_EOL;

/**
 * Expression menggunakan match expression
 */

// equals check
$result = match ($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda tidak lulus",
    "E" => "Mungkin Anda salah jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL;

// condition check match expression
$value = 80;
$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};
echo $result . PHP_EOL;

// condition check IF expression
$valueUAS = 80;
if ($valueUAS >= 80) {
    echo "A" . PHP_EOL;
} elseif ($valueUAS >= 70) {
    echo "B" . PHP_EOL;
} elseif ($valueUAS >= 60) {
    echo "C";
} elseif ($valueUAS >= 50) {
    echo "D" . PHP_EOL;
} else {
    echo "E" . PHP_EOL;
}

$name = "Mr.Eko";

$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir" . PHP_EOL,
    str_contains($name, "Ms.") => "Hello Mam" . PHP_EOL,
    default => "Hello"
};

echo $result . PHP_EOL;
