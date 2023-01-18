<?php
$contasCorrentes = [
    '123.456.789-90' => [
        'titular' => null,
        'saldo' => null
    ],
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];
$notas = [
    'Ana' => 2,
    'Bia' => 3,
    'Luna' => 7,
    'Solange' => 9,
    'Sheila' => 6,
    'Tainá' => 8,
    'Marcelo' => 5
];

if(array_key_exists('123.456.789-10', $contasCorrentes)){
    echo 'achei!';
}

var_dump(isset($contasCorrentes['123.456.789-10'])); // indica se a variavel existe e se é null
var_dump(in_array(10, $notas)); // acha valores no array
var_export(array_search(5, $notas)); //acha a chave pelo valor