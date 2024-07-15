<?php

$edades = [18, 22, 40, 34];

//count() - Contar # de elmentos del arreglo
echo count($edades);
echo " -- -- --\n";

//array_push() - Añadir elemento al final del arreglo
array_push($edades, 13); 
var_dump($edades);
echo " -- -- --\n";

//is_array() - Determinar si un arreglo o no
$no_arreglo = "";
var_dump(is_array($no_arreglo));
var_dump(is_array($edades));
echo " -- -- --\n";

//explode() - Convertir un string en un arreglo
$lista_de_frutas = "fresa, cereza, manzana";
$lista_de_frutas_array = explode(",",$lista_de_frutas);
var_dump($lista_de_frutas_array);
echo " -- -- --\n";

//implode() - Convertir un arreglo a string
$lista_de_frutas_array = ["fresa", "cereza", "manzana"];
$lista_de_frutas = implode(", ",$lista_de_frutas_array);
var_dump($lista_de_frutas);