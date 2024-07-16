<?php


$session = 0;

do{

    $cantidad = readline(">> Ingrese el monto en donaciones: ");
    if($cantidad >= 100){
        echo "Su dinero ha sido retirado\n";
    }else{
        echo "No puede retirar el dinero, necesita al menos 100 en donaciones\n";
    }

    $session = readline(">> Desea continuar? ");

}while($session==1);