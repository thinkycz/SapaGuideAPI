<?php

use Faker\Generator;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'is_admin' => true,
    ];
});

$factory->define(App\Location::class, function (Generator $faker) {
    return [
        'title' => $faker->sentence(3),
        'location' => $faker->sentence(),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'website' => $faker->url,
        'description' => $faker->paragraph,
        'working_hours' => $faker->paragraph,
        'approved' => $faker->numberBetween(-1, 1),
        'user_id' => factory(App\User::class)->create()->id,
    ];
});