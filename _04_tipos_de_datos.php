<?php

//Enteros
$numero = 23;
var_dump($numero);
echo "\n";

//Float
$numero = 25.6;
var_dump($numero);
echo "\n";

//String
$numero = "55";
var_dump($numero);
echo "\n";

//Auto conversion de tipos
$numero_conv = $numero + 2;
var_dump($numero_conv); //Conviersion de '$numero' a int para efectuar la suma
echo "\n";
/* La auto conversion de '$numero' solo se da en tiempo de ejecución, si se inspecciona '$numero' de nuevo obtendremos que continua siendo un string*/
var_dump($numero);
echo "\n";
/* Las auto conversiones se dan de lo inexacto a lo exacto
   string -> int -> float 
   Esto aplica si y solo si el string se considera como numerico, por ejemplo:
   ("57" + 3) ó
   ("4.3" + 0.7) */

