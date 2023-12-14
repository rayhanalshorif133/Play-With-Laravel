<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $data = [
            'title' => $request->title,
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        // store this pdf
        $randNumber = rand(1, 1000);
        $pdf->save(public_path().'/pdfs/'.$randNumber.'.pdf');
        return redirect()->back();


    }
}
