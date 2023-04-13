<?php

// Output on screen determinate element array
echo '<pre>';
$color = [
    'ukr' => [
        'блакитний',
        'червоний',
        'зелений'
    ],
    'en' => [
        'blue',
        'red',
        'green'
    ]
    ];
print_r($color['en'][2]);
echo '</pre>';