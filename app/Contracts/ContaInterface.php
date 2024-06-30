<?php

namespace App\Contracts;

interface ContaInterface
{
    public function depositar(float $valor): string;
    public function sacar(float $valor): string;
    public function obterSaldo(): string;
}
