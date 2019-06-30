<?php

Class ContaCorrente{

    protected $titular;

    protected $conta;

    protected $agencia;

    protected $saldo;

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

    public function __get($atributo){
        $this->protegeAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo, $value)
    {
        $this->protegeAtributo($atributo);
        return $this->$atributo = $value;

    }

    private function protegeAtributo($atributo){
        if($atributo == 'titular' || $atributo == 'saldo'){
            throw new Exception('O atributo, $atributo, é privado.');
        }
    }
    private function formataSaldo(){
        return "R$ ". number_format($this->saldo, 2, ",",".");
    }
    public function getSaldo(){
        return $this->formataSaldo();
    }


};