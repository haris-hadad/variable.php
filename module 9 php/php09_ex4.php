<?php
$interets = $_POST['interets'] ?? [];

if (count($interets) < 2) {
    echo "<p style='color:red;'>Veuillez sélectionner au moins 2 centres d’intérêt.</p>";
} else {
    echo "<h2>Vos centres d’intérêt :</h2>";
    echo "<ul>";
    foreach ($interets as $interet) {
        $clean = htmlspecialchars($interet, ENT_QUOTES);
        echo "<li>✅ $clean</li>";
    }
    echo "</ul>";
}
?>