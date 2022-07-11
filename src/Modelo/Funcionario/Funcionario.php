<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private string $salario;

    public function __construct(string $nome, CPF $cpf, string $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    public function calculaBonificacao()
    {
        return $this->salario * 0.1;
    }

}
