<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;



class ContaPoupanca extends BancosController{

    const RENDIMENTO            = 0.03;
    const TIPO_CONTA            = 'Conta Poupanca';

    public function __construct(
        string $banco           = '',
        string $nomeTitular     = '',
        string $numeroAgencia   = '',
        string $numeroConta     = '',
        float  $saldo           = 0.0
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
        $saldoComRendimento = $saldo * (1 + self::RENDIMENTO);
        return "Saldo atual: R$ " . number_format($saldoComRendimento, 2, ',', '.');
    }
}




?>
