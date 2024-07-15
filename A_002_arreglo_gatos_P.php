<?php
//nombre, ocupacion, color fav, comidas fav y no fav
$gatos = [
    'max' => [
        'ocupacion' => "",
        'color' => "",
        'comida' => [
            'favorita' => "",
            'no favorita' => ""
        ],
        
    ],
    'lucas' => [
        'ocupacion' => "",
        'color' => "",
        'comida' => [
            'favorita' => "",
            'no favorita' => ""
        ],
        
    ],
    'jonas' => [
        'ocupacion' => "",
        'color' => "",
        'comida' => [
            'favorita' => "",
            'no favorita' => ""
        ],
        
    ]    
];

$session = 0;

do{

    $gato_search = readline("Ingrese nombre del gato a cargar: ");
    
    if(array_key_exists($gato_search, $gatos)){
        echo "\n";
        $ocupacion = readline(" >> Ingrese ocupación de ($gato_search): ");
        $gatos[$gato_search]['ocupacion'] = $ocupacion;
        echo "\n";
        $color = readline(" >> Ingrese color de ($gato_search): ");
        $gatos[$gato_search]['color'] = $color;
        echo "\n";
        $comida_fav = readline(" >> Ingrese comida favorita de ($gato_search): ");
        $gatos[$gato_search]['comida']['favorita'] = $comida_fav;
        echo "\n";
        $comida_no_fav = readline(" >> Ingrese comida NO favorita de ($gato_search): ");
        $gatos[$gato_search]['comida']['no favorita'] = $comida_no_fav;
        echo "\n";
    }else{
        echo " >> El gato ingresado no existe";
    }

    $session = readline("\n ----> Desea continuar? ");

}while ($session == 1);

echo "Estado del arreglo: ";
print_r($gatos);


