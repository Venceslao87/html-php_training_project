<?php


function users(string $value1, string $value2):string{
    return $value1.' '.$value2; 
}

function newLine(int $num) {
    for($i=0; $i<$num; $i++) {
        echo "<br>";
    }
}
echo users('Петро', 'Косач');
newline(1);
echo users('Тарас', 'Шевченко');
newline(1);
echo users('Богдан', 'Хмельницький');
