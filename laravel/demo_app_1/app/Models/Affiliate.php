<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'ref_link',
        'ref_count',
        'ref_bonus',
        'ref_commission',
        'available_amount',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
