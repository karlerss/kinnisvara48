<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model implements \Countable
{

    /**
     * @var Listing id Foreign key
     */
    protected $listing_id;


    public function listing()
    {
        return $this->belongsTo('App\Listing','id');
    }

    public function count()
    {
        return DB::table('images')->where('listing_id', '=', $this->listing_id)->count();
    }


}
