<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //
    public function index() {
        $data = [
            'title' => 'Nasss PDF',
            'date' => date('m/d/Y')
        ];
        
        $pdf = PDF::loadView('pages.testPDF', $data);
    
        return $pdf->stream();
        //download('tutsmake.pdf');
    }

    public function pdfDDER() {
        $pdf = new PDF();
    }
}

