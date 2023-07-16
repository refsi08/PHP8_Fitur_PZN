<?php

class Example
{
    // berbagai tipe data di properties (union types)
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "EKO";
$example->data = 100;
$example->data = true;
$example->data = [];

// berbagai tipe data di function (union types)
function sampleFunction(string|array $data): string | array // berbagai tipe data di return value (union types)
{
    if (is_array($data)) {
        return "Array" . PHP_EOL;
    } elseif (is_string($data)) {
        return "String" . PHP_EOL;
    }
}

var_dump(sampleFunction("EKO"));
var_dump(sampleFunction([]));
