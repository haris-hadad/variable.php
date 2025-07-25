<?php
$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

foreach ($classe as $eleve) {
    $moyenne = ($eleve["maths"] + $eleve["francais"] + $eleve["histoire"]) / 3;
    $admission = $moyenne >= 10 ? "Admis(e)" : "Non admis(e)";

    echo "Prénom : " . $eleve["prenom"] . "<br>";
    echo "Moyenne : " . round($moyenne, 2) . "<br>";
    echo "Résultat : " . $admission . "<br><br>";
}
?>
