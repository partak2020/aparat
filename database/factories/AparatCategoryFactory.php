<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AparatCategory;
use Faker\Generator as Faker;

$factory->define(AparatCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'discription' => $faker->paragraph(1),
    ];
});
