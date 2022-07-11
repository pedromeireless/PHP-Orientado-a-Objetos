<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';


$autentica = new Autenticador();
$umDiretor = new Diretor('JoaoPaulo', new CPF('123.444.444-11'), '5000');

$autentica->tentaLogar($umDiretor, '4324');