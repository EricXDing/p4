<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RelationsTableSeeder::class);
        $this->call(PersonsTableSeeder::class);
        $this->call(PersonRelationTableSeeder::class);
    }
}
