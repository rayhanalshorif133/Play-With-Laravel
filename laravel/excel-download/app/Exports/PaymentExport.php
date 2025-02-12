<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Payment;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class PaymentExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $start_date;
    public $end_date;
  
    public function __construct($start_date,$end_date) {
      $this->start_date = $start_date;
      $this->end_date = $end_date;
    }


    public function view(): View
    {

        $payments = Payment::whereBetween('created_at', [$this->start_date, $this->end_date])->get();        

        return view('payment', [
            'payments' => $payments
        ]);
    }
}

