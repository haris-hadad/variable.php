<?php
$hash = password_hash('secret123', PASSWORD_DEFAULT);
echo "Le hash de 'secret123' est : <br><code>$hash</code>";
?>