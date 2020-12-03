@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Edit {{ $user->name }}</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.users.update',$user->id) }}">
            @csrf
            @method('patch')
                   <div class="form-group">
                    <h5>User Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                 </div>
                 <div class="form-group">
                  <h5>Contact No. <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="text" value="{{ $user->contact }}" name="contact" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
               </div>
                 <div class="form-group">
                  <h5>Avatar</h5>
                  @if ( $user->image)
                  <img src="{{ $user->thumbnail_image }}"/>
                  @endif
                  <div class="controls">
                       <input type="file" name="image" class="form-control"> <div class="help-block"></div>
                  </div>
               </div>
                <div class="form-group">
                    <h5>Select Role<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="role" class="form-control" required>
                                <option disabled selected value="">Select Role</option>
                                    @foreach($roles as $role)
                                        <option {{ isset($user->roles[0]) && $user->roles[0]->name == $role->name ? 'selected' : '' }} value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                                    @endforeach
                                </select>
                                </div>
                </div>  

                   <div class="text-xs-right">
                       <button type="submit" class="btn btn-info">Update</button>
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
