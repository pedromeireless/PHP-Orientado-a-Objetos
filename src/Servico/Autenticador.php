<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;


class Autenticador 
{
    public function tentaLogar(Diretor $diretor, string $senha)
    {
        if($diretor->podeAutenticar($senha)){
            echo 'Autenticado';
        } else {
            echo 'Senha incorreta!';
        }

    }



}
