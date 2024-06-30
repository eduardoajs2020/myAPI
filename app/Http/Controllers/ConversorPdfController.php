<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class ConversorPdfController extends BaseController{

    public function ConversorPdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Este é um texto convertido em PDF.</h1>');
        $mpdf->Output();
    }

}
?>
