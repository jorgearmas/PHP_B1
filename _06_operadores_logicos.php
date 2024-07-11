<?php

//Variables booleanas a operar
$gatos_felinos = true;
$gatos_4_patas = true;
$gatos_vuelan = false;
$gatos_programan = false;

//AND - Todas las expresiones true =  true
var_dump($gatos_felinos && $gatos_4_patas);
echo "\n";

//OR - Al menos una expresion true =  true
var_dump($gatos_4_patas || $gatos_vuelan);
echo "\n";

var_dump($gatos_programan || $gatos_vuelan);
echo "\n";

//NOT - Invertir valor de verdad de la expresion o expresiones
var_dump(!$gatos_felinos);
echo "\n";
