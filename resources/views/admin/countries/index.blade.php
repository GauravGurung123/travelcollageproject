@extends('admin.layouts.app')

@section('content')
    {{-- @dd(Storage::url('')) --}}
    <div class="row">
        <div class="col-12">

            <div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Countries</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td>Nepal</td>
                                    <td class="d-flex">
                                        @include('admin.partials.edit-button', ['slug'=>'countries', 'id'=>$country->id])
                                        @include('admin.partials.delete-button', ['slug'=>'countries', 'id'=>$country->id])
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                {{-- @can('create-partners') --}}
                                    <a href="{{ route('admin.countries.create') }}" class="btn btn-success mb-5">
                                        <i class="fa fa-plus"></i> Add New Country</a>
                                {{-- @endcan --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
@endsection
@push('scripts')

@endpush
