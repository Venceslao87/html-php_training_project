<?php 


/**
 *  Cycle "foreach"
 */

 $nums = [
    2,
    5,
    86,
    45,
    35,
    66
 ];
 foreach ($nums as $num) {
    if ($num%2===0) {
        echo $num. "<br>";
    }
 }