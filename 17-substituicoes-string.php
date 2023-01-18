<?php
$texto = "você é um idiota!";
//oq peloq onde
//$texto = str_replace(['bobão', 'bonachão', 'feio', 'idiota', 'narigudo'], ['b****', 'b******', 'f***', 'i*****', 'n*******'], $texto);

//$texto = strtr($texto, 'aeio', '4310');
$texto = strtr($texto, ['idiota' => 'i', 'feio' => 'f']);
var_dump($texto);