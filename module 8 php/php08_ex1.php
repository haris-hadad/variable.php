<?php

$chaine = "12,5,abc,32,-7,42";
$elements = explode(",", $chaine);

$numeriques = [];
foreach ($elements as $element) {
    if (is_numeric($element)) {
        $numeriques[] = intval($element); 
    }
}

var_dump($numeriques);

echo "Minimum : " . min($numeriques) . "\n";
echo "Maximum : " . max($numeriques) . "\n";
?>