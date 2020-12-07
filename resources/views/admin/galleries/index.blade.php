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
              <div id="gallery-content">
                  <div id="gallery-content-center" class="gallery-content-center-full isotope" style="position: relative; overflow: hidden; height: 4113.02px;">
                    @foreach( $galleries as $gallery)
                  <a href="{{$gallery->medium_image}}" data-toggle="lightbox" data-gallery="multiimages" data-title="{{$gallery->title}} >> {{$gallery->description}}">
                    <img src="{{ $gallery->medium_image}}" class="all studio isotope-item" alt="{{$gallery->title}}" style="position: absolute; left: 0px; top: 0px; transform: translate3d(301px, 2474px, 0px);" /></a>
                    @endforeach
                </div>
              </div>
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>



















@endsection
@push('scripts')

@endpush
