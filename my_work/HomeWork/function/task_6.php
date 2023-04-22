<?php
// work with array anf function
echo "<pre>";
$musik = [
    "Verdi" => "Il Trovator",
    "Mozart" => "Le Nozze di Figaro",
    "Rossini" => "Il barbiere di Sevilla",
    "Puccini" => "La Boheme",
    "Rachmaninov" => "The Miserly Knight",
    "Lysenko" => "Taras Bulba",
    "Tchaikovsky" => "La Dame "
];
function composer($musik) {
   print_r(array_keys($musik));
}
echo composer($musik);
echo "</pre>";