@include('admin-panel.header')
@include('admin-panel.sidebar')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('roles.index') }}">Rbac</a> /</span> <a href="{{ route('users.index') }}">Roles</a></h4>

    <!-- Basic Bootstrap Table -->
    <div class="p-2">
        <a href="{{route('roles.create')}}" class="btn btn-sm btn-primary">Create</a>
    </div>
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            @can('roles-index')
            <table class="table">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                    <tbody class="table-border-bottom-0">
                    @php $i = 1 @endphp
                    @foreach($roles as $role)
                        {{--@php dd($role->permissions) @endphp--}}
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++}}</strong></td>
                            <td>{{$role->name}}</td>
                            <td>
                                <a href="{{route('roles.assign', $role->id)}}" class="btn btn-sm btn-primary">Assign</a>
                                <a href="{{route('roles.edit', $role->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
                @else
                <table>
                    <tbody>
                        <tr>
                            not found!
                        </tr>
                    </tbody>
                </table>
            @endcan
    </div>
    <!--/ Basic Bootstrap Table -->

</div>

@include('admin-panel.footer')
