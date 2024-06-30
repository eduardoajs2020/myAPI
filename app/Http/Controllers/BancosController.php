<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class BancosController extends BaseController{

    private string $banco = "Banco Inter";
    private string $nomeTitular = "Gustavo Fraga";
    private string $numeroAgencia = "8244-5";
    private string $numeroConta = "57356-10";
    private float $saldo = 0;



    public function exibirDadosDaConta(): array
    {

        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo
        ];
    }
}







?>
