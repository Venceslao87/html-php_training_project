<?php 


$classrating = [
    "Шевченко" => 8,
    "Петренко" => 9,
    "Іваненко" => 5,
    "Ханенко" => 10,
    "Скляренко" => 12,
    "Ткаченко" => 10,
    "Маляр" => 6
];
$best=[];
$good=[];
$satisfact=[];
foreach ($classrating as $surname => $value ) {
if ($value<=12 && $value>=10) {
    $best[$surname]=$classrating[$surname];
    }
}
foreach ($classrating as $surname => $value ) {
    if ($value<=9 && $value>=7) {
        $good[$surname]=$classrating[$surname];
        }
}
foreach ($classrating as $surname => $value ) {
    if ($value<7) {
            $satisfact[$surname]=$classrating[$surname];
        }
}
echo "<pre>";
echo "Відмінні результати: "."<br>";
    print_r($best);
    echo "<br>";
    echo "Хороші результати: "."<br>";
    print_r($good);
    echo "<br>";
    echo "Задовільні результати: "."<br>";
    print_r($satisfact);
    echo "</pre>";



