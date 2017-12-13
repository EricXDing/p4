<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    public function relations()
    {
      return $this->belongsToMany('App\Relation')->withTimestamps();
    }
}
