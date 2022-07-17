<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id','reciever_id', 'message_text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
