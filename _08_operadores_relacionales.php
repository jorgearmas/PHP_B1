<?php

$a = 5;
$b = 5;
$c = 9;
$d = 2;
$f = "5";

//IGUALDAD

var_dump($a == $b);
var_dump($a == $c);

//IGUALDAD ABSOLUTA - Comparar valores y tipos

var_dump($a == $f);

//DIFERENCIA

var_dump($a != $b);
var_dump($a != $c);

//DIFERENCIA ABSOLUTA - Comparar valores y tipos

var_dump($a !== $b);
var_dump($a !== $f);

//MENOR QUE

var_dump($c < $b);
var_dump($d < $b);

//MAYOR QUE

var_dump($c > $b);
var_dump($d > $b);

//MENOR IGUAL QUE

var_dump($a <= $b);
var_dump($c <= $b);
var_dump($d <= $b);

//MAYOR IGUAL QUE

var_dump($a >= $b);
var_dump($c >= $b);
var_dump($d >= $b);
echo "-----------" . "\n";

/*NAVE ESPACIAL - Devuelve -1 si el numero a la izq. es menor
                  que el que está a la derecha
                - Devuelve 0 si ambos números son iguales
                - Devuelve 1 si el numero a la izq. es mayor
                  que el que está a la derecha */

echo 2 <=> 1;
echo "\n";
echo 1 <=> 2;
echo "\n";
echo 2 <=> 2;
echo "\n";
echo "-----------" . "\n";

/* FUSION DE NULL - Si una variable no essta definida entonces el operador tomara la variable definida mas próxima como variable operable */

$edad_mike = 23;

echo $edad_lucas ?? $edad_cookie ?? $edad_mike;
