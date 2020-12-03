<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\FrontUser;
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
        $visitors=FrontUser::all();
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
        
        $FrontUser=FrontUser::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password'))   
        ]);
        $FrontUser->assignRole($request->role);

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
        $FrontUser=FrontUser::where('id',$id)->firstOrFail();
        return view('admin.visitors.edit', compact('FrontUser','roles'));
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
        
        $FrontUser=FrontUser::find($id);
        $FrontUser->update([     
            'image' => $request->image,    
            'content' => $request->content,    
            'name' => $request->name,  
            'role' => $request->role,  
        ]);
        $FrontUser->syncRoles($request->role);
        return redirect()->back()->withSuccess('Your FrontUser has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FrontUser::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your FrontUser has been Deleted');
    }
}
