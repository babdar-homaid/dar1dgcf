<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter_one extends Model
{
    public function cardـstudent1()
    {
        return $this->hasOne('App\card', 'Student_ID','Student_Number');
    }
}
