<?php

// Fill array by numbers from 1 to 100, with cycle "for"

$arr=[];
for($i=1; $i<=100;$i++) {
array_push($arr, $i);
}
echo "<pre>";
print_r($arr);
echo "</pre>";



