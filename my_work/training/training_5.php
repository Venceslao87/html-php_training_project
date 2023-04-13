<?php 

// training cycle "foreach" with association

$classrating = [
    "Шевченко" => 8,
    "Петренко" => 9,
    "Іваненко" => 5,
    "Ханенко" => 10,
    "Скляренко" => 12,
    "Ткаченко" => 10,
    "Маляр" => 6
];
foreach ($classrating as $surname => $value) {
    if($value>=10) {
        echo "Відмінно". "<br>";
        echo "Учні: ".$surname. " — ".$value."<br>";
    } elseif ($value>6 && $value<9) {
        echo "Добре". "<br>";
        echo "Учні: ".$surname. " — ".$value."<br>";
    } else {
        echo "Задовільно". "<br>";
        echo "Учні: ".$surname. " — ".$value."<br>";
}
}