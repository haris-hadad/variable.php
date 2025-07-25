<?php
$couleur = $_POST['couleur'] ?? '';

// Vérification
if ($couleur === '') {
    echo "<p style='color:red;'>Veuillez choisir une couleur.</p>";
    exit;
}

// Texte affiché
$nomCouleur = [
    'red' => 'ROUGE',
    'green' => 'VERT',
    'blue' => 'BLEU'
];

// Affichage
if (array_key_exists($couleur, $nomCouleur)) {
    $nom = $nomCouleur[$couleur];
    echo "<h1 style='color:$couleur;'>Vous avez choisi la couleur $nom</h1>";
} else {
    echo "<p style='color:red;'>Valeur invalide.</p>";
}
?>