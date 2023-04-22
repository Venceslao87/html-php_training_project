<?php

// work with function and array


function go($key) {
    $week = [
        1 => 'Понеділок', 'Вівторок','Середа','Четвер','П\'ятниця','Субота','Неділя'];
    return $week[$key];
}

echo go(2);

