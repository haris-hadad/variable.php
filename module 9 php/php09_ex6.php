<?php
// Identifiants enregistrés (simulés)
$identifiantEnregistre = 'admin';
$motdepasseHash = '$2y$10$2TkxWYck0bqMeCGea3Qg8eBiNKRkIVD.wZZNUSjpsijZ9mSNUP73i'; // hash de "secret123"

// Récupération sécurisée
$identifiant = trim($_POST['identifiant'] ?? '');
$motdepasse = $_POST['motdepasse'] ?? '';

// Vérification de l'identifiant
if ($identifiant !== $identifiantEnregistre) {
    echo "<p style='color:red;'>Identifiant incorrect.</p>";
    exit;
}

// Vérification du mot de passe avec password_verify
if (password_verify($motdepasse, $motdepasseHash)) {
    echo "<h1 style='color:green;'>Connexion réussie. Bienvenue $identifiant !</h1>";
} else {
    echo "<p style='color:red;'>Mot de passe incorrect.</p>";
}
?>