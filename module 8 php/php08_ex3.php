<?php
$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";

$produits_bruts = explode(",", $panier);
$produits_valides = [];
 
foreach ($produits_bruts as $item) {
    $parts = explode(":", $item);

    if (count($parts) === 2) {
        $nom = strtolower(trim($parts[0]));
        $prix = trim($parts[1]);

        if (is_numeric($prix)) {
            $produits_valides[$nom] = floatval($prix);
        }
    }
}

var_dump($produits_valides);

echo "Nombre de produits valides : " . count($produits_valides) . "<br>";

$total = array_sum($produits_valides);
echo "Prix total du panier : " . number_format($total, 2) . " €";
?>