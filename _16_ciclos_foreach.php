<?php

//El ciclo forach es usado para recorrer arreglos sin necesidad de especificar el tamaño del arreglo

$tienda_de_cafes = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
];

//Accediendo solo a los valores
foreach ($tienda_de_cafes as $precio) {
    echo "El cafe cuesta: $ $precio USD\n";
}

echo "\n";

//Accediendo solo a las llaves y los valores
foreach ($tienda_de_cafes as $nombre => $precio) {
    echo "El cafe '$nombre' cuesta: $ $precio USD\n";
}

echo "\n";