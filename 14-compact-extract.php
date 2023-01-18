<?php
$dados = [
    'nome' => 'Vinicius',
    'idade' => 13,
    'cpf' => '123.456.789-01'
];

extract($dados);
echo $nome. ' '. $idade. ' '. $cpf;

var_dump(compact('nome', 'idade', 'cpf'));