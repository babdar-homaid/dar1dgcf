<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    public function EmployeeـName()
    {
        return $this->belongsTo('App\user','Concernedـemployee');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function national()
    {
        return $this->belongsTo('App\nationaltie','Nationality', 'Nationalty_Id');
    }
}
