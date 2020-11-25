{{-- @can('update-'.$slug)       --}}
@php($route=isset($route) ? $route : $slug)    
                  @if (\Request::route()->getName()=='admin.'.$route .'.index')
                  <a href="{{ route('admin.'. $route .'.edit', $id)}}"
                      class="btn btn-sm btn-success-outline" data-original-title="Delete">
                      <i class="ti-pencil" aria-hidden="true"></i></a>
                  @endif   
{{-- @endcan --}}
                           