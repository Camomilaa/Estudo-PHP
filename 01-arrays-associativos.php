<?php
$turma = [
    12109716 =>[
        'nome' => 'Sheila',
        'idade' => 22
    ],
    12109815 =>[
        'nome' => 'Silas',
        'idade' => 24
    ],
    12109610 =>[
        'nome' => 'Sona',
        'idade' => 23
    ]
];

//adicionando novo aluno

$turma[12109423] = [
    'nome' => 'Sandra',
    'idade' => 25
];

foreach ($turma as $ra => $aluno){
    echo $aluno['nome'].PHP_EOL;
}

//em arrays numericos, não precisamos informar o indice do dado a ser adicionado