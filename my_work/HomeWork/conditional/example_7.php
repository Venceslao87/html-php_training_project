<?php

// Identify, what season is match paticular number

$num=3;
$result=null;

switch ($num) {

    case 1:
    echo 'Winter';
    break;

    case 2:
    echo 'Spring';
    break;

    case 3:
    echo 'Summer';
    break;

    case 4;
    echo 'Autumn';
    break;
    
    default:
    echo 'Невірне значення';
}

echo '<br>';

if ($num==1) {
    echo $result="Winter"; 
} elseif ($num==2) {
    echo $result="Spring";
} elseif ($num==3) {
    echo $result="Summer";
} elseif ($num==4) {
    echo $result="Autumn";
}
else { 
    echo 'Невірне значення';
}

