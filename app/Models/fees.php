<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
    protected $fillable = [
        'name',
        'socialid',
        'invoice_number',
        'product',
        'cash',
         'others',
        'Total',
        'Status',
    ];
}
