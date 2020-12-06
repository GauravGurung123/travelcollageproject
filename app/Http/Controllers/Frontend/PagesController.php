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
        $site=[
            'title'=>"Contact us",
        ];
        return view('pages.contact',compact('site'));
    }

    public function aboutUs()
    {
        $site=[
            'title'=>"About us",
        ];
        return view('pages.about',compact('site'));
    }
    public function destination()
    {
        $site=[
            'title'=>"Destination",
        ];
        return view('pages.destination',compact('site'));
    }
    public function gallery()
    {
        $site=[
            'title'=>"Gallery",
        ];
        return view('pages.gallery',compact('site'));
    }
   
    public function page(Page $page)
    {
        $site=[
            'title'=>$page->title,
        ];
        return view('pages.page',compact('site','page'));
    }
}
