<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class neww extends Model
{
    protected $fillable = [
        'title', 'the_news',
    ];
public function user()
{
    return $this->belongsTo('App\User');
}
}
