<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use App\Exports\PaymentExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    public function customerExport(Request $request) 
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        return Excel::download(new CustomerExport($start_date,$end_date), 'customers.xlsx');
    }

    public function paymentExport(Request $request) 
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        return Excel::download(new PaymentExport($start_date,$end_date), 'payments.xlsx');
    }
}
