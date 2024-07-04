<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class CedulasController extends BaseController
{
        private float $quantia;
        private float $valor;
        private array $notas;
        private array $moedas;

    public function __construct(
        float $quantia  =   0.0,
        float $valor    =   0.0,
        array $notas    =    [],
        array $moedas   =    []
    ){
        $this->quantia  =  $quantia;
        $this->valor    =  $valor;
        $this->notas    =  $notas;
        $this->moedas   =  $moedas;

    }


    public function efetuaDistribuicaoCedulas(Request $request, float $valor)

{

    // Leitura do valor e multiplicação por 100 para lidar com centavos
    $this->quantia = $valor;
    $this->valor = $this->quantia * 100;
    $this->notas = array(0, 0, 0, 0, 0, 0);
    $this->moedas = array(0, 0, 0, 0, 0, 0);

while($this->valor != 0) {
    switch (true) {

        case $this->valor >= 10000:
             $this->notas[0] = intval($this->valor / 10000);
             $this->valor %= 10000;
             break;

        case $this->valor >= 5000:
             $this->notas[1] = intval($this->valor / 5000);
             $this->valor %= 5000;
             break;

        case $this->valor >= 2000:
             $this->notas[2] = intval($this->valor / 2000);
             $this->valor %= 2000;
             break;

        case $this->valor >= 1000:
             $this->notas[3] = intval($this->valor / 1000);
             $this->valor %= 1000;
             break;

        case $this->valor >= 500:
             $this->notas[4] = intval($this->valor / 500);
             $this->valor %= 500;
             break;

        case $this->valor >= 200:
             $this->notas[5] = intval($this->valor / 200);
             $this->valor %= 200;
             break;

        case $this->valor >= 100:
             $this->moedas[0] = intval($this->valor / 100);
             $this->valor %= 100;
             break;

        case $this->valor >= 50:
             $this->moedas[1] = intval($this->valor / 50);
             $this->valor %= 50;
             break;

        case $this->valor >= 25:
             $this->moedas[2] = intval($this->valor / 25);
             $this->valor %= 25;
             break;

        case $this->valor >= 10:
             $this->moedas[3] = intval($this->valor / 10);
             $this->valor %= 10;
             break;

        case $this->valor >= 5:
             $this->moedas[4] = intval($this->valor / 5);
             $this->valor %= 5;
             break;
        case $this->valor >= 1:
             $this->moedas[5] = intval($this->valor / 1);
             $this->valor %= 1;
             break;

        default:
            $this->valor = 0;
            break;
    }
}

        return response()->json([

            "notas" => [
                "De 100" => $this->notas[0],
                "De  50" => $this->notas[1],
                "De  20" => $this->notas[2],
                "De  10" => $this->notas[3],
                "De   5" => $this->notas[4],
                "De   2" => $this->notas[5]
            ],

            "moedas" => [
                "De 1   " => $this->moedas[0],
                "De 0.50" => $this->moedas[1],
                "De 0.25" => $this->moedas[2],
                "De 0.10" => $this->moedas[3],
                "De 0.05" => $this->moedas[4],
                "De 0.01" => $this->moedas[5]
            ]
        ]);

    }

}







?>
