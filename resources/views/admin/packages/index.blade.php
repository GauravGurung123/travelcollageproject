@extends('admin.layouts.app')

@section('content')
    {{-- @dd(Storage::url('')) --}}
    <div class="row">
        <div class="col-12">

            <div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Packages</h4>
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
                            @foreach($packages as $package)
                                <tr>
                                    <td>{{$package->name}}</td>
                                    <td class="d-flex">
                                        {{-- {-- @can('update-'.$slug)       --}} 
                                        <a href="{{ route('admin.packages.edit', $package->id)}}"
                                            class="btn btn-sm btn-success-outline" data-original-title="Delete">
                                            <i class="ti-pencil" aria-hidden="true"></i></a>
                                        {{-- @endcan --}}
                                        {{--  --}}
                                        {{-- @can('delete-'.$slug)       --}}
                                        <form action="{{route('admin.packages.destroy', $package->id) }}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                        <button data-toggle="tooltip" data-original-title="Delete" 
                                        type="submit" id="btnDelete" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger-outline">
                                            <i class="ti-trash" aria-hidden="true"></i></button>
                                            </form> 
                                        {{-- @endcan --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                {{-- @can('create-partners') --}}
                                    <a href="{{ route('admin.packages.create') }}" class="btn btn-success mb-5">
                                        <i class="fa fa-plus"></i> Add New Package</a>
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
