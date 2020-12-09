<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Gallery;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactUs()
    {

        return view('pages.contact');
    }

    public function aboutUs()
    {
        
        return view('pages.about');
    }
    public function destination()
    {
        
        return view('pages.destination');
    }
    public function gallery()
    {
        $galleries=Gallery::all();
        return view('pages.gallery', compact('galleries'));
    }
   
    public function page(Page $page)
    {
        
        return view('pages.page');
    }
}
