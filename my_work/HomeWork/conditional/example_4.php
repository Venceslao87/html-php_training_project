<?php

// Identify the even or odd number, and opportunity division this number on 3 and 6
$a=12;

$even="парне";
$odd="непарне";
$three="ділиться на три";
$n_three=" не ділиться на три";
$six="ділиться на шість";
$n_six="не ділиться на шість";
$resul1=null;
$result2=null;
$result3=null;

if ($a%2==0) {
    $result1=$even;
} else {
    $result1=$odd;
}
if ($a%3==0) {
    $result2=$three;
} else {
    $result2=$n_three;
}
if ($a%6==0) {
    $result3=$six;
} else {
    $result3=$n_six;
}

echo 'Число ' .$a. ' — ' .$result1. ', ' .$result2. ', ' .$result3;  