<?php
$carros = [
    'LKM-2367' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'LXT-2207' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'BHT-0976' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'DRV-5634' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
];

foreach($carros as $placa => $infos){
    echo "$placa - marca: " . $infos['marca'] . " e modelo: " . $infos['modelo'] . PHP_EOL;
}