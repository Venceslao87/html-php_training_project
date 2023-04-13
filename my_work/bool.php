<?php

/*
Логічні оператори
*/

$positive= 5>2; // true
$negative= 7===3; // false

// Логічне "І"
echo 'true and false: ';
var_dump ($positive and $negative);
echo '<br>';

//Логічне "АБО"
echo 'true or false: ';
var_dump ($positive or $negative);
echo '<br>';
// виключене "АБО"
echo 'true xor false: ';
var_dump ($positive xor $negative);
echo '<br>';

echo 'true xor false: ';
var_dump ($positive xor true);
echo '<br>';

//Заперечення
echo '!true ';
var_dump (!$positive);
echo '<br>';

// Логічне І (більший пріоритет ніж and)
echo 'true && false: ';
var_dump ($positive && $negative);
echo '<br>';

echo 'true && false and true: ';
var_dump ($positive && $negative and true);
echo '<br>';

echo 'true && true and true: ';
var_dump ($positive && true and true);
echo '<br>';

// Логічне АБО (більший пріоритет ніж or)

echo 'true || true: ';
var_dump ($positive || $negative);
echo '<br>';

echo 'true || false or true: ';
var_dump ($positive || $negative or true);
echo '<br>';







