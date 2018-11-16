<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        \JavaScript::put('listings', Listing::paginate(10));
        return view('index');
    }
}
