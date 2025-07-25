<?php
function afficherTableMultiplication($nombre) {
    for ($i = 1; $i <= 10 ; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat<br>";
    }
}

afficherTableMultiplication(1);
?>