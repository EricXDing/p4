<?php

use Illuminate\Database\Seeder;
use App\Relation;

class RelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $relations = ['coworker','classmate','friend','mentor','other'];
        foreach ($relations as $type) {
          $relation = new Relation();
          $relation->type = $type;
          $relation->save();
        }
    }
}
