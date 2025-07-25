<?php
session_start();

$users = [
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
    'bob' => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];

$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifiant = $_POST['identifiant'] ?? '';
    $motdepasse = $_POST['motdepasse'] ?? '';

    if (isset($users[$identifiant])) {
        $hash = $users[$identifiant]['password'];
        if (password_verify($motdepasse, $hash)) {
            $_SESSION['utilisateur'] = $identifiant;
            $_SESSION['role'] = $users[$identifiant]['role'];
            header('Location: php10_f2.php');
            exit;
        } else {
            header('Location: php10_f3.php');
            exit;
        }
    } else {
        header('Location: php10_f3.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container column">
    <h1>Connexion</h1>
    <form method="post">
      <label for="identifiant">Identifiant :</label>
      <input type="text" id="identifiant" name="identifiant" required>

      <label for="motdepasse">Mot de passe :</label>
      <input type="password" id="motdepasse" name="motdepasse" required>

      <button type="submit">Se connecter</button>
    </form>
  </div>
</body>
</html>