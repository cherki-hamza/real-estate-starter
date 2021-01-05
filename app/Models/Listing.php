<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Area;

class Listing extends Model
{
    protected $fillable = [];

    // methode to get the category of Lising
    public function category(){
      return $this->belongsTo('App\Models\Category');
    }

    // methode to get the area of Lising
    public function area(){
        return $this->belongsTo('App\Models\Area');
      }
}
