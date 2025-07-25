<?php
$status = "livrée";

$message = match($status) {
    "en cours"  => "en cours",
    "expédiée"  => "expédiée",
    "livrée"    => "livrée",
    "annulée"   => "annulée",
    default     => "Statut inconnu",
};

echo $message;
?>

