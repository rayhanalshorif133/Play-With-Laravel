<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function export(Request $request) 
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        return Excel::download(new CustomerExport($start_date,$end_date), 'customers.xlsx');
    }
}
