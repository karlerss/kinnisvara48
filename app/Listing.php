<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Listing extends Model
{


    public function image()
    {
        return $this->hasMany('App\Image');
    }


    public function  filterByPriceM2($minPrice, $maxPrice)
    {
        return Listing::with('image')
            ->whereBetween('price_m2', [$minPrice, $maxPrice])
            ->paginate(10);
    }


}
