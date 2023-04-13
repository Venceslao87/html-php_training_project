<?php

// work with multi-arrays

echo '<pre>';
$arr = [
    'cms'=> [
        'joomla',
        'wordpress',
        'drupal'
    ],
    'colors' => [
        'blue'=>'блакитний',
        'red'=> 'червоний',
        'green'=> 'зелений'
    ]
    ];
echo 'Мій улюблений колір — '.$arr['colors']['green'];
//print_r($arr['colors']['green']); --> other variant
echo '</pre>';