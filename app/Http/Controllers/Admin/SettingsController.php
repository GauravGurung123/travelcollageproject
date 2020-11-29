<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;
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
        return view('admin.settings.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {

           $setting = Setting::where('name', $key)->first();
            if (is_file($value)) {
                $value = $this->uploadFileToDiskWithResize($value, config('filesystems.default'), 'uploads/setting'  );
            }
            if( $setting ) {
                if ($setting->value == $value) continue;
                $setting->value = $value;
                $setting->save();
            }   else {
                Setting::create([
                    'name' => $key,
                    'value' => $value
                ]);
            }

        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Handle file upload and DB storage for a file:
     * - on CREATE
     *     - stores the file at the destination path
     *     - generates a name
     *     - stores the full path in the DB;
     * - on UPDATE
     *     - if the value is null, deletes the file and sets null in the DB
     *     - if the value is different, stores the different file and updates DB value.
     *
     * @param string $value            Value for that column sent from the input.
     * @param string $attribute_name   Model attribute name (and column in the db).
     * @param string $disk             Filesystem disk used to store files.
     * @param string $destination_path Path in disk where to store the files.
     */
    public function uploadFileToDiskWithResize($file, $disk, $destination_path, $sizes=[], $path=null)
    {

        // if a new file is uploaded, delete the file from the disk
        if ($path) {
            // \Storage::disk($disk)->delete($path);
        }

        // if the file input is empty, delete the file from the disk
//        if (is_null($value) && $this->{$attribute_name} != null) {
//            \Storage::disk($disk)->delete($this->{$attribute_name});
//            $this->attributes[$attribute_name] = null;
//        }

        // if a new file is uploaded, store it on disk and its filename in the database
            // 1. Generate a new file name

            $new_file_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time().'.'.$file->getClientOriginalExtension();

            // 2. Move the new file to the correct path
            $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

            if (count($sizes)){
                foreach ($sizes as $resize){
                    $resi=\Image::make($file)->resize($resize[0], $resize[1]);
                    \Storage::disk($this->disk)->put($destination_path . '/' . $resize[2].'/'.$new_file_name,$resi->stream(),[
                        'ACL'=> 'public-read'
                    ]);

                }
            }
            // 3. Save the complete path to the database
            $public_destination_path = \Str::replaceFirst('joynepal/', '', $destination_path);
            return $public_destination_path . '/' . $new_file_name;;
        }

}
