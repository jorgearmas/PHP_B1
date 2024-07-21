<?php

// El ciclo do-while se ejecuta al menos una vez sin importar si la condicion se cumple o no

$usernames = [
    "lucas",
    "max",
    "franco"
];

do {
    $username = readline("Ingresa usuario: ");
    echo "\n";
} while(in_array($username, $usernames));

print_r($usernames);

?>