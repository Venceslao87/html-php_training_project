<?php


// function Exponentiation numbers

function exp_number(float $value_1, float $value_2) {
    $result=$value_1**$value_2;
return "Число ".$value_1." у степені ".$value_2. " дорівнює ".$result;
}

echo exp_number(2,7);
echo "<br>";
echo exp_number(5,6);

