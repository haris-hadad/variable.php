<?php
$form = [
  "nom" => "   ",
  "age" => "28",
  "email" => ""
];

foreach ($form as $champ => $valeur) {
    if (!isset($valeur) || trim($valeur) === "") {
        echo "Erreur : Le champ '$champ' est vide ou non défini.<br>";
    } elseif ($champ === "age") {
        if (!is_numeric($valeur) || $valeur <= 0) {
            echo "Erreur : L'âge doit être un nombre supérieur à 0.<br>";
        } else {
            echo "Champ 'age' valide<br>";
        }
    } else {
        echo "Champ '$champ' valide<br>";
    }
}
?>