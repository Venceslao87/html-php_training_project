<?php

/* 
* multi arrays
*/
echo "<pre>";
$todo = [
    "Thirsday" => [
        'Go to the work',
        'Get my vocal lesson'
    ],
    "Saturday" => [
        'Go to the school (my work)',
        'Learning PHP language'
    ]
    ];
    $thirsday=$todo['Thirsday'];

    print_r($thirsday[0]).'<br>';
    print_r($todo["Thirsday"][1]);
echo "</pre>";
