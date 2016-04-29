<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function product()
    {
        return $this->belongsTo('App\movie');
    }

    public function file()
    {
        return $this->belongsTo('App\File');
    }
}
