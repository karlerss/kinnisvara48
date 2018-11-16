<?php

use Database\Providers\FakerRealAddress;
use Faker\Generator as Faker;

/** @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Listing::class, function (Faker $faker) {
    $faker->addProvider(new FakerRealAddress($faker));
    return $faker->realAddress +
        [
            'price' => round($faker->numberBetween(10000, 500000), -3),
            'area' => $faker->numberBetween(20, 150),
        ];
});
