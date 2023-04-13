<?php

/* 
Index array
*/

$arr=['one',2,3];
$arr[] = '5';
var_dump($arr);

print '<br>';
$new=['one', 4=> 2, 3, 4];
$new[10]='six';
var_dump($new);
print '<br>';
var_dump($new[0]);


