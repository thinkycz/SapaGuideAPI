<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('logo_id')->references('id')->on('images')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('images', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });

        Schema::table('ratings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_user_id_foreign');
            $table->dropForeign('categories_parent_id_foreign');
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('locations_logo_id_foreign');
            $table->dropForeign('locations_category_id_foreign');
            $table->dropForeign('locations_user_id_foreign');
        });

        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign('images_user_id_foreign');
            $table->dropForeign('images_location_id_foreign');
        });

        Schema::table('ratings', function (Blueprint $table) {
            $table->dropForeign('ratings_user_id_foreign');
            $table->dropForeign('ratings_location_id_foreign');
        });
    }
}
