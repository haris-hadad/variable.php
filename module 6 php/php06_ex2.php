<?php
$eleves = [
    "Alice" => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David" => 11
];


$moyenne_obtenue = 0;

foreach ($eleves as $nom => $note) {
    echo "$nom a obtenu $note/20<br>";

    if ($note >= 10) {
        $moyenne_obtenue++;
    }
}

echo "<br>Nombre d'élèves ayant obtenu la moyenne : $moyenne_obtenue";

