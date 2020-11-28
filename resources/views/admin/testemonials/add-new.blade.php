@extends('admin.layouts.app')

@section('content')
<section class="content">
     
    <!-- Basic Forms -->
     <div class="box box-solid box-primary">
       <div class="box-header with-border">
         <h6 class="box-subtitle text-white">Add new Testimonial</h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
           <form method="POST" action="{{ route('admin.testemonials.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h5>Name</h5>
              <div class="controls">
                   <input type="text" name="name" class="form-control"> <div class="help-block"></div>
              </div>
           </div>
         <div class="form-group">
          <h5>Content</h5>
          <div class="controls">
               <textarea name="content" id="textarea" class="form-control" rows="4"></textarea> <div class="help-block"></div>
          </div>
       </div>
                <div class="form-group">
                    <h5>Client Avatar</h5>
                    <div class="controls">
                         <input type="file" name="image" class="form-control"> <div class="help-block"></div>
                    </div>
                 </div>
               
                    <div class="text-xs-right">
                       <button type="submit" class="btn btn-info">Add Testimonial</button>
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
