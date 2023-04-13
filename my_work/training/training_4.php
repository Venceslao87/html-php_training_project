<?php


$arr = [
    12,46,37,29,90
];
foreach ($arr as $key => $a) {
    if ($key%2===0 && $key!=0) {
        print $a . "<br>";
    }
}


