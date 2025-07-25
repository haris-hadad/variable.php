<?php
$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

echo "<h2>Résultats des élèves :</h2>";

foreach ($eleves as $nom => $notes) {
    $somme = 0;
    $nb_matieres = count($notes);

    foreach ($notes as $note) {
        $somme += $note;
    }

    $moyenne = $somme / $nb_matieres;

    if ($moyenne < 10) {
        $appreciation = "Échec";
    } elseif ($moyenne < 12) {
        $appreciation = "Peut mieux faire";
    } elseif ($moyenne <= 15) {
        $appreciation = "Bon travail";
    } else {
        $appreciation = "Excellent";
    }

    echo "$nom a une moyenne de " . number_format($moyenne, 2) . " : $appreciation<br>";
}

echo "<h2>Moyenne de la classe par matière :</h2>";

$totaux_matieres = [];
$nb_notes_matieres = [];

foreach ($eleves as $notes) {
    foreach ($notes as $matiere => $note) {
        if (!isset($totaux_matieres[$matiere])) {
            $totaux_matieres[$matiere] = 0;
            $nb_notes_matieres[$matiere] = 0;
        }

        $totaux_matieres[$matiere] += $note;
        $nb_notes_matieres[$matiere]++;
    }
}

foreach ($totaux_matieres as $matiere => $total) {
    $moyenne_matiere = $total / $nb_notes_matieres[$matiere];
    echo "Moyenne en $matiere : " . number_format($moyenne_matiere, 2) . "<br>";
}
?>