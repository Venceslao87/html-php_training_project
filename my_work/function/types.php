<?php


// strong types

function determinate(float $a, float $b, float $c):float{
$discriminant=$b^2-4*$a*$c;
return $discriminant;
}

echo Determinate(3,5,7);
