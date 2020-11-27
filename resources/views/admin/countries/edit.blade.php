@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Add New Country</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.countries.update', $countries->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
                <div class="form-group">
                    <h5>Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" value="{{$countries->name}}" name="name" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                </div>
                <div class="form-group">
						<h5>Description <span class="text-danger">*</span></h5>
						<div class="controls">
                        <textarea name="description" id="textarea" rows="10" class="form-control" aria-invalid="false">{{$countries->description}}</textarea>
						<div class="help-block"></div></div>
                </div>
                <div class="form-group">
                    <h5>Photo</h5>
                    <img src="{{ $countries->thumbnail_image }}"/>
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
