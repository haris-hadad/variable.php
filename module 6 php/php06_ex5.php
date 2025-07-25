<?php
$commandes = [
    ["client" => "Alice",  "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob",    "montant_ht" =>  75, "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David",  "montant_ht" =>  50, "statut" => "en attente"]
];

    $ca_total_ht = 0;
    $ca_total_ttc = 0;
    $ca_en_attente_ht = 0;    

foreach ($commandes as $commande) {
    $client = $commande["client"];         
    $ht     = $commande["montant_ht"];     
    $statut = $commande["statut"];       
    $ttc = $ht * 1.20;

    $ca_total_ht += $ht;
    $ca_total_ttc += $ttc;

    if ($statut === "en attente") {
    $ca_en_attente_ht += $ht;
    }
    $ht_formate  = number_format($ht, 2);
    $ttc_formate = number_format($ttc, 2);
    echo "Commande de $client : $ht_formate € HT, $ttc_formate € TTC – $statut<br>";
}


     $pourcentage_en_attente = ($ca_en_attente_ht / $ca_total_ht) * 100;

    echo "CA total HT : " . number_format($ca_total_ht, 2) . " €<br>";
    echo "CA total TTC : " . number_format($ca_total_ttc, 2) . " €<br>";
    echo "CA en attente : " . number_format($ca_en_attente_ht, 2) . " €<br>";
    echo "Pourcentage en attente : " . number_format($pourcentage_en_attente, 2) . " %<br>";                                    