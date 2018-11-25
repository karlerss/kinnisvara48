<?php

use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Listing::class, 100)->create()->each(function ($listing) {
            factory(App\Image::class, rand(1,10))->create(['listing_id' => $listing->id]);
        });
    }
}
