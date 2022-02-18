<?php
class Conta{

    $Agencia;
    $Codigo;
    $DataDeCriacao;
    $Titular;
    $Senha;
    $Saldo;
    $Cancelada;

    /*
    método construtor
    inicializa propriedades
    */

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;

        //chamada a outro metodo da classe
        $this->Depositar($Saldo);
        $this->Cancelada = false;        
    }

    /*
    método destrutor
    finaliza objeto
    */

    function __destruct()
    {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada ... \n";
    }

    /*
    metodo Retirar
    diminui o saldo em $Quantia
    */

    function Retirar($Quantia)
    {
        if($Quantia > 0){
            $this->Saldo -= $Quantia;
        }
    }

    /*
    metodo Depositar
    aumenta o saldo em $Quantia
    */
    
    function Depositar($Quantia)
    {
        if($Quantia > 0){
            $this->Saldo += $Quantia;
        }
    }
    
    /*
    método ObterSaldo
    retorna o saldo Atual
    */
    
    function ObterSaldo()
    {
        return $this->Saldo;
    }
    
}