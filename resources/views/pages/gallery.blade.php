@extends('front.layouts.app')
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            
            @foreach ($galleries as $gallery)
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image: url({{asset($gallery->medium_image)}});">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>{{ $gallery->title }}</h3><p>
                                <a href="#" class="boxed-btn3">View More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach

        </div>

    </div>
    <!-- slider_area_end -->


@endsection