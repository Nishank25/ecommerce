<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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
    $gender = [
      'male',
      'female'
    ];
    return [
        'role_id' =>rand(1,2),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'mobile' => rand(6700000001,9999999999),
        'gender'=> $gender[array_rand($gender)],
        'birthday' => $faker->date(),
        'profile_image' => null,
        'address' => $faker->address,
        'remember_token' => Str::random(10),
    ];
});
