<?php

class Produto {
    
    $Codigo;
    $Descricao;
    $Preco;
    $Quantidade;

    function imprimeEtiqueta()
    {
        echo 'Codigo:  '.$this->Codigo ."\n";
        echo 'Descrição:  '.$this->Descricao . "\n";
    }
}