<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'pos_info',
        'payment_method',
        'payment_status',
        'payment_history',
        'payment_amount',
        'due_amount',
        'payment_approval'
    ];
}
