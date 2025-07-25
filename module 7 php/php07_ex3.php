<?php
function calculimpots($revenu) {
    $impot = 0;

    if ($revenu > 50000) {
        $impot += ($revenu - 50000) * 0.35;
        $revenu = 50000;
    }
    if ($revenu > 35000) {
        $impot += ($revenu - 35000) * 0.25;
        $revenu = 35000;
    }

    if ($revenu > 20000) {
        $impot += ($revenu - 20000) * 0.18;
        $revenu = 20000;
    }

    if ($revenu > 10000) {
        $impot += ($revenu - 10000) * 0.10;
        $revenu = 10000;
    }

    return $impot;
}

echo "Impôt pour 16 000 € : " . calculImpots(16000) . " €<br>";
echo "Impôt pour 38 000 € : " . calculImpots(38000) . " €<br>";
echo "Impôt pour 64 000 € : " . calculImpots(64000) . " €<br>";
