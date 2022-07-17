<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['image', 'body'];

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    public function post()
    {
        return $this->hasMany(Userlike2::class)->whereNull('parent_id');
    }
    public function myname()
    {
        return $this->belongsTo('App\Models\User', 'doctor_id');
    }

}
