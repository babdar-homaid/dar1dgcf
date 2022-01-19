<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{

    protected $fillable = [
        'Name','Class'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
