<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;

    protected $fillable = ['path','title','category','production_year','description','price'];
    
    protected $table = 'movies';
    
}
