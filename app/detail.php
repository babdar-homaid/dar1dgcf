<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    public function book()
    {
        return $this->belongsTo('App\book');

    }
}


