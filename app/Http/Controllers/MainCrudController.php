<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class MainCrudController extends Controller
{
    protected $permissions;
    protected $model;
    public function __construct($model)
    {
        // dd(static::permissionslug);
        $object = new $model; 
        $this->model=$object;
        $this->permissions=static::permissionslug;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('create');  
      return view('admin.'. $this->permissions.'.add-new');  
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->checkPermission('delete');
        $this->model::where('id',$id)->first()->delete();
        return redirect()->back()->withSuccess('Your User has been Deleted');

    }
    protected function checkPermission($operation) {
        if(!auth()->user()->hasPermissionTo($operation .'-'. $this->permissions))abort(403);  
        return true;
    }

}
