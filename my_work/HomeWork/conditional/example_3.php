<?php


// Detection the leap years by Julian and Gregorian calendars

$year=2000;


// Calculation a leap year by Julian calendar
if ($year<0 or $year>3000) {
    echo "Дата введена некоректно";
} elseif 
($year<45) { 
    echo "Юліанський календар почав використовуватися після 45 року нашої ери, будь-ласка, введіть іншу дату";
} elseif ($year%4==0) {
echo "За Юліанським календарем, рік високосний";
} else {
    echo "За Юліанським календарем рік невисокосний";
}
echo '<br>';
// Detection a leap year by Gregorian calendar
switch ($year) {
    case $year<0:
        echo "Дата введена некоректно";
        
    case $year<1582:
        echo "Григоріанський календар був впроваджений у 1582 році, до цього року користуйтеся даними Юліанського календаря";
        break;
        
    case $year%400==0:
        echo "За Григоріанським календарем рік високосний";
        break;

    case $year%100==0;
        echo "За Григоріанським календарем рік невисокосний";
        break;
         
    case $year%4==0;
        echo "За Григоріанським календарем рік високосний";
        break;

    default:
    echo "За Григоріанським календарем рік невисокосний";
}