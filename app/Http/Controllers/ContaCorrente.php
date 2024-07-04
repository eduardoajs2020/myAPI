<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class ContaCorrente extends BancosController{

    const TAXA                  = 25.00;
    const TIPO_CONTA            = 'Conta Corrente';

    public function __construct(
        string $banco           = '',
        string $nomeTitular     = '',
        string $numeroAgencia   = '',
        string $numeroConta     = '',
        float $saldo            = 0.0
    )
    {
        parent::__construct(
            $banco,
            $nomeTitular,
            $numeroAgencia,
            $numeroConta,
            $saldo
        );

    }

    public function obterSaldo(): string
    {
        $saldo = $this->getSaldo();
        $saldoComTaxa = $saldo - self::TAXA;
        return "=> Saldo atual: R$ " .number_format($saldoComTaxa, 2,",", " ") ;
    }
}




?>
