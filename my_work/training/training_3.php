<?php
// training project for switch_case

define('SUM','+');
define('DIFF','-');
define('MULTIPLY','*');
define('DIVISION','/');
define('EXP','^');

$operator=EXP;
$a=20;
$b=4;
$result=null;
switch ($operator) {
    case SUM: 
    $result=$a+$b;
    break;

    case DIFF:
    $result=$a-$b;
    break;
    
    case MULTIPLY:
    $result=$a*$b;
    break;

    case DIVISION:
    $result=$a/$b;
    break;

    case EXP:
    $result=$a**$b;
    break;
    
    defaut:
    echo 'Жодних дій не виконувалось';
}
if (isset($result)) {
    echo $a."$operator".$b."=".$result;
}