<?php

// Works with function, what has output parametrs

function echoname($value1, $value2) {
    echo "Мене зовуть: ".$value1." ".$value2;
}
$name="Viacheslav";
$surname="Markhobrod";
echo echoname($name, $surname);