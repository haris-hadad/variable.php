<?php

$prenom = trim($_POST['prenom'] ?? '');
$prenom = htmlspecialchars($prenom, ENT_QUOTES);


if ($prenom === '') {
    echo "<p style='color:red;'>Erreur : le prénom est obligatoire.</p>";
} else {
    echo "<h1>Bonjour $prenom !</h1>";
}
?>