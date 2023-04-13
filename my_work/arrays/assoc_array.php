<?php


// Associative array
// value key is string | integer
echo "<pre>";
$arr=[
1 => "a",// 1
"5" => "b",// 5
2.5 => "c",// 2
true => "d",//true --> 1; false --> 0
null => "e"// "" empty string
];
print_r($arr);
print '<br>';

$boy=[
    "Peter"=>35,
    "John"=>29,
    "Tony"=>39
];
$boy["Jimmy"]=17;
print_r($boy);

echo "</pre>";
