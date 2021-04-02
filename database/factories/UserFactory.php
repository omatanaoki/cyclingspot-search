<?php

use App\User;
use App\Model;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => Str::random(15),
        'email' => $faker->unique()->safeEmail,
        'password'  => bcrypt('test0000'),
        'introduction' => $faker->text(140),
        'remember_token' => Str::random(10),
    ];
});