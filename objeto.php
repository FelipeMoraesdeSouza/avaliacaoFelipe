<?php
//insere a classe
require './config/config.php';

//criação do objeto $carlos
$carlos =  new Pessoa(10,"Carlos da Silva",1.85,"10/04/1975","Ensino Médio",650.00);

echo "Manipulando o objeto {$carlos->Nome}: \n";
echo "{$carlos->Nome} é formado em:{$carlos->Escolariade} \n";

echo "{$carlos->Nome} possui {$carlos->} anos \n";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->} anos \n";

//criação do objeto $conta_carlos
$conta_carlos = new Conta(6677,"cc.1234.56","10/07/02",$carlos,9876,567.89);
echo "\n";
echo "Manipulando a conta de: {$conta_carlos->Titular->Nome}: \n";

echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo() \n}";
$conta_carlos->Depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo() \n}";
$conta_carlos->Retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo() \n}";

#criacao do objeto $carlos
$carlos = new Pessoa;
$carlos->Codigo =10;
$carlos->Nome = "Carlos da silva";
$carlos->Altura = 1.85;
$carlos->Idade = 26;
$carlos->Nascimento = '10/03/1876';
$carlos->Escolaridade = 'Ensino Medio';

echo "Manipulando o objeto $carlos->nome :\n";
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}\n"
$carlos->Formar('Tecnico em Eletricidade');
echo "{$carlos} é formado em: {$carlos->Escolariade}\n";

echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";
$carlos->Envelhecer{1};
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

#criação do objeto $conta carlos
$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo "cc,1234.56";
$conta_carlos->$DataDeCriacao = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "\n";
echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} \n";
echo "O saldo atual é R\$ {$conta_carlos->titular->Nome} \n";

$conta_carlos->Depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";

$conta_carlos->Retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->titular->Nome} \n";

//cria um objeto
$produto1 = new Produto;
$produto2 = new Produto;

//atribuir valores
$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';

$produto2->Codigo = 4002;
$produto2->Decricao = 'CD The Eagles Hostel California ';

//imprime informações de etiqueta
$produto1->imprimeEtiqueta();
$produto2->imprimeEtiqueta();

//criação do objeto $carlos
