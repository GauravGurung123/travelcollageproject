<?php

namespace App\Http\Controllers\Frontend;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
        /**
     * @return Factory|View
     */
    public function search()
    {
        $search_country = $_GET['search'];
        $countries = Country::where('name', 'LIKE', '%'.$search_country.'%')->get();
        $count = Country::where('name', 'LIKE', '%'.$search_country.'%')->count();

        return view('countries.search', compact('countries','search_country', 'count'));
    }

}
