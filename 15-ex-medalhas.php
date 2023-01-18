<?php
$json = file_get_contents('data.json');
$dadosJson = json_decode($json, true);

echo "Número de países participantes: " . count($dadosJson) . PHP_EOL;

$dadosJson = array_map(function($item){
    $item['pais'] = mb_strtoupper($item['pais']);
    return $item;
},$dadosJson);

usort($dadosJson, function($pais1, $pais2){
    return $pais2['medalhas']['ouro'] - $pais1['medalhas']['ouro'] !== 0 ?
    $pais2['medalhas']['ouro'] - $pais1['medalhas']['ouro'] : 
    ($pais2['medalhas']['prata'] - $pais1['medalhas']['prata'] !== 0 ?
    $pais2['medalhas']['prata'] - $pais1['medalhas']['prata'] :
    $pais2['medalhas']['bronze'] - $pais1['medalhas']['bronze']);
});

$somaMedalhas = 0;
foreach($dadosJson as $pais){
    $somaMedalhas += $pais['medalhas']['bronze'];
    $somaMedalhas += $pais['medalhas']['prata'];
    $somaMedalhas += $pais['medalhas']['ouro'];
}

echo "soma de medalhas equivale a $somaMedalhas";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medalhas</title>
</head>
<body>
    <h1>Medalhas</h1>
    <?php foreach($dadosJson as $pais){ ?>
        <h3> <?= $pais['pais'] ?> </h3>
        <ul>
            <li>Medalhas de Ouro: <?= $pais['medalhas']['ouro']; ?></li>
            <li>Medalhas de Prata: <?= $pais['medalhas']['prata']; ?></li> 
            <li>Medalhas de Bronze: <?= $pais['medalhas']['bronze']; ?></li> 
        </ul>
        <br>
    <?php } ?>
</body>
</html>