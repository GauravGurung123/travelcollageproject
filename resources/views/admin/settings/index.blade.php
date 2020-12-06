@extends('admin.layouts.app')

@section('content')
    {{-- @dd(Storage::url('')) --}}
    <div class="row">
        <div class="col-12">

            <div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Settings</h4>
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
                            @foreach($settings as $setting)
                                <tr>
                                    <td>{{$setting->site_name}}</td>
                                    
                                    <td class="d-flex">
                                        {{-- {-- @can('update-'.$slug)       --}} 
                                        <a href="{{ route('admin.settings.edit', $setting->id)}}"
                                            class="btn btn-sm btn-success-outline" data-original-title="Delete">
                                            <i class="ti-pencil" aria-hidden="true"></i></a>
                                        {{-- @endcan --}}
                                        {{--  --}}
                                        {{-- @can('delete-'.$slug)       --}}
                                        <form action="{{route('admin.settings.destroy', $setting->id) }}" method="post">
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
                                    <a href="{{ route('admin.settings.create') }}" class="btn btn-success mb-5">
                                        <i class="fa fa-plus"></i> Add New setting</a>
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
