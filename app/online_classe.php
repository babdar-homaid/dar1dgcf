<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class online_classe extends Model
{
    //protected $guarded=[];
    public $fillable= ['email','last_name','first_name','password',];

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'Grade_id');
    }


    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'Classroom_id');
    }


    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
