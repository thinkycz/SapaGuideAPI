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
            $table->string('location');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->text('description');
            $table->text('working_hours');
            $table->integer('approved')->default(0);

            $table->unsignedInteger('logo_id')->nullable();
            //$table->foreign('logo_id')->references('id')->on('images')->onDelete('set null');

            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
