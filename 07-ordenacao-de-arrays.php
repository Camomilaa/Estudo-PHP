<?php
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

function ordenarTitulares($titular1, $titular2)
{
    if($titular1['titular'] < $titular2['titular']){ //1 vem antes do 2
        return -1;
    } elseif($titular1['titular'] > $titular2['titular']){ //2 vem antes do 1
        return 1;
    } else{
        return 0;
    }
}

/*
function ordenarTitulares($titular1, $titular2)
{
    $titular1['titular'] <=> $titular2['titular']; //ordena de forma crescente de maneira semelhante ao exemplo acima
    //para ordenar de forma decrescente basta alterar a ordem dos itens
}
*/

usort($contasCorrentes, 'ordenarTitulares');

foreach($contasCorrentes as $cpf => $dadosBancarios){
    echo $dadosBancarios['titular'] . PHP_EOL;
}