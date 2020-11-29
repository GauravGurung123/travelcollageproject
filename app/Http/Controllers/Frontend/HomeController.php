<?php

namespace App\Http\Controllers\Frontend;

use App\Country;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    public function index()
    {
        $countries=Country::all();
        return view('front.pages.home', compact('countries'));
    }

}
