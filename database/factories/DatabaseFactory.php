<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'email' => $faker->email
    ];
});

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'companyName' => $faker->company
    ];
});
