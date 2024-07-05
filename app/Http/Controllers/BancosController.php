<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class BancosController extends BaseController
{

        private string $banco;
        private string $nomeTitular;
        private string $numeroAgencia;
        private string $numeroConta;
        private string $conta;
        private float $saldo;

    public function __construct(

        string $banco           =   '',
        string $nomeTitular     =   '',
        string $numeroAgencia   =   '',
        string $numeroConta     =   '',
        string $conta           =   '',
        float  $saldo           =   0.0

    )
    {
        $this-> banco           =   $banco;
        $this-> nomeTitular     =   $nomeTitular;
        $this-> numeroAgencia   =   $numeroAgencia;
        $this-> numeroConta     =   $numeroConta;
        $this-> conta           =   $conta;
        $this-> saldo           =   $saldo;

    }



    public function exibirDadosDaConta(Request $request)
    {
        $this->setBanco         ($request->input('banco', 'Banco do Brasil'     ));
        $this->setNomeTitular   ($request->input('nomeTitular', 'João da Silva' ));
        $this->setNumeroAgencia ($request->input('numeroAgencia', '1234-5'      ));
        $this->setNumeroConta   ($request->input('numeroConta', '123456-7'      ));
        $this->setSaldo         ($request->input('saldo', 1000.00               ));

        return [
                    'banco'          => $this-> banco,
                    'nomeTitular'    => $this-> nomeTitular,
                    'numeroAgencia'  => $this-> numeroAgencia,
                    'numeroConta'    => $this-> numeroConta,
                    'saldo'          => $this-> saldo
                ];
    }

    public function depositar(float $valor): string
        {
            $this->saldo += $valor;
            return "Depósito de R$ ".number_format($valor, 2,",", " "). " efetuado com sucesso";
        }

    public function sacar(float $valor): string
        {
            $this->saldo -= $valor;
            return "Saque de R$ ".number_format($valor, 2,",", " ")." efetuado com sucesso!";
        }

    public function obterSaldo(): string
        {
            return "Saldo atual: R$ " .number_format($this->saldo, 2,",", " ");
        }

    public function exibirData(): string
        {
            $data = date("d/m/Y");
            return "Data da consulta: " .$data;
        }

    public function getBanco(): string
        {
            return $this->banco;
        }

    public function getNomeTitular(): string
        {
            return $this->nomeTitular;
        }

    public function getNumeroAgencia(): string
        {
            return $this->numeroAgencia;
        }

    public function getNumeroConta(): string
        {
            return $this->numeroConta;
        }

    public function getSaldo(): float
        {
            return $this->saldo;
        }

    public function setBanco(string $banco): void
        {
            $this->banco = $banco;
        }

    public function setNomeTitular(string $nomeTitular): void
        {
            $this->nomeTitular = $nomeTitular;
        }

    public function setNumeroAgencia(string $numeroAgencia): void
        {
            $this->numeroAgencia = $numeroAgencia;
        }

    public function setNumeroConta(string $numeroConta): void
        {
            $this->numeroConta = $numeroConta;
        }

    public function setSaldo(float $saldo): void
        {
            $this->saldo = $saldo;
        }

    public function operacionalizarCC():void
        {
            $conta = new ContaCorrente();


            echo $conta->obterSaldo();
            echo '<br><br>';

            echo $conta->depositar(50);
            echo '<br><br>';

            echo $conta->obterSaldo();
            echo '<br><br>';

            echo $conta->sacar(30);
            echo '<br><br>';

            echo $conta->obterSaldo();
            echo '<br><br>';

            echo $conta->exibirData();


        }

    public function operacionalizarCP():void
        {
            $conta = new ContaPoupanca();


            echo $conta->obterSaldo();
            echo '<br><br>';

            echo $conta->depositar(50);
            echo '<br><br>';

            echo $conta->obterSaldo();
            echo '<br><br>';

            echo $conta->sacar(30);
            echo '<br><br>';

            echo $conta->obterSaldo();
            echo '<br><br>';

             echo $conta->exibirData();
        }

}


?>
