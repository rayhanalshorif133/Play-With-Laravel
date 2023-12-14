<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'serial_no',
        'company_name',
        'pos_id',
        'pos_name',
        'email',
        'phone_number',
        'total_sales',
        'total_due',
    ];
}
