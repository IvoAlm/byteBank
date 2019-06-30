<?php
require('ContaCorrente.php');

$contaJoao = new ContaCorrente('Joao','352165-4', '21321', '5115.55');

var_dump($contaJoao);
$contaJoao->depositar(123);
var_dump($contaJoao);
$contaJoao->sacar(500);
var_dump($contaJoao);
var_dump($contaJoao->getSaldo());
var_dump($contaJoao);
