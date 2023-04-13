<?php

// Converting array to the string
echo '<pre>';
$hello = [
    'first' => "Hello,",
    'second' => "World",
    'third' => "!"
];
print_r(implode(' ',$hello));
echo '</pre>';
