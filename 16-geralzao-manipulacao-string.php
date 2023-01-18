<?php
$stringFrase = "A próxima vez que você levantar a mão para mim, será a última vez que você terá mãos.   ";
$stringURL = "https://trello.com/";
$stringEmail = "vánessinhA@gmail.com";
$stringNome = "Vanessa Lopéz";

var_dump(str_contains($stringFrase, 'próxima')); //retorna se substring existe na string principal
var_dump(str_starts_with($stringURL, 'https')); //inicio
var_dump(str_ends_with($stringURL, '.br/')); //fim
echo $caractere = stripos($stringEmail, '@'); //encontra o indice onde esta localizada a substring
var_dump(substr($stringEmail, 0, $caractere)); //corta a string com uma faixa de caracteres estabelecida
/*
strpos() - Encontra a posição da primeira ocorrência de uma string
stripos() - Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas
strrchr() - Encontra a ultima ocorrência de um caractere em uma string
substr() - Retorna uma parte de uma string
stristr() - strstr sem diferenciar maiúsculas e minúsculas
strstr() - Encontra a primeira ocorrencia de uma string
strripos() - Encontra a posição da última ocorrência de uma string case-insensitive em uma string
strrpos() — Encontra a posição da última ocorrência de um caractere em uma string
*/

var_dump(strlen($stringURL));//conta quantos caracteres foram usados
var_dump(strtolower($stringEmail)); //muda o case de string simples
var_dump(strtoupper($stringEmail));//muda o case de string simples
var_dump(mb_strtolower($stringEmail));//muda o case de string com caracteres especiais
var_dump(mb_strtoupper($stringEmail));//muda o case de string com caracteres especiais
list($nome, $sobrenome) = explode(' ', $stringNome, 2);//separados string (ultimo parametro indica quantas separações deverao existir)
var_dump($nome);
var_dump(trim($stringFrase));
/*
ltrim() - roda o trim apenas do lado esuqerdo
rtrim() - roda o trim apenas do lado direito
*/

/*
<<<'HTML' -> nowdoc
<<<HTML -> heredoc
*/
