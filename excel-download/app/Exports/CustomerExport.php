<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class CustomerExport implements FromView
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

        $customers = Customer::whereBetween('created_at', [$this->start_date, $this->end_date])->get();
        
        return view('customer', [
            'customers' => $customers
        ]);
    }
}

