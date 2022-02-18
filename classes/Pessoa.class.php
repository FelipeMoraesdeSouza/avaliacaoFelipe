<?php
class Pessoa {

    $Codigo;
    $Nome;
    $Altura;
    $Idade;
    $Nascimento;
    $Escolariade;
    $Salario;
    
    /*
    metodo costrutor
    inicia propriedades
    */

    function __construct($Codigo)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolariade = $Escolariade;
        $this->Salario = $Salario;
        
    }

    /*
    método destrutor
    finaliza Objeto
    */

    function __destruct()
    {
        echo "Objeto {$this->Nome} finalizado ... \n";
    }
    /*
    métodos Crecer
    aumenta a altura em $centimetros
    */

    function Crescer($centimetros)
    {
        if($centimetros > 0){
            $this->Altura +=$centimetros;
        }
    }

    /*
    metodo Formar
    altera a Escolaridade para $titulação
    */

    function Envelhecer($anos)
    {
        if($anos > 0){
            $this->Idade += $anos;
        }
    }
}