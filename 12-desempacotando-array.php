<?php
$alunos1Periodo = [
    'Sheila',
    'Silvana',
    'Beatriz',
    'Carla'
];

$alunos2Periodo = [
    'Tarley',
    'Silvio',
    'Raphael',
    'Yuri'
];

$alunosBancoDeDados = [...$alunos1Periodo, 'Marcelo', ...$alunos2Periodo];
var_dump($alunosBancoDeDados);