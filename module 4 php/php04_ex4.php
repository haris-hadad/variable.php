<?php
$temperature = 15;

$message = ($temperature < 10)
    ? "Froid":
    (($temperature <= 20)
        ? "Doux":
         "Chaud");

echo $message;
?>

