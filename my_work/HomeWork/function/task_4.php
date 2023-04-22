<?php

// function mathematical operation with different elements

function math(float $a, float $b, float $c) {
    $d=($a-$b)/$c;
    return "Результат: ".$d;
}

echo math(5,9,7);
