<?php

// Sum all positive elements in array

$arr = [
    1, 7, -3, 89, 36, -56
];
$sum_positive=null;
$sum_negative=null;
foreach ($arr as $value) {
    if ($value>0) {
        $sum_positive=$sum_positive+$value;
    } else {
        $sum_negative=$sum_negative+$value;
}
}
echo "Сума додатніх елементів масиву дорівнює: ".$sum_positive. "<br>";
echo "Сума від'емних елементів масиву дорівнює: ".$sum_negative. "<br>";
echo "сума усіх елементів масиву дорівню: ".$sum_positive+$sum_negative;

