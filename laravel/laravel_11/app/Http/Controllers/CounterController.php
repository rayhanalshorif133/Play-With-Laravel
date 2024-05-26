<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Livewire;


class CounterController extends Controller
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
