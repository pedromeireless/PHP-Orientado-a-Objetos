<?php

require_once 'autoload.php';


use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor};
use Alura\Banco\Servico\ControleBonificacao;


$funcionarioUm = new Funcionario
    ('Pedro Meireles', 
    new CPF('070.686.329-12'),
    '1900'
);

$funcionarioDois = new Funcionario
    ('Joao Meireles', 
    new CPF('171.595.329-12'),
    '3400'
);

$gerenteUm = new Gerente
    ('Marcelo', 
    new CPF('432.532.953-22'), 
    '5000'
);

$diretorUm = new Diretor
    ('Ana', 
    new CPF('123.454.112-12'), 
    '7000'
);

$controlador = new ControleBonificacao();

$controlador->adicionaBonificacaoDe($gerenteUm);
$controlador->adicionaBonificacaoDe($funcionarioDois);


