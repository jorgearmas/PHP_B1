<?php

//El ciclo for integra a veriable de control, la condición y el incremento/decremento en una sola línea
for ($contador = 0; $contador < 10; $contador++){
    echo "$contador \n";
}

echo "\n";

//Ciclo for con multiples argumentos
for ($i = 0, $j = 0; $i < 10; $i++, $j += 2){
    echo "'i' es igual a: ($i) y 'j' es igual a: ($j)\n";
}