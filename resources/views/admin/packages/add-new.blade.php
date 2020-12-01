@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Add New Package</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.packages.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <h5>Place Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                </div>
                <div class="form-group">
                  <h5>Durations <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="text" name="duration" class="form-control" placeholder="_ Days and _ Nights" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>
                <div class="form-group">
						<h5>Description <span class="text-danger">*</span></h5>
						<div class="controls">
							<textarea name="description" id="textarea" rows="10" class="form-control" aria-invalid="false"></textarea>
						<div class="help-block"></div></div>
            </div>
            <div class="form-group">
              <h5>Choose Country<span class="text-danger">*</span></h5>
              <div class="controls">
                  <select name="country_id" class="form-control" required>
                      <option disabled>Select Country</option>
                      @foreach($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }}</option>
                      @endforeach
                  </select>
              </div>
          </div>
                          {{-- <div class="form-group">
                  <h5>Featured</h5>
                  <div class="controls">
                  <input type="checkbox" id="checkbox_featured" name="featured" value="1">
                  <label for="checkbox_featured">Featured</label>
                </div>								
              </div>                   --}}
                <div class="form-group">
                  <h5>Price <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <input type="number" name="amount" class="form-control" step="0.01" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>
                <div class="form-group">
                    <h5>Photo</h5>
                    <div class="controls">
                         <input type="file" name="image" class="form-control"> <div class="help-block"></div>
                    </div>
                 </div>
                    <div class="text-xs-right">
                       <button type="submit" class="btn btn-info">Add Package</button>
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
