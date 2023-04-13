<?php

// Change a day of week in determinate language
echo "<pre>";
$lang="ukr";
$day=4;
$arr_ukr = [
   1=> "Понеділок",
   2=> "Вівторок",
   3=> "Середа",
   4=> "Четвер",
   5=> "П\'ятниця",
   6=>  "Субота",
   7=> "Неділя"
];
$arr_eng = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "Wednesday",
    4=> "Thirsday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday"
];
if ($day>7) {
    echo "Виберіть коректний день";
} elseif ($lang=="ukr") {
    print_r($arr_ukr[$day]);
} elseif ($lang=="eng") {
    print_r($arr_eng[$day]);
} elseif ($lang!="eng" or $lang!="ukr") {
    echo "Виберіть коректну мову";
}
echo "</pre>";