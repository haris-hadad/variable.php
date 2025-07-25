<?php
session_start();

if (!isset($_SESSION['utilisateur'])) {
    header('Location: php10_f1.php');
    exit;
}

$prenom = htmlspecialchars($_SESSION['utilisateur']);
$role = htmlspecialchars($_SESSION['role']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Tableau de bord</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container column">
    <h1>Bienvenue <?= $prenom ?>,<br>vous avez le rôle <strong><?= $role ?></strong>.</h1>
    <p>Ceci est une page réservée aux utilisateurs connectés.</p>
    <form method="post" action="php10_f4.php">
      <button type="submit">Se déconnecter</button>
    </form>
  </div>
</body>
</html>