<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testemonial;
use Illuminate\Http\Request;

class TestemonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testemonials=Testemonial::all();
        return view('admin.testemonials.index', compact('testemonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.testemonials.add-new');
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
        Testemonial::create([
            'name' => $request->name,
            'image' => $request->image,    
            'content' => $request->content,
        ]);
        return redirect()->route('admin.testemonials.index');
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
        $testemonials=Testemonial::where('id',$id)->firstOrFail();
        return view('admin.testemonials.edit', compact('testemonials'));
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
        $testemonials=Testemonial::find($id);
        $testemonials->update([
            'name' => $request->name,
            'image' => $request->image,
            'content' => $request->content,
        ]);
        return redirect()->back()->withSuccess('Your Testemonial has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
    
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testemonial::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your Testemonial has been Deleted');
    }
}
