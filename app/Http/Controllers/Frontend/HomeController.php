<?php

namespace App\Http\Controllers\Frontend;

use App\Country;
use App\Http\Controllers\Controller;
use App\Package;
use App\Testemonial;

class HomeController extends Controller{

    public function index()
    {
        $countries=Country::all();
        $packages=Package::all();
        $testemonials=Testemonial::all();
        return view('front.pages.home', compact('countries', 'packages', 'testemonials'));
    }

}
