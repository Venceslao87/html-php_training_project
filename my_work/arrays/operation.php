<?php

/**
 * Operation with arrays
 * 
 * isset
 * unset
 * cout
 * array_push
 * in_array
 * implode
 * array_keys
 * array_values 
 */

echo "<pre>";
/*
I---> Розбір функції isset, яка перевіряє інсування певного елементу за ключем.
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];
if (isset($week[1])) {
    print $week[1];
} else {
    print "There aren't key with this element";
}

*/

/*
II---> Розбір функції unset, яка видаляє 
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];
unset($week[3]);
print_r($week);

*/
/*
III---> Функція підрахунку елементів, з яких складений масив
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];
echo "Кількість елементів в масиві дорівнює: ";
print_r( count($week));

*/
/*
IV---> Функція додавання одного чи декілька елементів в кінці масиву — array_push
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];
array_push($week, "today", "tomorrow");
print_r($week);
*/
/*
V---> Функція підтвердження наявності того чи іншого елементу массиву (булево значення) — in_array() 
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];

var_dump(in_array("Sunday",$week));
*/
/*
VI---> Функція, що поєднує масив в строку за допомогою роздільника (implode)
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];

print_r(implode(" ",$week));
*/
// VII&VIII---> Функції виводу нових масивів, які складаються або тільки з ключів, або тільки зі значень
// array_keys() та array_values()
$week = [
    1=> "Monday",
    2=> "Tuesday",
    3=> "wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
];
print_r(array_keys($week));
print_r(array_values($week));


echo "</pre>";
