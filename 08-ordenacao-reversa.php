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

sort($notas);
foreach($notas as $nota){
    echo $nota . ' ';
}

echo PHP_EOL;
rsort($notas);

foreach($notas as $nota){
    echo $nota . ' ';
}

//arsort() impede o desaparecimento das chaves do array
// ksort() e krsort() ordena pelas chaves