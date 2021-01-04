<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // the site home page
    public function index(){
        return view('frontend.site.index');
    }


}
