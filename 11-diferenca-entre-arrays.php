<?php
$notasB1 = [
    'Ana' => 2,
    'Bia' => 3,
    'Luna' => 7,
    'Solange' => 9,
    'Sheila' => 6,
    'Tainá' => 8,
    'Marcelo' => 5
];

$notasB2 = [
    'Ana' => 7,
    'Luna' => 8,
    'Solange' => 9,
    'Sheila' => 7,
    'Tainá' => 8,
    'Marcelo' => 10
];

var_dump(array_diff($notasB1, $notasB2)); //mostra a diferença nos valores do array
var_dump(array_diff_key($notasB1, $notasB2)); //mostra diferenca nos valores das chaves
//array_flip() inverte a ordem chave/valor do array
//array_merge() junta dois arrays // não preserva as chaves
//unpack operator pode ser utilizado para o merge