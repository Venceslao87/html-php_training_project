<?php
/*
Операції порівняння
*/

// рівність після перетворення типів
echo '2=="2" ';
var_dump (2=="2");
echo '<br>';

echo '2=="abc"';
var_dump (2=="abc");
echo '<br>';

echo '7==7';
var_dump (7===7);
echo '<br>';

//тотжньо рівні (мають один і той самий тип)
echo '4==="4"';
var_dump (7==="7");
echo '<br>';

echo '4===4';
var_dump (4===4);
echo '<br>';

//оператор "не дорівнює" (після перетворення типів)

echo '2!="1"';
var_dump (2!=1);
echo '<br>';

// тотожньо не дорівнює (має один і той самий тип)
echo '4!=="3"';
var_dump (4!=="3");
echo '<br>';

echo '10!==3';
var_dump (10!==3);
echo '<br>';
echo '3!==-6';
var_dump (3!==-6);
echo '<br>';

// менше (строго)
echo '3<5';
var_dump (3<5);
echo '<br>';

echo '4<"10"';
var_dump (4<"10");
echo '<br>';

// більше (строго)
echo '3>5';
var_dump (3>5);
echo '<br>';

// менше або дорівнює
echo '3<=5';
var_dump (3<=5);
echo '<br>';

echo '3<="5"';
var_dump (3<="5");
echo '<br>';
// більшк або дорівнює
echo '3>=5';
var_dump (3>=5);
echo '<br>';

echo '3>="3"';
var_dump (3>="3");
echo '<br>';









