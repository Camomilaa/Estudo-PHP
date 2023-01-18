<?php
$notas = [
    2,
    3,
    7,
    9,
    6,
    8,
    5
];

$contasCorrentes = [
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

echo is_array($notas) . PHP_EOL;
echo array_is_list($notas) . PHP_EOL;
var_dump(array_is_list($contasCorrentes));