<?php
$villes = ["Nice", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe", "Reims"];

echo "Il y a " . count($villes) . " villes.<br><br>";

foreach ($villes as $ville) {
    echo $ville.  "<br>";
}
