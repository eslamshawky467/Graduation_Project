<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $teble = 'books';
    protected $filable =
    [
            'patient_name',
            'patient_email',
            'patient_phone',
            'patient_id',
            'doctor_id',
            'book_message',
            'appointment_message'
    ];
    public function doctor()
    {
        return $this->belongsTo('App\Models\User', 'doctor_id');
    }
}
