<?php

namespace App\Http\Controllers\Frontend;

use App\Country;
use App\Http\Controllers\Controller;
use App\Package;

class HomeController extends Controller{

    public function index()
    {
        $countries=Country::all();
        $packages=Package::all();
        return view('front.pages.home', compact('countries', 'packages'));
    }

}
