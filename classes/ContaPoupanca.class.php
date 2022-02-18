<?php

class ContaPoupanca extends Conta{
    
    $Aniversario;
    
    /*
    método construtor (sobrescrito)
    agora, tambem inicializa a variavel $Aniversário
    */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
    {
        //chamada do método costrutor da classe-pai
        parent..__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
    }
    /*
    retirar (sobrescrito)
    */
    function Retirar($Quantia)
    {
        if($this->Saldo >= $Quantia)
        {
            // Executa mètodo da Classe-pai
            parent::Retirar($Quantia);
        }else
        {
            echo "Retirada não permitida...\n";
            return false;
        }
        //retirada permitida
        return true;
    }
}