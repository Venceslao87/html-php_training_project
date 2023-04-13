<?php

/*
Керівні конструкції
*/

/* In this document we will trying to use a new cycle`s construction
"switch_case 
*/

$end_data=65;

switch ($end_data) {
    case  $end_data<30 and $end_data>0:
        echo "Ви маєте час для погашення кредиту";
        break;

        case $end_data==30:
        echo "Сьогодні останнній день, для погашення кредиту";
        break;

        case $end_data==31:
        echo "Ви маєте прострочений платіж";
        break;

        case $end_data<=0:
            echo "Дата не може бути від'ємною";
            break;

            default:
            echo "Такого формату дати не існує"; 
        
}
