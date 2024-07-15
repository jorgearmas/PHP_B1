<?php
/* Los arreglos asociativos son arreglos con sub-índices identificados, de esta manera asociamos el valor en el sub-índice con un identificador */

//Declaración y asignación
$edades = [
    "Carlos" => 18,
    "Marcela" => 20,
    "Juan" => 40,
];

//Accediendo al arreglo
echo "La edad de Carlos es: {$edades['Carlos']}\n";

//Declaración y asignación
$cafes = [
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70,
];

//Accediendo al arreglo
echo "El precio del capuccino es: {$cafes['Capuccino']}\n";

//Arreglos que contienen arreglos
$personas = [
    "Carlos" => [
        "edad" => 25,
        "dni" => 456978,
    ],
    "Lucas" => [
        "edad" => 18,
        "dni" => 786312,
    ],
];

echo "La información de Carlos es -> \n- Edad: {$personas['Carlos']['edad']}\n- DNI: {$personas['Lucas']['dni']}";