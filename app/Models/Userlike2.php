<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlike2 extends Model
{
    protected $table = 'userlike2s';
    protected $fillable = 
    [
        'like',
        'user_id',
        'post_id',
        'parent_id'
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function replies()
    {
        return $this->hasMany(Userlike2::class, 'parent_id');
    }
}
