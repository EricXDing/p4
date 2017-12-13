<?php

use Illuminate\Database\Seeder;
use App\Relation;
use App\Person;


class PersonRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $persons = [
          'Alice' => ['coworker','classmate'],
          'Bob' => ['classmate', 'Other'],
          'Caroline' => ['mentor']
        ];

        foreach ($persons as $name => $relations)
        {

          $person = Person::where('name', 'like', $name)->first();

          foreach ($relations as $relationship)
          {
            $relation = Relation::where('type', 'like', $relationship)->first();

            $person->relations()->save($relation);
          }
        }
    }
}
