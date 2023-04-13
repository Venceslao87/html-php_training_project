<?php
// Determinate, in what quarter is minute`s arrow in the hour

$min=rand(0,59);
if ($min<15) {
   echo 'It\'s first quarter'; 
} elseif ($min<30 and $min>=15) {
    echo 'It\'s second quarter';
} elseif ($min<45 and $min>=30) {
    echo 'It\'s third quarter';
} elseif ($min=59 and $min>=45) {
    echo 'It\'s fourth quarter';
}
echo '<br>' .$min;
