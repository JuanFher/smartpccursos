<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relacion uno a uno inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relacion uno a uno inversa
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
