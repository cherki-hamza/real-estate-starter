<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $fillable = ['en_area', 'fr_area', 'es_area', 'ar_area', 'picture',
                           'en_area_slug', 'fr_area_slug', 'es_area_slug', 'ar_area_slug'
    ];

    // method to return all listinings by area
    public function listings()
    {
        return $this->hasMany('App\Models\Listings');
    }

    // methode to get picture
    public function photo(){
        return $this->picture;
    }

}
