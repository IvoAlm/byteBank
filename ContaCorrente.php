<?php

Class ContaCorrente{

    private $titular;

    private $conta;

    private $agencia;

    private $saldo;

    public function __construct($titular = null, $conta = null, $agencia = null, $saldo = null){

        $this->titular = $titular;
        $this->conta = $conta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        return $this;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
            return $this;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getConta(){
        return $this->conta;
    }
    public function getAgencia(){
        return $this->agencia;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function setSaldo($valor){
        return $this->saldo = $valor;
    }
    public function setConta($valor){
        return $this->conta = $valor;
    }
    public function setAgencia($valor){
        return $this->agencia = $valor;
    }
    public function setTitular($valor){
        return $this->titular = $valor;
    }


};