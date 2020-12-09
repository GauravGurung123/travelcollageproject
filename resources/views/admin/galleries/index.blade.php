@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
      Gallery
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.galleries.create') }}" class="btn btn-success mb-5">
        <i class="fa fa-plus"></i> Add New Photo</a></li>
    </ol>
  </section>
<section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-body">
            <div id="gallery">
              <div id="gallery-header">
                  <div id="gallery-header-center">
                      <div id="gallery-header-center-left">
                          <div class="gallery-header-center-right-links gallery-header-center-right-links-current" id="filter-all">All</div>
                          <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
                          <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
                      </div>
                  </div>
              </div>
  <div class="row">
  @foreach( $galleries as $gallery)
  <div class="col-sm-4" style="background-color: #f8f8f8;">
      <small class="d-flex justify-content-end">
          <a href="{{ route('admin.galleries.edit', $gallery->id)}}"
          class="btn btn-sm btn-success-outline" data-original-title="Delete">
          <i class="ti-pencil" aria-hidden="true"></i></a>
          <form action="{{route('admin.galleries.destroy', $gallery->id) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
              @csrf
              <button data-toggle="tooltip" data-original-title="Delete" 
              type="submit" id="btnDelete" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger-outline">
              <i class="ti-trash" aria-hidden="true"></i></button>
          </form> 
      </small>
                  <a href="{{$gallery->medium_image}}" class="image-popup-vertical-fit" data-toggle="lightbox" data-gallery="multiimages" data-title="{{$gallery->title}} >> {{$gallery->description}}">
                    <img src="{{ $gallery->medium_image}}" class="img-responsive all studio " alt="{{$gallery->title}}"  /></a>                    
                  </div>
                    @endforeach
                </div>
              </div>
          </div>
            </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>

  <div class="row">
    <div class="col-sm-4">
      <a class="image-popup-vertical-fit" href="../../../images/gallery/thumb/1.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
        <img src="../../../images/gallery/thumb/1.jpg" class="img-responsive" alt="">
      </a>
      <small>Fits horizontally and vertically</small>
    </div>
    <div class="col-sm-4">
      <a class="image-popup-fit-width" href="../../../images/gallery/thumb/2.jpg" title="This image fits only horizontally.">
        <img src="../../../images/gallery/thumb/2.jpg" class="img-responsive" alt="">
      </a>
      <small>Only horizontally</small>
    </div>
    <div class="col-sm-4">
      <a class="image-popup-no-margins" href="../../../images/gallery/thumb/3.jpg">
        <img src="../../../images/gallery/thumb/3.jpg" class="img-responsive" alt="">
      </a>
      <small>Zoom animation, close on top-right.</small>
    </div>
  </div>



















@endsection
@push('scripts')

@endpush
