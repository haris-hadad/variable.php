<?php
$title = "Modules";
$css = "modules.css";

include 'includes/header.php';

$modules = [
    1 => ["Introduction à PHP", "Syntaxe de base", "Variables"],
    2 => ["Conditions", "Opérateurs", "Ternaires"],
    3 => ["Boucles", "for", "while", "foreach"],
    4 => ["Fonctions", "Paramètres", "Valeurs de retour"],
    5 => ["Tableaux simples", "Associatifs", "Multidimensionnels"],
    6 => ["Formulaires", "Méthodes GET & POST"],
    7 => ["Superglobales", "Sécurité"],
    8 => ["Sessions", "Connexion utilisateur"],
    9 => ["Include / Require", "Templates"],
    10 => ["Structure de projet", "Arborescence"],
    11 => ["CSS personnalisé", "Responsive"],
    12 => ["Évaluation finale", "Présentation"]
];
?>
 <link rel="stylesheet" href="assets/css/modules.css">
<main>
    <section>
        <?php foreach ($modules as $numero => $contenu): ?>
            <h2>Module <?= $numero ?></h2>
            <ul>
                <?php foreach ($contenu as $item): ?>
                    <li><?= $item ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>