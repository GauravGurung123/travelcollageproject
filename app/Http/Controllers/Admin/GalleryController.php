<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.galleries.add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Gallery::create([
            'title' => $request->title,
            'image' => $request->image,    
            'description' => $request->description,
        ]);
        return redirect()->route('admin.galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleries=Gallery::where('id',$id)->firstOrFail();
        return view('admin.galleries.edit', compact('galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->content);
        $galleries=Gallery::find($id);
        $galleries->update([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
        ]);
        return redirect()->back()->withSuccess('Your Gallery has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
    
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your Gallery has been Deleted');
    }

}
