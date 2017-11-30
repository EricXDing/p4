<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persons = [
        ['Alice','alice@test.com','comment1'],
        ['Bob','bob@test.com','comment2'],
        ['Caroline','caroline@test.com','comment3'],
    ];

    $count = count($persons);

    foreach ($persons as $key => $person) {
        Person::insert([
            'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'name' => $person[0],
            'email' => $person[1],
            'comments' => $person[2],
        ]);
        $count--;
    }
    }
}
