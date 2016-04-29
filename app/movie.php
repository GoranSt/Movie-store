<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = [

        'name',
        'img',
        'director',
        'release',
        'actors',
        'description',
        'price',
        'lang',
        'studio',
        'time',
        'rating'
        ];
}
