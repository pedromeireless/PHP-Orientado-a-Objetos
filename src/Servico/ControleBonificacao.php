<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleBonificacao 
{
    private int $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
        // bonificações = bonificação + salario do funcionario x 10%
    }

    public function recuperaBonificacao()
    {
        return $this->totalBonificacoes;
    }
}