{{-- @can('delete-'.$slug)       --}}
@php($route=isset($route) ? $route : $slug) 

<form action="{{route('admin.'. $route .'.destroy', $id)}}" method="post">
    <input type="hidden" name="_method" value="DELETE">
        @csrf
<button data-toggle="tooltip" data-original-title="Delete" 
type="submit" id="btnDelete" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger-outline">
    <i class="ti-trash" aria-hidden="true"></i></button>
     </form> 
{{-- @endcan --}}