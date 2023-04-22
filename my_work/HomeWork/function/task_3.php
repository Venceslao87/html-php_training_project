<?php

// function by average the numbers in array

$arr = [
    15,
    16
];

function avg($arr) {
    $sum=null;
    foreach ($arr as $value) {
        $sum=$sum+$value;
    }
    $result=$sum/count($arr);
    return $result;
}

echo avg($arr);

