<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_relation', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            $table->integer('person_id')->unsigned();
            $table->integer('relation_id')->unsigned();

            $table->foreign('person_id')->reference('id')->on('people');
            $table->foreign('relation_id')->reference('id')->on('relations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_relation');
    }
}
