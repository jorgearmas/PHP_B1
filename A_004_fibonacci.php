<?php

$primero = 0;
$segundo = 0;
$resultado = 0;

for ($i = 0; $i < 10; $i++){

    if ($i == 0){
        echo "> Numero: $resultado\n";
    }
    elseif ($i == 1){
        $primero = 1;
        $segundo = 1;
        $resultado = 1;
        echo "> Numero: $resultado\n";
    }
    else{
        echo "> Numero: $resultado\n";
        $resultado = $primero + $segundo;
        $segundo = $primero;
        $primero = $resultado;    
    }
}