@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Edit Gallery</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.galleries.update', $galleries->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
              <h5>Title</h5>
              <div class="controls">
              <input type="text" value="{{ $galleries->title }}" name="title" class="form-control"> <div class="help-block"></div>
              </div>
           </div>
         <div class="form-group">
          <h5>Description</h5>
          <div class="controls">
          <textarea name="description" class="form-control" rows="4">{{ $galleries->description }}</textarea> <div class="help-block"></div>
          </div>
       </div>
                <div class="form-group">
                    <h5>Photo</h5>
                    @if ( $galleries->image)
                    <img src="{{ $galleries->thumbnail_image }}"/>
                    @endif
                    <div class="controls">
                         <input type="file" name="image" class="form-control"> <div class="help-block"></div>
                    </div>
                 </div>
                    <div class="text-xs-right">
                       <button type="submit" class="btn btn-info">Update Photo</button>
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
