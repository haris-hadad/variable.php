<?php

function afficherNombres($debut, $fin, $type) {
    for ($i = $debut; $i <= $fin; $i++) {
        if ($type === "pair" && $i % 2 === 0) {
            echo $i . " ";
        } elseif ($type === "impair" && $i % 2 !== 0) {
            echo $i . " ";
        }
    }
    echo "<br><br>";
}

echo "Nombres pairs de 7 à 99 :<br>";
afficherNombres(7, 99, "pair");

echo "Nombres impairs de 59 à 169 :<br>";
afficherNombres(59, 169, "impair");
?>