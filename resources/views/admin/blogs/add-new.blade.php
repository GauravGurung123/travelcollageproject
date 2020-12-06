@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Add New Blog</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h5>Name</h5>
              <div class="controls">
                   <input type="text" name="title" class="form-control"> <div class="help-block"></div>
              </div>
           </div><div class="form-group">
            <h5>Tag</h5>
            <div class="controls">
                 <input type="text" name="tag" class="form-control"> <div class="help-block"></div>
            </div>
         </div>
         <div class="form-group">
          <h5>Content</h5>
          <div class="controls">
               <textarea name="description" id="textarea" class="form-control" rows="4"></textarea> <div class="help-block"></div>
          </div>
       </div>
                <div class="form-group">
                    <h5>Client Avatar</h5>
                    <div class="controls">
                         <input type="file" name="image" class="form-control"> <div class="help-block"></div>
                    </div>
                 </div>
               
                    <div class="text-xs-right">
                       <button type="submit" class="btn btn-info">Add Blog</button>
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
