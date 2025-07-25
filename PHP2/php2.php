<?php
// === Données ===
$commandes =  [
['id' => 1,'client' => 'Harry', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 2,'client' => 'Hermione','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 3,'client' => 'Ron', 'potion' => 'Courage','prix' => 29.99, 'etat' => 'préparation'],
['id' => 4,'client' => 'Drago', 'potion' => 'Puissance','prix' => 59.00, 'etat' => 'payé'],
['id' => 5,'client' => 'Luna','potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
['id' => 6,'client' => 'Neville', 'potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 7,'client' => 'Ginny', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'préparation'],
['id' => 8,'client' => 'Sirius','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
['id' => 9,'client' => 'Remus', 'potion' => 'Loup-Garou', 'prix' => 70.00, 'etat' => 'impayé'],
['id' => 10, 'client' => 'Tonks', 'potion' => 'Caméléon', 'prix' => 56.20, 'etat' => 'préparation'],
['id' => 11, 'client' => 'Fred','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 12, 'client' => 'George','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 13, 'client' => 'Dumbledore','potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'payé'],
['id' => 14, 'client' => 'Hagrid','potion' => 'Puissance','prix' => 59.00, 'etat' => 'préparation'],
['id' => 15, 'client' => 'McGonagall','potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
['id' => 16, 'client' => 'Cho', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'impayé'],
['id' => 17, 'client' => 'Seamus','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 18, 'client' => 'Dean','potion' => 'Courage','prix' => 29.99, 'etat' => 'payé'],
['id' => 19, 'client' => 'Firenze', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 20, 'client' => 'Krum','potion' => 'Courage','prix' => 29.99, 'etat' => 'impayé'],
['id' => 21, 'client' => 'Fleur', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'payé'],
['id' => 22, 'client' => 'Bill','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 23, 'client' => 'Molly', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'préparation'],
['id' => 24, 'client' => 'Arthur','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
['id' => 25, 'client' => 'Percy', 'potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
['id' => 26, 'client' => 'Lavande', 'potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
['id' => 27, 'client' => 'Trelawney', 'potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'préparation'],
['id' => 28, 'client' => 'Kingsley','potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 29, 'client' => 'Barty', 'potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'impayé'],
['id' => 30, 'client' => 'Dolores', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
];

$coutsProduction = [
    'Invisibilité'   => 15.00,
    'Explosion'      => 10.00,
    'Mémoire'        => 14.00,
    'Courage'        => 12.00,
    'Puissance'      => 18.00,
    'Rêves'          => 13.00,
    'Charme'         => 11.00,
    'Métamorphose'   => 20.00,
    'Loup-Garou'     => 22.00,
    'Caméléon'       => 16.00,
    'Sérénité'       => 25.00,
    'Concentration'  => 17.00,
];

// === Traitements ===
$totalCommandes = count($commandes);
$impayees = 0;
$preparation = 0;
$clients = [];
$caTotal = 0;
$caImpayee = 0;
$caPreparation = 0;

foreach ($commandes as $cmd) {
    $clients[$cmd['client']] = true;

    if ($cmd['etat'] === 'payé') {
        $caTotal += $cmd['prix'];
    } elseif ($cmd['etat'] === 'impayé') {
        $impayees++;
        $caImpayee += $cmd['prix'];
    } elseif ($cmd['etat'] === 'préparation') {
        $preparation++;
        $caPreparation += $cmd['prix'];
    }
}

$nombreClients = count($clients);

$pourcentageImpayee = $caTotal > 0 ? round(($caImpayee / $caTotal) * 100, 2) : 0;
$pourcentagePreparation = $caTotal > 0 ? round(($caPreparation / $caTotal) * 100, 2) : 0;

// Coût total
$coutProductionTotal = 0;
$potionStats = [];

foreach ($commandes as $cmd) {
    if ($cmd['etat'] === 'payé') {
        $potion = $cmd['potion'];
        $prix = $cmd['prix'];
        $cout = $coutsProduction[$potion] ?? 0;

        $coutProductionTotal += $cout;

        if (!isset($potionStats[$potion])) {
            $potionStats[$potion] = [
                'quantite' => 0,
                'prix_unitaire' => $prix,
                'ca_genere' => 0,
                'cout_total' => 0,
                'benefice' => 0
            ];
        }

        $potionStats[$potion]['quantite']++;
        $potionStats[$potion]['ca_genere'] += $prix;
        $potionStats[$potion]['cout_total'] += $cout;
        $potionStats[$potion]['benefice'] = $potionStats[$potion]['ca_genere'] - $potionStats[$potion]['cout_total'];
    }
}

$beneficeTotal = $caTotal - $coutProductionTotal;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Tableau de bord Boutique de potions</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 20px; background: #f9f9f9; }
        h1 { color: #333; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 8px; font-size: 1.1em; }
        .emoji { margin-right: 8px; }
        table { border-collapse: collapse; width: 100%; margin-top: 30px; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #efefef; }
    </style>
</head>
<body>

<h1>Tableau de bord - Boutique de potions</h1>

<ul>
    <li><span class="emoji">✅</span> Nombre total de commandes : <strong><?= $totalCommandes ?></strong></li>
    <li><span class="emoji">💸</span> Commandes impayées : <strong><?= $impayees ?></strong></li>
    <li><span class="emoji">🧪</span> Commandes en préparation : <strong><?= $preparation ?></strong></li>
    <li><span class="emoji">👥</span> Clients différents : <strong><?= $nombreClients ?></strong></li>
    <li><span class="emoji">💰</span> Chiffre d'affaires (payé) : <strong><?= number_format($caTotal, 2, ',', ' ') ?> €</strong></li>
    <li><span class="emoji">📉</span> CA impayé : <strong><?= number_format($caImpayee, 2, ',', ' ') ?> € (<?= $pourcentageImpayee ?> %)</strong></li>
    <li><span class="emoji">⏳</span> CA en préparation : <strong><?= number_format($caPreparation, 2, ',', ' ') ?> € (<?= $pourcentagePreparation ?> %)</strong></li>
    <li><span class="emoji">🪙</span> Bénéfice total : <strong><?= number_format($beneficeTotal, 2, ',', ' ') ?> €</strong></li>
    <li><span class="emoji">⚗️</span> Coût total de production : <strong><?= number_format($coutProductionTotal, 2, ',', ' ') ?> €</strong></li>
</ul>

<h2>🧾 Statistiques détaillées par potion</h2>
<table>
    <tr>
        <th>Potion</th>
        <th>Quantité vendue</th>
        <th>Prix unitaire (€)</th>
        <th>CA généré (€)</th>
        <th>Coût total (€)</th>
        <th>Bénéfice (€)</th>
    </tr>
    <?php foreach ($potionStats as $potion => $stats): ?>
    <tr>
        <td><?= htmlspecialchars($potion) ?></td>
        <td><?= $stats['quantite'] ?></td>
        <td><?= number_format($stats['prix_unitaire'], 2, ',', ' ') ?></td>
        <td><?= number_format($stats['ca_genere'], 2, ',', ' ') ?></td>
        <td><?= number_format($stats['cout_total'], 2, ',', ' ') ?></td>
        <td><?= number_format($stats['benefice'], 2, ',', ' ') ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>