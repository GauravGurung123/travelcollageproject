<?php


namespace App\Traits;


use Illuminate\Support\Facades\Storage;

trait ImageHelpersTrait
{
    protected  $disk = 'public';

    public function getThumbImage($imagePath,$dir)
    {
        $fileArr=explode('/',$imagePath);
        $file=array_pop($fileArr);
        array_push($fileArr,$dir);
        array_push($fileArr,$file);

        // if(!file_exists(public_path().Storage::url(implode('/',$fileArr)))) return Storage::url($imagePath);
        return Storage::url(implode('/',$fileArr));

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
    public function uploadFileToDiskWithResize($value, $attribute_name, $disk, $destination_path,$sizes=[])
    {

        // if a new file is uploaded, delete the file from the disk
        if (request()->hasFile($attribute_name) &&
            $this->{$attribute_name} &&
            $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if the file input is empty, delete the file from the disk
//        if (is_null($value) && $this->{$attribute_name} != null) {
//            \Storage::disk($disk)->delete($this->{$attribute_name});
//            $this->attributes[$attribute_name] = null;
//        }

        // if a new file is uploaded, store it on disk and its filename in the database
        if (request()->hasFile($attribute_name) && request()->file($attribute_name)->isValid()) {
            // 1. Generate a new file name
            $file = request()->file($attribute_name);
            $new_file_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time().'.'.$file->getClientOriginalExtension();

            // 2. Move the new file to the correct path
            $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

            if (count($sizes)){
                foreach ($sizes as $resize){
                    $resi=\Image::make($file)->resize($resize[0], $resize[1]);
                    \Storage::disk($this->disk)->put($destination_path . '/' . $resize[2].'/'.$new_file_name,$resi->stream(),[
                        'ACL'=> 'public-read'
                    ]);
                    if (file_exists($this->getThumbImage($this->{$attribute_name},$resize[2]))) {
                        \Storage::disk($this->disk)->delete($this->getThumbImage($this->{$attribute_name},$resize[2]));
                    }
                }
            }
            // 3. Save the complete path to the database
            $public_destination_path = \Str::replaceFirst('joynepal/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path . '/' . $new_file_name;;
        }
    }
}
