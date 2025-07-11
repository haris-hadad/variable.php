<?php 
const tva = 0.2 ;

$prixht = 100 ;

$prixttc = ($prixht * tva) + $prixht ;

echo "$prixttc";