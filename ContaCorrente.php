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


};