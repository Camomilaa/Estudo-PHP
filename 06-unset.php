<?php
$idades = [4, 5, 23, 56, 32, 19, 17, 13];
unset($idades[3]);
foreach($idades as $idade){
    echo $idade . PHP_EOL;
}

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
unset($contasCorrentes['123.456.689-11']);

foreach($contasCorrentes as $cpf => $dadosBancarios){
    echo "$cpf: {$dadosBancarios['titular']}" . PHP_EOL;
}