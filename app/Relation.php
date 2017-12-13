<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    //
    public function people()
    {
      return $this->belongsToMany('App\Person')->withTimestamps();
    }

    public static function getForCheckboxes()
    {
      $relations = Relation::orderBy('type')->get();
      $relationships = [];

      foreach ($relations as $relation)
      {
        $relationships[$relation['id']] = $relation->type;
      }
      return $relationships;
    }
}
