<?php

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
    return [
        'name' => env('INITIAL_NAME'),
        'email' => env('INITIAL_EMAIL'),
        'password' => bcrypt(env('INITIAL_PASSWORD')),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->word,
        'stick' => $faker->boolean,
    ];
});

$factory->define(App\Website::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->word,
        'link' => $faker->url,
        'logo' => $faker->imageUrl(40,40),
        'category_id' => $faker->randomElement(\App\Category::all()->pluck('id')->toArray()),
    ];
});

