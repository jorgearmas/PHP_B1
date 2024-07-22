<?php

//La funciones nos ayudan a agrupar código en un solo lugar. Esto nos pertime que no necesitemos repetir código, únicamente necesitamos invocar la función cuando la necesitemos.

function get_pokemon(){

    $numero_aleatorio = rand(1, 5);
    echo "> El númro aleatorio es $numero_aleatorio\n";

    switch($numero_aleatorio){
        case 1:
            echo "> Pikachu\n";
            break;
        case 2:
            echo "> Charmander\n";
            break;
        case 3:
            echo "> Mewtwo\n";
            break;
        default:
            echo "> No existe Pokemon\n";
            break;                 
    }
}

for ($i=0; $i < 5; $i++){ 
    get_pokemon();
}