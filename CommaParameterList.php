<?php 

function sayHello(string $first, string $last){

}

// saat pemanggilan objek untuk mengisi parameter nya di koma akhir parameter tidak perlu di hapus
// koma nya tetap bisa dipakai dan memudahkan kita saat menduplikasi nilai objek

sayHello(
    "Eko",
    "Refsi",
);

function sum(int ...$values){

}

sum(
    1,
    1,
    1,
    1,
    1,
    1,
);

$array = [
    "first" => "refsi",
    "middle" => "refsi",
    "last" => "refsi",
];
?>