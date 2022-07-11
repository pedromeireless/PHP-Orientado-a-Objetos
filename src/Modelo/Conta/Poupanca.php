<?php

namespace Alura\Banco\Modelo\Conta;

class Poupanca extends Conta 
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }

}