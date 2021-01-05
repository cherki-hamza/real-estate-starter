<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class Category extends Model
{
    protected $fillable = ['en_title', 'fr_title', 'es_title', 'ar_title', 'picture',
                           'en_slug', 'fr_slug', 'es_slug', 'ar_slug'
    ];

    // method to return all posts by category
    public function listings()
    {
        return $this->hasMany('App\Models\Listings');
    }

    // methode to get picture
    public function photo(){
        return $this->picture;
    }

}
