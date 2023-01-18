<?php

function exibirMensagem($mensagem):void
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorSaque):array
{
    $valorEmConta = $conta['saldo'];
    if($valorEmConta >= $valorSaque){
        exibirMensagem('Saque realizado com sucesso');
        $conta['saldo'] = $valorEmConta - $valorSaque;
    } else{
        exibirMensagem('Não foi possível realizar saque.');
    }
    return $conta;
}

function depositar(array $conta, float $valorDeposito):array
{
    $valorEmConta = $conta['saldo'];
    if($valorDeposito > 0){
        exibirMensagem('Depósito efetuado com sucesso');
        $conta['saldo'] += $valorDeposito;
    } else{
        exibirMensagem('Não foi possível efetuar o depósito');
    }
    return $conta;
}

function mostrarContas(array $contasCorrentes):void
{
    foreach ($contasCorrentes as $cpf => $conta) {
        exibirMensagem("$cpf: {$conta['titular']} - saldo atual: {$conta['saldo']}");
    }
}

function titularMaiusculo(array &$conta):array
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
    return $conta;
}

function exibirContas(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo $html = "<li>Titular: $titular. Saldo: $saldo</li>";
}