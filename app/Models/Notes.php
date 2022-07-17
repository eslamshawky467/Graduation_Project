<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable =
    [
        'postbody',
        'created_by',
        'image',
        'user_id'
    ];
    public function username()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
