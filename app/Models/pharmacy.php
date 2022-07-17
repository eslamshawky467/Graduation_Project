<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
    protected $table = 'pharmacies';
    protected $fillable =
    [
        'name',
        'illness',
        'description',
        'price',
        'medicine_status',
        'medicine_image',
        'illness_image',
        'category_id',
    ];
    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
