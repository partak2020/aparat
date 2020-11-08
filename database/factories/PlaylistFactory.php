<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Playlist;
use Faker\Generator as Faker;

$factory->define(Playlist::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'privatePlaylist' => $faker->numberBetween(0 , 1),
        'discription' => $faker->paragraph(1),
        'channel_ID' => '1',
    ];
});
