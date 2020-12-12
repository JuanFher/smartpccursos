<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    protected $guarded = ['id', 'status'];

    // Relacion uno a muchos

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function reviews()
    {
        return $this->hasMany('App\Models\Reviews');
    }
    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }
    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }
    public function audiences()
    {
        return $this->hasMany('App\Models\Audience');
    }
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    // Relacion de muchos a muchos
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }

    // Relacion uno a uno inversa
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    
    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }

    public function lessons()
    {
       return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

    // uno a uno polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}