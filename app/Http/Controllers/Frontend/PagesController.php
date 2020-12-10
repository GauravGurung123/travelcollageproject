<?php

namespace App\Http\Controllers\Frontend;

use App\Blog;
use App\Country;
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
    public function blogs()
    {
        $blogs=Blog::all();
        $countries=Country::all();
        return view('pages.blogs', compact('blogs','countries'));
    }
       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singleBlog($id)
    {
        $singleblog=Blog::where('id',$id)->firstOrFail();
        return view('pages.single-blog', compact('singleblog'));
    }
    public function page(Page $page)
    {
        
        return view('pages.page');
    }
}
