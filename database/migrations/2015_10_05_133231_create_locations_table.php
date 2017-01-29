<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title');
            $table->string('slug');

            $table->string('building');
            $table->string('section');

            $table->string('latitude');
            $table->string('longitude');

            $table->string('email');
            $table->string('phone');
            $table->string('website');

            $table->text('description');
            $table->text('working_hours');

            $table->integer('approved')->default(0);

            // Foreign keys
            $table->unsignedInteger('logo_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('locations');
    }
}
