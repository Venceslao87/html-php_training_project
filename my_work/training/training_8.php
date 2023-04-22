<?php

$arr= [
    1,
    6,
    7,
    56
];
$sum=null;
foreach ($arr as $value) {
    $sum=$sum+$value;
}
$avg=$sum/count($arr);

echo $avg;

