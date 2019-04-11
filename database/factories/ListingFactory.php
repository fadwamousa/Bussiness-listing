<?php

use App\User;
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Listing::class, function (Faker\Generator $faker) {


    return [
        'name'    => $faker->name,
        'address' => $faker->address,
        'website' => $faker->url,
        'phone'   => $faker->phoneNumber,
        'email'   => $faker->unique()->safeEmail,
        'bio'     => $faker->paragraph,
        'user_id' => function(){
          return User::all()->random();
        }
    ];
});
