<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mon site PHP' ?></title>
    <link rel="stylesheet" href="assets/css/common.css">
</head>
<body>

<header class="header-light">
    <h1><?= $title ?? 'Mon site PHP' ?></h1>
    <nav>
        <ul class="nav-list">
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="modules.php">Modules</a></li>
            <li><a href="evaluation.php">Évaluation</a></li>
        </ul>
    </nav>
</header>