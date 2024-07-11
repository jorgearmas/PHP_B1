<?php

$numero = "5";
var_dump($numero);
echo "\n";

//Castear de string a int
$numero = (int) $numero;
var_dump($numero);
echo "\n";

//Castear de float a int
$numero1 = 5.89;
var_dump($numero1);
echo "\n";

$numero2 = (int) $numero1;
var_dump($numero2);
echo "\n";
/* Al hacer un casteo explicito de float a int se pierde exactitud, el interprete de PHP no redondea el número float, en su lugar 'trunca' o 'corta' los decimales */

// Castear de int a float
$bandera = 1;
var_dump($bandera);
echo "\n";

$bandera = (bool) $bandera;
var_dump($bandera);
echo "\n";
