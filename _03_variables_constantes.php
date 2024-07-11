<?php
 
 //Declaracion de variables
 $numero_1 = 8;
 echo "$numero_1\n";
 /* PHP no es tipado por lo que admite multiples tipos en la misma variable */
 $numero_1 = 6.78;
 echo "$numero_1\n";

 //Declaracion de constantes con define
 define("NUMERO_PI", 3.1416);
 echo NUMERO_PI . "\n";