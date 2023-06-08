@include('admin-panel.header')
@include('admin-panel.sidebar')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('permissions.index') }}">Rbac</a> /</span> <a href="{{ route('permissions.index') }}">Permissions</a></h4>

    <!-- Basic Bootstrap Table -->
    <div>
        <a href="{{route('permissions.create')}}" class="btn btn-primary">Create</a>
    </div>
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Permission</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @if(count($permissions) > 0)
                    <tbody class="table-border-bottom-0">
                    @php $i = 1 @endphp
                    @foreach($permissions as $permission)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++}}</strong></td>
                            <td>{{$permission->name}}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @else
                    <tbody>
                    <tr>
                        <td colspan="6"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>No Data Found !</strong></td>
                    </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>

@include('admin-panel.footer')
