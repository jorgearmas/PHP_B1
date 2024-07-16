<?php

//if - else
$asientos_disponibles = 4;

if($asientos_disponibles > 0){
    echo "Si hay cupo\n";
}
else{
    echo "No hay cupo, perdiste\n";
}

//if - elseif -else

$estado_pago = "aprobado";

if($estado_pago = "aprobado"){
    echo "Gracias por tu compra\n";
}
elseif ($estado_pago = "rechazado"){
    echo "Pago rechazado\n";
}
elseif ($estado_pago = "no procesado"){
    echo "Pago no procesado, intenta de nuevo\n";
}