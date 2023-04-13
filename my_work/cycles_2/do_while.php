<?php


/* 
cycle with post-conditional while
*/
$week = [
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thirsday",
    "Friday",
    "Saturday",
    "Sunday"
];
$day=0;
do {
    echo $week[$day]."<br>";
    $day++;
    if ($day>4) {
        break;
    }
} while ($day<count($week));
