@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Edit Role</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.roles.update', $role->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
              <h5>Role Name</h5>
              <div class="controls">
              <input type="text" value="{{ $role->name }}" name="name" class="form-control"> <div class="help-block"></div>
              </div>
              <h5>Permission</h5>
              <div class="row">
                @foreach ($permissions as $key=>$permission)
                <div class="col-md-4">
            <div class="form-group">
              <div class="controls">
              <input type="checkbox" id="checkbox_{{ $key }}" name="permission[]" value="{{ $permission->name}}" 
              {{ $role->hasPermissionTo($permission->name) ? 'checked' : ''
            }}>
              <label for="checkbox_{{$key}}">{{$permission->name }}</label>
            </div>								
          </div>
          </div>
        @endforeach
              </div>
             <div class="text-xs-right">
                <button type="submit" class="btn btn-info">Update Role</button>
             </div>
               </form>
               
               
           </div>
           <!-- /.col -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
     
   </section>
@endsection
@push('scripts')

@endpush
