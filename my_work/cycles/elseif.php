<?php
/**
 * Керуючі конструкції
 */

 // оператор if - elseif - else

 $hour=6;

 if ($hour<12) {
    echo 'Доброго ранку';
 } elseif ($hour==12) {
    echo 'Час полудня';
 } else { 
echo 'Вже вечір';
 }
