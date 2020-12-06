<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=Setting::all();
        return view('admin.settings.index', 'settings');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.settings.add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Setting::create([
            'site_name' => $request->site_name,
            'site_top_content' => $request->site_top_content,
            'site_middle_content' => $request->site_middle_content,
            'site_bottom_content' => $request->site_bottom_content,
            'site_fav_icon_image' => $request->site_fav_icon_image,    
            'site_logo' => $request->site_logo,    
            'site_email' => $request->site_email,
            'site_address' => $request->site_address,
            'site_social_links' => $request->site_social_links,
            'site_phone_no' => $request->site_phone_no,
        ]);
        return redirect()->route('admin.settings.index');
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
        $settings=Setting::where('id',$id)->firstOrFail();
        return view('admin.settings.edit', compact('settings'));
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
        $settings=Setting::find($id);
        $settings->update([
            'site_name' => $request->site_name,
            'site_top_content' => $request->site_top_content,
            'site_middle_content' => $request->site_middle_content,
            'site_bottom_content' => $request->site_bottom_content,
            'site_fav_icon_image' => $request->site_fav_icon_image,    
            'site_logo' => $request->site_logo,    
            'site_email' => $request->site_email,
            'site_address' => $request->site_address,
            'site_social_links' => $request->site_social_links,
            'site_phone_no' => $request->site_phone_no,
        ]);
        return redirect()->back()->withSuccess('Your Setting has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Setting::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your Setting has been Deleted');
    }
    
}
