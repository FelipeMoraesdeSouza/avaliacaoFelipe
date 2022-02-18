<?php

class ContaCorrente extends Conta{
    
    $Limite

    /*
    método construtor (sobrescrito)
    agora tambem inicializa a variavel $Limite
    */
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
    {
        //chamada do método construtor da classe pai.
        parent.. __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }

    /*
    método Retirar(srobescrito)
    verifica se a $quantia retirada está dentro do limite;
    */

    function Retirar($Quantia)
    {
        //imposto sobre movimentação financeira
        $cpmf = 0.5;

        if(($this->Saldo + $this->Limite)>= $Quantia)
        {
            //executa método da classe pai
            parent::Retirar($quantia*$cpmf);
        }else
        {
            echo"Retirada não permitida...\n";
            return false;
        }
        //Retirada permitida
        return true;
    }
}