<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="iconsmind-User"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-right pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    {{-- @can('view-users') --}}
                    <li><a href="{{ route('admin.users.index') }}"><i class="iconsmind-Arrow-Through"></i>Admin</a></li>
                    {{-- @endcan --}}
                    {{-- @can('view-jobseekers') --}}
                    <li><a href="{{ route('admin.visitors.index') }}"><i class="iconsmind-Arrow-Through"></i>Visitors</a></li>
                    {{-- @endcan --}}
                    {{-- @can('view-roles') --}}
                    <li><a href="{{ route('admin.roles.index') }}"><i class="iconsmind-Arrow-Through"></i>Roles</a></li>
                    {{-- @endcan --}}
                    {{-- @can('view-permissions') --}}
                    <li><a href="{{ route('admin.permissions.index') }}"><i class="iconsmind-Arrow-Through"></i>Permissions</a></li>
                    {{-- @endcan --}}
                </ul>
            </li>
            {{-- @can('view-locations') --}}
            <li>
                <a href="{{ route('admin.countries.index') }}">
                    <i class="iconsmind-Geo2"></i> <span>Countries</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('view-skills') --}}
            <li>
                <a href="{{ route('admin.packages.index') }}">
                    <i class="iconsmind-Geo2"></i> <span>Packages</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('view-jobs') --}}
            <li>
                <a href="{{ route('admin.blogs.index') }}">
                    <i class="iconsmind-Geo2"></i> <span>Blogs</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('view-testimonials') --}}
            <li>
                <a href="{{ route('admin.testimonials.index') }}">
                    <i class="iconsmind-Geo2"></i> <span>Testimonials</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('view-pages') --}}
            <li>
                <a href="{{ route('admin.pages.index') }}">
                    <i class="iconsmind-Geo2"></i> <span>Pages</span>
                </a>
            </li>
            {{-- @endcan --}}
            <li>
                <a href="{{ route('admin.settings.index') }}">
                    <i class="iconsmind-Wrench"></i> <span>Settings</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
