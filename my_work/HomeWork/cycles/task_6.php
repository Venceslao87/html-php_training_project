<?php

// The result of the division variable to the number "2"

// From cycle "While"
$number=1000;
$n=null;
/*
while ($number>50) {
    $number=$number/2;
    $n++;
}
echo "Число дорівнює: " .$number. "<br>";
echo "Кількість ітерацій: ".$n;
*/

// From cycle "For"
for (; $number>50; $n++) {
    $number=$number/2;
}
echo "Число дорівнює: " .$number. "<br>";
echo "Кількість ітерацій: ".$n;
