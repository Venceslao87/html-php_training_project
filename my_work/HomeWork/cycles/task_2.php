<?php

// Homework with elements foreach in array

$arr = [
    "Mykola" => 200,
    "Vasyl"  => 300,
    "Petro"  => 400
];
foreach ($arr as $surname => $value ) {
    echo $surname. " – зарплатня " .$value. " доларів". "<br>";
}
