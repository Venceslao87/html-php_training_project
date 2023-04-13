<?php

/*
Керуючи елементи
*/

$cash_data=5;

switch ($cash_data) {
    case $cash_data>0 and $cash_data<30:
    echo "You have time to pay your credit";
    break;

    case $cash_data==30:
    echo "There is last day to pay your credit";
    break;

    case $cash_data==31:
    echo "Your have first overdue day";
    break;

    case $cash_data<0:
    case $cash_data>31:
    echo "Invalid date. Please, put correct data in the form";
    break;

    default:
    echo "Упс. Щось пішло не так!!!";

            
}