<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors=Visitor::all();
        return view('admin.visitors.index', compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('admin.visitors.add-new', compact('roles')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:visitors,email',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $visitors=Visitor::create([
            'name' => $request->name,
            'image' => $request->image,
            'role' => $request->role,
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password'))   
        ]);
        $visitors->assignRole($request->role);

        return redirect()->route('admin.visitors.index');
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
        $roles=Role::all();
        $visitors=Visitor::where('id',$id)->firstOrFail();
        return view('admin.visitors.edit', compact('visitors','roles'));
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
        $request->validate([
            'name' => 'required',
        ]);
        
        $visitors=Visitor::find($id);
        $visitors->update([     
            'image' => $request->image,    
            'content' => $request->content,    
            'name' => $request->name,  
            'role' => $request->role,  
        ]);
        $visitors->syncRoles($request->role);
        return redirect()->back()->withSuccess('Your visitors has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visitor::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your visitors has been Deleted');
    }
}
