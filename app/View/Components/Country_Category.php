<?php

namespace App\View\Components;

use App\Country;
use Illuminate\View\Component;

class Country_Category extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $countries=Country::all();
        return view('components.country_-category', compact('countries'));
    }
}
