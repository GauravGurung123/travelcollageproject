<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $packages=Package::all();
        return view('admin.packages.index', compact('packages'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::all();
        return view('admin.packages.add-new', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Package::create([
            'name' => $request->name,    
            'duration' => $request->duration,    
            'country_id' => $request->country_id,    
            'amount' => $request->amount,    
            'image' => $request->image,
            'description' => $request->description
        ]);

        return redirect()->route('admin.packages.index');
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
        $countries=Country::all();      
        $packages=Package::where('id',$id)->firstOrFail();
        return view('admin.packages.edit', compact('packages','countries'));
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
        $packages=Package::find($id);
        $packages->update([
            'name' => $request->name,  
            'duration' => $request->duration,    
            'country_id' => $request->country_id,    
            'amount' => $request->amount,    
            'image' => $request->image,
            'description' => $request->description
        ]);
        return redirect()->back()->withSuccess('Your package has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your package has been Deleted');
    }
}
