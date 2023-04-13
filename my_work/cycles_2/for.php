<?php

/**
 * Cycle "for"
 */

 $week = [
    1 => 'Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятниця', 'Субота', 'Неділя'
 ];
 $weekDay=1;
 $month=[];

 for
 ($day=1; $day<31; $day++) {
    $month[$day]=$week[$weekDay];
    if ( $weekDay%7===0 ) {
        $weekDay=1;
    } else {
        $weekDay++;
    }
}
 
echo "<pre>";
print_r($month);
echo "</pre>";
