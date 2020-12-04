@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Edit Packages</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.packages.update', $packages->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
                <div class="form-group">
                    <h5>Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" value="{{$packages->name}}" name="name" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                </div>
                <div class="form-group">
                  <h5>Choose Country<span class="text-danger">*</span></h5>
                  <div class="controls">
                    <select name="country_id" class="form-control" required>
                      <option disabled>Select preferred job catagory</option>
                      @foreach($countries as $country)
                          <option {{ $packages->country_id == $country->name ? 'selected' : '' }} value="{{ $country->id }}">{{ $packages->country->name }}</option>
                      @endforeach
                    </select>
                  </div>
              </select>
                <div class="form-group">
                  <h5>Durations <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="text" name="duration" value="{{$packages->duration}}" class="form-control" placeholder="_ Days and _ Nights" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>
                <div class="form-group">
                  <h5>Price <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="number" value="{{$packages->amount}}" name="amount" step="0.01" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>
                <div class="form-group">
						<h5>Description <span class="text-danger">*</span></h5>
						<div class="controls">
                        <textarea name="description" id="textarea" rows="10" class="form-control" aria-invalid="false">{{$packages->description}}</textarea>
						<div class="help-block"></div></div>
                </div>
                <div class="form-group">
                    <h5>Photo</h5>
                    <img src="{{ $packages->thumbnail_image }}"/>
                    <div class="controls">
                         <input type="file" name="image" class="form-control"> <div class="help-block"></div>
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
