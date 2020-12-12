<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    // Relacion uno a uno inversa
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    // Relacion uno a muchos

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
