<?php

require_once 'src/autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, Poupanca, Corrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new Corrente
(
    new Titular
    (
        new CPF('123.456.789-10'), 'Pedro Meireles',
        new Endereco('floripa', 'santa', 'travessa', 78)
    ) 
);

$conta->deposita(1000);
$conta->saca(500);

echo $conta->recuperaSaldo();