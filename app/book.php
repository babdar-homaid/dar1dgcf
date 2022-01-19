<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
  public function user()
  {
      return $this->belongsTo('App\user');
  }

  public function detail()
  {
      return $this->belongsTo('App\detail');
  }
  public function detail_b()
  {
      return $this->hasMany('App\detail');
  }

}
