<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Jobs\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Jobs\Job::class, function(Faker $faker){
    return[
        'user_id' => mt_rand(1, 27),
        'title' => $faker->realText(100),
        'description' => implode("\n", $faker->paragraphs),
        'expires_at' => $faker->randomElement([null, $faker->dateTimeBetween('now', '+1 year')]),
    ];
});
