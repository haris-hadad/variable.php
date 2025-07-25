<?php
$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
    ];

    echo "<br><br>";

$produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25];

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Produit</th><th>Prix (€)</th><th>Stock</th><th>CA potentiel (€)</th></tr>";

foreach ($produits as $produit) {
    $ca = $produit['prix'] * $produit['stock'];
    echo "<tr>";
    echo "<td>{$produit['nom']}</td>";
    echo "<td>{$produit['prix']}</td>";
    echo "<td>{$produit['stock']}</td>";
    echo "<td>$ca</td>";
    echo "</tr>";
}

echo "</table>";