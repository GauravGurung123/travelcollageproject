@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Data Table With Full Features</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <td>Avatar</td>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($visitors as $visitor)
                            <tr>
                                <td>><img class="avatar" src="{{$visitor->thumbnail_image}}" alt="...">{{ $visitor->name }}</td>
                                <td></td>
                                <td>{{ $visitor->email}}</td>
                        {{-- @dd($visitor->roles) --}}
                                <td>{{ isset($visitor->roles[0]) ? ucfirst($visitor->roles[0]->name) : '' }}</td>
                                <td class="d-flex">
                                             {{-- {-- @can('update)       --}} 
                             <a href="{{ route('admin.visitors.edit', $visitor->id)}}"
                                class="btn btn-sm btn-success-outline" data-original-title="Delete">
                                <i class="ti-pencil" aria-hidden="true"></i></a>
                            {{-- @endcan --}}
                            {{--  --}}
                            {{-- @can('delete')       --}}
                            <form action="{{route('admin.visitors.destroy', $visitor->id) }}" method="post">
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
                    {{-- @can('create-visitors')         --}}
                        <a href="{{ route('admin.visitors.create') }}" class="btn btn-success mb-5"><i class="fa fa-plus"></i> 
                            Add New visitor</a>
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
