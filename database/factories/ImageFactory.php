<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

/** @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Image::class, function (Faker $faker) {
    $imagePaths = [
        'https://picsum.photos/200/300/?gravity=east',
        'https://picsum.photos/200/300/?gravity=north',
        'https://picsum.photos/200/300/?gravity=south',
        'https://picsum.photos/200/300/?gravity=west',
        'https://picsum.photos/200/300/?gravity=center',
    ];
    return [
        'path' => $faker->randomElement($imagePaths),
//        'listing_id' => $faker->randomKey( DB::table('listings')->select('listing_id')->get()->toArray()),
       // 'path' => $imagePaths[rand(0,sizeof($imagePaths)-1)],
    ];
});
