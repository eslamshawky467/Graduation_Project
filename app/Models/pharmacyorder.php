<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmacyorder extends Model
{
    protected $fillable=[
    'user_id',
    'doctor_id',
    'quantity',
    'pharmacy_id',
];
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function pharmacy()
    {
        return $this->belongsTo('App\Models\pharmacy', 'pharmacy_id');
    }
    public function cat()
    {
        return $this->belongsTo('App\Models\pharmacy', 'category_id');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Models\User', 'doctor_id');
    }

}
