<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class ConversorPdfController extends BaseController{

    public function ConversorPdf(Request $request)
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(
        '
        <h1>Este é um texto convertido em PDF.</h1>
        <title>Este é o titulo:</title>
        <p>Este é um parágrafo.</p>
        <h5>Este é um outro tipo de texto.</h5>
        <text>Esta é uma espécie de texto mais longo.</text>
        <h2>Este é um outro tipo de texto.</h2>
        <h3>Este é um outro tipo de texto.</h3>
        <h4>Este é um outro tipo de texto.</h4>
        <h5>Este é um outro tipo de texto.</h5>
        <h6>Este é um outro tipo de texto.</h6>

        '


        );
        $mpdf->Output();
    }

}
?>
