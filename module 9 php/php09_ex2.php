<?php
// Récupération sécurisée
$search = trim($_GET['search'] ?? '');
$search = htmlspecialchars($search, ENT_QUOTES);

// Affichage
if ($search === '') {
    
    echo "<p style='color:red;'>Veuillez entrer un terme de recherche.</p>";
} else {
    echo "<p>Résultat pour : <strong>$search</strong></p>";
}
?>