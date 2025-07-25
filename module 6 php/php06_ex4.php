<?php
$temperatures = [30, 32, 34, 30, 35, 34, 31];
$somme = 0;

foreach ($temperatures as $temp) {
    $somme += $temp;              
}

$moyenne = $somme / count($temperatures);
echo "La température moyenne est : " . number_format($moyenne, 2) . "°C";


