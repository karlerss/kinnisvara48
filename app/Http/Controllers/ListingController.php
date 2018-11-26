<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    protected $listing;

    public function __construct(Listing $listing)
    {
        $this->listing = $listing;
    }

    public function index()
    {
        return view(
            'index',
            ["listings" => Listing::with('image')->withCount('image')->paginate(10)]
        );

    }

    public function filter(Request $request)
    {
        $minPrice = $request->get('m2_price_min', 0);
        $maxPrice = $request->get('m2_price_max', 0);
        if ($request->get('page') !== null) {
            $minPrice = $request->session()->get('minPrice');
            $maxPrice = $request->session()->get('maxPrice');
        } else {
            $request->session()->put('minPrice', $minPrice);
            $request->session()->put('maxPrice', $maxPrice);
        }
        $filteredListings = $this->listing->filterByPriceM2($minPrice, $maxPrice);

        return view(
            'index',
            [
                "listings" => $filteredListings,
                "minPrice" => $minPrice,
                "maxPrice" => $maxPrice,
            ]
        );
    }
}
