<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function makePdf()
    {

        $pdf = Pdf::setOption(['dpi' => 150, 'defaultFont' => 'helvetica']);

        $pdf->loadView('pdf.index');

        $link = '/payment_invoice/' . 'invoice' .'.pdf';
        $pdf->save(public_path().$link);

        return 'payment';
    }
}
