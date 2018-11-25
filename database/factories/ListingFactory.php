<?php

use Database\Providers\FakerRealAddress;
use Faker\Generator as Faker;

/** @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Listing::class, function (Faker $faker) {
    $faker->addProvider(new FakerRealAddress($faker));
    $price = round($faker->numberBetween(10000, 500000), -3);
    $area = $faker->numberBetween(20, 150);

    return array_merge(
        $faker->realAddress,
        [
            'price' => $price,
            'area' => $area,
            'price_m2' => round($price / $area),
        ]);
});
