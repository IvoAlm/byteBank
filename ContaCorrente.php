<?php

Class ContaCorrente{

    public $titular;

    public $conta;

    public $agencia;

    public $saldo;

    public function __construct($titular = null, $conta = null, $agencia = null, $saldo = null){

        $this->titular = $titular;
        $this->conta = $conta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }
};