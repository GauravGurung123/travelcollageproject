@extends('admin.layouts.app')
@section('content')
<div class="row">
<div class="col-xl-3 col-md-6 col-12 ">
    <div class="box box-body bg-primary">
    <div class="flexbox">
      <span class="ion ion-ios-person-outline font-size-50"></span>
    <span class="font-size-40 font-weight-200">{{ $totalUsers }}</span>
    </div>
    <div class="text-right">Users</div>
  </div>
</div>

<div class="col-xl-3 col-md-6 col-12 ">
    <div class="box box-body bg-primary">
    <div class="flexbox">
      <span class="ion ion-ios-copy-outline font-size-50"></span>
    <span class="font-size-40 font-weight-200">{{$totalCountries}}</span>
    </div>
    <div class="text-right">Countries</div>
  </div>
</div>

<div class="col-xl-3 col-md-6 col-12">
    <div class="box box-body bg-info">
    <div class="flexbox">
      <span class="ion ion-ios-paper-outline text-primary font-size-50"></span>
    <span class="font-size-40 font-weight-200">{{ $totalTestemonials }}</span>
    </div>
    <div class="text-right">Testemonials</div>
  </div>
</div>

<div class="col-xl-3 col-md-6 col-12">
    <div class="box box-body bg-info">
    <div class="flexbox">
      <span class="ion ion-ios-briefcase-outline text-danger font-size-50"></span>
    <span class="font-size-40 font-weight-200">{{$totalPackages}}</span>
    </div>
    <div class="text-right">Packages</div>
  </div>
</div>

</div>
<div class="row">
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-5e509dc8-84d9-40d4-98b2-c78a51c90cc9"></div>
</div>
@endsection
