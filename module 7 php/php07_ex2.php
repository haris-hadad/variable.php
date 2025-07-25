<?php
function afficherEtoile($nbr) {
    for ($i = 1; $i <= $nbr; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

afficherEtoile(5);
