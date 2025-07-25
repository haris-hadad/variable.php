<?php
$mdp = $_POST['mdp'] ?? '';
$confirmation = $_POST['confirmation'] ?? '';

// Sécurité basique
$mdp = trim($mdp);
$confirmation = trim($confirmation);

if ($mdp === '' || $confirmation === '') {
    echo "<p style='color:red;'>Les deux champs sont obligatoires.</p>";
} elseif (strlen($mdp) < 6) {
    echo "<p style='color:red;'>Mot de passe trop court (minimum 6 caractères).</p>";
} elseif ($mdp !== $confirmation) {
    echo "<p style='color:red;'>Les mots de passe ne correspondent pas.</p>";
} else {
    // Chiffrer le mot de passe
    $hash = password_hash($mdp, PASSWORD_DEFAULT);
    echo "<p style='color:green;'>Mot de passe validé et chiffré :</p>";
    echo "<code>$hash</code>";
}
?>