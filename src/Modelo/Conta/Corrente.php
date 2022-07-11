<?php

namespace Alura\Banco\Modelo\Conta;

class Corrente extends Conta 
{
    protected function percentualTarifa()
    {
        return 0.05;
    }
    
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}
