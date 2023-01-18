<?php
$idades = [4, 5, 23, 56, 32, 19, 17, 13];
list($idadeEnzo, $idadeValentina) = $idades;
//echo $idadeEnzo;
//funciona como o desestruturar do js

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

foreach($contasCorrentes as $cpf => $conta){
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo "{$titular}: R\${$saldo}".PHP_EOL;
}
