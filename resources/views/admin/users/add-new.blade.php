@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Add New User</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
                   <div class="form-group">
                    <h5>User Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                </div>

                   <div class="form-group">
                       <h5>Email Address<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>
                     {{-- <div class="form-group">
                        <h5>Select Role<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="role" class="form-control" required>
                                    <option disabled selected value="">Select Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                    </div> --}}
                     {{-- <div class="form-group">
                        <h5>Featured</h5>
                        <div class="controls">
                        <input type="checkbox" id="checkbox_featured" name="featured" value="1">
                        <label for="checkbox_featured">Featured</label>
                      </div>								
                    </div> --}}
                    
                         @if ($errors->has('password'))
                         <span class="text-danger">{{ $errors->first('password') }}</span>
                     @endif                        
                         <div class="form-group">
                            <h5>Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Repeat Password<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password_confirmation" data-validation-match-match="password" class="form-control" required> <div class="help-block"></div></div>
                        </div>                    
                   <div class="text-xs-right">
                       <button type="submit" class="btn btn-info">Add User</button>
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
