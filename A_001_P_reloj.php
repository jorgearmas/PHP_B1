<?php

$segundos = readline("Ingrese el número de segundos: ");

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "$horas horas, $minutos minutos, $segundos segundos \n";
echo "--------------\n";

$horas = readline("Ingrese el número de horas: ");
$minutos = readline("Ingrese el número de minutos: ");
$segundos = readline("Ingrese el número de segundos: ");

$output = $horas * 3600;
$output += $minutos * 60;
$output += $segundos;

echo "Su tiempo en segundos: $output segundos";
