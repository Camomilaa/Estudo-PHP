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
array_push($alunosBancoDeDados, 'Paulo', 'Michelle'); // adiciona varios elementos
$alunosBancoDeDados[] = 'Iremar'; //adiciona um elemento só
array_unshift($alunosBancoDeDados, 'Camila', 'Andreia'); //adiciona item no inicio do array
array_shift($alunosBancoDeDados); //retira o primeiro elemento do array e o retorna
array_pop($alunosBancoDeDados);//retira o ultimo elemento do array e o retorna
var_dump($alunosBancoDeDados);